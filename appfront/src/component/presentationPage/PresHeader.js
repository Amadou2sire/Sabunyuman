import React from "react";
import { Carousel } from "react-bootstrap";

function PresHeader() {
    return (
        <>
            <Carousel className="">


                <section class="py-2 text-center h-auto w-auto">
                    <div class="row py-lg-5">
                        <img
                            className="d-block text-center"
                            src="images/prez.jpg"
                            alt="First slide"
                            style={{ maxHeight: "700px", objectFit: "cover" }} />
                    </div>
                </section>


            </Carousel>

        </>
    )
}
export default PresHeader