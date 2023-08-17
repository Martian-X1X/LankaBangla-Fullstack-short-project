<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphs and Charts</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <link href="css/graph.css?key=<?php echo time(); ?>" type="text/css" rel="stylesheet" />
</head>

<body>

    <nav class="navbar">
        <div class="navbar-content">
            <div class="logo">
               <a href="mainpage.php">
               <img class="logo" src="imgs/Logo.png" alt="Logo">
            </div>
            
            <ul class="menu-list">
                <li><a href="aboutus.php">About</a></li>
                <li><a href="newgraph.php">Show Graphs</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>
    </nav>

<div>
    <h2>Graphs and Charts</h2>
</div>
    <div id="graphContainer">
        <button data-graph-type="division">Number of BO A/C holders per division</button>
        <button data-graph-type="branch">Number of BO A/C holders per Branch</button>
        <button data-graph-type="manager_in_branch">Number of BO A/C holders achieved by each Customer Relationship Manager in a Branch</button>
        <button data-graph-type="gender_in_branch">Number of Male & Female BO A/C holders in a Branch</button>
        <button data-graph-type="gender_per_division">Number of Male & Female BO A/C holders per division</button>
        <button data-graph-type="year_wise_opening">Number of BO A/C opening year-wisely</button>
    </div>

    <canvas id="chartContainer"></canvas>

    <script>
        // Your JavaScript code goes here
        const buttons = document.querySelectorAll('button');
        const chartContainer = document.getElementById('chartContainer');

        buttons.forEach(button => {
            button.addEventListener('click', function () {
                const selectedValue = this.getAttribute('data-graph-type');

                if (!selectedValue) {
                    return;
                }

                fetch(`data_fetcher.php?graphType=${selectedValue}`)
                    .then(response => response.json())
                    .then(data => {
                        const ctx = chartContainer.getContext('2d');

                        if (window.myChart) {
                            window.myChart.destroy();
                        }

                        let chartType = 'bar'; // Default to bar chart

                        if (selectedValue === 'gender_in_branch') {
                            chartType = 'pie';
                        } else if (selectedValue === 'year_wise_opening') {
                            chartType = 'line';
                        }

                        window.myChart = new Chart(ctx, {
    type: chartType,
    data: data,
    options: {
        responsive: true,
        plugins: {
            // ... (Previous plugins configuration)
        },
        scales: {
            x: {
                ticks: {
                    color: 'white',
                    font: {
                        size: 14
                    }
                },
                grid: {
                    color: 'rgba(255, 255, 0, 0.3)' // Set the color of the x-axis grid lines
                }
            },
            y: {
                ticks: {
                    color: 'white',
                    font: {
                        size: 14
                    }
                },
                grid: {
                    color: 'rgba(0, 255, 0, 0.3)' // Set the color of the y-axis grid lines
                }
            }
        }
    }
});
                    })
                    .catch(error => {
                        console.error('Error fetching data:', error);
                    });
            });
        });
    </script>
</body>

</html>
