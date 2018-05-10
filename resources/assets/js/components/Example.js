import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Example extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">dddd</div>
                                    
                            <div className="card-body">

                              <h1>I'm an another dddd d d d d dcomponent!</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}
export default Example;
if (document.getElementById('example')) {
    ReactDOM.render(<Example/>, document.getElementById('example'));
}

