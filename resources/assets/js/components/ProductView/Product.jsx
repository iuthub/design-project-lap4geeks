import React, { Component } from 'react';
import { 
    Grid, 
    Row, 
    Col, 
    Thumbnail,
    ButtonGroup, 
    Button,
    FormControl
} from 'react-bootstrap';
import './Product.css';
class Productpage extends Component {
    render() {
        return (
            <div>
                <Grid>
                    <Row>
                        <Col xs={12} md={8}>
                            <div>
                                <Thumbnail className="product-image2" href="" alt="Macbook Pro" src="https://www.notebookcheck-ru.com/uploads/tx_nbc2/specs_open_15_large20090828.png" />
                            </div>
                        </Col>
                        <Col xs={12} md={4}>
                            <ButtonGroup>
                                <Button>
                                    <i className="fa fa-heart"></i>
                                </Button>
                                <Button>
                                    <i className="fa fa-exchange"></i>
                                </Button>
                            </ButtonGroup>
                            <div className="product_info">
                                <h3>MacBook Pro</h3>
                                <div className="description">
                                    <span className="brand">Brand: Apple</span><br/>
                                    <span className="product-code">Product Code: Product 1</span><br/>
                                    <span className="cost">
                                        $ 1,200
                                    </span>
                                </div>
                            </div>

                            <div className="purchase">
                            <FormControl componentClass="select" placeholder="select">
                                <option value="quantity">select</option>
                                <option value="other">1</option>
                            </FormControl>
                            </div>
                            <Button className="add-to-cart" bsStyle="primary" block >
                                <i className="fa fa-shopping-cart"></i>
                                Add to cart
                            </Button>
                        </Col>
                    </Row>
                </Grid>
            </div>
        );
    }
}

export default Productpage;