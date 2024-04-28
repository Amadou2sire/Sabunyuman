import React from "react";
import Header from '../../common/Header';
import ProduitCOntent from "../../component/produit/ProduitContent";
import Footer from '../../common/Footer';
import FaqProduitsroues from "../../component/produit/FaqProduitsroues";

function Produits() {
    return (
        <>
        <Header />
        <ProduitCOntent/> 
        <FaqProduitsroues/>       
        <Footer />
        </>
    )
}
export default Produits