import React, { useState, useEffect } from "react";
import axios from "axios";
import Slider from "react-slick";

import ReactPlayer from 'react-player'

function Actualite() {
    var settings = {
        dots: true,
        infinite: false,
        speed: 500,
        slidesToShow: 2,
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
    };

    const [videos, setVideos] = useState([]);
    const [otherVideos, setOtherVideos] = useState([]);

    useEffect(() => {
        const fetchVideos = async () => {
            try {
                const response = await axios.get('http://127.0.0.1:8000/api/latestvideo');
                setVideos(response.data);
            } catch (error) {
                console.error('Error fetching latest videos:', error);
            }
        };

        const fetchOtherVideos = async () => {
            try {
                const response = await axios.get('http://127.0.0.1:8000/api/video');
                setOtherVideos(response.data);
            } catch (error) {
                console.error('Error fetching other videos:', error);
            }
        };

        fetchVideos();
        fetchOtherVideos();
    }, []);

    if (videos.length === 0 || otherVideos.length === 0) {
        return <div>Loading...</div>;
    }

    return (
        <div className="container mt-5">
            <div className="container">
                <h4 className="card-header  fw-bold  titleh3 mb-4">
                    Les actualités
                </h4>
                <div className="row container">
                    {videos.map((video, index) => (
                        <div key={index} className="col-md-12">
                            <div className="row">
                                <div className="col-md-7 mb-5 align-items-center justify-content-center">
                                    <ReactPlayer url={video.iframe} />
                                </div>
                                <div className="col-md-5">
                                    <p className="display-6 fw-bold">{video.name}</p>
                                    <p className="">{video.description}</p>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>

                <div className="slider-container">
                    <h4 className="card-header  fw-bold  titleh3 mb-4">
                        Les autres actualités
                    </h4>

                    <div className="row slider-container  mt-5">
                        <div className="">
                            <Slider {...settings}>
                                {otherVideos.map((otherVideo, index) => (
                                    <div key={index} >
                                        <div className="col-md-3">
                                            <ReactPlayer url={otherVideo.iframe} 
                                            width='600px'
                                            height='360px' />
                                        </div>
                                    </div>
                                ))}
                            </Slider>
                        </div>
                    </div>
                </div>
            </div >
        </div >
    );
}

export default Actualite;
