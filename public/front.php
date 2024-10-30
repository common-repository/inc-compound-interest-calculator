<?php
//Get all options value

global $cicw_title, $cicw_amount_text, $cicw_year_text, $cicw_interest_text, $cicw_currency_text, $cicw_primary_color, $cicw_secondary_color, $cicw_tertiary_color,
$cicw_range_color,$cicw_graph_checked,$cicw_graph_select;

$html='<div class="container">
    <div class="header">
        <h1 style="color: '.$cicw_primary_color.'" >'.$cicw_title.'</h1>
        <button>
            <i class="bi bi-list"></i>
        </button>
    </div>
    <div class="sub-container">
        <div class="view">
            <div class="details">
                <div>
                    <div class="detail">
                        <p style="color: '.$cicw_tertiary_color.'"> '.$cicw_amount_text.'</p>
                        <p id="loan-amt-text" style="color: '.$cicw_primary_color.' "></p>
                    </div>
                    <input type="range" id="loan-amount" min="0" max="10000000" step="50000">
                </div>
                <div>
                    <div class="detail">
                        <p style="color:'.$cicw_tertiary_color.'">'.$cicw_year_text.'</p>
                        <p id="loan-period-text" style="color: '.$cicw_primary_color.'"></p>
                    </div>
                    <input type="range" id="loan-period" min="1" max="30" step="1">
                </div>
                <div>
                    <div class="detail">
                        <p style="color: '.$cicw_tertiary_color.'"">% '.$cicw_interest_text.'</p>
                        <p id="interest-rate-text" style="color: '.$cicw_primary_color.'"></p>
                    </div>
                    <input type="range" id="interest-rate" min="1" max="15" step="0.5">
                </div>
            </div>
            <div class="footer">
                <p id="price-container"><span id="price">0</span>/mo</p>
            </div>
        </div>
        <div class="breakup">
            <canvas id="pieChart"></canvas>
        </div>
    </div>
    <div>
        <div class="loan-details">
            <div class="chart-details">
                <p style="color: '.$cicw_tertiary_color.'">Principal</p>
                <p id="cp" style="color: #130F31; font-size: 17px;"></p>
            </div>
            <div class="chart-details">
                <p style="color: '.$cicw_tertiary_color.'">Interest</p>
                <p id="ci" style="color: #130F31; font-size: 17px;"></p>
            </div>
            <div class="chart-details">
                <p style="color: '.$cicw_tertiary_color.'">Total Payable</p>
                <p id="ct" style="color: #130F31; font-size: 17px;"></p>
            </div>
        </div>';
        if ($cicw_graph_select == "1") {
            $html.='<canvas id="lineChart" height="200px" width="200px"></canvas>';
        }
        $html.='</div>
        </div>
        <style>
            input[type=range]::-webkit-slider-runnable-track
            {
                color:'.$cicw_range_color.';
            }
        </style>';
        return $html;
?>