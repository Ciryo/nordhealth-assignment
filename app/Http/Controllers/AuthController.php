<?php
namespace App\Http\Controllers;

use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Helpers\Auth;
use App\Helpers\Rights;

use DBI;

class AuthController extends Controller
{
    /**
     * The request instance.
     *
     * @var \Illuminate\Http\Request
     */
    private $request;
    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function __construct(Request $request) {
        $this->request = $request;
    }
    /**
     * Create a new token.
     *
     * @param  \App\User   $user
     * @return string
     */
    protected function jwt($user) {
        $token_exp = $user->session_time == null ? 1200 : (int)$user->session_time ; 

        $payload = [
            'iss' => "vx", // Issuer of the token
            'sub' => $user->id, // Subject of the token
            'iat' => time(), // Time when JWT was issued.
            'exp' => time() + $token_exp, // Expiration time
        ];

        return JWT::encode($payload, env('JWT_SECRET'));        
    }

    public function refreshToken($user_id) {
        $db = DBI::get_object();

        $user = $db->object("SELECT id, password, password_bcrypt, session_time FROM users WHERE id = '?'", $user_id);

        return response()->json([
            'token' => $this->jwt($user)
        ]);
    }


    public function authenticate() {
        $this->validate($this->request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        return $this->_authenticate($this->request->input('username'), $this->request->input('password'));
    }

    private function _authenticate($username, $password) {

        $db = DBI::get_object();
        
        $user = $db->object("SELECT id, password, password_bcrypt, session_time FROM users WHERE username = '?'", $username);

        if (!$user) {
            return response()->json([
                'error' => 'Email or password is wrong.'
            ], 403);
        }

        if (!Hash::check($password, $user->password_bcrypt) && md5($password) !== $user->password) {
            return response()->json([
                'error' => 'Email or password is wrong. ERROR'
            ], 403);
        }

        Auth::$user = $user->id;

        return response()->json([
            'token' => $this->jwt($user),
            'user_id' => $user->id,
            'session_time' => $user->session_time
        ], 200);
    }

    public function getBasics($id) {
        $db = DBI::get_object();
        $rights = Rights::get_object($id);

        $resp['user'] = $db->assoc("SELECT id, username, first_name, last_name FROM users WHERE id = '?'", $id);

        $resp['globals'] = $db->assoc("SELECT company, UPPER(currency) AS currency FROM settings WHERE 1");

        $resp['rights'] = [];

        foreach ($rights->rights_array as $i =>$right)
            if (is_array($right))
                $resp['rights'][$i] = $right;

        return $resp;
    }

}
