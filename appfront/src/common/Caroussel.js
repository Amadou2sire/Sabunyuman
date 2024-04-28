import React, { useState, useEffect } from "react";
import axios from "axios";
import { Carousel } from "react-bootstrap";

function Caroussel() {
    const [images, setImages] = useState([]);

    useEffect(() => {
        const fetchImages = async () => {
            try {
                const response = await axios.get('http://127.0.0.1:8000/api/banner');
                setImages(response.data);
            } catch (error) {
                console.error('Error fetching images:', error);
            }
        };

        fetchImages();
    }, []);

    return (
        <Carousel className="mt-5">
            {images.map((image, index) => (
                <Carousel.Item key={index}>
                    <img
                        className="d-block w-100"
                        src={`http://127.0.0.1:8000/${image.image}`} alt='Sabunyuman'
                        style={{ maxHeight: "700px", objectFit: "cover" }}
                    />
                    {/* <Carousel.Caption>
                        <h3>{image.title}</h3>
                        <p>{image.description}</p>
                    </Carousel.Caption> */}
                </Carousel.Item>
            ))}
        </Carousel>
    );
}

export default Caroussel;
