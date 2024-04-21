import React, { useState, useEffect } from "react";
import axios from "axios";
import Button from 'react-bootstrap/Button';
import Card from 'react-bootstrap/Card';
import Col from 'react-bootstrap/Col';
import Row from 'react-bootstrap/Row';



function Souscrire() {
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
            return description.substring(0,40) + "...";
        } else {
            return description;
        }
    };

    return (

        <>
            <div className='container'>

                <h4 class="fw-bold titleh3">Nos souscriptions </h4>

                <div className="container marketing mt-4">

                    <Row className="justify-content-center">
                    {souscriptions.map((souscription, index) =>(
                        <Col md={6} lg={3} className="mt-1 d-flex align-items-center justify-content-center" key={index}>
                            <Card style={{ width: '18rem' }}>
                                <Card.Body><Card.Title>{souscription.souscription_name}</Card.Title></Card.Body>
                                <Card.Img variant="top" src={`http://127.0.0.1:8000/${souscription.souscription_image}`} alt={souscription.souscription_name} />
                                <Card.Body>                                    
                                    {/* <Card.Text>
                                    {truncateDescription(souscription.souscription_description)}
                                    </Card.Text> */}
                                    <Button className="btn text-center" variant="primary">En savoir plus</Button>
                                </Card.Body>
                            </Card>
                        </Col>
                      ) )}

                        {/* Ajoutez les autres colonnes ici */}
                    </Row>

                </div>
            </div>
        </>
    );
}

export default Souscrire
