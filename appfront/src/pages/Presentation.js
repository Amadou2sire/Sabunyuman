import React from "react";
import Header from '../common/Header';

import FaqAccordeon from "../component/FaqAccordeon";
import Actualite from "../component/Actualite";
import Footer from '../common/Footer';
import PresHeader from "../component/presentationPage/PresHeader";
import PresContent from "../component/presentationPage/PresContent";



function Presentation() {
    return (
        <>
            <Header />
            <PresHeader />
            <PresContent />            
            <Actualite />
            <FaqAccordeon />
            <Footer />
        </>
    )
}
export default Presentation