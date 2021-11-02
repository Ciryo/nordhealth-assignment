import React, {Component} from "react";
import { Context } from '../Context';

import _ from 'lodash';

import { styled, alpha } from '@mui/material/styles';
import { AppBar, Toolbar, Box, InputBase, FormControl, InputLabel, Select, OutlinedInput, MenuItem, Checkbox, ListItemText, IconButton, Typography, Badge } from '@mui/material';
import { Paper, Table, TableBody, TableCell, TableContainer, TableHead, TableRow, TextField, Collapse, Button, Tab, Link, Snackbar, Alert } from '@mui/material';
import SearchIcon from '@mui/icons-material/Search';
import MenuIcon from '@mui/icons-material/Menu';
import ShoppingCartIcon from '@mui/icons-material/ShoppingCart';
import KeyboardArrowDownIcon from '@mui/icons-material/KeyboardArrowDown';
import KeyboardArrowUpIcon from '@mui/icons-material/KeyboardArrowUp';
import ShoppingBasketIcon from '@mui/icons-material/ShoppingBasket';

import Request from './../Request';
import ProductViewDialog from './../dialogs/ProductViewDialog';
import BasketViewDialog from './../dialogs/BasketViewDialog';

const StyledSelect = styled(Select)(({ theme }) => ({
    'label + &': {
        color: 'inherit',
        height: '39px',
        border: 'none',
        '& >div' : {
            paddingTop: '9px',
            paddingBottom: '7px',
            border: 'none'
        }
    },
    '& .MuiSelect-icon': {
        color: 'inherit',
    },
    '& .MuiSelect-outlined': {
        backgroundColor: 'rgba(255, 255, 255, 0.15)',
        borderColor: "white"
    },
    '& .MuiOutlinedInput-notchedOutline': {
        border: 'none'
    }
}));

const StyledInputLabel = styled(InputLabel)(({ theme }) => ({
    color: 'white',
    '&.Mui-focused': {
        fontSize: '0'
    }
}));

const StyledInputBase = styled(InputBase)(({ theme }) => ({
    color: 'inherit',
    '& .MuiInputBase-input': {
        padding: theme.spacing(1, 1, 1, 0),
        paddingLeft: `calc(1em + ${theme.spacing(4)})`,
        transition: theme.transitions.create('width'),
        width: '100%',
    [theme.breakpoints.up('md')]: {
        width: '20ch',
    },
  },
}));

const Search = styled('div')(({ theme }) => ({
    position: 'relative',
    minWidth: '400px',
    borderRadius: theme.shape.borderRadius,
    backgroundColor: alpha(theme.palette.common.white, 0.15),
    '&:hover': {
        backgroundColor: alpha(theme.palette.common.white, 0.25),
    },
    marginRight: theme.spacing(2),
    marginLeft: 0,
    width: '100%',
    [theme.breakpoints.up('sm')]: {
        marginLeft: theme.spacing(3),
        width: 'auto',
    },
}));

const SearchIconWrapper = styled('div')(({ theme }) => ({
    padding: theme.spacing(0, 2),
    height: '100%',
    position: 'absolute',
    pointerEvents: 'none',
    display: 'flex',
    alignItems: 'center',
    justifyContent: 'center',
}));

const StyledTab= styled(Tab)(({ theme }) => ({
    display: 'flex', 
    flexDirection: 'row', 
    paddingLeft: '0', 
    paddingRight: '0',
    '.MuiTab-iconWrapper': {
        display: 'flex',
        flexDirection: 'column',
        margin: '0 8px'
    }
}));

const barElementDefaultProps = {formControl:{sx: { marginLeft: '40px' }}};

const SearchOptions = (props) => {
  return (

        <FormControl key="searchOtions" sx={{ m: 1, width: 200, color: "white", height: '39px', marginTop: '6px', ...props.formControl.sx }} >

            <StyledInputLabel id="multiple-checkbox-label" > {props.placeholder}</StyledInputLabel>

            <StyledSelect
                key={props.searchOptions.length}
                sx={{ color: 'inherit '}}
                labelId="multiple-checkbox-label"
                id="multiple-checkbox"
                multiple
                value={props.searchOptionValue}
                onChange={props.onChange}
                input={<OutlinedInput sx={{ paddingTop: '9px', paddingBottom: '7px' }} label="props.placeholder" />}
                renderValue={(selected) => selected.join(', ')}
            >
              {props.searchOptions.map((name,i) => (
                <MenuItem key={i + name} value={name}>
                  <Checkbox checked={props.searchOptionValue?.indexOf(name) > -1} />
                  <ListItemText primary={name} />
                </MenuItem>
              ))}
            </StyledSelect>
        </FormControl>

  );
};

const MainSearch = (props) => {
  return (

    <Search>
        <SearchIconWrapper>
            <SearchIcon />
        </SearchIconWrapper>
            <StyledInputBase
                name="mainSearch"
                placeholder={props.placeholder}
                inputProps={{ 'aria-label': 'search' }}
                value={props.searchValue}
                onKeyDown={(e) => e.keyCode == '13' && props.onChange(e.target.value) }
            />
    </Search>

  );
};

const ProductListRow = (props) => {
  const { row } = props;
  const [open, setOpen] = React.useState(false);
  const [amount, setAmount] = React.useState(false);

  const existingOrderAmount = props.existingOrders?.find(o => o.id == row.id)?.amount;
  const iconFillSx = existingOrderAmount > 0 ? {sx: {fill: 'green'}} : '';

  return (

    <React.Fragment>
        <TableRow sx={{ '& > *': { borderBottom: 'unset' } }}>
        
            {props.listColumns.map((column, i) => (
                i == 0 ? 
                <TableCell width="125" key={`${row.id}${row[column.name]}`}>
                    <React.Fragment>
                        <IconButton
                            aria-label="expand row"
                            size="small"
                            onClick={() => setOpen(!open)} >
                            
                            {open ? <KeyboardArrowUpIcon /> : <ShoppingBasketIcon {...iconFillSx}/>}
                        
                        </IconButton>
                     </React.Fragment>                     
                </TableCell> :
                               
                <TableCell align={column.align} width={column.width} key={`${row.id}${row[column.name]}`}>
                    {column.name == 'name' ? 
                        <Link component="button" underline="none" variant="body2" onClick={() => props.handleProductView(row.id)} >
                            {row[column.name]}
                        </Link> :

                    row[column.name]}
                </TableCell>
            ))}


        </TableRow>

        <TableRow>

            <TableCell style={{ paddingBottom: 0, paddingTop: 0 }} colSpan={6}>

                <Collapse in={props.rowAlwaysVisible || open} timeout="auto" unmountOnExit>

                        <Box sx={{ margin: 1 }}>
                            <Toolbar sx={{ alignItems: 'space-between' }}>
                                
                                <Box sx={{ flexGrow: 1, display: 'flex', alignItems: 'center', justifyContent: 'space-evenly'}}>
                                {props.listExtraColumns.map((column) => (
                                    column.name == 'image' ?
                                        <img 
                                            key={`${row.id}-img`}
                                            src={`https://${row.image}`}
                                            alt={row.imageName} 
                                            style={{  border: "1px solid #ddd", borderRadius: "4px", padding: "5px", width: "250px" }}/ > :

                                        <TextField
                                            key={`${row.id}${row[column.name]}`}
                                            autoFocus
                                            id="standard-number"
                                            label="Order amount"
                                            variant="standard"
                                            type="number"
                                            value={amount || existingOrderAmount || 1}
                                            InputLabelProps={{shrink: true}}
                                            onChange={(e) => setAmount(e.target.value)}
                                        />
                                    
                                ))}
                                <Button className="login-button" color="primary" size="large" onClick={() => props.onAmountChange(row.id, amount)} >
                                    {("Add to cart").toUpperCase()}
                                </Button>
                                </Box>

                            </Toolbar>

                        </Box>

                </Collapse>

            </TableCell>

        </TableRow>
    </React.Fragment>
  );
}

class ProductList extends Component {

    static contextType = Context;

    static defaultProps = {
        perpage: 30,
        showBarcodeColumns:true
    };


    constructor(props, context) {
        super(props, context);

        this.initialStateValues = {
            searchValue: '',
            searchBasis: '1',
            rows: [],
            visibleBarElements: ['searchOptions', 'mainSearch'],
            orderInformation: {
                items: []
            },
            sortColumn: {},
            currentDialog: null,
            currentDialogProps: {}           
        }

        this.state = {
            ...this.initialStateValues,
        };

        if (sessionStorage.orderInformation)
            this.state.orderInformation = JSON.parse(sessionStorage.orderInformation);

        this.searchOptions = {
            1: 'product name',
            2: 'barcode'
        };

        this.allBarElements = {
            searchOptions: SearchOptions,
            mainSearch: MainSearch,
        };

        this.listColumns = [
            { name: "drop", header: '', align: 'right', width: 125 },
            { name: "name", header: 'Product name', align: 'left', width: 400 },
            { name: "price", header: 'Price', align: 'right', width: 120 },
            { name: "brand", header: 'Manufacturer', align: 'left', width: 250 },
            { name: "upc12", header: 'Barcode 1', align: 'right', width: 125, visible: props.showBarcodeColumns },
            { name: "upc14", header: 'Barcode 2', align: 'right', width: 125, visible: props.showBarcodeColumns },
        ] 

        this.listExtraColumns = [
            { name: "image", header: '', align: 'right', width: 500 },
            { name: "order", header: 'Order amount', align: 'right', width: 500 },
        ];

        this.dialogs = {
            productViewDialog: ProductViewDialog,
            basketViewDialog: BasketViewDialog
        };

        this.emptyBasketMessage = "There are no items in your shopping cart yet!";
    
    }

    componentDidMount() {
        this.getParams();
    }    

    _renderHeaderIcons = (sortColumn, columnName) => {
        const iconFillSx = (order) => sortColumn?.[columnName] == order ? ({sx: {fill: 'green'}} ): null;
        const onClick = (order) => ({onClick: () => this.onSort(columnName, order)});
        return (<div> <KeyboardArrowUpIcon {...iconFillSx('DESC')} {...onClick('DESC')} /> <KeyboardArrowDownIcon {...iconFillSx('ASC')} {...onClick('ASC')}/> </div>);
                                                
    }

    fetchAndSetProductData = (parameters) => {

        Request.post({ url: `products/list`}, {...parameters }).done(async (response) => {

            response.hasProducts = response.rows.length > 0;

            response.rows = response.rows.map(r => ({...r, image: 'www.avenga.com/wp-content/uploads/2020/03/Generic-API-Banner.jpg'}));

            this.setState({...response, DataDone: true, loading: false });

        }).fail(() => { 
            this.setState({ DataDone: true, loading: false });
        });        

    }

    getParams = (filters) => {

       this.setState({loading: true}, () => {

            const { searchBasis, searchValue, page, perpage, sortColumn } = this.state;

            let parameters = { searchBasis, searchValue, page, perpage, sortColumn };

            if (filters) {

                Object.keys(filters).forEach(key => {
                    parameters[key] = filters[key];
                })

            }

            this.fetchAndSetProductData(parameters);

        });
    }

    setProductData = (params) => {
        Request.post({ url: `products/product/${params.id}`}, {...params}).done(response => {
            this.getParams();

        }).fail((e) => { 
            console.error(e.message)
        });
    }

    onSearchOptionChange = (e) => {
        const val = Object.entries(this.searchOptions).map(([v, name]) => e.target.value.includes(name) && v).filter(f => f);
        this.setState({searchBasis: val});
    }  

    onSearchChange = (value) => {
        this.setState({searchValue: value}, () => this.getParams());
    }

    onProductOrder = (id, amount, skipRows) => {

        const { rows } = this.state;

        let currentOrderInformation = this.state.orderInformation;
        let currentOrderItemIndex = currentOrderInformation?.items.findIndex(it => it.id == id);

        if (currentOrderItemIndex > -1)
            if (amount == 0) {
                currentOrderInformation.items = currentOrderInformation.items.splice(currentOrderItemIndex, 1);
            }
            else
                currentOrderInformation.items[currentOrderItemIndex].amount = amount;
        else
            currentOrderInformation.items.push({id: id, amount: amount});

        //of course normally we would send this to db, but that's enough for demo I think
        if (!skipRows)
            currentOrderInformation.rows = currentOrderInformation.items.map(i => ({...rows.find(r => r.id == i.id)}));

        sessionStorage.setItem('orderInformation', JSON.stringify(currentOrderInformation));
        this.setState({orderInformation: currentOrderInformation});
    }

    onProductEdit = (id, field, value) => {
        //a place for validations, checks etc.
        this.setProductData({id, field, value});
    }

    onOrderPlace = (data, params) => {
        console.log(data, params);
    }

    onSort = (name, order) => {
        this.setState({sortColumn: {[name]: order}}, () => this.getParams());
    }

    callProductViewDialog = (id) => {
        const { rows, orderInformation } = this.state;
        const dialogProps = {
            rowData: {...rows.find(r => r.id == id)},
            rowOrderInformation: orderInformation.items.find(o => o.id == id),
            handleOrder: this.onProductOrder,
            handleClose: this.closeDialog,
            handleProductEdit: this.onProductEdit,
            userData: this.props.userData            
        };

        this.setState({ 
            currentDialog: 'productViewDialog',
            currentDialogProps: dialogProps
        });
    }

    callBasketViewDialog = () => {
        const { rows, orderInformation } = this.state;
        const orderIds = orderInformation.items?.map(oi => oi.id);
        if (!orderIds) {
            this.setState({noItemsInBasket: true});
            return;
        }

        const dialogProps = {
            orderInformation: orderInformation,
            handleOrder: this.onProductOrder,
            handleClose: this.closeDialog,
            userData: this.props.userData,
            handleChangeOrder: this.onProductOrder,
            handlePlaceOrder: this.onOrderPlace,            
        };

        this.setState({ 
            currentDialog: 'basketViewDialog',
            currentDialogProps: dialogProps
        });
    }    

    closeDialog = () => {
        this.setState({ currentDialog: null, currentDialogProps: {}});
    }    

    render() {

        const {searchValue, searchBasis, visibleBarElements, rows, orderInformation, sortColumn, currentDialog, currentDialogProps} = this.state;

        const barElements = Object.entries(this.allBarElements).map(([name, el]) => visibleBarElements.includes(name) && el);
        const searchOptionValue = Object.entries(this.searchOptions).map(([k, v]) => searchBasis.includes(k) && v).filter(f => f);
        
        const barElementProps = {
            SearchOptions: { 
                searchOptionValue: searchOptionValue,
                searchOptions: Object.values(this.searchOptions).map(v => v),
                placeholder: "Search options",
                onChange: this.onSearchOptionChange,
                ...barElementDefaultProps
            },
            MainSearch: {name: searchValue, placeholder: `Search from products...`, onChange: this.onSearchChange, ...barElementDefaultProps}
        };

        const rowProps = {
            listColumns: this.listColumns,
            listExtraColumns: this.listExtraColumns,
            alwaysVisible: false,
            onAmountChange: this.onProductOrder,
            existingOrders: orderInformation?.items,
            handleProductView: this.callProductViewDialog
        };

        const currentTotalOrderAmount = orderInformation?.items?.reduce((acc, c) => acc + c.amount*1, 0);

        const Dialog = currentDialog ? this.dialogs[currentDialog] : undefined

        return (

                <div id="product-list" >

                    <Box sx={{ flexGrow: 1 }}>

                        <AppBar position="static">
                            <Toolbar >
                                <IconButton
                                    size="large"
                                    edge="start"
                                    color="inherit"
                                    aria-label="open drawer"
                                    sx={{ mr: 2 }} >
                                        <MenuIcon />
                                </IconButton>

                                <Typography
                                    variant="h6"
                                    noWrap
                                    component="div"
                                    sx={{ display: { xs: 'none', sm: 'block' } }}>
                                    Product list
                                </Typography>

                                {barElements?.map(element => element({...barElementProps[element.name]}))}

                                <Box sx={{ flexGrow: 1 }} />
                                
                                <Box sx={{ display: { xs: 'none', md: 'flex' } }}>
                                    <IconButton size="large" color="inherit" onClick={() => this.callBasketViewDialog()} >
                                        <Badge badgeContent={currentTotalOrderAmount} color="success">
                                            <ShoppingCartIcon />
                                        </Badge>
                                    </IconButton>
                                </Box>

                            </Toolbar>
                        </AppBar>

                    </Box>
                    
                    <TableContainer component={Paper} sx={{margin: '12px', width: 'calc(100% - 24px)'}} >
                      
                        <Table aria-label="collapsible table">

                            <TableHead>
                                <TableRow>
                                    {this.listColumns.map(column => (
                                        <TableCell key={column.name} align={column.align} >
                                            <StyledTab
                                                sx={{float: column.align}}
                                                label={column.header}
                                                name={column.header}
                                                icon={column.header !== '' ? this._renderHeaderIcons(sortColumn, column.name) : undefined} />
                                        </TableCell>
                                    ))}
                                </TableRow>
                            </TableHead>

                            <TableBody>
                              {rows.map((row) => (
                                <ProductListRow 
                                    key={row.id}
                                    row={row}
                                    {...rowProps} />
                              ))}
                            </TableBody>

                        </Table>
                    </TableContainer>

                    {Dialog && <Dialog
                        open
                        onDialogClose={this.closeDialog}
                        {...currentDialogProps} />}

                    <Snackbar 
                        open={this.state.noItemsInBasket} 
                        autoHideDuration={6000} 
                        anchorOrigin={{vertical: "top", horizontal: "right"}}
                        onClose={() => this.setState({noItemsInBasket: false})}>
                        <Alert severity="info"  >
                            {this.emptyBasketMessage}
                        </Alert>
                    </Snackbar>                    
                    
                </div>

        )
    }
}

export default ProductList;
