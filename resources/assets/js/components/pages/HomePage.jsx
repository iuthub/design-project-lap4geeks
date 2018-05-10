import React, { Component } from 'react';
// import MainNavbar from '../navbars/MainNavbar';
// import Header from '../navbars/header';
import Slider from '../ProductView/carousel';
import Products from '../ProductView/products';


class HomePage extends Component {
    render() {
        return (
            <div>
              <Slider/>
              <Products/>
            </div>
        );
    }
}

export default HomePage;