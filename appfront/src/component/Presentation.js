import React from "react";
import '../index.css'

function Presentation() {
    return (
        <>
            <div className="container mt-5 text-center">
            
                <div className="row">
                    <div className="col-lg-5">
                    <h4 className="fw-bold titleh3">Présentation</h4>
                        <p className="lead mb-4 text-start">Grâce à une expérience de plus de 34 ans et riche de son capital humain, SBN ASSURANCES a su se démarquer et à s'imposer dans le secteur très compétitif de l'assurance et de la réassurance au Mali. Aujourd'hui SBN ASSURANCES fait partie des cinq principaux leaders du marché malien de l'assurance et a vu son chiffre d'affaires croitre de 89% en seulement 4ans (2015/2018), une 1ère dans le secteur.</p>
                        <div className="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <a href="/presentation"><button type="button" className="btn btn-outline-secondary btn-lg px-4">Lire plus </button></a>
                        </div>
                    </div>
                    <div className="col-lg-7">
                        <img className="d-block mx-auto mb-4 img-fluid" src="images/Photos-de-groupe-02-.jpg" alt="sabunyuman" width={700} />
                    </div>
                </div>
            </div>
        </>
    )
}

export default Presentation;
