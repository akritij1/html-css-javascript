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
        <div class="container1">
            <h1>User Dashboard</h1>
            <div class="buttons">
                <a href="\landing page 1\index.html" class="btn">Home</a>
                <a href="\login and registration\login_form.php" class="btn">Logout</a>
            </div>
        </div>
    </header>
    <div class="container2">
        <div class="dashboard">
        <div class="container3">
        <canvas id="averageChart"></canvas>
    </div>
<script>// Sample data for average pie chart (replace with your actual data)
var averageData = {
    labels: ['Animal Kingdom', 'Plant Kingdom', 'Human Body', 'Sports', 'Climate', 'English'],
    datasets: [{
        label: 'Average Score',
        data: [12, 16, 12, 19,13, 21], // Sample average scores for each theme
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

// Get the canvas element for average chart
var averageCtx = document.getElementById('averageChart').getContext('2d');

// Create the average pie chart
new Chart(averageCtx, {
    type: 'pie',
    data: averageData,
    options: {
        responsive: true,
        legend: {
            position: 'bottom'
        }
    }
});
</script>
            <div class="theme-column">
                <h2>Animal Kingdom</h2>
                <canvas id="animalChart"></canvas>
            </div>
            <div class="theme-column">
                <h2>Plant Kingdom</h2>
                <canvas id="plantChart"></canvas>
            </div>
            <div class="theme-column">
                <h2>Human Body</h2>
                <canvas id="humanChart"></canvas>
            </div>
            <div class="theme-column">
                <h2>Sports</h2>
                <canvas id="sportsChart"></canvas>
            </div>
            <div class="theme-column">
                <h2>Climate</h2>
                <canvas id="climateChart"></canvas>
            </div>
            <div class="theme-column">
                <h2>English</h2>
                <canvas id="englishChart"></canvas>
            </div>
        </div>
    </div>
    <footer>
        <div class="container4">
            <div class="user-details">
                <div class="profile-pic">
                    <img src="profile_pic.jpg" alt="Profile Picture">
                </div>
                <div class="user-info">
                    <p>Welcome, <strong>Username</strong>!</p>
                    <!-- Additional user information can be added here -->
                </div>
            </div>
            <div class="upload-profile">
                <input type="file" id="profilePic" accept="image/*">
                <label for="profilePic">Upload Profile Picture</label>
            </div>
        </div>
    </footer>

    

    <script src="script.js"></script>
</body>
</html>
