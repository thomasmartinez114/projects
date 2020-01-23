// import React, { Component } from 'react';

// export default class CreateUser extends Component {
//   render() {
//     return (
//       <div>
//         <p>You are on the Create Radio component!</p>
//       </div>
//     );
//   }
// }

import React, { Component } from 'react';

export default class CreateRadio extends Component {
  constructor(props) {
    super(props);

    this.onChangeModel = this.onChangeModel.bind(this);
    this.onChangeSerial = this.onChangeSerial.bind(this);
    this.onChangeMdcid = this.onChangeMdcid.bind(this);
    this.onChangeAssigned = this.onChangeAssigned.bind(this);

    this.state = {
      model: '',
      serial: '',
      mdcid: '',
      assigned: ''
    };
  }

  onChangeModel(e) {
    this.setState({
      model: e.target.value
    });
  }

  onChangeSerial(e) {
    this.setState({
      serial: e.target.value
    });
  }

  onChangeMdcid(e) {
    this.setState({
      mdcid: e.target.value
    });
  }

  onChangeAssigned(e) {
    this.setState({
      assigned: e.target.value
    });
  }

  render() {
    return (
      <div>
        <h3>Create New Exercise Log</h3>
        <form onSubmit={this.onSubmit}>
          <div className='form-group'>
            <label>Username: </label>
            <select
              ref='userInput'
              required
              className='form-control'
              value={this.state.username}
              onChange={this.onChangeUsername}
            >
              {this.state.users.map(function(user) {
                return (
                  <option key={user} value={user}>
                    {user}
                  </option>
                );
              })}
            </select>
          </div>
          <div className='form-group'>
            <label>Description: </label>
            <input
              type='text'
              required
              className='form-control'
              value={this.state.description}
              onChange={this.onChangeDescription}
            />
          </div>
          <div className='form-group'>
            <label>Duration (in minutes): </label>
            <input type='text' className='form-control' value={this.state.duration} onChange={this.onChangeDuration} />
          </div>

          <div className='form-group'>
            <input type='submit' value='Create Exercise Log' className='btn btn-primary' />
          </div>
        </form>
      </div>
    );
  }
  // End of component
}
