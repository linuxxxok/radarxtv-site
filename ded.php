<!DOCTYPE html><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASH Player</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/shaka-player/4.4.2/shaka-player.compiled.min.js"></script>
</head>
<body>
    <video id="video" width="640" height="360" controls autoplay></video>
    <script>
        async function initPlayer() {
            const video = document.getElementById('video');
            const player = new shaka.Player(video);player.configure({
            drm: {
                clearKeys: {
                    '19896467d408dc81a34ddefd80410a59': 'dd813fa1b9791bbeb62e2bc04d6c3a8c'
                }
            }
        });

        try {
            await player.load('https://aba72ykaaaaaaaamfeij3yx4iyey4.fdb30eb8a5974deea1252630f787072b.emt.cf.ww.aiv-cdn.net/pdx-nitro/live/clients/dash/enc/fk4shupy6g/out/v1/d19f6bba494a484b4073cd60c04a038/cenc.mpd');
            console.log('Video loaded successfully!');
        } catch (e) {
            console.error('Error loading video', e);
        }
    }
    
    document.addEventListener('DOMContentLoaded', initPlayer);
</script>

</body>
</html>