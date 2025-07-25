<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXTV - Live Streams</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: url('don/kkkk.jpg') no-repeat center center/cover;
            color: #fff;
            font-family: 'Orbitron', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* HEADER */
        .header {
            padding: 20px;
            font-size: 30px;
            font-weight: bold;
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(10px);
            border-bottom: 3px solid #00ffff;
            text-shadow: 0 0 10px #00ffff, 0 0 20px #ff00ff;
        }

        /* STREAM CONTAINER */
        .stream-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin: 50px auto;
            max-width: 1200px;
        }

        /* STREAM CARDS */
        .stream-card {
            width: 280px;
            height: 180px;
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            text-decoration: none;
            background: rgba(0, 0, 0, 0.5);
            transition: transform 0.3s, box-shadow 0.3s;
            border: 2px solid;
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.5);
        }

        .stream-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255, 0, 255, 0.8);
        }

        .stream-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.8;
            transition: opacity 0.3s;
        }

        .stream-card:hover img {
            opacity: 1;
        }

        .card-content {
            position: absolute;
            bottom: 10px;
            left: 0;
            width: 100%;
            padding: 10px;
            background: rgba(0, 0, 0, 0.7);
            text-align: center;
        }

        .card-content h3 {
            font-size: 18px;
            margin: 0;
            color: #00ffff;
            text-shadow: 0 0 10px #00ffff, 0 0 20px #ff00ff;
        }

        .card-content p {
            font-size: 12px;
            color: #ddd;
        }

        /* STREAM BORDERS */
        .stream-card:nth-child(odd) {
            border-color: #ff00ff;
        }

        .stream-card:nth-child(even) {
            border-color: #00ffff;
        }
    </style>
</head>
<body>

    <div class="header">RadarXTV - Neon Space Streams</div>

    <div class="stream-container">
        <a href="sky" class="stream-card">
            <img src="don/stream1.jpg" alt="SKY LIVE">
            <div class="card-content">
                <h3>SKY LIVE</h3>
                <p>Watch Sky live stream here.</p>
            </div>
        </a>
        <a href="willow" class="stream-card">
            <img src="don/stream4.jpg" alt="WILLOW LIVE">
            <div class="card-content">
                <h3>WILLOW LIVE</h3>
                <p>Watch Willow live stream here.</p>
            </div>
        </a>
        <a href="skynz" class="stream-card">
            <img src="don/kk.jpg" alt="SKY NZ LIVE">
            <div class="card-content">
                <h3>SKY MAINEVENTS LIVE</h3>
                <p>Watch Sky Main HD live stream here.</p>
            </div>
        </a>
        <a href="fox" class="stream-card">
            <img src="don/stream3.jpg" alt="PTV Live">
            <div class="card-content">
                <h3>PTV LIVE</h3>
                <p>Watch PTV live stream here.</p>
            </div>
        </a>
        <a href="sky2" class="stream-card">
            <img src="don/stream2.jpg" alt="WILLOW HINDI LIVE">
            <div class="card-content">
                <h3>WILLOW HINDI LIVE</h3>
                <p>Watch Willow Hindi live stream here.</p>
            </div>
        </a>
        <a href="prime" class="stream-card">
            <img src="don/stream1.jpg" alt="AMAZON PRIME LIVE">
            <div class="card-content">
                <h3>AMAZON PRIME LIVE</h3>
                <p>Watch Amazon Prime live stream here.</p>
            </div>
        </a>
        <a href="HINDIJIOSTAR" class="stream-card">
            <img src="don/stream1.jpg" alt="JIOSTAR LIVE">
            <div class="card-content">
                <h3>JIOSTAR LIVE</h3>
                <p>Watch JioStar HD live stream here.</p>
            </div>
        </a>
        <a href="primehindi" class="stream-card">
            <img src="don/stream4.jpg" alt="PRIME HINDI">
            <div class="card-content">
                <h3>PRIME HINDI</h3>
                <p>Watch Prime Hindi live stream here.</p>
            </div>
        </a>
        <a href="astro" class="stream-card">
            <img src="don/stream3.jpg" alt="ASTRO LIVE">
            <div class="card-content">
                <h3>ASTRO LIVE</h3>
                <p>Watch Astro live stream here.</p>
            </div>
        </a>
        <a href="skymain" class="stream-card">
            <img src="don/stream2.jpg" alt="SKY NZ 1">
            <div class="card-content">
                <h3>SKY NZ 1</h3>
                <p>Watch Sky NZ 1 live stream here.</p>
            </div>
        </a>
        <a href="sky22/tenhd.php" class="stream-card">
            <img src="don/stream1.jpg" alt="TEN SPORTS HD">
            <div class="card-content">
                <h3>TEN SPORTS HD</h3>
                <p>Watch Ten Sports HD live stream here.</p>
            </div>
        </a>
    </div>

</body>
</html>