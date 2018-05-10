import React, { Component } from 'react';
import {Grid, Row, Col } from 'react-bootstrap';
import { Link } from 'react-router-dom';
import './footer.css';
class Footer extends Component {
    render() {
        return (
            <div className="footer">
                <Grid>
                    <Row>
                        <Col xs={12} md={3}>
                            <div className="information">

                                <ul>
                                    <p style={{color:'white'}}><b>Information</b></p>
                                    <li>
                                        <Link to="/">About us</Link>
                                    </li>
                                    <li>
                                        <Link to="/">Delvery Information</Link>
                                    </li>
                                    <li>
                                        <Link to="/">Privacy Policy</Link>
                                    </li>
                                    <li>
                                        <Link to="/">Terms & Conditions</Link>
                                    </li>
                                    
                                </ul>
                            </div>
                        </Col>
                        <Col xs={12} md={3}>
                            <div className="information">

                                <ul>
                                    <p style={{color:'white'}}><b>Customer service</b></p>
                                    <li>
                                        <Link to="/">Contact us</Link>
                                    </li>
                                    <li>
                                        <Link to="/">Returns</Link>
                                    </li>
                                    <li>
                                        <Link to="/">Site map</Link>
                                    </li>
                                </ul>
                            </div>
                        </Col>
                        <Col xs={12} md={3}>
                            <div className="information">

                                <ul>
                                    <p style={{color:'white'}}><b>Extras</b></p>
                                    <li>
                                        <Link to="/">Brands</Link>
                                    </li>
                                    <li>
                                        <Link to="/">Gift Certificates</Link>
                                    </li>
                                    <li>
                                        <Link to="/">Affiliate</Link>
                                    </li>
                                    <li>
                                        <Link to="/">Specials</Link>
                                    </li>
                                    
                                </ul>
                            </div>
                        </Col>
                    </Row>
                </Grid>
            </div>
        );
    }
}

export default Footer;