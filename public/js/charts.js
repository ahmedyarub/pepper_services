/* global Chart */

/**
 * --------------------------------------------------------------------------
 * CoreUI Free Boostrap Admin Template (v2.0.0-beta.3): main.js
 * Licensed under MIT (https://coreui.io/license)
 * --------------------------------------------------------------------------
 */

/* eslint-disable no-magic-numbers */
var ChartsView = function ($) {
    // random Numbers
    var random = function random() {
        return Math.round(Math.random() * 100);
    }; // eslint-disable-next-line no-unused-vars

    var pieChart = new Chart($('#canvas-5'), {
        type: 'pie',
        data: {
            labels: ['Neutral', 'Sad', 'Happy'],
            datasets: [{
                data: data,
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
            }]
        },
        options: {
            responsive: true
        }
    }); // eslint-disable-next-line no-unused-vars

    return ChartsView;
}($);
//# sourceMappingURL=charts.js.map
