import React, { Component } from 'react';
import {Navbar, Nav, NavItem } from 'react-bootstrap';
import { Link } from 'react-router-dom';
import Signup from '../Authentications/signupModal';
import LoginModal from '../Authentications/loginModal';
class MainNavbar extends Component {
    constructor(props, context){
        super(props, context);
        this.state = {
            signupShow: false,
            loginShow:false
          };
    }
    render() {
        //let smClose = () => this.setState({ smShow: false });
        let signupClose = () => this.setState({ signupShow: false });
        let loginClose = () => this.setState({loginShow:false});
        return (
           <div>
             <Navbar style={{backgroundColor:'#6B6B6B '}} default collapseOnSelect>
                <Navbar.Toggle/>
                <Navbar.Collapse>
                    <Nav pullRight>
                    <NavItem eventKey={1} componentClass={ Link } to="/">
                            <i className="fa fa-phone"></i>
                            123456789
                        </NavItem>
                        <NavItem eventKey={2} componentClass={ Link } to="/about">
                            <i className="fa fa-heart"></i>
                            Wishlist(1)
                        </NavItem>
                        <NavItem eventKey={3} componentClass={ Link } to="/news">
                            <i className="fa fa-shopping-cart"></i>
                            Shopping Cart
                        </NavItem>
                    <NavItem eventKey={1} onClick={() => this.setState({ loginShow: true })}>
                        <i className="fa fa-sign-in" style={{paddingRight:'10px'}}></i>
                             Login
                             
                        </NavItem>
                    <NavItem eventKey={2} onClick={() => this.setState({ signupShow: true })}>
                        <i className="fa fa-user-plus" style={{paddingRight:'10px'}}></i>
                             Signup
                        </NavItem>
                        <LoginModal show={this.state.loginShow} onHide={loginClose} />
                        <Signup show={this.state.signupShow} onHide={signupClose} />
                        
                    </Nav>
                </Navbar.Collapse>
            </Navbar>
           </div>
            
        );
    }
}

export default MainNavbar;