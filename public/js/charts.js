var barChart = new Chart($('#canvas-2'), {
    type: 'bar',
    data: {
        labels: titles,
        datasets: [{
            backgroundColor: 'rgba(255, 20, 20, 0.5)',
            borderColor: 'rgba(255, 20, 20, 0.8)',
            highlightFill: 'rgba(255, 20, 20, 0.75)',
            highlightStroke: 'rgba(255, 20, 20, 1)',
            data: data["Sad"],
            label: "Sad"
        }, {
            backgroundColor: 'rgba(151, 187, 205, 0.5)',
            borderColor: 'rgba(151, 187, 205, 0.8)',
            highlightFill: 'rgba(151, 187, 205, 0.75)',
            highlightStroke: 'rgba(151, 187, 205, 1)',
            data: data["Neutral"],
            label: "Neutral"
        }, {
            backgroundColor: 'rgba(51, 255, 5, 0.5)',
            borderColor: 'rgba(51, 255, 5, 0.8)',
            highlightFill: 'rgba(51, 255, 5, 0.75)',
            highlightStroke: 'rgba(51, 255, 5, 1)',
            data: data["Happy"],
            label: "Happy"
        }],
    },
    options: {
        responsive: true,
        scales: {
            yAxes: [{
                ticks: {
                    fixedStepSize: 1,
                    beginAtZero:true
                }
            }],
        },
    }
});
