import React from 'react';
import { BrowserRouter as Router, Route } from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';

// Import Routes
import Navbar from './components/navbar.component';
import RadioList from './components/radio-list.component';
import EditRadio from './components/edit-radio.component';
import CreateRadio from './components/create-radio.component';

function App() {
  return (
    <Router>
      <div className='containter'>
        <Navbar />
        <br />
        <Route path='/' exact component={RadioList} />
        <Route path='/edit/:id' exact component={EditRadio} />
        <Route path='/create' exact component={CreateRadio} />
      </div>
    </Router>
  );
}
export default App;
