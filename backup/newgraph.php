<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphs and Charts</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    padding: 20px;
}

header {
    background-color: #4CAF50;
    color: white;
    text-align: center;
    padding: 10px;
    margin-bottom: 20px;
}

select {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: none;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

#chartContainer {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    height: 400px;
    position: relative;
}
</style>
</head>

<body>
    <h2>Graphs and Charts</h2>

    <select id="graphType">
        <option value="" selected disabled>Select an option</option>
            <option value="division">Number of BO A/C holders per division</option>
            <option value="branch">Number of BO A/C holders per Branch</option>
            <option value="manager_in_branch">Number of BO A/C holders achieved by each Customer Relationship Manager in a Branch</option>
            <option value="gender_in_branch">Number of Male & Female BO A/C holders in a Branch</option>
            <option value="gender_per_division">Number of Male & Female BO A/C holders per division</option>
            <option value="year_wise_opening">Number of BO A/C opening year-wisely</option>
    </select>

    <canvas id="chartContainer"></canvas>

    <script>
        // Your JavaScript code goes here
        document.getElementById('graphType').addEventListener('change', function () {
            const selectedValue = this.value;

            if (selectedValue === "") {
                // Do nothing or clear the current chart if there's one displayed
                return;
            }

            // Make an AJAX call to the PHP backend
            fetch(`data_fetcher.php?graphType=${selectedValue}`)
                .then(response => response.json())
                .then(data => {
                    const ctx = document.getElementById('chartContainer').getContext('2d');

                    // If there's a previously rendered chart, destroy it before rendering a new one
                    if (window.myChart) {
                        window.myChart.destroy();
                    }

                   

                    window.myChart = new Chart(ctx, {
                        type: 'bar',
                        data: data,
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'top',
                                },
                                title: {
                                    display: true,
                                    text: 'Chart based on ' + selectedValue
                                }
                            }
                        }
                    });
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });
        });
    </script>
</body>

</html>
