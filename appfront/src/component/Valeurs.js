import React from "react";
import Slider from "react-slick"

function Valeurs() {
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

    return (
        <div className="container mt-5">
            <h4 className="fw-bold titleh3 mb-4">
                Nos Valeurs
            </h4>
            <div className="card">
                <div className="row justify-content-center">
                    <div className="slider-container">
                        <Slider {...settings}>

                            <div class="col-md-3 card mr-3">
                                <img className=" img-fluid text-center" src="/images/pro/professionalism.png" width="300px" alt="Valeurs" />
                                <div class="card-body">
                                    <h5 className="card-title text-center">Professionnalisme</h5>
                                    <p className="card-text">SBN Assurances s’engage à mettre tous professionnalisme et son savoir – faire au service de sa clientèle et de ses partenaires.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 card mr-3">
                                <img className=" img-fluid text-center" src="/images/pro/professionalism.png" width="300px" alt="Valeurs" />
                                <div class="card-body">
                                    <h5 className="card-title text-center">Professionnalisme</h5>
                                    <p className="card-text">SBN Assurances s’engage à mettre tous professionnalisme et son savoir – faire au service de sa clientèle et de ses partenaires.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 card mr-3">
                                <img className=" img-fluid text-center" src="/images/pro/professionalism.png" width="300px" alt="Valeurs" />
                                <div class="card-body">
                                    <h5 className="card-title text-center">Professionnalisme</h5>
                                    <p className="card-text">SBN Assurances s’engage à mettre tous professionnalisme et son savoir – faire au service de sa clientèle et de ses partenaires.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 card mr-3">
                                <img className=" img-fluid text-center" src="/images/pro/professionalism.png" width="300px" alt="Valeurs" />
                                <div class="card-body">
                                    <h5 className="card-title text-center">Professionnalisme</h5>
                                    <p className="card-text">SBN Assurances s’engage à mettre tous professionnalisme et son savoir – faire au service de sa clientèle et de ses partenaires.
                                    </p>
                                </div>
                            </div>

                            
                        </Slider>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Valeurs;
