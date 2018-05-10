import React, { Component } from 'react';
import { Carousel} from 'react-bootstrap';
import './carousel.css';
class Slider extends Component {
    render() {
        return (
            <div>
                <Carousel>
                    <Carousel.Item className="slider-image">
                        <img  alt="900x500" src="https://wallpapercave.com/wp/uuTvdO0.jpg" />
                        <Carousel.Caption>
                        <h3>First slide label</h3>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </Carousel.Caption>
                    </Carousel.Item>
                    <Carousel.Item className="slider-image">
                        <img alt="900x500" src="http://www.wallpapersbyte.com/wp-content/uploads/2015/12/Apple-MacBook-Air-Silver-Mouse-Laptop-WallpapersByte-com-3840x2400.jpg" />
                        <Carousel.Caption>
                        <h3>Second slide label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </Carousel.Caption>
                    </Carousel.Item>
                    <Carousel.Item classNsame="slider-image">
                        <img  alt="900x500" src="http://cdn.iphonehacks.com/wp-content/uploads/2014/10/MacBook-Air.png " />
                        <Carousel.Caption>
                        <h3>Third slide label</h3>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </Carousel.Caption>
                    </Carousel.Item>
                </Carousel>
            </div>
        );
    }
}

export default Slider;