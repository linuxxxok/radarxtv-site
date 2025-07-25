<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>RadarX Filtered</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    html, body {
      margin: 0;
      background: #000;
      height: 100%;
      width: 100%;
    }
    #player {
      height: 100vh;
      width: 100vw;
    }
    .quality-selector-menu {
      z-index: 99999 !important;
    }
  </style>
</head>
<body>
<div id="player"></div>

<script src="https://cdn.jsdelivr.net/npm/@clappr/player@latest/dist/clappr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@clappr/hlsjs-playback@latest/dist/hlsjs-playback.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/ewwink/clappr-quality-selector-plugin@latest/quality-selector.min.js"></script>

<script>
const player = new Clappr.Player({
  parentId: "#player",
  source: "https://dtvxtream.com/sonyliv2/300256.m3u8",
  width: "100%",
  height: "100%",
  autoPlay: true,
  mute: true,
  plugins: [HlsjsPlayback, QualitySelector],
  playback: { hlsUseNextLevel: true },
  qualitySelectorConfig: {
    title: 'Quality',
    defaultQuality: -1,
    sortLevels: true,
    customFilter: function(levels) {
      const filtered = levels.filter(level => {
        return (
          level.bitrate > 170000 && ( // ignore ultra low
          (level.bitrate >= 500000 && level.bitrate <= 800000) ||  // 480p
          (level.bitrate >= 850000 && level.bitrate <= 1100000) || // 576p
          (level.bitrate >= 2000000)                               // 1080p+
        ));
      });

      // Add the highest bitrate level if not already included
      const top = levels.reduce((a, b) => a.bitrate > b.bitrate ? a : b);
      if (!filtered.includes(top)) filtered.push(top);
      return filtered;
    },
    labelCallback: (level) => {
      if (level.bitrate >= 2000000) return "1080p";
      if (level.bitrate >= 850000) return "576p";
      if (level.bitrate >= 500000) return "480p";
      return `${Math.round(level.bitrate/1000)}Kbps`;
    }
  }
});

player.on(Clappr.Events.PLAYER_FULLSCREEN, () => {
  if (screen.orientation?.lock) screen.orientation.lock('landscape').catch(() => {});
});
</script>
</body>
</html>