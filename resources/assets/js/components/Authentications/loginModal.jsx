import React, { Component } from 'react';
import Login from './login';
import { Modal, Button} from 'react-bootstrap';
class LoginModal extends Component {
    render() {
        return (
            <div>
                 <Modal
                 {...this.props}
                     >
                    <Modal.Header closeButton>
                    <Modal.Title className="modal-header">LOGIN</Modal.Title>
                    </Modal.Header>
                    <Modal.Body>
                        <Login/>
                    </Modal.Body>
                    <Modal.Footer>
                    <Button onClick={this.props.onHide}>Close</Button>
                    </Modal.Footer>
                </Modal>
            </div>
        );
    }
}

export default LoginModal;