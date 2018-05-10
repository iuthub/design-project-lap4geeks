import React, { Component } from 'react';
import { 
    Form, 
    FormControl, 
    FormGroup, 
    Col, 
    ControlLabel, 
    Checkbox, 
    Button, 
    InputGroup
} from 'react-bootstrap';
class Login extends Component {
    constructor(){
        super();
        this.state = {
            data:{},
            loading:false,
            errors:{}
        }
    }
   
    render() {
        return (
            <div>
                 <Form horizontal>
                        <FormGroup>
                            <Col componentClass={ControlLabel} sm={3}>
                                Email
                            </Col>
                            <Col sm={9}>
                            <InputGroup>
                                <InputGroup.Addon>
                                    <i className="fa fa-envelope"></i>
                                </InputGroup.Addon>
                                <FormControl type="text"  placeholder="Email" />
                            </InputGroup>
                            </Col>
                        </FormGroup>

                        <FormGroup controlId="formHorizontalPassword">
                            <Col componentClass={ControlLabel} sm={3}>
                                Password
                            </Col>
                            <Col sm={9}>
                            <InputGroup>
                                <InputGroup.Addon>
                                    <i className="fa fa-lock"></i>
                                </InputGroup.Addon>
                                <FormControl type="password"  placeholder="Password" />
                            </InputGroup>
                            </Col>
                        </FormGroup>
                        <FormGroup>
                            <Col smOffset={2} sm={10}>
                            <Checkbox>Remember me</Checkbox>
                            </Col>
                        </FormGroup>

                        <FormGroup>
                            <Col smOffset={2} sm={10}>
                            <Button type="submit">Sign in</Button>
                            </Col>
                        </FormGroup>
                 </Form>
            </div>
        );
    }
}

export default Login;