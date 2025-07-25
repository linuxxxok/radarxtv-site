<!DOCTYPE html>
<?php include 'banner.php'; ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RADARxTV - Watch Live Cricket</title>

  <!-- Futuristic Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- GSAP for Animations -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <!-- Manifest (optional/PWA) -->
  <link rel="manifest" href="/manifest.json">

  <style>
    /* ========= BASICS ========== */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      font-family: 'Poppins', 'Inter', sans-serif;
      background: #0f1021;
      color: #f9fafc;
    }
    *, *::before, *::after { box-sizing: border-box; }
    html { scroll-behavior: smooth; }

    /* ====== BACKGROUND SVG ====== */
    .parallax-bg {
      position: fixed;
      top: 0; left: 0; width: 100vw; height: 100vh;
      z-index: -1;
      pointer-events: none;
      background: linear-gradient(135deg, #22105f 0%, #164abf 50%, #181a2d 100%);
      overflow: hidden;
    }
    .parallax-bg svg {
      position: absolute;
      width: 115vw;
      height: 140vh;
      top: -15vh;
      left: -8vw;
      opacity: 0.21;
      filter: blur(0.5px) brightness(0.85);
      animation: movebg 45s linear infinite alternate;
    }
    @keyframes movebg {
      0%  { transform: translateY(0);}
      100%{ transform: translateY(-70px);}
    }

    /* ====== HERO SECTION ====== */
    header {
      text-align: center;
      padding: 42px 20px 0 20px;
    }
    .hero-content {
      padding-top: 30px;
      max-width: 680px;
      margin: 0 auto;
    }
    .hero-content h1 {
      font-size: 2.7rem;
      font-weight: 800;
      letter-spacing: -1px;
      line-height: 1.1;
      color: transparent;
      background: linear-gradient(90deg,#00d9ff,#b16cff,#e95388,#ca21de);
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 18px;
      text-shadow: 0 2px 28px #0106223d;
    }
    .hero-content h1 span {
      color: #ff38a1;
      font-family: 'Inter', 'Poppins', sans-serif;
    }
    .hero-content p {
      font-size: 1.2rem;
      color: #c2bbeb;
      margin-bottom: 2.1rem;
      font-weight: 400;
      line-height: 1.6;
    }
    .cta-btn {
      display: inline-block;
      font-size: 1.2rem;
      font-weight: 700;
      padding: 13px 32px;
      border-radius: 50px;
      background: linear-gradient(90deg,#ff38a1 30%,#125bff 100%);
      color: #fff;
      box-shadow: 0 2px 18px #ea3fe244;
      border: none;
      outline: none;
      text-decoration: none;
      transition: transform 0.14s, box-shadow 0.16s;
      cursor: pointer;
      letter-spacing: 0.06em;
      position: relative;
      overflow: hidden;
    }
    .cta-btn:hover, .cta-btn:focus {
      transform: scale(1.06);
      box-shadow: 0 6px 32px #2c3057aa;
    }
    .ip-address {
      font-size: 1.05rem;
      margin-top:15px;
      color: #ffe4e1;
      font-weight: 500;
      letter-spacing: 0.02em;
    }

    /* ====== FEATURE CARDS - IMAGES, LINKS, HOVERS ====== */
    .box-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 26px;
      margin: 45px auto 30px;
      padding: 0 16px;
      max-width: 1040px;
    }
    .box {
      text-decoration: none;
      width: 270px; min-height: 320px;
      border-radius: 17px;
      overflow: hidden;
      background: linear-gradient(145deg, #221a34 80%, #3a3346 100%);
      box-shadow: 0 10px 24px rgba(0,0,0,0.61);
      transition: transform 0.35s cubic-bezier(.11,.95,.47,1.13), box-shadow 0.30s;
      cursor: pointer;
      text-align: center;
      border: 1px solid rgba(255,255,255,0.10);
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: stretch;
    }
    .box:hover {
      transform: translateY(-10px) scale(1.045);
      box-shadow: 0 18px 46px rgba(84,39,255,0.21), 0 1.9px 13px #2a133e13;
      border-color: #00e0ff74;
    }
    .box img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 17px 17px 0 0;
      background: #4e46ae11;
    }
    .title {
      background: linear-gradient(90deg, #ff4b2b 40%, #00e7ff 100%);
      font-size: 1.23rem;
      font-weight: bold;
      color: white;
      padding: 14px 0;
      border-radius: 0 0 17px 17px;
      letter-spacing: 0.035em;
      margin-top: auto;
    }
    .box .desc {
      color: #d7d3ee; background: #36257a33;
      font-size: 1.03rem; padding: 17px 15px 6px;
      font-family: 'Inter', sans-serif;
      min-height: 65px;
    }

    /* ====== FOOTER ======= */
    footer {
      padding: 17px 0;
      text-align: center;
      background: #181930;
      color: #a99bd3;
      font-size: 0.98rem;
      border-top: 1px solid #25105246;
      letter-spacing: 0.03em;
      margin-top: 22px;
    }

    /* ====== RESPONSIVE ====== */
    @media (max-width: 800px) {
      .hero-content h1 { font-size: 2rem;}
      .hero-content { padding-top: 16px;}
      .box-container {gap:19px;}
      .box {width: 90vw; max-width: 340px;}
    }
    @media (max-width: 570px) {
      header {padding-top: 16px;}
      .hero-content h1 { font-size: 1.07rem;}
      .cta-btn {font-size:1rem; padding:10px 17px;}
      .box img {height: 135px;}
      .title {font-size:1rem;}
    }
  </style>
</head>
<body>

  <!-- Background SVG Parallax Layer -->
  <div class="parallax-bg">
    <svg viewBox="0 0 1440 630" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill="#6e40c9" fill-opacity="0.56" d="M0,420 Q600,580 1440,120 L1440,630 L0,630 Z" />
      <path fill="#00b4ff" fill-opacity="0.41" d="M0,120 Q840,480 1440,40 L1440,630 L0,630 Z" />
      <path fill="#ff38a1" fill-opacity="0.15" d="M0,320 Q700,450 1440,80 L1440,630 L0,630 Z" />
    </svg>
  </div>
  
  <!-- HEADER + HERO SECTION -->
  <header>
    <div class="hero-content">
      <h1>Welcome to <span>RADARxTV</span></h1>
      <p>Your Gateway to <b>Live Cricket</b>, Latest News & More – All in Futuristic Style</p>
      <a href="#cards" class="cta-btn">🚀 Explore Features</a>
      <div class="ip-address">
        Your IP: <span id="userIP">Loading...</span>
      </div>
    </div>
  </header>

  <!-- Feature Cards Section with Images and Working Links -->
  <div class="box-container" id="cards">
    <a href="lo.html" class="box">
      <!-- Use your own images here -->
      <img src="don/qyar.jpg" alt="Live Streams">
      <div class="desc">Watch matches live, in Full HD with instant access and zero buffer. Experience cricket like never before!</div>
      <div class="title"><i class="fas fa-tower-broadcast"></i> Live Streams</div>
    </a>
    <a href="about" class="box">
      <img src="don/qyak.jpg" alt="About Radar">
      <div class="desc">Know more about RadarXTV, our mission, team and how we bring excitement to cricket fans worldwide.</div>
      <div class="title"><i class="fas fa-users"></i> About Radar</div>
    </a>
    <a href="stipl/news.php" class="box">
      <img src="don/chut.jpg" alt="News">
      <div class="desc">Stay updated with breaking sports news, analysis and cricket insights anytime, anywhere.</div>
      <div class="title"><i class="fa fa-newspaper"></i> Latest News</div>
    </a>
  </div>

  <!-- FOOTER -->
  <footer>
    &copy; 2025 RadarXTV. All rights reserved.
  </footer>

  <!-- Scripts: GSAP + IP fetch + (optional facts) -->
  <script>
    // Restore your working IP address display
    async function getUserIP() {
      try {
        const controller = new AbortController();
        setTimeout(() => controller.abort(), 5000);
        const response = await fetch('https://checkip.amazonaws.com', { signal: controller.signal });
        const ip = await response.text();
        document.getElementById('userIP').textContent = ip.trim();
      } catch (error) {
        document.getElementById('userIP').textContent = "Unavailable";
      }
    }

    // GSAP Animations on load and scroll
    document.addEventListener('DOMContentLoaded', () => {
      getUserIP();
      // Hero section entrance
      gsap.from(".hero-content h1", { y: -40, opacity: 0, duration: 0.9, ease: "power3.out" });
      gsap.from(".hero-content p", { y: 32, opacity: 0, duration: 0.73, delay: 0.33, ease: "power2.out" });
      gsap.from(".cta-btn", { scale: 0.84, opacity: 0, duration: 0.68, delay: 0.7, ease: "back.out(1.65)" });
      // Feature cards entrance
      gsap.from(".box", {
        scrollTrigger: {
          trigger: ".box-container",
          start: "top 92%",
        },
        opacity: 0, y: 40,
        stagger: .18,
        duration: .8,
        ease: "power2.out"
      });
    });

    // If you want to add your previous fact box, use similar code here

    // Service worker/PWA registration as needed
    // if ('serviceWorker' in navigator) {
    //   navigator.serviceWorker.register('/service-worker.js')
    //   .then(() => console.log('✅ Service Worker Registered'))
    //   .catch(err => console.error('❌ Service Worker Error:', err));
    // }
  </script>
</body>
</html>
