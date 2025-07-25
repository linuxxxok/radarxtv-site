<!DOCTYPE html>
<?php include 'banner.php'; ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RADARxTV - Watch Live Cricket</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="manifest" href="/manifest.json">
  <script src="tracker.js"></script>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #0c0c1d url('li.gif') no-repeat center center fixed;
      background-size: cover;
      color: #e0e0f0;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }
    header {
      text-align: center;
      padding: 30px 20px;
      background: linear-gradient(135deg, #ff416c, #ff4b2b);
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
      margin-bottom: 25px;
      width: 70%;
      max-width: 800px;
    }
    header h1 {
      font-size: 2.7rem;
      font-weight: bold;
      color: #ffffff;
      margin: 0;
      text-transform: uppercase;
      text-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
    }
    .ip-address {
      font-size: 1rem;
      margin-top: 8px;
      color: #ffe4e1;
      font-weight: 500;
    }
    .box-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 25px;
      margin: 15px auto;
      padding: 0 15px;
    }
    .box {
      text-decoration: none;
      width: 270px;
      border-radius: 16px;
      overflow: hidden;
      background: linear-gradient(145deg, #2c2c4d, #3a3a5c);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.6);
      transition: all 0.4s ease;
      cursor: pointer;
      text-align: center;
    }
    .box:hover {
      transform: scale(1.05);
      box-shadow: 0 20px 45px rgba(255, 105, 97, 0.4);
    }
    .box img {
      width: 100%;
      height: auto;
      border-radius: 16px 16px 0 0;
    }
    .title {
      background: linear-gradient(90deg, #ff4b2b, #ff416c);
      font-size: 1.3rem;
      font-weight: bold;
      color: white;
      padding: 12px;
      border-radius: 0 0 16px 16px;
    }
    footer {
      text-align: center;
      margin-top: 40px;
      padding: 15px;
      background: rgba(0, 0, 0, 0.6);
      color: #bbb;
    }
    .fact-box {
      background: linear-gradient(135deg, #6e40c9, #4b4b4b, #3563d1);
      background-size: 400% 400%;
      animation: rgbFlow 15s ease infinite;
      padding: 20px 25px;
      border-radius: 14px;
      margin: 25px auto;
      text-align: center;
      width: 70%;
      max-width: 700px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.65);
      border: 1px solid rgba(255, 255, 255, 0.05);
    }
    @keyframes rgbFlow {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    .fact-box h2 {
      font-family: 'Orbitron', sans-serif;
      font-size: 1.5rem;
      color: #ffd580;
      margin-bottom: 10px;
      text-transform: uppercase;
      text-shadow: 0 0 8px rgba(255, 255, 255, 0.15);
      font-weight: 700;
    }
    .fact-box p {
      font-size: 1.1rem;
      color: #ffffff;
      font-weight: 600;
      line-height: 1.5;
      letter-spacing: 0.3px;
      text-shadow: 0 0 3px rgba(0, 0, 0, 0.4);
    }
  </style>
</head>
<body>

<header>
  <h1>RadarXTV</h1>
  <div class="ip-address">Your IP: <span id="userIP">Loading...</span></div>
</header>

<div class="fact-box">
  <h2>Amazing Fact</h2>
  <p id="randomFact"><em>Loading fact...</em></p>
</div>

<div class="box-container">
  <a href="lo.html" class="box">
    <img src="don/qyar.jpg" alt="Live Streams">
    <div class="title">Live Streams</div>
  </a>
  <a href="about" class="box">
    <img src="don/qyak.jpg" alt="About Radar">
    <div class="title">About Radar</div>
  </a>
  <a href="stipl/news.php" class="box">
    <img src="don/chut.jpg" alt="News">
    <div class="title">Latest News</div>
  </a>
</div>

<script>
  const facts = [
    "Shahid Afridi scored a 37-ball century using Sachin Tendulkar's bat!",
    "Muttiah Muralitharan took more wickets (1,347) than matches he played (495).",
    "AB de Villiers scored the fastest ODI century in just 31 balls.",
    "MS Dhoni has never scored an ODI century outside Asia.",
    "Chris Gayle is the only batsman to hit a six off the first ball of a Test match.",
    "Yuvraj Singh hit 6 sixes in an over off Stuart Broad in T20 World Cup 2007.",
    "Ishant Sharma holds the record for most runs conceded in a single over in Test cricket (31).",
    "Lasith Malinga is the only bowler to take 4 wickets in 4 consecutive balls in ODIs and T20Is.",
    "Alec Stewart was born on 8-4-63 and scored exactly 8463 Test runs.",
    "Bapu Nadkarni bowled 21 consecutive maiden overs in a Test match!"
  ];

  async function getUserIP() {
    try {
      const controller = new AbortController();
      const timeoutId = setTimeout(() => controller.abort(), 5000);

      const response = await fetch('https://checkip.amazonaws.com', { signal: controller.signal });
      const ip = await response.text();
      document.getElementById('userIP').textContent = ip.trim();
    } catch (error) {
      document.getElementById('userIP').textContent = "Unavailable";
    }
  }

  document.addEventListener('DOMContentLoaded', () => {
    getUserIP();
    const randomFact = facts[Math.floor(Math.random() * facts.length)];
    document.getElementById("randomFact").textContent = randomFact;
  });

  // 📦 Add to Home Screen logic
  let deferredPrompt;
  const installBtn = document.createElement('button');
  installBtn.id = 'installBtn';
  installBtn.innerText = '📲 Install RadarXTV';
  installBtn.style.cssText = 'position: fixed; bottom: 20px; right: 20px; padding: 10px 20px; background: #ff416c; color: white; border: none; border-radius: 8px; cursor: pointer; display: none;';
  document.body.appendChild(installBtn);

  window.addEventListener('beforeinstallprompt', (e) => {
    e.preventDefault();
    deferredPrompt = e;
    installBtn.style.display = 'block';
  });

  installBtn.addEventListener('click', () => {
    installBtn.style.display = 'none';
    deferredPrompt.prompt();
    deferredPrompt.userChoice.then((choice) => {
      if (choice.outcome === 'accepted') {
        console.log('✅ User accepted install prompt');
      } else {
        console.log('❌ User dismissed install prompt');
      }
      deferredPrompt = null;
    });
  });

  // 🛠️ Register Service Worker
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/service-worker.js')
      .then(() => console.log('✅ Service Worker Registered'))
      .catch(err => console.error('❌ Service Worker Error:', err));
  }
</script>
</body>
</html