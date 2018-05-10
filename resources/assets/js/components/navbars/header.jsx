import React, { Component } from 'react';
import './header.css';
import { 
    Grid, 
    Row, 
    Col, 
    InputGroup, 
    FormControl, 
    FormGroup, 
    Button 
} from 'react-bootstrap';
class Header extends Component {
    render() {
        return (
            <div>
                 <Grid>
                    <Row>
                        <Col xs={12} md={4}>
                            <h1 className="logo">Tech4geeks</h1>
                        </Col>
                        <Col xs={12} md={5}>
                            <form>
                            <FormGroup bsSize="large">
                                    <InputGroup>
                                        <FormControl type="text" />
                                        <InputGroup.Addon>
                                            <a href="/">
                                                <i className="fa fa-search search"></i>
                                            </a>
                                        </InputGroup.Addon>
                                    </InputGroup>
                                </FormGroup>
                            </form>
                        </Col>
                        <Col xs={12} md={3}>
                            <Button className="cart-button">
                                <i className="fa fa-shopping-cart"></i>
                                item(s) - $0.00
                            </Button>
                        </Col>
                    </Row>
                </Grid>
            </div>
        );
    }
}

export default Header;