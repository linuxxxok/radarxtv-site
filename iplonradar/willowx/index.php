
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="no-referrer">
    <title>Willow HD </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/shaka-player/4.7.6/shaka-player.ui.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/shaka-player/4.7.6/controls.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://livecrichdofficial.pages.dev/livecrichd2.css">  
</head>
<center>

    <body bgcolor=black style=margin:0>
        <div data-shaka-player-container style=position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover>
            <video autoplay muted data-shaka-player id=video poster=https://cdn6.aptoide.com/imgs/f/2/5/f2570ffcbce276a93baf8dd15009347e_fgraphic.jpg style=width:100%;height:100%></video>
</center>
</div>
<script>
const manifestUri = "https://ABGQJFUAAAAAAAAMMPPZTPUHS2NLN.9767781fabe34675bb7ed456de21d316.emt.cf.ww.aiv-cdn.net/pdx-nitro/live/clients/dash/enc/4cd4uajdn0/out/v1/3dd15d1266f84a7ba844c28bc2bc6148/cenc.mpd";

async function init() {
  const video = document.getElementById('video');
  const ui = video['ui'];
  const controls = ui.getControls();
  const player = controls.getPlayer();

  window.player = player;
  window.ui = ui;

  player.configure({
    drm: {
      "clearKeys": {
        "2b4cb381f97a6d1d4919ec32c5527235":"442d3309faf503fa6752490afaf7e4da"
      }
    }
  });

  player.addEventListener('error', onPlayerErrorEvent);
  controls.addEventListener('error', onUIErrorEvent);

  try {
    await player.load(manifestUri);
    console.log('The video has now been loaded!');
  } catch (error) {
    onPlayerError(error);
  }
}

function onPlayerErrorEvent(errorEvent) {
  onPlayerError(errorEvent.detail);
}

function onPlayerError(error) {
  console.error('Error code', error.code, 'object', error);
}

function onUIErrorEvent(errorEvent) {
  onPlayerError(errorEvent.detail);
}

function initFailed(errorEvent) {
  console.error('Unable to load the UI library!');
}

document.addEventListener('shaka-ui-loaded', init);
document.addEventListener('shaka-ui-load-failed', initFailed);

var userConfirmed = confirm("Join For More Links!!");
if (userConfirmed) {
  window.location.href = "https://telegram.me/RadarXTV";
}
</script>

        <style>
    #message {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        z-index: 1001;
    }
  </style>





    </body>

</html>
