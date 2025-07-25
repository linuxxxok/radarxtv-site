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
    
    <!-- Preload the ball animation asset -->
    <link rel="preload" href="path/to/ball-animation.gif" as="image">
    
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            padding-bottom: 80px;
            margin: 0;
            margin-bottom: 90px;
            padding: 0;
            background: #0a0a1a; /* Deep space blue */
            color: #ffffff;
            overflow-x: hidden;
            transition: background-color 4s ease-in-out;
        }

        /* Keyframes for background color change */
        @keyframes colorTransition {
            0% { background-color: #0a0a1a; }
            50% { background-color: #1a1a2b; }
            100% { background-color: #0a0a1a; }
        }

        /* Ball Animation Styles */
        .ball-animation {
            position: fixed;
            top: 50%;
            left: 50%;
            width: 50px;
            height: 50px;
            background: url('path/to/ball-animation.gif') no-repeat center center;
            background-size: cover;
            animation: ballMovement 2s linear infinite;
            transform: translate(-50%, -50%);
        }

        /* Ball movement animation */
        @keyframes ballMovement {
            0% { transform: translate(-50%, -50%) translateX(0); }
            50% { transform: translate(-50%, -50%) translateX(200px); }
            100% { transform: translate(-50%, -50%) translateX(0); }
        }

        /* Header Styles */
        .header {
            text-align: center;
            padding: 20px;
        }

        .header h1 {
            font-size: 48px;
            font-weight: 600;
            color: #fff;
        }

        .header p {
            font-size: 20px;
            color: #fff;
        }
    </style>
</head>
<body>

    <!-- Ball animation element -->
    <div class="ball-animation"></div>

    <!-- Main Content -->
    <div class="header">
        <h1>RADARxTV - Live Cricket Streaming</h1>
        <p>Watch live cricket matches, highlights, and more!</p>
    </div>

   
    <header>
        <h1>
            <span class="uppercase">RADAR</span><span class="lowercase">x</span><span class="uppercase">TV</span>
        </h1>
        <p class="animated-subtitle">Watch Live Cricket Anytime, Anywhere</p>
        <!-- Did You Know and Fun Fact Section Above Join Now -->
        <div class="did-you-know animated-text">Did you know?</div>
        <div class="fun-fact" id="funFact">The first-ever cricket match was played in 1877!</div>
        <button onclick="window.location.href='https://t.me/RadarXCricket';">Join Now</button>
    </header>

    <!-- Floating Feedback Button -->
    <div class="floating-feedback">
        <button onclick="window.location.href='/feedback.html';">
            <i class="fas fa-bug"></i> <!-- Font Awesome icon for bug -->
            BUG/FEEDBACK
        </button>
    </div>

    <!-- Champions Trophy Section -->
    <div class="champions-trophy">
        <img src="chuso/champ.jpg" alt="Champions Trophy Logo" onclick="playAudio();">
        <div class="countdown">
            <div>STARTS IN</div>
            <span id="countdown"></span>
        </div>
    </div>

    <!-- Box container -->
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
            <div class="title">STAR HINDI HD</div>
        </a>
 
    </div>
    <script>
        function showAlert() {
            alert("Rohirat Retirement Tournament");
        }
        const funFacts = [
            "Afghanistan and Ireland became full Test-playing nations in 2017.",
    "England scored the highest-ever ODI total of 498/4 against the Netherlands in 2022.",
    "The ICC introduced the World Test Championship in 2019 to crown the best Test team.",
    "Brendon McCullum's 'Bazball' strategy revolutionized England's Test cricket in 2022.",
    "Australia's women’s team has won the T20 World Cup a record six times (as of 2023).",
    "Ben Stokes' heroic 135* at Headingley in 2019 is regarded as one of the best Test innings.",
    "David Miller scored the fastest T20I century in just 35 balls against Bangladesh in 2017.",
    "Harmanpreet Kaur smashed 171* in the 2017 World Cup semifinal against Australia.",
    "Rishabh Pant became the first Asian wicketkeeper to score Test centuries in England, Australia, and South Africa.",
    "The Hundred, a 100-ball cricket format, was introduced in England in 2021.",
    "T20 cricket was officially added to the Olympics for the 2028 Los Angeles Games.",
    "England is the only team to hold both the ODI and T20 World Cup titles simultaneously (as of 2022).",
    "India's women’s cricket team played its first pink-ball Test in 2021 against Australia.",
    "Suryakumar Yadav is often called the 'Mr. 360 of T20 cricket' for his innovative shots.",
    "MS Dhoni is the only captain to win all ICC trophies (T20 World Cup, ODI World Cup, and Champions Trophy).",
    "The first-ever Women's Premier League (WPL) was held in India in 2023.",
    "South Africa’s Shabnim Ismail is the fastest bowler in women's cricket, clocking 128 km/h.",
    "Nicholas Pooran scored the fastest ODI century for the West Indies in 2023, taking just 40 balls.",
    "Rohit Sharma hit 5 centuries in the 2019 Cricket World Cup, the most by any player in a single edition.",
    "Mithali Raj retired as the highest run-scorer in women's ODI cricket in 2022.",
    "Pat Cummins became the first fast bowler to captain Australia in Test cricket in 65 years.",
    "In 2022, India became the first team to score 200+ runs in four consecutive T20Is.",
    "Chris Gayle is the only player to score a triple hundred in Tests, a double hundred in ODIs, and a century in T20Is.",
    "Virat Kohli is the fastest player to reach 12,000 ODI runs, achieving the milestone in 242 innings.",
    "Shaheen Afridi became the youngest pacer to take a five-wicket haul in a World Cup match at 19 years old.",
    "The IPL became a $10 billion property, as valued by the BCCI in 2022.",
    "Jemimah Rodrigues made history in 2021 by scoring 76* on her WBBL debut.",
    "Australia's women's cricket team won 21 consecutive ODI matches between 2018 and 2021.",
    "Rashid Khan is the youngest bowler to take 100 wickets in ODIs, achieving the feat at 19 years and 186 days.",
    "The first Day/Night Test match was played between Australia and New Zealand in 2015 using a pink ball.",
    "Eoin Morgan retired in 2022 as England's most successful ODI captain, leading them to their first World Cup win in 2019.",
    "AB de Villiers retired from all cricket in 2021, leaving a legacy as one of the most dynamic batsmen ever.",
    "Sri Lanka's Wanindu Hasaranga became the top-ranked T20I bowler in 2021.",
    "Shafali Verma became the youngest player to score 50+ runs in both ODIs and T20Is.",
    "England’s Joe Root scored over 1,700 Test runs in 2021, the third-highest in a calendar year.",
    "Kane Williamson led New Zealand to their first ICC Test Championship title in 2021.",
    "Australia's Josh Hazlewood became one of the top-ranked bowlers in all three formats.",
    "The longest six recorded in cricket was 122 meters, hit by Liam Livingstone in 2021.",
    "Yuzvendra Chahal became the first Indian bowler to take a five-wicket haul in T20Is in 2017.",
    "In 2022, Suranga Lakmal retired after taking 171 Test wickets for Sri Lanka.",
    "Babar Azam became the fastest to 1,000 T20I runs as a captain, achieving it in 26 innings.",
    "The WPL’s highest individual score was Meg Lanning’s 75* in 2023.",
    "Hardik Pandya captained Gujarat Titans to IPL victory in their debut season in 2022.",
    "Alzarri Joseph holds the record for the best bowling figures in IPL history (6/12).",
    "Jasprit Bumrah became the first Indian pacer to take five wickets in an overseas Test inning on all five continents.",
    "Nat Sciver-Brunt’s 148* in the 2022 World Cup final was the second-highest score in a losing cause.",
    "Mitchell Starc became the fastest to 200 ODI wickets, achieving it in 102 matches.",
    "India hosted the first standalone Women’s T20 World Cup in 2020.",
    "New Zealand’s Sophie Devine hit the fastest women’s T20I century in 36 balls in 2021.",
    "The record for the highest partnership in T20Is (236*) is held by Afghanistan's Hazratullah Zazai and Usman Ghani.",
    "KL Rahul scored the fastest-ever IPL fifty off 14 balls in 2018.",
    "The ICC T20 World Cup 2024 will feature 20 teams for the first time.",
    "Shikhar Dhawan is the only player to win back-to-back IPL Orange Caps (2012, 2013).",
    "Australia’s Ellyse Perry became the first cricketer to score 1,000 runs and take 100 wickets in T20Is.",
    "Kusal Perera’s 153* against South Africa in 2019 is considered one of the greatest Test chases.",
    "In 2019, Lasith Malinga took 4 wickets in 4 consecutive balls in a T20I against New Zealand.",
    "England’s Tammy Beaumont became the fastest woman to score 3,000 ODI runs."
        ];

        function changeFunFact() {
            const randomFact = funFacts[Math.floor(Math.random() * funFacts.length)];
            document.getElementById('funFact').innerText = randomFact;
        }

        // Change fun fact every 2 hours
        setInterval(changeFunFact, 7200000); // 7200000ms = 2 hours
        // Initial fact change
        changeFunFact();

        // Countdown Timer
        function updateCountdown() {
            const endDate = new Date('2025-02-19T00:00:00'); // Countdown to February 19, 2025
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

        let audio = new Audio('Ok/lund.mp3');  // Declare it outside to persist across clicks

        function playAudio() {
            // If audio is already playing, pause and reset it
            if (!audio.paused) {
                audio.pause();
                audio.currentTime = 0;  // Reset the audio
            }

            // Play the audio
            audio.play().catch(error => console.log("Audio play failed:", error));
        }
    </script>
</body>
</html>

