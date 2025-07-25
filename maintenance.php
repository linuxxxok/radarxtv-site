<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXCricket - भाई Chill कर! 😎</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background: #000;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            padding: 10px;
            overflow: hidden;
        }

        /* Animated Background */
        body::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffe1, #000dff, #8a00ff);
            background-size: 400% 400%;
            animation: gradientMove 10s infinite alternate;
            opacity: 0.3;
            z-index: -1;
        }

        /* Container */
        .container {
            position: relative;
            width: 90%;
            max-width: 500px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
            animation: fadeIn 1s ease-in-out;
        }

        .icon {
            font-size: 60px;
            margin-bottom: 15px;
            color: #ffdd00;
            animation: pulse 2s infinite;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #00ffcc;
            text-shadow: 0 0 10px rgba(0, 255, 255, 0.8);
        }

        p {
            font-size: 1rem;
            opacity: 0.9;
            color: #e6e6e6;
            margin-bottom: 20px;
            font-style: italic;
        }

        .timer {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 10px;
        }

        .time-box {
            background: rgba(255, 255, 255, 0.2);
            padding: 15px;
            border-radius: 10px;
            min-width: 70px;
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.7);
        }

        .time-box span {
            display: block;
            font-size: 1.8rem;
            font-weight: bold;
            color: #00ffcc;
        }

        .time-box small {
            font-size: 0.9rem;
            color: #e6e6e6;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        /* Responsive Adjustments */
        @media (max-width: 480px) {
            h1 { font-size: 1.8rem; }
            .icon { font-size: 50px; }
            .time-box { padding: 10px; min-width: 60px; }
            .time-box span { font-size: 1.5rem; }
            .time-box small { font-size: 0.8rem; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">🚀</div>
        <h1>भाई थोड़ा Chill कर! 😎</h1>
        <p>RadarXCricket ऐसा वापसी मारेगा, सलमान की Entry लगेगी! 🔥</p>

        <!-- Countdown Timer -->
        <div class="timer">
            <div class="time-box">
                <span id="days">00</span>
                <small>दिन</small>
            </div>
            <div class="time-box">
                <span id="hours">00</span>
                <small>घंटे</small>
            </div>
            <div class="time-box">
                <span id="minutes">00</span>
                <small>मिनट</small>
            </div>
            <div class="time-box">
                <span id="seconds">00</span>
                <small>सेकंड</small>
            </div>
        </div>
    </div>

    <script>
        function updateTimer() {
            const countdownDate = new Date("Feb 26, 2025 23:07.00").getTime();
            const now = new Date().getTime();
            const distance = countdownDate - now;

            if (distance < 0) {
                clearInterval(timerInterval);
                window.location.href = "index.php"; // 🔥 सीधे Redirect 🚀
                return;
            }

            document.getElementById('days').innerText = String(Math.floor(distance / (1000 * 60 * 60 * 24))).padStart(2, '0');
            document.getElementById('hours').innerText = String(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))).padStart(2, '0');
            document.getElementById('minutes').innerText = String(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))).padStart(2, '0');
            document.getElementById('seconds').innerText = String(Math.floor((distance % (1000 * 60)) / 1000)).padStart(2, '0');
        }

        const timerInterval = setInterval(updateTimer, 1000);
        updateTimer();
    </script>
</body>
</html>