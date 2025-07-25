<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Stream</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            background: #000;
            overflow: hidden;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        iframe {
            width: 70vw;
            height: 40vw;  /* Perfect 16:9 aspect ratio */
            max-height: 70vh;
            border: none;
            box-shadow: 0 0 20px #00ffcc;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <iframe src="https://noobmaster.xyz/services/crichd/play.php?id=skyscric" allowfullscreen></iframe>
</div>

</body>
</html>