import React from "react";
import Header from '../common/Header';
import Caroussel from '../common/Caroussel';
import FormulaireContact from "../component/contactPage/FormulaireContact";
import Footer from '../common/Footer';

function Contact() {
    return (
        <>
        <Header />
        <Caroussel />
        <FormulaireContact/>
        <Footer />
        </>
    )
}
export default Contact