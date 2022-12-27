import React, { Component } from "react";
import TableActionButtons from "./TableActionButtons";

class TableRow extends Component{
    constructor(props) {
        super(props);

    }
    render() {
        return(
            <tr>
                <th>{this.props.data.id}</th>
                <td>{this.props.data.name}</td>
                <td>{this.props.data.email}</td>
                <td>{this.props.data.gender}</td>
                <td>{this.props.data.phone_no}</td>
                <td>
                    <TableActionButtons eachMemberId={this.props.data.id}/>
                </td>
            </tr>
        )
    }
}

export default TableRow;
