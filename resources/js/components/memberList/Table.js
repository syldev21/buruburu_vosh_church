import React, { Component } from "react";
import TableRow from "./TableRow";
import {ToastContainer, toast} from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
import CreateModal from "./modals/CreateModal";

class Table extends Component{
    constructor(props) {
        super(props);

        this.state = {
            members: [],
        }
    }
    //life cycle method

    componentDidMount() {
        this.getMemberList()
    }

    getMemberList = () => {
        let self = this;
        axios.get('/get/member/list').then(function (respone){
            // console.log(respone.data);
            self.setState({
                members: respone.data
            })
        })
    }

    render() {
        return(
            <div className="container">
                <ToastContainer/>
                <CreateModal/>
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <table className="table table-success table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    {this.state.members.map(function (x, i){
                                        return <TableRow key={i} data={x}/>
                                    })}
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}



export default Table
