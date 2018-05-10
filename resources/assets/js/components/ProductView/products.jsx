import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import { 
    Jumbotron,
    Grid, 
    Row, 
    Col,
    Button,
    ButtonGroup
} from 'react-bootstrap';
import './products.css'
class Products extends Component {
    render() {
        return (
            <div>
                <Jumbotron>
                    <Grid>
                        <Row>
                            <Col xs={12} md={3}>
                                <div className="card">
                                    <div className="card-header">
                                       <Link to="/product">
                                        <img 
                                                src="https://www.notebookcheck-ru.com/uploads/tx_nbc2/specs_open_15_large20090828.png" 
                                                alt="Product 1" 
                                                className="card-pic"/>
    
                                       </Link>
                                    </div>
                                    <div className="card-body">
                                        <div className="product-desc">
                                            <span className="product-title">
                                                Product
                                                <span className="badge">
                                                    New
                                                </span>
                                            </span>
                                            <span className="product-caption">
                                                Macbook Pro
                                            </span>
                                            <span className="product-rating">
                                                <i className="fa fa-star"></i>
                                                <i className="fa fa-star"></i>
                                                <i className="fa fa-star"></i>
                                                <i className="fa fa-star"></i>
                                                <i className="fa fa-star grey"></i>
                                            </span>
                                            <div className="product-info">
                                                <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting.
                                                </p>
                                            </div>
                                            <span className="product-price">
                                                USD <b>1,200</b>
                                            </span>
                                            <div className="card-actions">
                                            <ButtonGroup>
                                                <Button bsStyle="primary" className="cardBtn">
                                                    Add to Cart
                                                    <i className="fa fa-shopping-cart"></i>
                                                    </Button>
                                                    <Button bsStyle="primary" className="cardBtn">
                                                        <i  className="fa fa-heart"></i>
                                                </Button>
                                            </ButtonGroup>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </Col>
                            <Col xs={12} md={3}>
                                <div className="card">
                                    <div className="card-header">
                                       <Link to="/product">
                                        <img 
                                                src="https://www.notebookcheck-ru.com/uploads/tx_nbc2/specs_open_15_large20090828.png" 
                                                alt="Product 1" 
                                                className="card-pic"/>
    
                                       </Link>
                                    </div>
                                    <div className="card-body">
                                        <div className="product-desc">
                                            <span className="product-title">
                                                Product
                                                <span className="badge">
                                                    New
                                                </span>
                                            </span>
                                            <span className="product-caption">
                                                Macbook Pro
                                            </span>
                                            <span className="product-rating">
                                                <i className="fa fa-star"></i>
                                                <i className="fa fa-star"></i>
                                                <i className="fa fa-star"></i>
                                                <i className="fa fa-star"></i>
                                                <i className="fa fa-star grey"></i>
                                            </span>
                                            <div className="product-info">
                                                <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting.
                                                </p>
                                            </div>
                                            <span className="product-price">
                                                USD <b>1,200</b>
                                            </span>
                                            <div className="card-actions">
                                            <ButtonGroup>
                                                <Button bsStyle="primary" className="cardBtn">
                                                    Add to Cart
                                                    <i className="fa fa-shopping-cart"></i>
                                                    </Button>
                                                    <Button bsStyle="primary" className="cardBtn">
                                                        <i  className="fa fa-heart"></i>
                                                </Button>
                                            </ButtonGroup>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </Col>
                            <Col xs={12} md={3}>
                                <div className="card">
                                    <div className="card-header">
                                       <Link to="/product">
                                        <img 
                                                src="https://www.notebookcheck-ru.com/uploads/tx_nbc2/specs_open_15_large20090828.png" 
                                                alt="Product 1" 
                                                className="card-pic"/>
    
                                       </Link>
                                    </div>
                                    <div className="card-body">
                                        <div className="product-desc">
                                            <span className="product-title">
                                                Product
                                                <span className="badge">
                                                    New
                                                </span>
                                            </span>
                                            <span className="product-caption">
                                                Macbook Pro
                                            </span>
                                            <span className="product-rating">
                                                <i className="fa fa-star"></i>
                                                <i className="fa fa-star"></i>
                                                <i className="fa fa-star"></i>
                                                <i className="fa fa-star"></i>
                                                <i className="fa fa-star grey"></i>
                                            </span>
                                            <div className="product-info">
                                                <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting.
                                                </p>
                                            </div>
                                            <span className="product-price">
                                                USD <b>1,200</b>
                                            </span>
                                            <div className="card-actions">
                                            <ButtonGroup>
                                                <Button bsStyle="primary" className="cardBtn">
                                                    Add to Cart
                                                    <i className="fa fa-shopping-cart"></i>
                                                    </Button>
                                                    <Button bsStyle="primary" className="cardBtn">
                                                        <i  className="fa fa-heart"></i>
                                                </Button>
                                            </ButtonGroup>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </Col>
                            <Col xs={12} md={3}>
                                <div className="card">
                                    <div className="card-header">
                                       <Link to="/product">
                                        <img 
                                                src="https://www.notebookcheck-ru.com/uploads/tx_nbc2/specs_open_15_large20090828.png" 
                                                alt="Product 1" 
                                                className="card-pic"/>
    
                                       </Link>
                                    </div>
                                    <div className="card-body">
                                        <div className="product-desc">
                                            <span className="product-title">
                                                Product
                                                <span className="badge">
                                                    New
                                                </span>
                                            </span>
                                            <span className="product-caption">
                                                Macbook Pro
                                            </span>
                                            <span className="product-rating">
                                                <i className="fa fa-star"></i>
                                                <i className="fa fa-star"></i>
                                                <i className="fa fa-star"></i>
                                                <i className="fa fa-star"></i>
                                                <i className="fa fa-star grey"></i>
                                            </span>
                                            <div className="product-info">
                                                <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting.
                                                </p>
                                            </div>
                                            <span className="product-price">
                                                USD <b>1,200</b>
                                            </span>
                                            <div className="card-actions">
                                            <ButtonGroup>
                                                <Button bsStyle="primary" className="cardBtn">
                                                    Add to Cart
                                                    <i className="fa fa-shopping-cart"></i>
                                                    </Button>
                                                    <Button bsStyle="primary" className="cardBtn">
                                                        <i  className="fa fa-heart"></i>
                                                </Button>
                                            </ButtonGroup>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </Col>
                        </Row>
                    </Grid>
                </Jumbotron>
            </div>
        );
    }
}

export default Products;