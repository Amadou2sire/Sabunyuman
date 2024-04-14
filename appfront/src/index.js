import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'; // Importez BrowserRouter et Routes
import './index.css';
import './assets/bootstrap.min.css';
import './assets/bootstrap.min.js';
import Home from './pages/Home.js';
import Presentation from './pages/Presentation.js';
import Contact from './pages/Contact.js';
import reportWebVitals from './reportWebVitals';

// Définissez vos routes à l'intérieur du composant Router
ReactDOM.render(
  <React.StrictMode>
    <Router>
      <Routes>
        <Route path="/" element={<Home />} /> {/* Route vers la page Home */}
        <Route path="/presentation" element={<Presentation />} /> {/* Route vers la page Presentation */}
        <Route path="/contact" element={<Contact />} /> {/* Route vers la page contact */}
      </Routes>
    </Router>
  </React.StrictMode>,
  document.getElementById('root')
);

reportWebVitals();
