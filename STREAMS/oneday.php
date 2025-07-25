
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
<style>
html, body {
  height: 100%;
  width: 100%;
}

body {
  margin: 0;
  padding: 0;
  border: 0;
  overflow: hidden;
}


.player-container {
  width: 100%;
  height: 100%;
}

video {
  object-fit: contain;
}
</style>
<style>
  .overlay {
    position: absolute;
    top: 20px; /* Adjust as needed */
    left: 10px; /* Adjust as needed */
    width: 150px;
    height: 20px;
    z-index: 999; /* Ensure it's above the video */
    pointer-events: none; /* Allows clicks to go through the overlay */
  }
</style>
<div id="player" class="player-container">
  <img class="overlay" src="https://i.postimg.cc/52mpchhz/20231126-222157.png" alt="Overlay">
</div>
<script>
var player = new Clappr.Player({
  // Pin-hole style camera - add ?hi or ?lo to explicitly pick a stream
  //source: 'https://jcu.io/hls/22409771-b422-b681-4fa1-3ea80b70ca1b.m3u8',

  // Tank camera - add ?hi or ?lo to explicitly pick a stream
  source: 'https://tapmadtv.live/master.m3u8/?key=WASITV&c=star1in',
  maxBufferLength: 30,
  autoPlay: true,
  parentId: '#player',
  width: '100%',
  height: '100%',
  mute: true,
  hideVolumeBar: true,
  autoPlayVisible: 'partial',
  watermark: 'https://i.postimg.cc/76wqHKMj/20240417-203941.png',
  position: 'bottom-right',
  watermarkLink: 'https://t.me/wasitvadmin/'
})
</script>
