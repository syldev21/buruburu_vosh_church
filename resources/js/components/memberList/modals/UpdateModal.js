import axios from "axios";
import React, { Component } from "react";
import {toast} from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';

class UpdateModal extends Component{
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

    static getDerivedStateFromProps(props, current_state){
        let memberUpdate = {
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

        // updating data from input below

        if (current_state.name && (current_state.name !== props.memberData.name)){
            return null;
        }
        if (current_state.email && (current_state.email !== props.memberData.email)){
            return null;
        }
        if (current_state.gender && (current_state.gender !== props.memberData.gender)){
            return null;
        }
        if (current_state.phone_no && (current_state.phone_no !== props.memberData.phone_no)){
            return null;
        }
        if (current_state.dob && (current_state.dob !== props.memberData.dob)){
            return null;
        }
        if (current_state.marital_status && (current_state.marital_status !== props.memberData.marital_status)){
            return null;
        }
        if (current_state.age_cluster && (current_state.age_cluster !== props.memberData.age_cluster)){
            return null;
        }
        if (current_state.cell_group_id && (current_state.cell_group_id !== props.memberData.cell_group_id)){
            return null;
        }
        if (current_state.estate_id && (current_state.estate_id !== props.memberData.estate_id)){
            return null;
        }
        if (current_state.employment_status && (current_state.employment_status !== props.memberData.employment_status)){
            return null;
        }
        if (current_state.born_again && (current_state.born_again !== props.memberData.born_again)){
            return null;
        }
        if (current_state.leadership_id && (current_state.leadership_id !== props.memberData.leadership_id)){
            return null;
        }
        if (current_state.ministry_id && (current_state.ministry_id !== props.memberData.ministry_id)){
            return null;
        }
        if (current_state.profession_id && (current_state.profession_id !== props.memberData.profession_id)){
            return null;
        }
        if (current_state.education_level_id && (current_state.education_level_id !== props.memberData.education_level_id)){
            return null;
        }

        // updating data from props below

        if (current_state.name !== props.memberData.name ||
            current_state.name === props.memberData.name){
            memberUpdate.name = props.memberData.name;
        }
        if (current_state.email !== props.memberData.email ||
            current_state.email === props.memberData.email){
            memberUpdate.email = props.memberData.email;
        }
        if (current_state.gender !== props.memberData.gender ||
            current_state.gender === props.memberData.gender){
            memberUpdate.gender = props.memberData.gender;
        }
        if (current_state.phone_no !== props.memberData.phone_no ||
            current_state.phone_no === props.memberData.phone_no){
            memberUpdate.phone_no = props.memberData.phone_no;
        }
        if (current_state.dob !== props.memberData.dob ||
            current_state.dob === props.memberData.dob){
            memberUpdate.dob = props.memberData.dob;
        }
        if (current_state.marital_status !== props.memberData.marital_status ||
            current_state.marital_status === props.memberData.marital_status){
            memberUpdate.marital_status = props.memberData.marital_status;
        }
        if (current_state.age_cluster !== props.memberData.age_cluster ||
            current_state.age_cluster === props.memberData.age_cluster){
            memberUpdate.age_cluster = props.memberData.age_cluster;
        }
        if (current_state.cell_group_id !== props.memberData.cell_group_id ||
            current_state.cell_group_id === props.memberData.cell_group_id){
            memberUpdate.cell_group_id = props.memberData.cell_group_id;
        }
        if (current_state.estate_id !== props.memberData.estate_id ||
            current_state.estate_id === props.memberData.estate_id){
            memberUpdate.estate_id = props.memberData.estate_id;
        }
        if (current_state.employment_status !== props.memberData.employment_status ||
            current_state.employment_status === props.memberData.employment_status){
            memberUpdate.employment_status = props.memberData.employment_status;
        }
        if (current_state.born_again !== props.memberData.born_again ||
            current_state.born_again === props.memberData.born_again){
            memberUpdate.born_again = props.memberData.born_again;
        }
        if (current_state.leadership_id !== props.memberData.leadership_id ||
            current_state.leadership_id === props.memberData.leadership_id){
            memberUpdate.leadership_id = props.memberData.leadership_id;
        }
        if (current_state.ministry_id !== props.memberData.ministry_id ||
            current_state.ministry_id === props.memberData.ministry_id){
            memberUpdate.ministry_id = props.memberData.ministry_id;
        }
        if (current_state.profession_id !== props.memberData.profession_id ||
            current_state.profession_id === props.memberData.profession_id){
            memberUpdate.profession_id = props.memberData.profession_id;
        }
        if (current_state.education_level_id !== props.memberData.education_level_id ||
            current_state.education_level_id === props.memberData.education_level_id){
            memberUpdate.education_level_id = props.memberData.education_level_id;
        }





        return memberUpdate;
    }

    // updating member data
    updateMemberData = () => {
        axios.post('/update/member/data', {
            memberId: this.props.modalId,
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
        }).then((response) => {
            // console.log(response);
            toast.success('Member updated successfully');
            setTimeout(() => {
                location.reload();
            }, 2500)
        });
    }
    render() {
        return(
            <div className="modal fade" id={"updateModal"+this.props.modalId} tabIndex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div className="modal-dialog">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h1 className="modal-title fs-5" id="exampleModalLabel">Member Update</h1>
                            <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div className="modal-body">
                            <form className='form' action="">
                                <div className='form-group'>
                                    <input type="text"
                                           id='name'
                                           className='form-control mb-3 pb-3'
                                           value={this.state.name ?? ''}
                                           onChange={this.inputMemberName}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="email"
                                           id='email'
                                           className='form-control mb-3 pb-3'
                                           value={this.state.email ?? ''}
                                           onChange={this.inputMemberEmail}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='gender'
                                           className='form-control mb-3 pb-3'
                                           value={this.state.gender ?? ''}
                                           onChange={this.inputMemberGender}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='phone_no'
                                           className='form-control mb-3 pb-3'
                                           value={this.state.phone_no ?? ''}
                                           onChange={this.inputMemberPhone}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='dob'
                                           className='form-control mb-3 pb-3'
                                           value={this.state.dob ?? ''}
                                           onChange={this.inputMemberDateOfBirth}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='marital_status'
                                           className='form-control mb-3 pb-3'
                                           value={this.state.marital_status ?? ''}
                                           onChange={this.inputMemberMaritalStatus}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='age_cluster'
                                           className='form-control mb-3 pb-3'
                                           value={this.state.age_cluster ?? ''}
                                           onChange={this.inputMemberAgeCluster}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='cell_group_id'
                                           className='form-control mb-3 pb-3'
                                           value={this.state.cell_group_id ?? ''}
                                           onChange={this.inputMemberCellGroup}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='estate_id'
                                           className='form-control mb-3 pb-3'
                                           value={this.state.estate_id ?? ''}
                                           onChange={this.inputMemberEstate}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='employment_status'
                                           className='form-control mb-3 pb-3'
                                           value={this.state.employment_status ?? ''}
                                           onChange={this.inputMemberEmploymentStatus}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='born_again'
                                           className='form-control mb-3 pb-3'
                                           value={this.state.born_again ?? ''}
                                           onChange={this.inputMemberBornAgain}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='leadership_id'
                                           className='form-control mb-3 pb-3'
                                           value={this.state.leadership_id ?? ''}
                                           onChange={this.inputMemberLeadership}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='ministry_id'
                                           className='form-control mb-3 pb-3'
                                           value={this.state.ministry_id ?? ''}
                                           onChange={this.inputMemberMinistry}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='profession_id'
                                           className='form-control mb-3 pb-3'
                                           value={this.state.profession_id ?? ''}
                                           onChange={this.inputMemberProfession}
                                    />
                                </div>
                                <div className='form-group'>
                                    <input type="text"
                                           id='education_level_id'
                                           className='form-control mb-3 pb-3'
                                           value={this.state.education_level_id ?? ''}
                                           onChange={this.inputMemberEducationLevel}
                                    />
                                </div>
                            </form>
                        </div>
                        <div className="modal-footer">
                            <input type="submit"
                                   className='btn btn-info'
                                    value='update'
                                   onClick={this.updateMemberData}
                            />
                            <button type="button" className="btn btn-secondary" data-bs-dismiss="modal">Close</button></div>
                    </div>
                </div>
            </div>

        )
    }
}

export default UpdateModal;
