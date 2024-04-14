import React from 'react'
import Button from 'react-bootstrap/Button';
import Card from 'react-bootstrap/Card';
import Col from 'react-bootstrap/Col';
import Row from 'react-bootstrap/Row';



function Souscrire() {

    return (

        <>
            <div className='container'>

                <h4 class="fw-bold titleh3">Nos souscriptions </h4>
                
                <div className="container marketing mt-4">

                    <Row className="justify-content-center">

                        <Col md={6} lg={3} className="mt-1 d-flex align-items-center justify-content-center">
                            <Card style={{ width: '18rem' }}>
                                <Card.Img variant="top" src="/images/assurances/a_moto.jpg" />
                                <Card.Body>
                                    <Card.Title>L'assurance des deux et trois roues</Card.Title>
                                    <Card.Text>
                                        L’Assurance Automobile est obligatoire pour tout véhicule terrestre à moteur appartenant à toute personne autre l’Etat au sens du droit interne.
                                    </Card.Text>
                                    <Button variant="primary">Go somewhere</Button>
                                </Card.Body>
                            </Card>
                        </Col>
                        <Col md={6} lg={3} className="mt-1 d-flex align-items-center justify-content-center">
                            <Card style={{ width: '18rem' }}>
                                <Card.Img variant="top" src="/images/assurances/a_moto.jpg" />
                                <Card.Body>
                                    <Card.Title>L'assurance des deux et trois roues</Card.Title>
                                    <Card.Text>
                                        L’Assurance Automobile est obligatoire pour tout véhicule terrestre à moteur appartenant à toute personne autre l’Etat au sens du droit interne.
                                    </Card.Text>
                                    <Button variant="primary">Go somewhere</Button>
                                </Card.Body>
                            </Card>
                        </Col>
                        <Col md={6} lg={3} className="mt-1 d-flex align-items-center justify-content-center">
                            <Card style={{ width: '18rem' }}>
                                <Card.Img variant="top" src="/images/assurances/a_moto.jpg" />
                                <Card.Body>
                                    <Card.Title>L'assurance des deux et trois roues</Card.Title>
                                    <Card.Text>
                                        L’Assurance Automobile est obligatoire pour tout véhicule terrestre à moteur appartenant à toute personne autre l’Etat au sens du droit interne.
                                    </Card.Text>
                                    <Button variant="primary">Go somewhere</Button>
                                </Card.Body>
                            </Card>
                        </Col>
                        <Col md={6} lg={3} className="mt-1 d-flex align-items-center justify-content-center">
                            <Card style={{ width: '18rem' }}>
                                <Card.Img variant="top" src="/images/assurances/a_moto.jpg" />
                                <Card.Body>
                                    <Card.Title>L'assurance des deux et trois roues</Card.Title>
                                    <Card.Text>
                                        L’Assurance Automobile est obligatoire pour tout véhicule terrestre à moteur appartenant à toute personne autre l’Etat au sens du droit interne.
                                    </Card.Text>
                                    <Button variant="primary">Go somewhere</Button>
                                </Card.Body>
                            </Card>
                        </Col>

                        {/* Ajoutez les autres colonnes ici */}
                    </Row>

                </div>
            </div>
        </>
    );
}

export default Souscrire
