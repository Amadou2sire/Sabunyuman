import React from "react";
import FaqAccordeon from "../component/FaqAccordeon";
import Presentation from "../component/Presentation";
import Souscrire from "../component/Souscrire";
import Valeurs from "../component/Valeurs";
import Actualite from "../component/Actualite";
import Header from '../common/Header';
import Caroussel from '../common/Caroussel';
import Footer from '../common/Footer';


function Home() {
    return (
        <>
         
            <Header />
            <Caroussel />
            <Presentation />
            <Souscrire />
            <Valeurs />
            <Actualite />
            <FaqAccordeon />
            <Footer />
        </>
    );
}

export default Home;
