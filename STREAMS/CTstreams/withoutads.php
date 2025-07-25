<!DOCTYPE html>
<html lang="en">
<head>
<script>
// Right Click Block
document.addEventListener("contextmenu", (event) => event.preventDefault());

// Keyboard Shortcuts Block
document.addEventListener("keydown", function (event) {
    if (event.keyCode == 123) { // F12 Block
        event.preventDefault();
    }
    if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Ctrl + Shift + I Block
        event.preventDefault();
    }
    if (event.ctrlKey && event.shiftKey && event.keyCode == 74) { // Ctrl + Shift + J Block
        event.preventDefault();
    }
    if (event.ctrlKey && event.keyCode == 85) { // Ctrl + U Block (View Source)
        event.preventDefault();
    }
});

// Disable Selection & Copying
document.addEventListener("copy", (event) => event.preventDefault());
document.addEventListener("cut", (event) => event.preventDefault());
document.addEventListener("paste", (event) => event.preventDefault());
document.addEventListener("selectstart", (event) => event.preventDefault());

// Anti-DevTools Trick (Detects if DevTools is Open)
setInterval(function () {
    function detectDevTools() {
        let before = new Date();
        debugger;
        let after = new Date();
        return after - before > 100;
    }
    if (detectDevTools()) {
        alert("DevTools Detected! Redirecting...");
        window.location.href = "https://google.com"; // Ya kisi bhi dusre page pe le jao
    }
}, 1000);

// Prevent Dragging Images & Text
document.ondragstart = function () { return false; };

// Hide Page Content If DevTools is Open
(function() {
    const element = new Image();
    Object.defineProperty(element, 'id', {
        get: function () {
            alert('DevTools Detected! Redirecting...');
            window.location.href = "about:blank";
        }
    });
    console.log('%c', element);
})();
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Streams</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto:wght@400;700&display=swap');

        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            color: #FFFFFF;
            background: #000000; /* Dark background */
            background: radial-gradient(circle, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://radarxtv.site/') no-repeat center center/cover;
            color: #FFFFFF;
            text-align: center;
            padding: 50px 20px;
            background-color: #1E1E1E;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-family: 'Orbitron', sans-serif;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            color: #FF45A7; /* Neon pink */
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            color: #00FFD1; /* Neon cyan */
        }

        .hero .cta-btn {
            background-color: #00FFD1;
            color: #000000;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .hero .cta-btn:hover {
            background-color: #FF45A7;
            color: #000000;
        }

        .announcements {
            background-color: #1E1E1E;
            padding: 20px;
            text-align: center;
            margin: 40px 0;
            border-radius: 10px;
            color: #00FFD1;
        }

        .announcements h2 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #00FFD1;
        }

        .announcements p {
            font-size: 1.5rem;
            color: #FFFFFF;
        }

        .stream-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .stream-card {
            background-color: rgba(0, 0, 0, 0.7);
            border: 2px solid #00FFD1;
            border-radius: 15px;
            overflow: hidden;
            width: 300px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
        }

        .stream-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 255, 209, 0.9);
        }

        .stream-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-bottom: 2px solid #FF45A7;
        }

        .stream-card .card-content {
            padding: 20px;
            text-align: center;
            color: #00FFD1;
        }

        .stream-card .card-content h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #FF45A7;
        }

        .stream-card .card-content p {
            font-size: 1rem;
            color: #00FFD1;
        }

        .footer {
            background-color: #1E1E1E;
            padding: 20px;
            text-align: center;
            margin-top: 40px;
            border-radius: 10px;
            color: #00FFD1;
        }

        .footer p {
            font-size: 1rem;
            margin-bottom: 10px;
            color: #00FFD1;
        }

        .footer .social-links a {
            color: #FFFFFF;
            margin: 0 10px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer .social-links a:hover {
            color: #00FFD1;
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
            background: #1E1E1E;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            color: #00FFD1;
            box-shadow: 0 0 10px rgba(0, 255, 209, 0.5);
            width: 300px;
        }

        .popup h2 {
            margin: 0;
            font-size: 1.5rem;
            color: #00FFD1;
        }

        .popup .btn-container {
            margin-top: 15px;
        }

        .popup .btn {
            background: #00FFD1;
            color: #000000;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
        }

        .popup .btn:hover {
            background: #FF45A7;
            color: #000000;
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
        <a href="sky" class="stream-card" style="border-color: #FF45A7;">
            <img src="don/kk.jpg" alt="SKY LIVE">
            <div class="card-content">
                <h3>SKY LIVE</h3>
                <p>Watch Sky live stream here.</p>
            </div>
        </a>
        <a href="willow" class="stream-card" style="border-color: #00FFD1;">
            <img src="don/stream1.jpg" alt="WILLOW LIVE">
            <div class="card-content">
                <h3>WILLOW LIVE</h3>
                <p>Watch Willow live stream here.</p>
            </div>
        </a>
        <a href="skynz" class="stream-card" style="border-color: #FF45A7;">
            <img src="don/kk.jpg" alt="SKY NZ LIVE">
            <div class="card-content">
                <h3>RADAR HD HINDI LIVE</h3>
                <p>Watch Radar hd live stream here for both pc and desktop.</p>
            </div>
        </a>
        <a href="fox" class="stream-card" style="border-color: #00FFD1;">
            <img src="don/stream4.jpg" alt="PTV Live">
            <div class="card-content">
                <h3>PTV LIVE</h3>
                <p>Watch PTV live stream here.</p>
            </div>
        </a>
        <a href="sky2" class="stream-card" style="border-color: #FF45A7;">
            <img src="don/stream4.jpg" alt="WILLOW HINDI LIVE">
            <div class="card-content">
                <h3>WILLOW HINDI LIVE</h3>
                <p>Watch Willow Hindi live stream here.</p>
            </div>
        </a>
        <a href="prime" class="stream-card" style="border-color: #00FFD1;">
            <img src="don/stream4.jpg" alt="AMAZON PRIME LIVE">
            <div class="card-content">
                <h3>AMAZON PRIME LIVE</h3>
                <p>Watch Amazon Prime live stream here.</p>
            </div>
        </a>
        <a href="astro" class="stream-card" style="border-color: #FF45A7;">
            <img src="don/stream4.jpg" alt="ASTRO LIVE">
            <div class="card-content">
                <h3>ASTRO LIVE</h3>
                <p>Watch Astro live stream here.</p>
            </div>
        </a>
        <a href="primehindi" class="stream-card" style="border-color: #00FFD1;">
            <img src="don/stream4.jpg" alt="PRIME HINDI">
            <div class="card-content">
                <h3>SKY NZ 2</h3>
                <p>Watch Sky Nz live stream here.</p>
            </div>
        </a>
        <a href="sky22" class="stream-card" style="border-color: #FF45A7;">
            <img src="don/stream1.jpg" alt="SKY CRICKET 2">
            <div class="card-content">
                <h3>TEN SPORTS</h3>
                <p>Watch Ten Sports live stream here.</p>
            </div>
        </a>
        <a href="skymain" class="stream-card" style="border-color: #00FFD1;">
            <img src="don/stream3.jpg" alt="SKY MAINEVENT 2">
            <div class="card-content">
                <h3>SKY MAINEVENT </h3>
                <p>Watch Sky Mainevent live stream here.</p>
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
