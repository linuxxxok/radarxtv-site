<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Streams</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto:wght@400;700&display=swap');

        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            color: #FFD700;
            background-color: #1C013A;
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://radarxtv.site/') no-repeat center center/cover;
            color: #FFD700;
            text-align: center;
            padding: 10px 10px;
        }

        .hero h1 {
            font-size: 4rem;
            font-family: 'Roboto', sans-serif;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .hero .cta-btn {
            background-color: #FF69B4;
            color: #1C013A;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .hero .cta-btn:hover {
            background-color: #ffcc00;
        }

        .announcements {
            background-color: #4B0082;
            padding: 20px;
            text-align: center;
            margin: 40px 0;
            border-radius: 10px;
        }

        .announcements h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .announcements p {
            font-size: 1.2rem;
        }

        .stream-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .stream-card {
            background-color: rgba(255, 255, 255, 0.1);
            border: 2px solid #FFD700;
            border-radius: 15px;
            overflow: hidden;
            width: 350px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
        }

        .stream-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.9);
        }

        .stream-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 2px solid #FFD700;
        }

        .stream-card .card-content {
            padding: 20px;
            text-align: center;
        }

        .stream-card .card-content h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .stream-card .card-content p {
            font-size: 1rem;
            color: #FFD700;
        }

        .footer {
            background-color: #4B0082;
            padding: 20px;
            text-align: center;
            margin-top: 40px;
            border-radius: 10px;
        }

        .footer p {
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .footer .social-links a {
            color: #FFD700;
            margin: 0 10px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer .social-links a:hover {
            color: #FF69B4;
        }

        .telegram-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 15px;
            transition: transform 0.3s ease-in-out;
        }

        .telegram-btn:hover {
            transform: scale(1.1);
        }

        .telegram-btn img {
            width: 60px;
            height: 60px;
        }

        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .popup {
            background: #222;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            color: #FFD700;
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
            width: 300px;
        }

        .popup h2 {
            margin: 0;
            font-size: 1.5rem;
        }

        .popup .btn-container {
            margin-top: 15px;
        }

        .popup .btn {
            background: #FF69B4;
            color: #222;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
        }

        .popup .btn:hover {
            background: #ffcc00;
        }

        .popup-overlay.active {
            visibility: visible;
            opacity: 1;
        }
    </style>
</head>
<body>
    <div class="hero">
        <h1>CT STREAMS LIVE</h1>
        <p>STAY UPDATED BY JOINING THE TG CHANNEL.</p>
        <button class="cta-btn" onclick="openPopup()">Join Now</button>
    </div>

    <div class="announcements">
        <h2>📢 Announcements 📢</h2>
        <p>CT LIVE ON EVERY STREAM</p>
        <p> 📢 YOU MAY USE PRIME AND WILLOW HINDI FOR BEST EXPERIENCE. 📢</p>
    </div>

    <div class="stream-container">
        <a href="sky" class="stream-card">
            <img src="don/kk.jpg" alt="SKY LIVE">
            <div class="card-content">
                <h3>SKY LIVE</h3>
                <p>Watch Sky live stream here.</p>
            </div>
        </a>
        <a href="willow" class="stream-card">
            <img src="don/stream1.jpg" alt="WILLOW LIVE">
            <div class="card-content">
                <h3>WILLOW LIVE</h3>
                <p>Watch Willow live stream here.</p>
            </div>
        </a>
        <a href="skynz" class="stream-card">
            <img src="don/kk.jpg" alt="SKY NZ LIVE">
            <div class="card-content">
                <h3>SKY1 NZ LIVE</h3>
                <p>Watch Sky1 NZ live stream here.</p>
            </div>
        </a>
        <a href="fox" class="stream-card">
            <img src="don/stream4.jpg" alt="PTV Live">
            <div class="card-content">
                <h3>PTV LIVE</h3>
                <p>Watch PTV live stream here.</p>
            </div>
        </a>
             <a href="sky2" class="stream-card">
            <img src="don/stream4.jpg" alt="PTV Live">
            <div class="card-content">
                <h3>WILLOW HINDI LIVE</h3>
                <p>Watch Willow hindi live stream here.</p>
            </div>
        </a>
        <a href="prime" class="stream-card">
            <img src="don/stream4.jpg" alt="PTV Live">
            <div class="card-content">
                <h3> AMAZON PRIME LIVE</h3>
                <p>Watch Amazon prime live stream here.</p>
            </div>
        </a>
            <a href="astro" class="stream-card">
            <img src="don/stream4.jpg" alt="PTV Live">
            <div class="card-content">
                <h3> ASTRO LIVE</h3>
                <p>Watch Astro live stream here.</p>
            </div>
        </a>
                    <a href="primehindi" class="stream-card">
            <img src="don/stream4.jpg" alt="PTV Live">
            <div class="card-content">
                <h3> PRIME HINDI</h3>
                <p>Watch Prime Hindi live stream here.</p>
            </div>
        </a>
              <a href="sky22" class="stream-card">
            <img src="don/stream1.jpg" alt="PTV Live">
            <div class="card-content">
                <h3> SKY CRICKET 2</h3>
                <p>Watch Sky Cricket 2 live stream here.</p>
            </div>
        </a>
           <a href="skymain" class="stream-card">
            <img src="don/stream1.jpg" alt="PTV Live">
            <div class="card-content">
                <h3> SKY MAINEVENT 2</h3>
                <p>Watch Sky Mainevent 2 live stream here.</p>
            </div>
        </a>

    </div>

    <div class="footer">
        <p>&copy; 2025 Live Streams. All rights reserved.</p>
        <div class="social-links">
            <a href="https://t.me/radarxcricket" target="_blank">Telegram</a>
        </div>
    </div>

    <a href="https://t.me/radarxcricket" class="telegram-btn">
        <img src="https://upload.wikimedia.org/wikipedia/commons/8/82/Telegram_logo.svg" alt="Telegram">
    </a>

    <div class="popup-overlay" id="popupOverlay">
        <div class="popup">
            <h2>Join RadarXCricket</h2>
            <p>Get the latest cricket updates on Telegram!</p>
            <div class="btn-container">
                <a href="https://t.me/radarxcricket" class="btn">Join</a>
                <button class="btn" onclick="closePopup()">Cancel</button>
            </div>
        </div>
    </div>

    <script>
        function openPopup() {
            document.getElementById('popupOverlay').classList.add('active');
        }
        //astro ,starhindi , skymain

        function closePopup() {
            document.getElementById('popupOverlay').classList.remove('active');
        }

        window.onload = function() {
            setTimeout(() => {
                openPopup();
            }, 2000);
        };
    </script>
</body>
</html>
