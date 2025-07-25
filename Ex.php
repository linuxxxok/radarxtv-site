<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXTV Player</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background: #0f0f0f;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .player-container {
            position: relative;
            width: 80%;
            max-width: 800px;
            background: #1a1a1a;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 20px rgba(0, 255, 255, 0.7);
        }
        video {
            width: 100%;
            display: block;
        }
        .controls {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 5px;
            padding: 5px;
            display: flex;
            gap: 10px;
        }
        .controls button, .controls select {
            background: none;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .controls select {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            padding: 2px;
        }

    </style>
</head>
<body>

    <div class="player-container" id="playerContainer">
        <video id="videoPlayer" muted autoplay playsinline>
            <source src="video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="controls">
            <button id="backward"><i class="fas fa-backward"></i> -10s</button>
            <button id="muteToggle"><i class="fas fa-volume-mute"></i></button>
            <button id="forward">+10s <i class="fas fa-forward"></i></button>
            <select id="speedControl">
                <option value="0.5">0.5x</option>
                <option value="1" selected>1x</option>
                <option value="1.5">1.5x</option>
                <option value="2">2x</option>
            </select>
            <button id="fullscreenToggle"><i class="fas fa-expand"></i></button>
        </div>
    </div>
<script>
fullscreenToggle.addEventListener('click', async () => {
    if (!document.fullscreenElement) {
        await playerContainer.requestFullscreen().catch(err => console.log(err));
        
        // ✅ Orientation change karne ke liye ek trick
        setTimeout(() => {
            screen.orientation.lock("landscape").catch(err => console.log(err));
        }, 500);
        
        fullscreenToggle.innerHTML = '<i class="fas fa-compress"></i>';
    } else {
        document.exitFullscreen();
        fullscreenToggle.innerHTML = '<i class="fas fa-expand"></i>';
    }
});
</script>
<script>

    const video = document.getElementById('videoPlayer');
    const playerContainer = document.getElementById('playerContainer');
    const muteToggle = document.getElementById('muteToggle');
    const speedControl = document.getElementById('speedControl');
    const forwardBtn = document.getElementById('forward');
    const backwardBtn = document.getElementById('backward');
    const fullscreenToggle = document.getElementById('fullscreenToggle');

    video.muted = true;
    video.play().catch(error => console.log("Autoplay blocked: " + error));

    muteToggle.innerHTML = '<i class="fas fa-volume-mute"></i>';

    muteToggle.addEventListener('click', () => {
        video.muted = !video.muted;
        muteToggle.innerHTML = video.muted ? '<i class="fas fa-volume-mute"></i>' : '<i class="fas fa-volume-up"></i>';
    });

    speedControl.addEventListener('change', () => {
        video.playbackRate = speedControl.value;
    });

    forwardBtn.addEventListener('click', () => {
        video.currentTime += 10;
    });

    backwardBtn.addEventListener('click', () => {
        video.currentTime -= 10;
    });

    fullscreenToggle.addEventListener('click', async () => {
        if (!document.fullscreenElement) {
            if (screen.orientation && screen.orientation.lock) {
                await screen.orientation.lock("landscape").catch(err => console.log(err));
            }
            await playerContainer.requestFullscreen().catch(err => console.log(`Error: ${err.message}`));
            fullscreenToggle.innerHTML = '<i class="fas fa-compress"></i>';
        } else {
            if (screen.orientation && screen.orientation.unlock) {
                screen.orientation.unlock();
            }
            document.exitFullscreen();
            fullscreenToggle.innerHTML = '<i class="fas fa-expand"></i>';
        }
    });
</script>

</body>
</html>