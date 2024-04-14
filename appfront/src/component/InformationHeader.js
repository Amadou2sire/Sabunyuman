import React from "react";
import '../index.css'

function info() {
    return (
        <div class="top_bar">
            <div class="container">
                <div class="top_bar_info_wr">
                    <div class="top_bar_info_switcher">
                        <div class="active">
                            <span>
                                Siège Sabunyuman                                                             </span>
                        </div>
                        <ul>
                            <li>
                                <a href="#top_bar_info_1">
                                    Siège Sabunyuman                                                                     </a>
                            </li>
                            <li>
                                <a href="#top_bar_info_2">
                                    London Office                                                                    </a>
                            </li>
                        </ul>
                    </div>
                    <ul class="top_bar_info d-block" id="top_bar_info_1">
                        <li>
                            <i class="stm-marker"></i>
                            <span>
                                ACI 2000, Immeuble Sonavie Bamako Mali                                                                </span>
                        </li>
                        <li>
                            <i class="fa fa-clock-o"></i>
                            <span>
                                Lun - Ven 8.00 - 18.00. Dimanche Fermé                                                                </span>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <span>
                                20 22 60 29                                                                </span>
                        </li>
                    </ul>
                    <ul class="top_bar_info" id="top_bar_info_2">
                        <li>
                            <i class="stm-marker"></i>
                            <span>
                                15 Baker Str., London, HA018 UK.                                                                </span>
                        </li>
                        <li>
                            <i class="fa fa-clock-o"></i>
                            <span>
                                Mon - Sat 8.00 - 18.00. Sunday CLOSED                                                                </span>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <span>
                                <a href="tel:44 382 5555">44 382 5555</a>                                                                </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    )
}
export default info