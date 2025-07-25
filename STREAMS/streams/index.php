<!DOCTYPE html>
<?php include 'banner.php'; ?>
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
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WFRQPKRJ');</script>
<!-- End Google Tag Manager -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');

        body {
            background: #1C013A;
            color: #FFD700;
            font-family: 'Orbitron', sans-serif;
            text-align: center;
            padding: 20px;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            body {
    min-height: 100vh; /* Yeh ensure karega ki scroll ho */
    overflow-y: auto; /* Yeh scroll allow karega */
}
        }

        h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #FFD700;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 0px 0px 10px #FFD700;
        }

        .stream-container {
            display: flex;
            gap: 10px; /* Boxes aur paas aa gaye */
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            max-width: 800px;
    padding-top: 40px; /* 🔥 Increase space below stream boxes */
        }

        .stream-box {
       padding-top: 20px; /* 👈 Yeh padding-bottom add kiya */
            background: #4B0082;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.7);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            overflow: hidden;
            cursor: pointer;
            position: relative;
            padding: 5px;
            width: 100%; /* Box aur chota kiya */
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .stream-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
            display: block;
        }

        .stream-box:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.9);
        }

        .stream-title {
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.8);
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 1.2rem;
            font-weight: bold;
            color: #FFD700;
        }

        /* Telegram Floating Button */
        .telegram-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 12px;
            border-radius: 50%;
        }
        
        .telegram-btn:hover {
            transform: scale(1.1);
        }

        .telegram-btn img {
            width: 55px;
            height: 55px;
        }

        /* ====== Popup Modal CSS ====== */
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
            background: #FFD700;
            color: #222;
            border: none;
            padding: 8px 15px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
        }

        .popup .btn:hover {
            background: #ffcc00;
        }

        /* Show Popup */
        .popup-overlay.active {
            visibility: visible;
            opacity: 1;
        }
.ticker-container {
    width: 100%;
    overflow: hidden;
    white-space: nowrap;
    background: #4B0082;
    padding: 10px 0;
    margin-top: 40px;
}

.ticker {
    display: inline-block;
    color: #FFD700;
    font-size: 1.2rem;
    animation: tickerMove 20s linear infinite; /* Start animation immediately */
}

@keyframes tickerMove {
    from {
        transform: translateX(100%); /* Start from the right */
    }
    to {
        transform: translateX(-100%); /* Move to the left */
    }
}

/* Mobile-specific adjustments */
@media screen and (max-width: 768px) {
    .ticker {
        font-size: 1rem; /* Adjust font size for mobile */
        animation: tickerMove 15s linear infinite; /* Speed up the ticker on mobile */
    }
}
    </style>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WFRQPKRJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<h1>LIVE STREAMS</h1>

<h5>📢 ANNOUNCEMENTS 👇 📢</h5>

<div class="ticker-container">
    <div class="ticker">
        📢 OG STREAMS 📢
    </div>
</div>

<div class="stream-container">
    </a>
    <a href="willow" class="stream-box">
        <img src="don/stream1.jpg" alt="Stream 7">
        <div class="stream-title">willow live</div>
    </a>
    <a href="willow3" class="stream-box">
        <img src="don/stream4.jpg" alt="Stream 6">
        <div class="stream-title">willow3 live</div>
    </a>
    <a href="tnt" class="stream-box">
        <img src="don/stream3.jpg" alt="Stream 7">
        <div class="stream-title">tnt2 live</div>
    </a>
    <a href="tnt2" class="stream-box">
        <img src="don/stream2.jpg" alt="Stream 8">
        <div class="stream-title">tnt3 live</div>
    </a>
        <a href="tnt1" class="stream-box">
        <img src="don/stream2.jpg" alt="Stream 8">
        <div class="stream-title">tnt1 live</div>
    </a>

</div>

<!-- Telegram Floating Button -->
<a href="https://t.me/radarxcricket" class="telegram-btn">
    <img src="https://upload.wikimedia.org/wikipedia/commons/8/82/Telegram_logo.svg" alt="Telegram">
</a>
    <!-- Popup Modal (Auto Open) -->
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
        // Show popup automatically
        window.onload = function() {
            setTimeout(() => {
                document.getElementById('popupOverlay').classList.add('active');
            }, 1000);
        };

        // Close popup function
        function closePopup() {
            document.getElementById('popupOverlay').classList.remove('active');
        }
    </script>
<?php include 'banner.php'; ?>
</body>
</html>