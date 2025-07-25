<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Feedback</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background: #f0f2f5; margin: 0; }
        header { 
            background: #007BFF; 
            color: white; 
            padding: 20px 30px; 
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header-controls {
            display: flex;
            gap: 15px;
            align-items: center;
        }
        .logout {
            padding: 10px 20px;
            background: #F44336;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
        }
        .logout:hover { background: #D32F2F; }
        .maintenance-btn {
            background: <?php echo $maintenance_mode ? '#4CAF50' : '#FF9800'; ?>;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            transition: 0.3s;
            font-family: 'Poppins', sans-serif;
        }
        .maintenance-btn:hover {
            background: <?php echo $maintenance_mode ? '#45a049' : '#e68900'; ?>;
        }
        .container { max-width: 900px; margin: 20px auto; padding: 20px; }
        .card { background: white; border-radius: 10px; padding: 20px; margin-bottom: 15px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); transition: 0.3s; }
        .card:hover { transform: translateY(-5px); }
        .feedback { background: #f9f9f9; padding: 15px; border-radius: 8px; margin-top: 10px; }
        .delete-btn { background: #FF5722; color: white; padding: 10px; border-radius: 5px; font-weight: bold; transition: 0.3s; }
        .delete-btn:hover { background: #E64A19; }
        .rating-container { display: flex; align-items: center; gap: 10px; margin-top: 10px; }
        .stars { display: flex; gap: 5px; }
        .star { font-size: 22px; color: #ddd; transition: color 0.5s ease-in-out; }
        .star.filled { color: #FFD700; }
        .ip-submitted { font-size: 14px; color: #777; margin-top: 10px; }
    </style>
</head>
<body>

<header>
    <h1>Admin Panel - Feedback</h1>
    <div class="header-controls">
        <a href="admin_panel.php?logout=true" class="logout">Logout</a>
    </div>
</header>

<div class="container">
    <form method="post">
        <button type="submit" name="toggle_maintenance" class="maintenance-btn">
            <?php echo $maintenance_mode ? '🛑 Disable Maintenance' : '🔧 Enable Maintenance'; ?>
        </button>
    </form>

    <h2>Feedback List</h2>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rating = intval($row['rating']);
            echo "
            <div class='card'>
                <strong>Name:</strong> " . htmlspecialchars($row['name']) . "<br>
                <strong>Email:</strong> " . htmlspecialchars($row['email']) . "<br>

                <div class='rating-container'>
                    <strong>Given Rating:</strong>
                    <div class='stars'>";
                        for ($i = 1; $i <= 5; $i++) {
                            echo "<span class='star " . ($i <= $rating ? "filled" : "") . "'>&#9733;</span>";
                        }
                    echo "</div>
                </div>

                <div class='feedback'><strong>Suggestions:</strong> " . htmlspecialchars($row['comments']) . "</div>
                
                <div class='ip-submitted'>
                    <strong>IP Address:</strong> " . $row['ip_address'] . "<br>
                    <strong>Submitted At:</strong> " . $row['submitted_at'] . "
                </div>

                <div style='text-align: right;'>
                    <a href='admin_panel.php?delete_id=" . $row['id'] . "' onclick='return confirm(\"Delete feedback?\")'>
                        <button class='delete-btn'>Delete</button>
                    </a>
                </div>
            </div>";
        }
    } else {
        echo "<p>No feedback yet.</p>";
    }
    ?>

</div>

</body>
</html>