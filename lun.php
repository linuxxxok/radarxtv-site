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
    <title>Radar Hindi - Live Streaming</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/shaka-player/3.0.3/shaka-player.compiled.js"></script>
    <style>
        /* Global styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: #0a0a0a;
            color: white;
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            overflow: hidden;
            padding: 0 20px;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            height: 70vh;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
            position: relative;
            overflow: hidden;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 10px;
        }

        .footer {
            margin-top: 20px;
            font-size: 1.2rem;
            color: white;
            text-shadow: 2px 2px 10px rgba(255, 255, 255, 0.4);
        }

        .footer a {
            color: #00bfff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .footer a:hover {
            color: #00e5ff;
        }
    </style>
</head>
<body>

    <div class="container">

        <iframe src="http://tv4wap.tiiny.io/sportstv.php?c=starhindi" allow="autoplay; fullscreen" style="width: 100%; height: 100%; border: none;" allowfullscreen></iframe>>
    </div>

    <div class="footer">
        <p>For more updates, follow us on <a href="https://t.me/RadarXCricket" target="_blank">Telegram</a></p>
    </div>

</body>
</html>