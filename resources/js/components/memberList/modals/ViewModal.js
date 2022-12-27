import React, { Component } from "react";

class ViewModal extends Component{
    constructor(props) {
        super(props);

    }
    render() {
        return(
            <div className="modal fade" id={"viewModal"+this.props.modalId} tabIndex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div className="modal-dialog">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h1 className="modal-title fs-5" id="exampleModalLabel">Member Details</h1>
                            <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div className="modal-body">
                            Name: <strong>{this.props.memberData.name}</strong>
                            <hr/>
                            Email: <strong>{this.props.memberData.email}</strong>
                            <hr/>
                            Gender: <strong>{this.props.memberData.gender}</strong>
                            <hr/>
                            Phone Number: <strong>{this.props.memberData.phone_no}</strong>
                            <hr/>
                            Date of Birth: <strong>{this.props.memberData.dob}</strong>
                            <hr/>
                            Marital Status: <strong>{this.props.memberData.marital_status}</strong>
                            <hr/>
                            Age Cluster: <strong>{this.props.memberData.age_cluster}</strong>
                            <hr/>
                            Cell Group: <strong>{this.props.memberData.cell_group_id}</strong>
                            <hr/>
                            Estate: <strong>{this.props.memberData.estate_id}</strong>
                            <hr/>
                            Employment Status: <strong>{this.props.memberData.employment_status}</strong>
                            <hr/>
                            Born Again: <strong>{this.props.memberData.born_again}</strong>
                            <hr/>
                            Leadership: <strong>{this.props.memberData.leadership_id}</strong>
                            <hr/>
                            Ministry: <strong>{this.props.memberData.ministry_id}</strong>
                            <hr/>
                            Profession: <strong>{this.props.memberData.profession_id}</strong>
                        </div>
                        <div className="modal-footer">
                            <button type="button" className="btn btn-secondary" data-bs-dismiss="modal">Close</button></div>
                    </div>
                </div>
            </div>

        )
    }
}

export default ViewModal;
