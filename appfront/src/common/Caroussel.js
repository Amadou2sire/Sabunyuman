import React from "react";
import { Carousel } from "react-bootstrap";


function Caroussel() {
    return (
        <Carousel className="mt-5">
            <Carousel.Item>
                <img
                    className="d-block w-100"
                    src="images/04.jpg"
                    alt="First slide"
                    style={{ maxHeight: "700px", objectFit: "cover" }}
                />
                <Carousel.Caption>
                    <h3>Example headline.</h3>
                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a className="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                </Carousel.Caption>
            </Carousel.Item>
            <Carousel.Item>
                <img
                    className="d-block w-100"
                    src="images/05.jpg"
                    alt="Second slide"
                    style={{ maxHeight: "700px", objectFit: "cover" }}
                />
                <Carousel.Caption>
                    <h3>Another example headline.</h3>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a className="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </Carousel.Caption>
            </Carousel.Item>
            <Carousel.Item>
                <img
                    className="d-block w-100"
                    src="images/06.jpg"
                    alt="Third slide"
                    style={{ maxHeight: "700px", objectFit: "cover" }}
                />
                <Carousel.Caption>
                    <h3>One more for good measure.</h3>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a className="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                </Carousel.Caption>
            </Carousel.Item>
        </Carousel>
    );
}

export default Caroussel;
