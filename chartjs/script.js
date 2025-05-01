// Sample data for charts (replace with your actual data)
var animalData = [10, 0, 2]; // Sample scores for Animal Kingdom theme
var plantData = [9, 5, 2];  // Sample scores for Plant Kingdom theme
var humanData = [6, 5, 1];  // Sample scores for Human Body theme
var sportsData = [4, 10, 5]; // Sample scores for Sports theme
var climateData = [5, 3, 5]; // Sample scores for Climate theme
var englishData = [7, 2, 10]; // Sample scores for English theme

// Create charts
createChart("animalChart", "Animal Kingdom", animalData);
createChart("plantChart", "Plant Kingdom", plantData);
createChart("humanChart", "Human Body", humanData);
createChart("sportsChart", "Sports", sportsData);
createChart("climateChart", "Climate", climateData);
createChart("englishChart", "English", englishData);

// Function to create a chart
function createChart(canvasId, theme, data) {
    var ctx = document.getElementById(canvasId).getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Level1', 'Level 2', 'Level 3'],
            datasets: [{
                label: theme,
                data: data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(245, 200, 86, 0.5)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}
