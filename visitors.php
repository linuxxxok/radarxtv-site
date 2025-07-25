<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Visitor Tracker</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; background-color: #0d0d0d; color: white; padding: 20px; }
        h1 { color: #ffcc00; }
        .container { background: #1e1e1e; padding: 20px; border-radius: 10px; box-shadow: 2px 2px 10px rgba(255, 255, 255, 0.1); display: inline-block; width: 400px; padding: 20px; }
        .stats { margin-top: 20px; font-size: 18px; }
        .highlight { color: #ff5733; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Live Visitor Tracker</h1>
    <div class="container">
        <div class="stats">Total Unique Visitors: <span class="highlight" id="uniqueVisitors">0</span></div>
        <div class="stats">Avg Time Spent: <span class="highlight" id="avgTime">0h 0m 0s</span></div>
    </div>

    <script>
        let currentPath = window.location.pathname;
        let storedTime = localStorage.getItem("timeSpent_" + currentPath) 
                        ? parseInt(localStorage.getItem("timeSpent_" + currentPath)) 
                        : 0;

        function formatTime(seconds) {
            let hours = Math.floor(seconds / 3600);
            let minutes = Math.floor((seconds % 3600) / 60);
            let secs = seconds % 60;
            return `${hours}h ${minutes}m ${secs}s`;
        }

        function updateStats() {
            fetch(`track.php?path=${encodeURIComponent(currentPath)}&time=${storedTime}`)
            .then(res => res.json())
            .then(data => {
                let uniqueCount = data.data.unique_visitors;
                let totalAvgTime = data.data.avg_time_spent || 0; 

                document.getElementById("uniqueVisitors").innerText = uniqueCount;
                document.getElementById("avgTime").innerText = formatTime(totalAvgTime);
            });
        }

        setInterval(function () {
            storedTime++;
            localStorage.setItem("timeSpent_" + currentPath, storedTime);
            updateStats();
        }, 1000);
    </script>
</body>
</html>