import React, { useState, useEffect } from "react";
import axios from "axios";

function FaqProduitsroues() {
    const [faqs, setFaqs] = useState([]);

    useEffect(() => {
        const fetchFaqs = async () => {
            try {
                const response = await axios.get('http://127.0.0.1:8000/api/faq', {
                    params: {
                        souscription: '2roues'
                    }
                });
                setFaqs(response.data);
            } catch (error) {
                console.error('Error fetching FAQs:', error);
            }
        };

        fetchFaqs();
    }, []);

    return (
        <>
            <div className="container mt-5">
                <h4 className="titleh3">Avez-vous des questions?</h4>

                <div className="row">
                    <div className="col-md-4 ">
                        <img className="mx-auto d-block img-fluid" src="/images/actu/2Roues.jpg" width={350} alt="Assurances deux roues"/>
                    </div>
                    <div className="col-md-8 ">
                        <div className="accordion container" id="accordionExample">
                            {faqs.map(faq => (
                                <div className="accordion-item" key={faq.id}>
                                    <h2 className="accordion-header" id={`heading${faq.id}`}>
                                        <button className="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target={`#collapse${faq.id}`} aria-expanded="true" aria-controls={`collapse${faq.id}`}>
                                            {faq.question}
                                        </button>
                                    </h2>
                                    <div id={`collapse${faq.id}`} className="accordion-collapse collapse" aria-labelledby={`heading${faq.id}`} data-bs-parent="#accordionExample">
                                        <div className="accordion-body">
                                            {faq.reponse}
                                        </div>
                                    </div>
                                </div>
                            ))}
                        </div></div>


                </div>
            </div>
        </>
    );
}

export default FaqProduitsroues;
