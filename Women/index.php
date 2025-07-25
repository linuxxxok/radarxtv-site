

<!DOCTYPE html>
<html>

<head>
    <title>Willow Sports</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Telegram_logo.svg/2048px-Telegram_logo.svg.png" type="image/png" sizes="250x250">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/shaka-player/4.1.1/shaka-player.ui.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/shaka-player/4.1.1/controls.min.css" crossorigin="anonymous">
    <link rel="preload" href="https://a201aivottlinear-a.akamaihd.net/OTTB/lhr-nitro/clients/dash/enc/f60kqesunw/out/v1/a435ed7a00f947deb4369b46d8f2fb70/cenc.mpd" as="fetch" crossorigin="anonymous">

    <style>
        /* Overflow menu style */
        .shaka-overflow-menu {
            background-color: rgb(41, 41, 163);
            color: rgb(153, 153, 153);
        }

        .shaka-overflow-menu button:hover {
            background-color: rgb(45, 45, 45);
        }

        .shaka-overflow-button-label {
            color: rgb(245, 245, 245);
        }

        .shaka-current-selection-span {
            color: rgb(202, 202, 202);
        }

        .material-icons-round {
            color: rgb(230, 230, 230);
        }

        /* Overflow sub menu style */
        .shaka-settings-menu {
            background-color: rgb(35, 35, 35);
            color: rgb(255, 255, 255);
        }

        .shaka-settings-menu button {
            color: rgb(255, 255, 255);
        }

        .shaka-settings-menu button:hover {
            background-color: rgb(45, 45, 45);
        }
    </style>
</head>

<body bgcolor="black" style="margin:0">
    <center>
        <div data-shaka-player-container style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover">
            <video autoplay muted playsinline data-shaka-player id="video"
                   style="width:100%;height:100%"></video>
        </div>
    </center>

    <script>

        async function init() {let e = document.getElementById("video"),r = e.ui,n = r.getControls(),o = n.getPlayer();o.configure({drm:{clearKeys:{"1779c27b9d077a3ba0c9cc1bb9a94b9f":"cc5cf3b7928fb9e0a1ee6a8b566f0a8e"}},streaming: {startAtSegmentBoundary: true,ignoreTextStreamFailures: true, rebufferingGoal: 1,bufferingGoal: 3,bufferBehind: 5, autoLowLatencyMode: true, lowLatencyMode: true, jumpLargeGaps: true, inaccurateManifestTolerance: 0.3, stallEnabled: false},manifest: {dash: {ignoreMinBufferTime: true, autoCorrectDrift: true}}});r.configure({
                controlPanelElements: ["play_pause", "mute", "volume", "spacer", "time_and_duration", "quality", "picture_in_picture", "fullscreen", "overflow_menu"],
                volumeBarColors: { base: 'rgba(235, 235, 235, 1)', level: 'rgb(255, 255, 255)' },
                seekBarColors: { base: 'rgb(199, 199, 199)', buffered: 'rgb(255, 255, 255)', played: 'rgba(255, 255, 255, 1)' }
            });

            window.player = o;
            window.ui = r;

            o.addEventListener("error", onPlayerErrorEvent);
            n.addEventListener("error", onUIErrorEvent);

            // Load the video as quickly as possible
            try {
                await o.load("https://a201aivottlinear-a.akamaihd.net/OTTB/lhr-nitro/clients/dash/enc/f60kqesunw/out/v1/a435ed7a00f947deb4369b46d8f2fb70/cenc.mpd");
                console.log("The video has now been loaded instantly!");
            } catch (a) {
                onPlayerError(a);
            }
        }

        function onPlayerErrorEvent(e) {
            onPlayerError(e.detail);
        }

        function onPlayerError(e) {
            console.error("Error code", e.code, "object", e);
        }

        function onUIErrorEvent(e) {
            onPlayerError(e.detail);
        }

        function initFailed(e) {
            console.error("Unable to load the UI library!");
        }

        document.addEventListener("shaka-ui-loaded", init);
        document.addEventListener("shaka-ui-load-failed", initFailed);
    </script>


<script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool'></script>
</body>

              </html>
