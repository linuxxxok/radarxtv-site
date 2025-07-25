<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXCricket - System in ICU 🚑</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Orbitron', sans-serif;
        }

body {
    background: url('https://media.giphy.com/media/3o7abKhOpu0NwenH3O/giphy.gif') no-repeat center center fixed;
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    overflow: hidden;
    position: relative;
}

        /* Dark Overlay for Better Readability */
body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6); /* 60% dark overlay */
    z-index: 0;
}

        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.5);
            border: 2px solid rgba(0, 255, 255, 0.4);
            backdrop-filter: blur(10px);
            max-width: 500px;
            width: 90%;
            position: relative;
            z-index: 1;
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        h1 {
            font-size: 1.6rem;
            color: #00ffff;
            text-shadow: 0 0 12px rgba(0, 255, 255, 0.8);
        }

        .roast {
            font-size: 1.1rem;
            color: #ff007f;
            font-weight: bold;
            margin: 12px 0;
            animation: flicker 1.5s infinite alternate;
        }

        @keyframes flicker {
            0% { opacity: 0.8; }
            100% { opacity: 1; text-shadow: 0 0 10px rgba(255, 0, 127, 0.8); }
        }

        .timer {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 18px;
        }

        .time-box {
            background: rgba(0, 255, 255, 0.2);
            padding: 12px;
            border-radius: 8px;
            min-width: 70px;
            box-shadow: 0 0 8px rgba(0, 255, 255, 0.6);
        }

        .time-box span {
            display: block;
            font-size: 1.6rem;
            font-weight: bold;
            color: #00ffff;
        }

        .time-box small {
            font-size: 0.75rem;
            color: #e6e6e6;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Upgrading... Unlike Pakistan’s Batting Lineup! </h1>
        <p class="roast" id="facts">We are as slow as Dhoni, but still, we will not bottle a rigged home WC like Rohit! 😆</p>

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
    </div>

    <script>
        function updateTimer() {
            const countdownDate = new Date("Feb 29, 2025 15:00:00").getTime();
            const now = new Date().getTime();
            const distance = countdownDate - now;

            if (distance < 0) {
                clearInterval(timerInterval);
                window.location.href = redirectTo;
                return;
            }

            document.getElementById('days').innerText = String(Math.floor(distance / (1000 * 60 * 60 * 24))).padStart(2, '0');
            document.getElementById('hours').innerText = String(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))).padStart(2, '0');
            document.getElementById('minutes').innerText = String(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))).padStart(2, '0');
            document.getElementById('seconds').innerText = String(Math.floor((distance % (1000 * 60)) / 1000)).padStart(2, '0');
        }

const facts = [
    "We are not as slow as Kohli in an ICC knockout! ⏳",
    "We won’t choke like India in an ICC final! 💀",
    "Unlike Rohit, we will actually score a knockout century! 🔥",
    "We load faster than Dhoni's last over chases! ⚡",
    "Unlike India, we won’t take 11 years to win an ICC trophy! 🏆",
    "We are more consistent than India’s middle order in crunch games! 😆",
    "We won’t bottle it like India did in the 2023 WC Final! 💔",
    "Unlike Kohli, we don’t wait a decade for a knockout century! 😂",
    "We are not as outdated as Dhoni’s 2019 strike rate! 📉",
    "We won’t collapse like India’s batting in a World Cup final! 🚨"
];

function shuffleFact() {
    document.getElementById('facts').innerText = facts[Math.floor(Math.random() * facts.length)];
}

setInterval(shuffleFact, 5000);
shuffleFact();
        let redirectTo = "#";
        fetch('lmaoded.php')
            .then(response => response.text())
            .then(folder => {
                if (folder.trim() !== '') {
                    redirectTo = folder.trim();
                }
            });

        const timerInterval = setInterval(updateTimer, 5000);
        updateTimer();
    </script>
</body>
</html>