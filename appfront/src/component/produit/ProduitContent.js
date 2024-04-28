import React, { useState, useEffect } from "react";
import axios from "axios";
import ReactMarkdown from "react-markdown";
import { useParams, Link } from "react-router-dom";

function ProduitCOntent() {
    const [souscription, setSouscription] = useState({});
    const { id } = useParams();

    useEffect(() => {
        axios.get(`http://127.0.0.1:8000/api/souscription/${id}`)
            .then(response => {
                setSouscription(response.data);
            })
            .catch(error => {
                console.error('Erreur : ', error);
            });
    }, [id]);

    return (
        <main className="py-5">

            <div id="carouselExample" class="carousel slide mb-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="/images/actu/bannier.jpg" alt="Bannière" />
                        <div class="carousel-caption d-none d-md-block">
                            <h1 className="text-dark">
                                {souscription.souscription_name}
                            </h1>
                        </div>
                    </div>
                </div>                
            </div>



            <div className="container g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div className="col p-4 d-flex flex-column position-static">
                    <strong className="d-inline-block mb-2 text-success-emphasis">Design</strong>
                    <h3 className="mb-0">Post title</h3>
                    <div className="mb-1 text-body-secondary">Nov 11</div>
                    <p className="mb-auto">{souscription.souscription_description}</p>



                </div>

            </div>


        </main>
    );
}

export default ProduitCOntent;
