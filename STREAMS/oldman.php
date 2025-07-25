<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXCricket - Maintenance</title>
    <style>
        /* Global Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Exo', sans-serif;
        }
        body {
            background: linear-gradient(135deg, #2b5876, #4e4376);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            padding: 10px;
        }

        /* Container */
        .container {
            position: relative;
            width: 90%;
            max-width: 500px;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 191, 255, 0.4);
            animation: fadeIn 1s ease-in-out;
        }

        /* Icon */
        .icon {
            font-size: 60px;
            margin-bottom: 15px;
            color: #00FFFF;
            animation: pulse 2s infinite;
        }

        /* Headings */
        h1 {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #00FFFF;
            text-shadow: 0 0 10px rgba(0, 255, 255, 0.8);
        }
        p {
            font-size: 1rem;
            opacity: 0.9;
            color: #e6e6e6;
            margin-bottom: 20px;
        }

        /* Countdown Timer */
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
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
        }
        .time-box span {
            display: block;
            font-size: 1.8rem;
            font-weight: bold;
            color: #00FFFF;
        }
        .time-box small {
            font-size: 0.9rem;
            color: #e6e6e6;
        }

        /* Telegram Button */
        .footer {
            margin-top: 20px;
            font-size: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.2);
            padding: 12px 20px;
            border-radius: 8px;
            transition: 0.3s;
            cursor: pointer;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }
        .footer:hover {
            background: rgba(255, 255, 255, 0.3);
        }
        .footer img {
            width: 25px;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        /* Responsive Adjustments */
        @media (max-width: 480px) {
            h1 {
                font-size: 1.8rem;
            }
            .icon {
                font-size: 50px;
            }
            .time-box {
                padding: 10px;
                min-width: 60px;
            }
            .time-box span {
                font-size: 1.5rem;
            }
            .time-box small {
                font-size: 0.8rem;
            }
            .footer {
                font-size: 0.9rem;
                padding: 10px 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">🛠️</div>
        <h1>No Live Games Active!</h1>
        <p>Will be back soon</p>

        <!-- Countdown Timer -->
        <div class="timer">
            <div class="time-box">
                <span id="days">00</span>
                <small>Days</small>
            </div>
            <div class="time-box">
                <span id="hours">00</span>
                <small>Hours</small>
            </div>
            <div class="time-box">
                <span id="minutes">00</span>
                <small>Minutes</small>
            </div>
            <div class="time-box">
                <span id="seconds">00</span>
                <small>Seconds</small>
            </div>
        </div>

        <!-- Telegram Section -->
        <a href="https://t.me/RadarXCricket" class="footer">
            <img src="https://upload.wikimedia.org/wikipedia/commons/8/82/Telegram_logo.svg" alt="Telegram">
            <span>Join Us on Telegram</span>
        </a>
    </div>

    <script>
        function updateTimer() {
            const countdownDate = new Date("Feb 26, 2025 13:30:00").getTime();
            const now = new Date().getTime();
            const distance = countdownDate - now;

            if (distance < 0) {
                clearInterval(timerInterval);
                document.querySelector('.timer').innerHTML = "<h2>Its taking longer than usual!</h2>";
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById('days').innerText = String(days).padStart(2, '0');
            document.getElementById('hours').innerText = String(hours).padStart(2, '0');
            document.getElementById('minutes').innerText = String(minutes).padStart(2, '0');
            document.getElementById('seconds').innerText = String(seconds).padStart(2, '0');
        }

        const timerInterval = setInterval(updateTimer, 1000);
        updateTimer();
    </script>
</body>
</html>