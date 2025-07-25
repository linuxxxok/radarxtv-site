<?php
$link = trim(file_get_contents("link.txt")); // Read link from file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RadarXCricket</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            background: #000;
        }
        #playerContainer {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: #000;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>
<body>

<div id="playerContainer"></div>

<script>
    function loadIframe() {
        const iframe = document.createElement('iframe');
        iframe.setAttribute('sandbox', 'allow-forms allow-pointer-lock allow-same-origin allow-scripts allow-top-navigation');
        iframe.setAttribute('frameborder', '0');
        iframe.setAttribute('gesture', 'media');
        iframe.setAttribute('allow', 'encrypted-media; fullscreen');
        iframe.setAttribute('allowfullscreen', 'true');
        iframe.setAttribute('scrolling', 'no');
        iframe.setAttribute('src', '<?= $link ?>');
        document.getElementById('playerContainer').appendChild(iframe);
    }

    window.onload = loadIframe;
</script>

</body>
</html>