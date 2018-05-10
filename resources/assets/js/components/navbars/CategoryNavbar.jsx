import React, { Component } from 'react';
import {Navbar, Nav, NavItem, NavDropdown, MenuItem} from 'react-bootstrap';

class CategoryNavbar extends Component {
    render() {
        return (
            <div>
                <Navbar inverse collapseOnSelect>
                <Navbar.Toggle/>
                <Navbar.Collapse>
                    <Nav pullLeft>
                        <NavItem eventKey={1} href="#">
                            Desktops
                        </NavItem>
                         <NavItem eventKey={2} href="#">
                        </NavItem>
                        <NavDropdown eventKey={3} title="Laptops & Notebooks" id="basic-nav-dropdown">
                            <MenuItem eventKey={3.1}>Mac (0)</MenuItem>
                            <MenuItem eventKey={3.2}>Windows(0)</MenuItem>
                            
                            <MenuItem divider />
                            <MenuItem eventKey={3.4}>Separated link</MenuItem>
                        </NavDropdown>
                    </Nav>
                   {/* <Nav pullRight>
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
                        
                   </Nav> */}
                    </Navbar.Collapse>
                   </Navbar> 
            </div>
        );
    }
}

export default CategoryNavbar;