<?php
global $cicw_title, $cicw_amount_text, $cicw_year_text, $cicw_interest_text, $cicw_currency_text, $cicw_primary_color, $cicw_secondary_color, $cicw_tertiary_color,
$cicw_range_color;

?>

<div class="container">
    <div class="header">
        <h1 style="color: <?php echo $cicw_primary_color; ?>" ><?php echo esc_html($cicw_title); ?></h1>
        <button>
            <i class="bi bi-list"></i>
        </button>
    </div>
    <div class="sub-container">
        <div class="view">
            <div class="details">
                <div>
                    <div class="detail">
                        <p style="color: <?php echo esc_attr($cicw_tertiary_color); ?>"> <?php echo esc_html($cicw_amount_text); ?></p>
                        <p id="loan-amt-textw" style="color: <?php echo esc_attr($cicw_primary_color); ?> "></p>
                    </div>
                    <input type="range" id="loan-amountw" min="0" max="10000000" step="50000">
                </div>
                <div>
                    <div class="detail">
                        <p style="color:<?php echo esc_attr($cicw_tertiary_color); ?>"><?php echo esc_html($cicw_year_text); ?></p>
                        <p id="loan-period-textw" style="color: <?php echo esc_attr($cicw_primary_color); ?>"></p>
                    </div>
                    <input type="range" id="loan-periodw" min="1" max="30" step="1">
                </div>
                <div>
                    <div class="detail">
                        <p style="color: <?php echo esc_attr($cicw_tertiary_color); ?>"">% <?php echo esc_html($cicw_interest_text); ?></p>
                        <p id="interest-rate-textw" style="color: <?php echo esc_attr($cicw_primary_color); ?>"></p>
                    </div>
                    <input type="range" id="interest-ratew" min="1" max="15" step="0.5">
                </div>
            </div>
            <div class="footer">
                <p id="price-container"><span id="pricew">0</span>/mo</p>
            </div>
        </div>
        <div class="breakup">
            <canvas id="pieChartw"></canvas>
        </div>
    </div>
    <div>
        <div class="loan-details">
            <div class="chart-details">
                <p style="color: <?php echo esc_attr($cicw_tertiary_color); ?>">Principal</p>
                <p id="cpw" style="color: #130F31; font-size: 17px;"></p>
            </div>
            <div class="chart-details">
                <p style="color: <?php echo esc_attr($cicw_tertiary_color); ?>">Interest</p>
                <p id="ciw" style="color: #130F31; font-size: 17px;"></p>
            </div>
            <div class="chart-details">
                <p style="color: <?php echo esc_attr($cicw_tertiary_color); ?>">Total Payable</p>
                <p id="ctw" style="color: #130F31; font-size: 17px;"></p>
            </div>
        </div>
        <canvas id="lineChartw" height="200px" width="200px"></canvas>
    </div>
</div>
<style>
    input[type=range]::-webkit-slider-runnable-track
    {
        background:<?php echo esc_attr($cicw_range_color); ?>;
    }
</style>
