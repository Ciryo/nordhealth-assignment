import React, { Component } from 'react';
import moment from "moment";
import _ from 'lodash';
import { Context } from '../Context';

import {Button, Dialog, DialogActions, DialogContent, DialogContentText, DialogTitle, TextField, List, ListItem, ListItemAvatar, ListItemText, ListItemButton, Box, Avatar, Checkbox } from '@mui/material';
import { styled } from '@mui/material/styles';

const StyledDialog = styled(Dialog)(({ theme }) => ({
    '& .MuiPaper-root': {
        minWidth: 'fit-content'
    },
    '& .MuiList-root': {
        maxWidth: 'unset'
    }
    
}));

class BasketViewDialog extends Component {

    static contextType = Context;

    static defaultProps = {
    };

    constructor(props, context) {
        super(props, context);

        this.initialStateValues = {
            orderInformation: props.orderInformation,
        }

        this.state = {
            ...this.initialStateValues,
        };

        //so we can always hit the same orderinformation even if we alter tab etc.
        if (sessionStorage.orderInformation)
            this.state.orderInformation = JSON.parse(sessionStorage.orderInformation);

        this.stackItems = { brand: 'Produced by', name: 'Producẗ́s full name', price: 'Price'};

        
    }

    _setAmount = (id, amount) => {

        const newOrderInformation = _.cloneDeep(this.state.orderInformation);

        const index = newOrderInformation.items.findIndex(i => i.id == id);

        newOrderInformation.items[index].amount = amount;

        this.setState({orderInformation: newOrderInformation}, () => this.props.handleChangeOrder(id, amount, true));
    }   

    _renderListItem = (itemId) => {

        const { rows, items } = this.state.orderInformation;
        const row = rows.find(r => r.id == itemId);
        const item = items.find(i => i.id == itemId);

        return (
            <ListItem
                key={item.id}
                sx={{minWidth: '600px'}}
                secondaryAction={<Checkbox
                    edge="end"
                    onChange={() => this._setAmount(item.id, 0)}
                    checked={item.amount > 0} />}

                disablePadding  >

                <ListItemButton sx={{minWidth: '600px'}} >
                    
                    <ListItemAvatar>
                        <Avatar
                            src={`https://${row.image}`}
                            alt={row.imageName} />
                    </ListItemAvatar>
                  
                    <ListItemText id={row.name} primary={`${row.brand} - ${row.name}`} />

                    <TextField
                        key={`${item.id}-amount`}
                        sx={{width: '50px', marginLeft: '10px', marginRight: '10px'}}
                        variant="standard"
                        type="number"
                        value={item.amount}
                        onChange={(e) => e.target.value !== item.amount && this._setAmount(item.id, e.target.value)}
                    />                    
                
                </ListItemButton>
      
            </ListItem>
        );
                                            
    }    

    render() { 

        const { handleClose, handleOrder, handlePlaceOrder, userData } = this.props;

        const { orderInformation: {items, rows} } = this.state;

        return (

            <StyledDialog
                open={open}
                onClose={handleClose}
                scroll='paper'
                aria-labelledby="scroll-dialog-title"
                aria-describedby="scroll-dialog-description" >

                <DialogTitle id="scroll-dialog-title">Place an Order</DialogTitle>

                <DialogContent dividers={scroll === 'paper'} sx={{minWidth: '700px'}} >

                    <Box sx={{ flexGrow: 1, height: '10px' }} />

                    <List dense sx={{ width: '100%', maxWidth: 360, bgcolor: 'background.paper' }}>

                        {items.map((item) => this._renderListItem(item.id))}

                    </List>
                
                </DialogContent>

                <DialogActions>
                    <Button onClick={handleClose}>Close</Button>
                    <Button onClick={handlePlaceOrder}>Place Order</Button>
                </DialogActions>

            </StyledDialog>            

        )
    }
}

export default BasketViewDialog;

