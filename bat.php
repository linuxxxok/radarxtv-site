
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Sony Sports Ten 3</title>
    <script src="https://cdn.jwplayer.com/libraries/IDzF9Zmk.js"></script>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            background: #000;
            height: 100%;
            width: 100%;
            overflow: hidden;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        #player {
            position: absolute;
            top: 0; left: 0; bottom: 0; right: 0;
            width: 100vw;
            height: 100vh;
        }
    </style>
</head>

<body>
<div id="player"></div>

<script>
    jwplayer("player").setup({
        file: "https://mini.allinonereborn.xyz/sony/stream_proxy.php?url=https%3A%2F%2Ftataplay.slivcdn.com%2Fhls%2Flive%2F2020592%2FTEN3SD%2Fmaster.m3u8",
        type: "hls",
        width: "100%",
        height: "100%",
        autostart: true,
        controls: true,
        mute: false,
        stretching: "uniform",
        displaytitle: true,
        displaydescription: false,
        playbackRateControls: true,
        cast: {},
        skin: {
            controlbar: {
                background: "rgba(0, 0, 0, 0.6)",
                text: "#ffffff"
            }
        }
    });

    // Optional: Force re-resize on orientation change
    window.addEventListener("orientationchange", () => {
        setTimeout(() => {
            jwplayer().resize();
        }, 500);
    });
</script>
</body>
</html>
