import React, { Component } from "react";
import {toast} from "react-toastify";

class DeleteModal extends Component{
    constructor(props) {
        super(props);

    }

    //Delete function for member data
    deleteMemberData = (member) => {
        axios.delete('/delete/member/data/'+member).then(() => {
            toast.error('Member Deleted Successfully');
            setTimeout(() => {
                location.reload();
            }, 2500)
        });
    }
    render() {
        return(
            <div className="modal fade" id={"deleteModal"+this.props.modalId} tabIndex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div className="modal-dialog">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h1 className="modal-title fs-5" id="exampleModalLabel">Member Delete</h1>
                            <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div className='form-group'>
                            <input type="text"
                                   id='name'
                                   className='form-control mb-3 pb-3'
                                   placeholder='Enter the reason for deleting this member'
                                   onChange={this.inputMemberName}
                            />
                        </div>
                        <div className="modal-body">
                            Are you sure, You want to delete this member data?
                        </div>
                        <div className="modal-footer">
                            <button type="button"
                                    className="btn btn-danger"
                                    data-bs-dismiss="modal"
                                    onClick={ () => this.deleteMemberData(this.props.modalId)}>
                                Yes
                            </button>
                            <button type="button"
                                    className="btn btn-secondary"
                                    data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        )
    }
}

export default DeleteModal;
