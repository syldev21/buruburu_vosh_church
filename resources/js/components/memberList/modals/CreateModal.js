import React, { Component } from "react";
import {toast} from "react-toastify";

class CreateModal extends Component{
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

    // Creating Member states
    inputMemberName = (e) => {
        this.setState({
            name: e.target.value,
        })
    }
    inputMemberEmail = (e) => {
        this.setState({
            email: e.target.value,
        })
    }
    inputMemberGender = (e) => {
        this.setState({
            gender: e.target.value,
        })
    }
    inputMemberPhone = (e) => {
        this.setState({
            phone_no: e.target.value,
        })
    }
    inputMemberDateOfBirth = (e) => {
        this.setState({
            dob: e.target.value,
        })
    }
    inputMemberMaritalStatus = (e) => {
        this.setState({
            marital_status: e.target.value,
        })
    }
    inputMemberAgeCluster = (e) => {
        this.setState({
            age_cluster: e.target.value,
        })
    }
    inputMemberCellGroup = (e) => {
        this.setState({
            cell_group_id: e.target.value,
        })
    }
    inputMemberEstate = (e) => {
        this.setState({
            estate_id: e.target.value,
        })
    }
    inputMemberEmploymentStatus = (e) => {
        this.setState({
            employment_status: e.target.value,
        })
    }
    inputMemberBornAgain = (e) => {
        this.setState({
            born_again: e.target.value,
        })
    }
    inputMemberLeadership = (e) => {
        this.setState({
            leadership_id: e.target.value,
        })
    }
    inputMemberMinistry = (e) => {
        this.setState({
            ministry_id: e.target.value,
        })
    }
    inputMemberProfession = (e) => {
        this.setState({
            profession_id: e.target.value,
        })
    }
    inputMemberEducationLevel = (e) => {
        this.setState({
            education_level_id: e.target.value,
        })
    }


    // Storing member data
    storeMemberData = () => {
        axios.post('/store/member/data', {
            name: this.state.name,
            email: this.state.email,
            gender: this.state.gender,
            phone_no: this.state.phone_no,
            dob: this.state.dob,
            marital_status: this.state.marital_status,
            age_cluster: this.state.age_cluster,
            cell_group_id: this.state.cell_group_id,
            estate_id: this.state.estate_id,
            employment_status: this.state.employment_status,
            born_again: this.state.born_again,
            leadership_id: this.state.leadership_id,
            ministry_id: this.state.ministry_id,
            profession_id: this.state.profession_id,
            education_level_id: this.state.education_level_id
        }).then(() => {
            toast.success('Member Saved Successfully');
            setTimeout(() => {
                location.reload();
            }, 2500)
        });
    }
    render() {
        return(
            <>
                <div className='row text-right mb-3 pb-3'>
                    <button className='btn btn-info text-right col-3 offset-md-9'
                            data-toggle='modal'
                            data-target='#createModal'
                    >
                        Add New BuruBuru Church Member

                    </button>

                </div>
                <div className="modal fade" id="createModal" tabIndex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div className="modal-dialog">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h1 className="modal-title fs-5" id="exampleModalLabel">Member Details</h1>
                            <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div className="modal-body">
                            <form className='form' action="">
                                <div className='form-group'>
                                    <input type="text"
                                           id='name'
                                           className='form-control mb-3 pb-3'
                                           placeholder='Name here'
                                           onChange={this.inputMemberName}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="email"
                                           id='email'
                                           className='form-control mb-3 pb-3'
                                           placeholder='Email here'
                                           onChange={this.inputMemberEmail}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='gender'
                                           className='form-control mb-3 pb-3'
                                           placeholder='Gender here'
                                           onChange={this.inputMemberGender}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='phone_no'
                                           className='form-control mb-3 pb-3'
                                           placeholder='Phone Number here'
                                           onChange={this.inputMemberPhone}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='dob'
                                           className='form-control mb-3 pb-3'
                                           placeholder='Date of Birth here'
                                           onChange={this.inputMemberDateOfBirth}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='marital_status'
                                           className='form-control mb-3 pb-3'
                                           placeholder='Marital Status here'
                                           onChange={this.inputMemberMaritalStatus}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='age_cluster'
                                           className='form-control mb-3 pb-3'
                                           placeholder='Age Cluster here'
                                           onChange={this.inputMemberAgeCluster}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='cell_group_id'
                                           className='form-control mb-3 pb-3'
                                           placeholder='Cell Group here'
                                           onChange={this.inputMemberCellGroup}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='estate_id'
                                           className='form-control mb-3 pb-3'
                                           placeholder='Estate here'
                                           onChange={this.inputMemberEstate}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='employment_status'
                                           className='form-control mb-3 pb-3'
                                           placeholder='Name here'
                                           onChange={this.inputMemberEmploymentStatus}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='born_again'
                                           className='form-control mb-3 pb-3'
                                           placeholder='Born Again here'
                                           onChange={this.inputMemberBornAgain}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='leadership_id'
                                           className='form-control mb-3 pb-3'
                                           placeholder='Leadership here'
                                           onChange={this.inputMemberLeadership}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='ministry_id'
                                           className='form-control mb-3 pb-3'
                                           placeholder='Ministry here'
                                           onChange={this.inputMemberMinistry}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='profession_id'
                                           className='form-control mb-3 pb-3'
                                           placeholder='Profession here'
                                           onChange={this.inputMemberProfession}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='education_level_id'
                                           className='form-control mb-3 pb-3'
                                           placeholder='Level of Education here'
                                           onChange={this.inputMemberEducationLevel}
                                    />
                                </div>
                            </form>
                        </div>
                        <div className="modal-footer">

                            <input type="button"
                                   value='save'
                                   onClick={this.storeMemberData}
                            />

                            <button type="button" className="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </>

        )
    }
}

export default CreateModal;
