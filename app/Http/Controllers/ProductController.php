<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Auth;
use App\Helpers\Rights;

use DBI;

class ProductController extends Controller
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

    private $db;

    public function __construct(Request $request) {
        $this->request = $request;
        $this->db = DBI::get_object();
        $this->rights = Rights::get_object();
    }

    public function getProducts() {

        $params = (object)$this->request->all();

        $searchMap = [
            '1' => 'name',
            '2' => ['upc14', 'upc12']
        ];

        $searchstring = '';

        if ($params->searchValue) {
            $string = $this->db->escape_string($params->searchValue);
            $strings = [];
            if (is_array($params->searchBasis))
                foreach ($params->searchBasis as $k) {
                    if (is_array($searchMap[$k]))
                        foreach ($searchMap[$k] as $field)
                            $strings[] = "{$field} LIKE '%{$string}%'";
                    else
                        $strings[] = "{$searchMap[$k]} LIKE '%{$string}%'";
                }
            else
                $strings[] = "{$searchMap[$params->searchBasis]} LIKE '%{$string}%'";

            $searchstring = " AND ( " . join(' OR ', $strings) . ") ";
        }

        $orderstring = "p.id ASC";
        if ($params->sortColumn) {
            //right now we wont get multiple comlumn ordering params from front, but we might...
            $order_key = array_key_first($params->sortColumn);
            $orderstring = "p.{$order_key} {$params->sortColumn[$order_key]}";
        }

        $products = $this->db->select("SELECT *, ROUND(p.price, 2) AS price FROM products AS p
            WHERE 1 
            {$searchstring}
            ORDER BY {$orderstring}");

        return ['rows' => $products];
    }

    public function setProductData($id) {

        $params = (object)$this->request->all();

        if ($this->rights->rights_array['products']['write_full'] < 1)
            return 'fail dammit';

        $this->db->update("UPDATE products SET ? WHERE id = '?'", [$params->field => $params->value], $id);

        return 'update ok';
    }

}
