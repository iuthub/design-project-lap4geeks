import React , {Component} from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route } from 'react-router-dom';
import MainNavbar from './navbars/MainNavbar';
import Header from './navbars/header';
//import Slider from './components/ProductView/carousel';
//import Products from './components/ProductView/products';
import Footer from './navbars/footer';
import HomePage from './pages/HomePage';
import Productpage from './ProductView/Product';
import CategoryNavbar from './navbars/CategoryNavbar';

class MainPage extends Component {
    render() {
        return ( 

            <div>
                <h1>sadasdsadsa</h1>
                <MainNavbar/>
                <div className="container">
                    <Header/>
                    <CategoryNavbar/>
                    <Route exact path="/" component={HomePage} />
                    <Route path="/product" component={Productpage} />
                </div>
                <h1>sadasdsadsa</h1>
                <Footer/>
            </div>

        );
    }
}
export default MainPage;
if (document.getElementById('example')) {
    ReactDOM.render(<MainPage />, document.getElementById('example'));
}

