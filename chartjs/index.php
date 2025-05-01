
<!-- session_start(); // Start the session

// Check if the user is logged in
if(!isset($_SESSION['username'])) {
    // Redirect the user to the login page if not logged in
    // header("Location: login.php");
    // exit(); // Prevent further execution
    echo'success';
}
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>User Dashboard</h1>
            <div class="buttons">
                <a href="home.php" class="btn">Home</a>
                <a href="logout.php" class="btn">Logout</a>
            </div>
        </div>
    </header>
    <div class="sidebar">
        <div class="container">
            <!-- User details and information here -->
            <h2>User Details</h2>
            <!-- <p>Welcome, echo $_SESSION['username']; ?>!</p> -->
            <!-- Additional user information can be added here -->
        </div>
    </div>
    <div class="container">
        <div class="dashboard">
            <canvas id="animalChart"></canvas>
            <canvas id="plantChart"></canvas>
            <canvas id="humanChart"></canvas>
            <canvas id="sportsChart"></canvas>
            <canvas id="climateChart"></canvas>
            <canvas id="englishChart"></canvas>
        </div>
    </div>
    <div style="width: 50%;">
        <canvas id="myPieChart"></canvas>
    </div>

    <script>
        // Sample data for the pie chart
        var data = {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: 'My Dataset',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(255, 159, 64, 0.5)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        };

        // Get the canvas element
        var ctx = document.getElementById('myPieChart').getContext('2d');

        // Create the pie chart
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: data,
            options: {
                responsive: true,
                legend: {
                    position: 'bottom',
                }
            }
        });
    </script>
    <script src="script.js"></script>
</body>
</html>
