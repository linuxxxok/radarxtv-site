<?php
// Redirect to maintenance page if enabled
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/maintenance.txt')) {
    header("Location: https://radarxtv.site/maintenance.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RADARxTV - Watch Live Cricket</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fireworks-js@2.0.0/dist/index.min.js"></script>
    <style>/* ✨ Loading Overlay /* ✨ Fullscreen Loading Overlay */
.loading-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, #0a0a1a 40%, #000000);
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    backdrop-filter: blur(8px);
    transition: opacity 1s ease-in-out;
}

/* Smooth Circular Loader with Gradient */
.loader {
    width: 80px;
    height: 80px;
    border: 8px solid #f3f3f3; /* Light background */
    border-top: 8px solid #FFD700; /* Gold color for contrast */
    border-radius: 50%;
    animation: spin 2s linear infinite;
    margin-bottom: 20px;
}

/* Spinner Animation */
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Fading Text Animation */
.loading-text {
    font-size: 1.5rem;
    color: #FFFFFF;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-top: 20px;
    animation: fadeInOut 2s ease-in-out infinite;
}

/* Smooth fade-in/fade-out effect */
@keyframes fadeInOut {
    0% { opacity: 0.3; }
    50% { opacity: 1; }
    100% { opacity: 0.3; }
}

/* Progress Bar (Clean design) */
.progress-container {
    width: 250px;
    height: 12px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    overflow: hidden;
    margin-top: 20px;
}

.progress-bar {
    width: 0%;
    height: 100%;
    background: linear-gradient(90deg, #FFD700, #0033CC);
    transition: width 0.3s ease-in-out;
}

/* 🔥 Blinking Telegram Handle */
.telegram-handle {
    margin-top: 10px;
    font-size: 1rem;
    color: #03A9F4;
    font-weight: bold;
    text-decoration: none;
    animation: blinkEffect 1.2s infinite alternate;
}

@keyframes blinkEffect {
    0% { opacity: 1; }
    100% { opacity: 0.3; }
}

/* ✅ Smooth Fade-in & Fade-out */
@keyframes fadeInOut {
    0% { opacity: 0.5; }
    100% { opacity: 1; }
}

body.loading {
    overflow: hidden;
}

/* ❌ Hide Everything Except Loading Screen */
body:not(.loaded) > *:not(.loading-overlay) {
    display: none;
}

/* ✅ Bug Fix: Report Bug Button Won't Show On Loading */
body.loading .floating-feedback {
    display: none !important;
}

/* ✅ Smooth Exit After Load */
body.loaded .loading-overlay {
    opacity: 0;
    pointer-events: none;
}
/* IP Address Display */
.user-ip {
    font-family: 'Poppins', sans-serif;
    font-size: 1.2rem;
    color: red;
    padding-top: 80px;
    margin-top: 20px;
}
.tuning-in {
    font-family: 'Poppins', sans-serif;
    font-size: 1rem;
    color: white;
    margin-top: 20px;
}
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            padding-bottom: 80px;
            margin: 0;
            margin-bottom: 90px;
            padding: 0;
            background: #0a0a1a;
            color: #ffffff;
            overflow-x: hidden;
            transition: background-color 4s ease-in-out;
        }

        /* Rest of your original styles remain unchanged */
        /* ... [All your original CSS styles here] ... */
                /* Keyframes for background color change */
        @keyframes colorTransition {
            0% { background-color: #0a0a1a; }
            50% { background-color: #1a0a2a; }
            100% { background-color: #0a0a1a; }
        }

        body {
            animation: colorTransition 10s ease-in-out infinite;
        }

        /* Header Animation */
        .animated-header {
            font-size: 3rem;
            font-weight: 700;
            color: #FFD700; /* Gold */
            margin: 0;
            text-transform: uppercase;
            animation: headerText 4s ease-in-out infinite alternate;
        }

        .animated-subtitle {
            font-size: 1.5rem;
            font-weight: 500;
            margin-top: 10px;
            color: rgba(255, 255, 255, 0.7);
            animation: subtitleText 5s ease-in-out infinite alternate;
        }

        /* Animation for header and subtitle */
        @keyframes headerText {
            0% { color: #FFD700; } /* Gold */
            50% { color: #FFD700; }
            100% { color: #FFD700; } /* Gold */
        }

        @keyframes subtitleText {
            0% { color: rgba(255, 255, 255, 0.7); }
            50% { color: rgba(255, 255, 255, 1); }
            100% { color: rgba(255, 255, 255, 0.7); }
        }

        /* Did You Know */
        .did-you-know {
            font-size: 1.6rem;
            font-weight: bold;
            color: #FFD700; /* Gold */
            text-shadow: 0 0 8px #FFD700;
            text-align: center;
            margin-top: 15px;
        }

        /* Fun Fact */
        .fun-fact {
            font-size: 1.1rem;
            font-weight: bold;
            color: #ffffff;
            text-align: center;
            margin-top: 5px;
            white-space: normal;
            max-width: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Header Styles */
        header {
            text-align: center;
            padding: 60px 20px; /* Reduced padding */
            background: linear-gradient(135deg, #003366, #004d99, #0059b3); /* Smooth blue gradient */
            background-size: 200% 200%;
            animation: headerGradient 6s infinite alternate ease-in-out;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            position: relative;
            overflow: hidden;
            border-radius: 20px; /* Soft rounded corners */
            clip-path: polygon(
                0% 10%, /* Top-left curve */
                50% 0%, /* Top-center peak */
                100% 10%, /* Top-right curve */
                100% 90%, /* Bottom-right curve */
                50% 100%, /* Bottom-center dip */
                0% 90% /* Bottom-left curve */
            ); /* Symmetrical wave-like shape */
            height: 440px;
            max-width: 60%; /* Control width */
            margin: 0 auto; /* Centering */
        }

        /* Gradient Animation */
        @keyframes headerGradient {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        /* Glow Animation for Header */
        @keyframes glowAnimation {
            0% { box-shadow: 0 0 15px rgba(255, 215, 0, 0.6), 0 0 30px rgba(255, 215, 0, 0.4); }
            50% { box-shadow: 0 0 25px rgba(255, 215, 0, 0.8), 0 0 50px rgba(255, 215, 0, 0.6); }
            100% { box-shadow: 0 0 15px rgba(255, 215, 0, 0.6), 0 0 30px rgba(255, 215, 0, 0.4); }
        }

        header h1 {
            font-size: 3rem;
            font-weight: bold;
            letter-spacing: 3px;
            color: #FFD700; /* Gold */
            margin: 0;
            text-transform: uppercase;
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.8), 0 0 20px rgba(255, 215, 0, 0.6);
        }

        header p {
            font-size: 1.4rem;
            font-weight: 500;
            margin-top: 15px;
            color: rgba(255, 255, 255, 0.9);
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        header button {
            margin-top: 30px;
            padding: 15px 40px;
            font-size: 1.4rem;
            font-weight: bold;
            color: white;
            background: linear-gradient(135deg, #FFD700, #003366); /* Gold and Dark Blue */
            border: none;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.6), 0 0 30px rgba(255, 215, 0, 0.4);
            transition: all 0.3s ease-in-out;
        }

        header button:hover {
            transform: scale(1.1);
            background: linear-gradient(135deg, #003366, #FFD700); /* Gold and Dark Blue */
            box-shadow: 0 0 25px rgba(255, 215, 0, 0.8), 0 0 50px rgba(255, 215, 0, 0.6);
        }

        /* Outer Glow Effect */
        header::before {
            content: "";
            position: absolute;
            top: -10px;
            left: -10px;
            width: calc(100% + 20px);
            height: calc(100% + 20px);
            border-radius: 30px;
            background: radial-gradient(circle, rgba(255, 215, 0, 0.4), transparent 70%);
            opacity: 0.6;
            z-index: -1;
            animation: glowAnimation 3s infinite alternate ease-in-out;
        }

        /* Floating Feedback Button - Modern and Sleek */
        .floating-feedback {
            position: fixed;
            bottom: 20px; /* Position it slightly above the bottom edge */
            right: 20px; /* Place it on the right side */
            z-index: 9999; /* Ensure it stays on top */
            transition: all 0.3s ease-in-out;
        }

        /* Button Styles - Compact and Modern */
        .floating-feedback button {
            background-color: #ff3366; /* Soft red color */
            color: #ffffff;
            font-size: 1rem;
            padding: 12px 24px;
            border-radius: 30px;
            border: none;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 8px rgba(255, 51, 102, 0.6), 0 0 10px rgba(255, 51, 102, 0.4);
            transition: all 0.3s ease-in-out;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Icon Style */
        .floating-feedback button i {
            font-size: 1.2rem;
        }

        /* Hover Effect */
        .floating-feedback button:hover {
            background-color: #ff6699; /* Lighter red on hover */
            transform: scale(1.05); /* Slight enlargement for emphasis */
            box-shadow: 0 6px 16px rgba(255, 51, 102, 0.8), 0 0 20px rgba(255, 51, 102, 0.6);
        }

        /* Tooltip for Better UX */
        .floating-feedback button::after {
            content: "Report Bug / Contact our team";
            position: absolute;
            top: -40px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 6px 12px;
            border-radius: 5px;
            font-size: 0.9rem;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease-in-out;
        }

        .floating-feedback button:hover::after {
            opacity: 1;
            visibility: visible;
        }

        /* Champions Trophy Section */
        .champions-trophy {
            background: #2a1a3a;
            text-align: center;
            padding: 20px;
            margin: 20px auto;
            border-radius: 15px;
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.9), -5px -5px 15px rgba(255, 255, 255, 0.1);
            width: 80%;
            max-width: 400px;
            position: relative;
            transform: perspective(1000px) rotateX(5deg);
            opacity: 0;
            animation: trophyEntry 2s ease-out forwards;
            overflow: hidden;
        }

        .champions-trophy img {
            width: 100%;
            height: auto;
            object-fit: contain;
        }

        @keyframes trophyEntry {
            0% { transform: scale(0) rotateY(180deg); opacity: 0; }
            100% { transform: scale(1) rotateY(0deg); opacity: 1; }
        }

        /* Countdown - 3D Embossed Look */
        .countdown {
            font-size: 1rem;
            font-weight: bold;
            color: white;
            margin-top: 10px;
            position: relative;
            display: inline-block;
            padding: 12px 40px;
            border-radius: 10px;
            background: #1a0a2a;
            box-shadow: inset -4px -4px 10px rgba(255, 255, 255, 0.2), 
                        inset 4px 4px 10px rgba(0, 0, 0, 0.9),
                        0 0 20px rgba(255, 0, 255, 0.8);
            animation: pulseGlow 1.5s infinite alternate, fadeIn 2s ease-in-out forwards;
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .countdown span {
            font-size: 1rem;
            font-weight: 900;
            display: inline-block;
        }

        /* Box container Styles */
        .box-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin: 50px auto;
            padding: 0 20px;
        }

        /* Style for the surprise message */
        .surprise-message {
            font-size: 1.4rem;
            font-weight: bold;
            color: #ff00ff; /* Neon pink */
            text-shadow: 0 0 10px #ff00ff;
            text-align: center;
            margin: 20px 0;
            opacity: 0;
            animation: pulseInOut 3s infinite;
        }

        @keyframes pulseInOut {
            0% { opacity: 0; transform: scale(0.8); }
            50% { opacity: 1; transform: scale(1); }
            100% { opacity: 0; transform: scale(0.8); }
        }

        .box {
            width: 280px;
            height: 180px;
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            background: linear-gradient(145deg, #1a0a2a, #2a1a3a);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
            transition: all 0.4s ease;
            cursor: pointer;
        }

        .box:hover {
            transform: translateY(-8px) scale(1.05);
            box-shadow: 0 15px 50px rgba(255, 0, 255, 0.8);
        }

        .box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.8;
            border-radius: 15px;
            transition: all 0.4s ease;
        }

        .box .title {
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translate(-50%, 0);
            background: rgba(0, 0, 0, 0.7);
            padding: 10px 25px;
            border-radius: 15px;
            font-size: 1.4rem;
            font-weight: bold;
            color: #00ffcc; /* Neon teal */
            text-shadow: 0 0 10px #00ffcc;
            text-transform: uppercase;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .box:hover img {
            opacity: 1;
            transform: scale(1.1);
        }

        .box:hover .title {
            background: linear-gradient(90deg, #ff00ff, #00ffcc);
            color: white;
            text-shadow: 0 0 15px #00ffcc;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2.2rem;
            }

            header p {
                font-size: 1.2rem;
            }

            header button {
                padding: 10px 35px;
                font-size: 1.2rem;
            }

            .box {
                width: 250px;
                height: 170px;
            }
        }
                footer {
            justify-content: center;
                align-items: center;
    text-align: center;
            margin-top: 50px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.5);
            font-size: 1rem;
        }
    </style>
</head>
<body class="loading">
    <!-- Loading Screen -->
    <div class="loading-overlay">
        <div class="loader"></div>
        <div class="loading-text">Preparing the stream for seamless viewing, have patience...</div>
        
        <!-- Show User IP Address -->

        
        <!-- Progress Bar -->
        <div class="progress-container">
            <div class="progress-bar"></div>
        </div>
        
        <div class="loading-percentage">Loading 0%</div>

        <!-- 🔥 Blinking Telegram Handle -->
        <a href="https://t.me/RadarXCricket" class="telegram-handle">@RadarXCricket</a>
        
                <div class="user-ip" id="userIP">User IP: Loading...</div>
           <!--  <div class="tuning-in">We know where you're tuning in from ,hehe ! Stay tuned for awesome cricket content.</div>-->
    </div>
    
    <!-- Your Original Content -->
    <div class="ball-container">
        <div class="ball"></div>
        <header>
            <h1>
                <span class="uppercase">RADAR</span><span class="lowercase">x</span><span class="uppercase">TV</span>
            </h1>
            <p class="animated-subtitle">Watch Live Cricket Anytime, Anywhere</p>
            <div class="did-you-know animated-text">Did you know?</div>
            <div class="fun-fact" id="funFact">The first-ever cricket match was played in 1877!</div>
            <button onclick="window.location.href='https://t.me/RadarXCricket';">Join Now</button>
        </header>

        <div class="floating-feedback">
            <button onclick="window.location.href='/feedback.html';">
                <i class="fas fa-bug"></i>
                BUG/FEEDBACK
            </button>
        </div>

        <div class="champions-trophy">
            <img src="chuso/champ.jpg" alt="Champions Trophy Logo" onclick="playAudio();">
            <div class="countdown">
                <div>STARTS IN</div>
                <span id="countdown"></span>
            </div>
        </div>

        <div class="box-container">
            <a href="tnt1b.php" class="box">
                <img src="don/stream1.jpg" alt="Stream 1">
                <div class="title">STREAM 1</div>
            </a>
            <a href="willow.php" class="box">
                <img src="don/stream4.jpg" alt="Stream 4">
                <div class="title">STREAM 2</div>
            </a>
            <a href="willowdon.php" class="box">
                <img src="don/stream3.jpg" alt="Stream 5">
                <div class="title">STREAM 3</div>
            </a>
            <a href="tnt.php" class="box">
                <img src="don/stream2.jpg" alt="Stream 5">
                <div class="title">STREAM 4</div>
            </a>
            <a href="aah.php" class="box">
                <img src="ded.jpg" alt="Stream 5">
                <div class="title">STREAM 5</div>
            </a>
            <a href="lalu.php" class="box">
                <img src="kk.jpg" alt="Stream 5">
                <div class="title">STREAM 6</div>
            </a>
            <a href="lun.php" class="box">
                <img src="ohyes.jpg" alt="Stream 5">
                <div class="title">STREAM 7</div>
            </a>
        </div>
    </div>

    <footer>
        &copy; 2025 @RADARxCRICKET. All rights reserved.
    </footer>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let progress = 0;
            let progressBar = document.querySelector('.progress-bar');
            let percentageText = document.querySelector('.loading-percentage');

            let totalTime = 20000; // 20 seconds fixed

            let interval = setInterval(() => {
                let increment = Math.floor(Math.random() * 25) + 25; // Random 5% to 15%
                progress += increment;
                if (progress >= 100) {
                    progress = 100;
                    clearInterval(interval);
                    setTimeout(() => {
                        document.body.classList.add('loaded'); // Hide the loading overlay
                        document.body.classList.remove('loading');
                    }, 500);
                }
                progressBar.style.width = progress + '%';
                percentageText.innerText = `Loading ${progress}%`;
            }, totalTime / 20); // Divide total time into 20 updates

            // Fetching and displaying user IP
            fetch('https://api.ipify.org?format=json')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('userIP').innerText = `YOUR IP: ${data.ip}`;
                })
                .catch(error => {
                    console.log('Error fetching IP:', error);
                    document.getElementById('userIP').innerText = 'IP not available';
                });
        });
    
        // Function to update fun facts
  const funFacts = [
    "Rohit Sharma is the only player to score three double centuries in One Day Internationals (ODIs).",
    "Virat Kohli holds the record for the fastest century in ODIs by an Indian, scoring it in 52 balls.",
    "Rohit Sharma is known for his impeccable timing and ability to play long innings in limited-overs cricket.",
    "Virat Kohli has scored over 70 international centuries, making him one of the most prolific century-makers in the history of cricket.",
    "Rohit Sharma was the first player to score a T20I century for India.",
    "Virat Kohli became the fastest to 8,000, 9,000, 10,000, and 11,000 runs in ODIs.",
    "Rohit Sharma was the captain of the Mumbai Indians when they won the IPL title in 2013, 2015, 2017, 2019, and 2020.",
    "Virat Kohli was the first player to score 1,000 T20I runs in a calendar year (2016).",
    "Rohit Sharma was given his first chance to play in ODIs after being promoted to open the batting for India in 2013, a move that proved to be a game-changer.",
    "Virat Kohli was India's most successful captain, leading the team to many series victories before stepping down from T20I and ODI captaincy.",
    "Rohit Sharma holds the record for the highest individual score in a World Cup match, with 264 runs against Sri Lanka in 2014.",
    "Virat Kohli was named ICC's Cricketer of the Year in 2017 and 2018.",
    "Rohit Sharma is the only player to score more than 200 runs in an ODI match three times.",
    "Virat Kohli's 122 runs against Sri Lanka in 2017 were the fastest by any player to score 50, 100, and 150 in an ODI.",
    "Rohit Sharma became the first player in T20I history to score four centuries.",
    "Virat Kohli's batting average in ODIs is over 59, which is one of the best in the history of cricket.",
    "Rohit Sharma is also known for his stunning fielding, particularly his accurate throws to the stumps.",
    "Virat Kohli has been awarded the Padma Shri (2017) and Padma Bhushan (2020) for his contributions to Indian cricket.",
    "Rohit Sharma has been a key player for India in ICC tournaments, including the Champions Trophy, where he played a pivotal role in the 2013 win.",
    "Virat Kohli became the fastest to score 8,000, 9,000, and 10,000 runs in T20 internationals."
];

        function changeFunFact() {
            const randomFact = funFacts[Math.floor(Math.random() * funFacts.length)];
            document.getElementById('funFact').innerText = randomFact;
        }

        setInterval(changeFunFact, 7200000);
        changeFunFact();

        // Countdown function
        function updateCountdown() {
            const endDate = new Date('2025-02-19T00:00:00');
            const currentDate = new Date();
            const timeLeft = endDate - currentDate;

            if (timeLeft <= 0) {
                document.getElementById('countdown').innerText = 'The Champions Trophy has begun!';
                clearInterval(countdownInterval);
            } else {
                const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
                document.getElementById('countdown').innerText = `${days}d ${hours}h ${minutes}m ${seconds}s`;
            }
        }

        updateCountdown();
        const countdownInterval = setInterval(updateCountdown, 1000);

        // Audio function for playing sound
        let audio = new Audio('Ok/lund.mp3');

        function playAudio() {
            if (!audio.paused) {
                audio.pause();
                audio.currentTime = 0;
            }
            audio.play().catch(error => console.log("Audio play failed:", error));
        }
    </script>
</body>
</html>