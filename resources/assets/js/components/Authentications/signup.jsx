import React, { Component } from 'react';
import { Form, FormControl, FormGroup, Col, ControlLabel, Button, InputGroup} from 'react-bootstrap';
class FormSignUp extends Component {
    render() {
        return (
            <Form horizontal>
            <FormGroup>
            <Col componentClass={ControlLabel} sm={3}>
                 First Name
            </Col>
            <Col sm={9}>
            <InputGroup>
                <InputGroup.Addon>
                    <i className="fa fa-user"></i>
                </InputGroup.Addon>
                <FormControl type="text"  placeholder="First Name" />
            </InputGroup>
            </Col>
        </FormGroup>
        <FormGroup>
            <Col componentClass={ControlLabel} sm={3}>
                Last Name
            </Col>
            <Col sm={9}>
            <InputGroup>
                <InputGroup.Addon>
                    <i className="fa fa-user"></i>
                </InputGroup.Addon>
                <FormControl type="text"  placeholder="Last Name" />
            </InputGroup>
            </Col>
        </FormGroup>
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

        <FormGroup controlId="formHorizontalPassword1">
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
        <FormGroup controlId="formHorizontalPassword2">
            <Col componentClass={ControlLabel} sm={3}>
            Password
            </Col>
            <Col sm={9}>
            <InputGroup>
                <InputGroup.Addon>
                    <i className="fa fa-lock"></i>
                </InputGroup.Addon>
                <FormControl type="password"  placeholder="Confirm Password" />
            </InputGroup>
            </Col>
        </FormGroup>
             <FormGroup>
                <Col smOffset={2} sm={10}>
                     <Button type="submit">Sign in</Button>
                </Col>
            </FormGroup>
        </Form>
          
        );
    }
}

export default FormSignUp;