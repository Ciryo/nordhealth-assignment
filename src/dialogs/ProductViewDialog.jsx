import React, { Component } from 'react';
import moment from "moment";
import _ from 'lodash';
import { Context } from '../Context';

import {Button, Dialog, DialogActions, DialogContent, DialogContentText, DialogTitle, TextField, Stack, Paper, Box } from '@mui/material';
import { styled } from '@mui/material/styles';

const Item = styled(Paper)(({ theme }) => ({
    ...theme.typography.body2,
    padding: theme.spacing(1),
    textAlign: 'center',
    color: theme.palette.text.secondary,
    width: '30%',
    boxShadow: 'none'
}));

const BoldItem = styled(Paper)(({ theme }) => ({
    ...theme.typography.body2,
    padding: theme.spacing(1),
    textAlign: 'center',
    color: theme.palette.text.secondary,
    width: '30%',  
    fontWeight: '600',
    boxShadow: 'none'
}));

const StyledStack = styled(Stack)(({ theme }) => ({
    display: 'flex', 
    justifyContent: 'center',
    marginTop:'12px',
    marginBottom: '12px',
}));

class ProductViewDialog extends Component {

    static contextType = Context;

    static defaultProps = {
    };

    constructor(props, context) {
        super(props, context);

        this.initialStateValues = {
            rowData: props.rowData,
            rowOrderInformation: props.rowOrderInformation,
            orderAmount: null,
            editMode: !_.isEmpty(props.userData),
            userData: props.userData
        }

        this.state = {
            ...this.initialStateValues,
        };

        if (sessionStorage.orderInformation)
            this.state.rowOrderInformation = JSON.parse(sessionStorage.orderInformation).items.find(o => o.id == this.state.rowData.id);

        this.stackItems = { brand: 'Produced by', name: 'Producẗ́s full name', price: 'Price'};

        //as I have no desc in dummy data and view looks kinda empty, let here be something to fill the space
        this.description = "Praesent id lorem aliquam, finibus nibh et, pretium mi. Pellentesque efficitur magna tortor, quis rhoncus lorem suscipit ut. Pellentesque consequat nulla vitae porttitor condimentum. Sed eu elementum sem, et mattis odio. Mauris faucibus condimentum nunc, vitae bibendum tellus convallis vitae. Vivamus porta facilisis aliquam. Nulla fermentum massa at tortor molestie convallis. Curabitur viverra augue a justo posuere varius. Proin fringilla consequat scelerisque. Curabitur vestibulum blandit turpis, ut maximus orci viverra ut. Nulla facilisi. Fusce maximus placerat velit ultricies finibus. Sed sem nulla, pretium sed dolor vitae, dapibus fermentum justo.            Nam id sagittis sem, vel tristique sem. Vestibulum at libero porttitor, placerat purus id, pharetra nibh. Nam eget ex molestie, iaculis orci a, sodales lacus. Etiam gravida libero ornare laoreet finibus. Quisque venenatis tellus viverra scelerisque gravida. Duis rutrum pellentesque tempor. Sed congue diam nec diam suscipit, sit amet dapibus libero blandit. Vestibulum sit amet dolor sed neque egestas faucibus id sed neque. Morbi sed pretium turpis.            Nunc nec nisi non ante lobortis rhoncus. Pellentesque hendrerit, erat non facilisis cursus, odio justo rhoncus sem, quis maximus orci sapien non mauris. Maecenas venenatis libero lacus, nec aliquet metus consectetur sit amet. Mauris urna tortor, convallis a tellus et, rutrum pulvinar nunc. Aenean urna odio, sodales quis lacus eu, tristique pulvinar erat. Pellentesque porttitor consequat interdum. Mauris sit amet pretium nunc, vel euismod velit. In nec lacus luctus, porta sapien nec, consequat nibh. Nam purus ipsum, efficitur eget magna non, vulputate elementum magna. Sed aliquet blandit lorem at finibus. Ut ac varius est, nec interdum lorem. Quisque ornare, lacus a feugiat ullamcorper, nulla neque interdum tortor, nec ultricies justo dui at lacus. Sed vitae finibus ipsum. "

    }

    componentDidUpdate(prevProps, prevState) {

        if (!_.isEmpty(this.props.userData) && !_.isEqual(prevState, this.state))
            this.setState({editMode: true, userData: this.props.userData});

    }

    _renderStackItem = (rowData, key, name) => {

        return (this.state.editMode ? 
            <TextField
                fullWidth
                key={rowData[key]}
                autoFocus
                variant="standard"
                value={this.state.rowData[key] || rowData[key]}
                onChange={(e) => this.setState({rowData: {...this.state.rowData, [key]: e.target.value}}) }
                onKeyDown={(e) => e.keyCode == '13' && this.props.handleProductEdit(rowData.id, key, e.target.value)}
            />
            :
            <Item key={rowData[key]}>{`${rowData[key]} ${key == 'price' ? this.context.globals.currency : ''}`}</Item>);
                                                
    }

    _renderDescriptionText = (rowData, key, name) => {

        return (this.state.editMode ? 
            <TextField
                key={rowData[key]}
                sx={{ width: '100%'}}
                id="standard-multiline-static"
                label="Product description:"
                multiline
                rows={10}
                variant="standard"
                value={rowData.description}
                onChange={(e) => this.setState({rowData: {...this.state.rowData, description: e.target.value}}) }
                onKeyDown={(e) => e.keyCode == '13' && this.props.handleProductEdit(rowData.id, 'description', e.target.value)}
            />
            :
            <DialogContentText
                id="scroll-dialog-description"
                tabIndex={-1} >
                {rowData.description || this.description}
            </DialogContentText> )
                                                
    }    

    render() { 

        const { handleClose, handleOrder, userData } = this.props;

        const { rowData, rowOrderInformation, orderAmount } = this.state;

        return (

            <Dialog
                open={open}
                onClose={handleClose}
                scroll='paper'
                aria-labelledby="scroll-dialog-title"
                aria-describedby="scroll-dialog-description" >

            <DialogTitle id="scroll-dialog-title">{rowData.name}</DialogTitle>

            <DialogContent dividers={scroll === 'paper'}>

                <StyledStack direction="row" spacing={2} >
                    {Object.entries(this.stackItems).map(([key, name]) => (
                        <BoldItem>{`${name}:`}</BoldItem>
                    ))}
                </StyledStack>
                <StyledStack direction="row" spacing={2} >
                    {Object.entries(this.stackItems).map(([key, name]) => this._renderStackItem(rowData, key, name))}
                </StyledStack>
                <StyledStack direction="row" spacing={2} >
                        <Item sx={{width: '400px'}}>
                            <img 
                                key={`${rowData.id}-img`}
                                src={`https://${rowData.image}`}
                                alt={rowData.imageName}
                                style={{ padding: "5px", width: "400px" }} / >
                        </Item>
                </StyledStack>
                <Box sx={{ flexGrow: 1, height: '10px' }} />
                {!this.state.editMode && <StyledStack direction="row" spacing={2} >
                    <Item>
                        <TextField
                            key={`${rowData.id}-order`}
                            autoFocus
                            id="standard-number"
                            label="Order amount"
                            variant="standard"
                            type="number"
                            value={orderAmount || rowOrderInformation?.amount || 1}
                            InputLabelProps={{shrink: true}}
                            onChange={(e) => this.setState({orderAmount: e.target.value}, () => handleOrder(rowData.id, e.target.value))}
                        />
                    </Item>
                </StyledStack>}

                {this._renderDescriptionText(rowData)}
            
            </DialogContent>
                <DialogActions>
                    <Button onClick={handleClose}>Close</Button>
                </DialogActions>
            </Dialog>            

        )
    }
}

export default ProductViewDialog;

