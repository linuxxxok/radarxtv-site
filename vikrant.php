<!DOCTYPE html>
<?php include 'banner.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RADARxTV - Watch Live Cricket</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="tracker.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #121212;
            color: #e0e0e0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            opacity: 0;
            animation: fadeIn 1.5s ease-in-out forwards;
            background-image: radial-gradient(circle, #1a1a2e, #16213e);
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        header {
            text-align: center;
            padding: 30px 20px;
            background: linear-gradient(135deg, #8e2de2, #4a00e0);
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
            width: 60%;
            max-width: 700px;
        }

        header h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #ffffff;
            margin: 0;
            text-transform: uppercase;
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.7);
        }

        .ip-address {
            font-size: 1rem;
            margin-top: 8px;
            color: #ffffff;
            font-weight: 500;
        }

        header button {
            margin-top: 15px;
            padding: 12px 25px;
            font-size: 1.1rem;
            font-weight: bold;
            color: white;
            background: linear-gradient(135deg, #ff6f61, #ffcc5c);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0 0 12px rgba(255, 111, 97, 0.5);
            transition: all 0.3s ease-in-out;
        }

        header button:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #ffcc5c, #ff6f61);
        }

        /* Giveaway Section */
        .giveaway {
            text-align: center;
            padding: 18px;
            margin: 15px auto;
            width: 85%;
            max-width: 450px;
            background: linear-gradient(135deg, #ff4500, #ffcc00);
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(255, 69, 0, 0.5);
            animation: fadeIn 1s ease-in-out;
        }

        .giveaway h2 {
            font-size: 1.6rem;
            font-weight: bold;
            color: white;
            margin: 0;
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.8);
            animation: pulse 1.5s infinite alternate;
        }

        .giveaway p {
            font-size: 1.1rem;
            color: #fff;
            margin: 8px 0;
        }

        .giveaway-btn {
            display: inline-block;
            margin-top: 8px;
            padding: 10px 22px;
            font-size: 1rem;
            font-weight: bold;
            color: white;
            background: linear-gradient(135deg, #4a00e0, #8e2de2);
            border-radius: 50px;
            text-decoration: none;
            box-shadow: 0 0 12px rgba(138, 43, 226, 0.5);
            transition: all 0.3s ease-in-out;
        }

        .giveaway-btn:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #8e2de2, #4a00e0);
        }

        @keyframes pulse {
            from { transform: scale(1); }
            to { transform: scale(1.05); }
        }

        /* Streams Section */
        .box-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px;
            margin: 15px auto;
            padding: 0 15px;
        }

        .box {
            text-decoration: none;
            width: 260px;
            border-radius: 12px;
            overflow: hidden;
            background: linear-gradient(145deg, #1e1e3b, #2a2a4a);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.6);
            transition: all 0.4s ease;
            cursor: pointer;
            text-align: center;
            position: relative;
            border: 2px solid transparent;
        }

        .box:hover {
            transform: translateY(-6px) scale(1.05);
            box-shadow: 0 15px 40px rgba(255, 111, 97, 0.3);
            border: 2px solid #ffcc5c;
        }

        .box img {
            width: 100%;
            height: auto;
            border-radius: 12px 12px 0 0;
        }

        .title {
            background: linear-gradient(90deg, #4a00e0, #8e2de2);
            font-size: 1.3rem;
            font-weight: bold;
            color: white;
            padding: 12px;
            border-radius: 0 0 12px 12px;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            padding: 15px;
            background: rgba(0, 0, 0, 0.4);
        }
    </style>

</head>
<body>
    <header>
        <h1>RADARxTV</h1>
        <div class="ip-address">Your IP: <span id="userIP">Loading...</span></div>
        <button onclick="window.location.href='https://t.me/RadarXCricket';">Join Telegram Channel</button>
    </header>

    <div class="giveaway">
<h2>&#x1F6A8; GIVEAWAY ALERT &#x1F6A8;</h2>
        <p>GET A JERSEY OF YOUR FAVOURITE TEAM</p>
        <a href="https://t.me/+A2v0Cr_zHutjYWU1" class="giveaway-btn">CLICK HERE TO PARTICIPATE</a>
    </div>

    <div class="box-container">
        <a href="Normalstreams" class="box">
            <img src="don/stream1.jpg" alt="Stream 1">
            <div class="title">Normal Streams</div>
        </a>
        <a href="streams" class="box">
            <img src="don/lala.jpg" alt="Stream 2">
            <div class="title">WPL Streams</div>
        </a>
        <a href="maintenance.php" class="box">
            <img src="ct25.jpg" alt="Stream 3">
            <div class="title">CT Streams</div>
        </a>
    </div>
<?php include 'banner.php'; ?>
    <footer>
        &copy; 2025 @RADARxCRICKET. All rights reserved.
    </footer>

    <script>
    //maintenance.php
        async function getUserIP() {
            let response = await fetch('https://api.ipify.org?format=json');
            let data = await response.json();
            document.getElementById('userIP').textContent = data.ip;
        }
        getUserIP();
    </script>
</body>

</html>