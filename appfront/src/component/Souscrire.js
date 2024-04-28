import React, { useState, useEffect } from "react";
import axios from "axios";
import Button from 'react-bootstrap/Button';
import Card from 'react-bootstrap/Card';
import Col from 'react-bootstrap/Col';
import Row from 'react-bootstrap/Row';
import Slider from "react-slick"
import { Link } from 'react-router-dom'; // Importez Link depuis react-router-dom

function Souscrire() {

    var settings = {
        dots: true,
        infinite: false,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 4,
        initialSlide: 0,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    initialSlide: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    }

    const [souscriptions, setSouscriptions] = useState([]);
    useEffect(() => {
        axios.get('http://127.0.0.1:8000/api/allsouscription')
            .then(Response => {
                setSouscriptions(Response.data)
            }).catch(error => {
                console.error('erreur')
            })
    })

    const truncateDescription = (description) => {
        if (description.length > 100) {
            return description.substring(0, 40) + "...";
        } else {
            return description;
        }
    };

    return (
        <>
            <link
                rel="stylesheet"
                type="text/css"
                charset="UTF-8"
                href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css"
            />
            <link
                rel="stylesheet"
                type="text/css"
                href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css"
            />

            <div className='container'>

                <h4 class="fw-bold titleh3">Nos souscriptions </h4>

                <div className="container marketing mt-4">

                    <Row className="justify-content-center">
                        <div className="slider-container">
                            <Slider {...settings}>
                                {souscriptions.map((souscription, index) => (
                                    <Col md={6} lg={3} className="mt-1 d-flex align-items-center justify-content-center" key={index}>
                                        <Card style={{ width: '18rem' }}>
                                            <Card.Body><Card.Title>{souscription.souscription_name}</Card.Title></Card.Body>
                                            <Card.Img variant="top" src={`http://127.0.0.1:8000/${souscription.souscription_image}`} alt={souscription.souscription_name} />
                                            <Card.Body>
                                                <Card.Text>
                                                    {truncateDescription(souscription.souscription_description)}
                                                </Card.Text>
                                                {/* Utilisez Link pour renvoyer vers la page demandée */}
                                                <Link to={`/produits/${souscription.id}`}>
                                                    <Button className="btn text-center" variant="primary">En savoir plus</Button>
                                                </Link>
                                            </Card.Body>
                                        </Card>
                                    </Col>
                                ))}
                            </Slider>
                        </div>
                        {/* Ajoutez les autres colonnes ici */}
                    </Row>

                </div>
            </div>
        </>
    );
}

export default Souscrire;
