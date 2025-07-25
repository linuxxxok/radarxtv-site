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
            font-family: 'Poppins', sans-serif;
        }
        body {
            background: linear-gradient(135deg, #001f3f, #003366, #004080);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            overflow: hidden;
            position: relative;
        }

        /* Container */
        .container {
            position: relative;
            max-width: 600px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
            animation: fadeIn 1s ease-in-out;
            z-index: 2;
        }

        /* Sad Icon */
        .sad-icon {
            font-size: 60px;
            margin-bottom: 10px;
            animation: bounce 2s infinite;
        }

        /* Headings */
        h1 {
            font-size: 2rem;
            margin-bottom: 10px;
            text-shadow: 0 0 15px rgba(0, 255, 255, 0.8);
        }
        p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Telegram Button */
        .footer {
            margin-top: 15px;
            font-size: 1.2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.15);
            padding: 10px 15px;
            border-radius: 8px;
            transition: 0.3s;
            cursor: pointer;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }
        .footer:hover {
            background: rgba(255, 255, 255, 0.25);
        }
        .footer img {
            width: 24px;
        }

        /* Rain Effect */
        .rain span {
            position: absolute;
            top: -10%;
            width: 2px;
            height: 15px;
            background: rgba(255, 255, 255, 0.5);
            opacity: 0.8;
            animation: rain-fall linear infinite;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-15px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
        @keyframes rain-fall {
            from { transform: translateY(0); }
            to { transform: translateY(100vh); }
        }
    </style>
</head>
<body>
    <div class="rain"></div>

    <div class="container">
        <div class="sad-icon">☹️</div>
        <h1>We’re experiencing technical issues!</h1>
        <p>Something went wrong, but our team is fixing it. We'll be back very soon!</p>

        <!-- Telegram Section -->
        <a href="https://t.me/RadarXCricket" class="footer">
            <img src="https://upload.wikimedia.org/wikipedia/commons/8/82/Telegram_logo.svg" alt="Telegram">
            <span>Join Us on Telegram</span>
        </a>
    </div>

    <script>
        // Optimized Rain Effect
        function createRain() {
            const rainContainer = document.querySelector('.rain');
            for (let i = 0; i < 60; i++) {  
                let drop = document.createElement('span');
                drop.style.left = Math.random() * 100 + 'vw';
                drop.style.animationDuration = (Math.random() * 1.5 + 0.5) + 's';
                drop.style.animationDelay = Math.random() * 2 + 's';
                drop.style.height = Math.random() * 15 + 'px';
                rainContainer.appendChild(drop);
            }
        }
        createRain();
    </script>
</body>
</html>