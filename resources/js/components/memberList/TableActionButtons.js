import React, { Component } from "react";
import ViewModal from "./modals/ViewModal";
import UpdateModal from "./modals/UpdateModal";
import DeleteModal from "./modals/DeleteModal";

class TableActionButtons extends Component{
    constructor(props) {
        super(props);

        this.state = {
            name: null,
            email: null,
            gender: null,
            phone_no: null,
            dob: null,
            marital_status: null,
            age_cluster: null,
            cell_group_id: null,
            estate_id: null,
            employment_status: null,
            born_again: null,
            leadership_id: null,
            ministry_id: null,
            profession_id: null,
            education_level_id: null
        }
    }

    getMemberDetails = (id) => {
        axios.post('/get/individual/member/details', {
            memberId: id
        }).then((response) => {
            this.setState({
                name:response.data.name,
                email:response.data.email,
                gender:response.data.gender,
                phone_no:response.data.phone_no,
                dob:response.data.dob,
                marital_status:response.data.marital_status,
                age_cluster:response.data.age_cluster,
                cell_group_id:response.data.cell_group_id,
                estate_id:response.data.estate_id,
                employment_status:response.data.employment_status,
                born_again:response.data.born_again,
                leadership_id:response.data.leadership_id,
                ministry_id:response.data.ministry_id,
                profession_id:response.data.profession_id,
                education_level_id:response.data.education_level_id
            })
            console.log(response.data)
        });
    }
    render() {
        return(
            <div className="btn-group" role="group">
                    <button type="button"
                        className="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target={'#viewModal'+this.props.eachMemberId}
                        onClick={() => {this.getMemberDetails(this.props.eachMemberId)}}
                >
                    View
                </button>
                <ViewModal modalId={this.props.eachMemberId} memberData={this.state}/>
                <button type="button"
                        className="btn btn-info"
                        data-bs-toggle="modal"
                        data-bs-target={'#updateModal'+this.props.eachMemberId}
                        onClick={() => {this.getMemberDetails(this.props.eachMemberId)}}
                >
                    Update
                </button>
                <UpdateModal modalId={this.props.eachMemberId} memberData={this.state}/>
                <button type="button"
                        className="btn btn-danger"
                        data-bs-toggle="modal"
                        data-bs-target={'#deleteModal'+this.props.eachMemberId}
                        onClick={() => {this.getMemberDetails(this.props.eachMemberId)}}
                >
                    Delete
                </button>
                <DeleteModal modalId={this.props.eachMemberId} memberData={this.state}/>
            </div>
        )
    }
}

export default TableActionButtons;
