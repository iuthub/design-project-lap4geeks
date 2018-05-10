import React, { Component } from 'react';
import{ Modal, Button} from 'react-bootstrap';
import FormSignUp from './signup';
class Signup extends Component {
    render() {
        return (
            <Modal
            {...this.props}
            aria-labelledby="contained-modal-title-md"
          >
            <Modal.Header closeButton>
              <Modal.Title className="modal-header" id="contained-modal-title-md">SIGN UP</Modal.Title>
            </Modal.Header>
            <Modal.Body>
                <FormSignUp />
            </Modal.Body>
            <Modal.Footer>
              <Button onClick={this.props.onHide}>Close</Button>
            </Modal.Footer>
          </Modal>
        );
    }
}

export default Signup;