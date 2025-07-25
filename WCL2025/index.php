<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RadarxTV | WCL Live Stream</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <style>
    :root {
      --primary-orange: #ff6b35;
      --secondary-gold: #ffd23f;
      --tertiary-orange: #f7931e;
      --dark-bg: #0a0a0a;
      --dark-secondary: #141414;
      --glass-bg: rgba(20, 20, 20, 0.25);
      --glass-border: rgba(255, 255, 255, 0.08);
      --neon-glow: 0 0 20px rgba(255, 107, 53, 0.4);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      overflow-x: hidden;
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
      background: var(--dark-bg);
      color: #ffffff;
      position: relative;
      min-height: 100vh;
    }

    /* Advanced Starfield Background */
    .starfield {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -10;
      background: radial-gradient(ellipse at center, #1a1a2e 0%, #16213e 40%, #0a0a0a 100%);
    }

    .star {
      position: absolute;
      width: 1px;
      height: 1px;
      background: #ffffff;
      border-radius: 50%;
      animation: twinkle 3s infinite ease-in-out;
    }

    @keyframes twinkle {
      0%, 100% { opacity: 0.3; transform: scale(1); }
      50% { opacity: 1; transform: scale(1.2); }
    }

    /* Nebula Background with Parallax */
    .nebula-layer {
      position: fixed;
      top: -10%;
      left: -10%;
      width: 120%;
      height: 120%;
      z-index: -9;
      opacity: 0.15;
      background: radial-gradient(circle at 20% 80%, #ff6b35 0%, transparent 50%),
                  radial-gradient(circle at 80% 20%, #ffd23f 0%, transparent 50%),
                  radial-gradient(circle at 40% 40%, #f7931e 0%, transparent 50%);
      filter: blur(60px);
      animation: nebulaFloat 30s infinite ease-in-out;
    }

    @keyframes nebulaFloat {
      0%, 100% { transform: translate(0, 0) rotate(0deg) scale(1); }
      25% { transform: translate(-20px, -10px) rotate(1deg) scale(1.05); }
      50% { transform: translate(10px, -20px) rotate(-1deg) scale(0.95); }
      75% { transform: translate(-10px, 10px) rotate(0.5deg) scale(1.02); }
    }

    /* Enhanced Particle System */
    .particle-system {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -8;
      overflow: hidden;
    }

    .energy-particle {
      position: absolute;
      width: 2px;
      height: 2px;
      background: var(--primary-orange);
      border-radius: 50%;
      box-shadow: 0 0 10px var(--primary-orange), 0 0 20px var(--primary-orange);
      opacity: 0;
    }

    /* Floating Geometric Elements */
    .geometric-bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -7;
      overflow: hidden;
    }

    .geo-element {
      position: absolute;
      border: 1px solid rgba(255, 107, 53, 0.1);
      background: rgba(255, 107, 53, 0.02);
      animation: geoFloat 20s infinite linear;
    }

    @keyframes geoFloat {
      0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
      10% { opacity: 0.3; }
      90% { opacity: 0.3; }
      100% { transform: translateY(-20vh) rotate(360deg); opacity: 0; }
    }

    /* Glassmorphic Header */
    .header {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      background: rgba(10, 10, 10, 0.7);
      backdrop-filter: blur(25px) saturate(1.8);
      border-bottom: 1px solid var(--glass-border);
      padding: 1.5rem 0;
      box-shadow: 0 8px 40px rgba(0, 0, 0, 0.3);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .header.scrolled {
      background: rgba(10, 10, 10, 0.9);
      backdrop-filter: blur(30px) saturate(2);
      padding: 1rem 0;
    }

    .header-content {
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo-container {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .logo-icon {
      width: 50px;
      height: 50px;
      background: linear-gradient(135deg, var(--primary-orange), var(--secondary-gold));
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: var(--neon-glow);
      position: relative;
      overflow: hidden;
    }

    .logo-icon::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 60%;
      height: 60%;
      background: rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      transform: translate(-50%, -50%);
      animation: logoGlow 2s ease-in-out infinite alternate;
    }

    @keyframes logoGlow {
      0% { opacity: 0.3; transform: translate(-50%, -50%) scale(1); }
      100% { opacity: 0.7; transform: translate(-50%, -50%) scale(1.1); }
    }

    .logo-text {
      font-family: 'Orbitron', monospace;
      font-size: 2.2rem;
      font-weight: 800;
      background: linear-gradient(135deg, var(--primary-orange) 0%, var(--secondary-gold) 50%, var(--primary-orange) 100%);
      background-size: 300% 300%;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      animation: logoShimmer 4s ease-in-out infinite;
      filter: drop-shadow(0 0 20px rgba(255, 107, 53, 0.3));
      letter-spacing: -0.5px;
    }

    @keyframes logoShimmer {
      0%, 100% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
    }

    .live-indicator {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      background: rgba(255, 107, 53, 0.1);
      border: 1px solid rgba(255, 107, 53, 0.3);
      border-radius: 25px;
      padding: 0.5rem 1rem;
      backdrop-filter: blur(10px);
    }

    .live-dot {
      width: 8px;
      height: 8px;
      background: #ff4757;
      border-radius: 50%;
      animation: livePulse 1.5s ease-in-out infinite;
    }

    @keyframes livePulse {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.5; transform: scale(1.2); }
    }

    .live-text {
      font-family: 'Orbitron', monospace;
      font-size: 0.9rem;
      font-weight: 600;
      color: #ff4757;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    /* Main Content Area */
    .main-container {
      padding-top: 120px;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    /* Enhanced Stream Card */
    .stream-card {
      width: 100%;
      max-width: 1200px;
      position: relative;
      background: var(--glass-bg);
      backdrop-filter: blur(25px) saturate(1.8);
      border-radius: 30px;
      overflow: hidden;
      box-shadow: 
        0 40px 120px rgba(0, 0, 0, 0.6),
        0 20px 60px rgba(0, 0, 0, 0.4),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
      border: 1px solid var(--glass-border);
      transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
      opacity: 0;
      transform: translateY(50px) scale(0.95);
      margin: 0 2rem;
    }

    .stream-card:hover {
      transform: translateY(-10px) scale(1);
      box-shadow: 
        0 60px 160px rgba(0, 0, 0, 0.7),
        0 30px 80px rgba(0, 0, 0, 0.5),
        inset 0 1px 0 rgba(255, 255, 255, 0.15),
        0 0 80px rgba(255, 107, 53, 0.2);
    }

    .stream-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(90deg, var(--primary-orange), var(--secondary-gold), var(--primary-orange));
      background-size: 200% 100%;
      animation: borderGlow 3s ease-in-out infinite;
    }

    @keyframes borderGlow {
      0%, 100% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
    }

    /* Iframe Container */
    .iframe-container {
      position: relative;
      width: 100%;
      height: 80vh;
      background: #000;
      border-radius: 30px;
      overflow: hidden;
      border: 2px solid rgba(255, 107, 53, 0.1);
    }

    .stream-iframe {
      width: 100%;
      height: 100%;
      border: none;
      background: #000;
      transition: opacity 0.8s ease;
    }

    /* Advanced Loading Animation */
    .loading-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: radial-gradient(ellipse at center, rgba(20, 20, 20, 0.95) 0%, rgba(10, 10, 10, 0.98) 100%);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      z-index: 20;
      transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .loading-overlay.hidden {
      opacity: 0;
      visibility: hidden;
      transform: scale(0.9);
    }

    /* Multi-layer Spinner System */
    .spinner-system {
      position: relative;
      width: 120px;
      height: 120px;
      margin-bottom: 3rem;
    }

    .spinner-ring {
      position: absolute;
      border-radius: 50%;
      border: 2px solid transparent;
    }

    .spinner-ring:nth-child(1) {
      width: 120px;
      height: 120px;
      border-top: 2px solid var(--primary-orange);
      border-right: 2px solid var(--secondary-gold);
      animation: spin 3s linear infinite;
    }

    .spinner-ring:nth-child(2) {
      width: 90px;
      height: 90px;
      top: 15px;
      left: 15px;
      border-left: 2px solid var(--secondary-gold);
      border-bottom: 2px solid var(--tertiary-orange);
      animation: spin 2s linear infinite reverse;
    }

    .spinner-ring:nth-child(3) {
      width: 60px;
      height: 60px;
      top: 30px;
      left: 30px;
      border-top: 2px solid var(--tertiary-orange);
      border-right: 2px solid var(--primary-orange);
      animation: spin 1.5s linear infinite;
    }

    .spinner-core {
      position: absolute;
      width: 30px;
      height: 30px;
      top: 45px;
      left: 45px;
      background: linear-gradient(135deg, var(--primary-orange), var(--secondary-gold));
      border-radius: 50%;
      box-shadow: 0 0 30px var(--primary-orange);
      animation: coreGlow 2s ease-in-out infinite alternate;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    @keyframes coreGlow {
      0% { box-shadow: 0 0 30px var(--primary-orange); }
      100% { box-shadow: 0 0 50px var(--primary-orange), 0 0 70px var(--secondary-gold); }
    }

    .loading-content {
      text-align: center;
    }

    .loading-title {
      font-family: 'Orbitron', monospace;
      font-size: 1.8rem;
      font-weight: 700;
      background: linear-gradient(135deg, var(--primary-orange), var(--secondary-gold));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 1rem;
      animation: textPulse 3s ease-in-out infinite;
    }

    .loading-subtitle {
      font-size: 1rem;
      color: rgba(255, 255, 255, 0.7);
      margin-bottom: 0.5rem;
      font-weight: 500;
    }

    .loading-progress {
      width: 300px;
      height: 4px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 2px;
      overflow: hidden;
      margin: 1.5rem auto;
    }

    .loading-bar {
      height: 100%;
      background: linear-gradient(90deg, var(--primary-orange), var(--secondary-gold));
      border-radius: 2px;
      animation: loadingProgress 3s ease-in-out infinite;
    }

    @keyframes loadingProgress {
      0% { width: 0%; }
      50% { width: 70%; }
      100% { width: 100%; }
    }

    @keyframes textPulse {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.7; }
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
      .stream-card {
        max-width: 95%;
      }
    }

    @media (max-width: 768px) {
      .header {
        padding: 1rem 0;
      }

      .header-content {
        padding: 0 1rem;
      }

      .logo-text {
        font-size: 1.8rem;
      }

      .main-container {
        padding-top: 100px;
      }

      .stream-card {
        margin: 0 1rem;
        border-radius: 20px;
      }

      .iframe-container {
        height: 60vh;
        border-radius: 20px;
      }

      .spinner-system {
        width: 80px;
        height: 80px;
      }

      .spinner-ring:nth-child(1) {
        width: 80px;
        height: 80px;
      }

      .spinner-ring:nth-child(2) {
        width: 60px;
        height: 60px;
        top: 10px;
        left: 10px;
      }

      .spinner-ring:nth-child(3) {
        width: 40px;
        height: 40px;
        top: 20px;
        left: 20px;
      }

      .spinner-core {
        width: 20px;
        height: 20px;
        top: 30px;
        left: 30px;
      }

      .loading-progress {
        width: 200px;
      }
    }

    @media (max-width: 480px) {
      .logo-text {
        font-size: 1.6rem;
      }

      .loading-title {
        font-size: 1.4rem;
      }

      .loading-subtitle {
        font-size: 0.9rem;
      }
    }

    /* Performance Optimizations */
    .particle-system,
    .geometric-bg,
    .nebula-layer {
      will-change: transform;
    }

    .stream-card {
      will-change: transform, opacity;
    }

    /* Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 6px;
    }

    ::-webkit-scrollbar-track {
      background: rgba(255, 255, 255, 0.05);
    }

    ::-webkit-scrollbar-thumb {
      background: linear-gradient(180deg, var(--primary-orange), var(--secondary-gold));
      border-radius: 3px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: linear-gradient(180deg, var(--secondary-gold), var(--primary-orange));
    }
  </style>
</head>
<body>
  <!-- Advanced Background Layers -->
  <div class="starfield" id="starfield"></div>
  <div class="nebula-layer"></div>
  <div class="particle-system" id="particleSystem"></div>
  <div class="geometric-bg" id="geometricBg"></div>

  <!-- Glassmorphic Header -->
  <header class="header" id="header">
    <div class="header-content">
      <div class="logo-container">
        <div class="logo-icon"></div>
        <h1 class="logo-text">RadarxTV | Live</h1>
      </div>
      <div class="live-indicator">
        <div class="live-dot"></div>
        <span class="live-text">Live</span>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <main class="main-container">
    <!-- Enhanced Stream Card -->
    <div class="stream-card" id="streamCard">
      <div class="iframe-container">
        <!-- Advanced Loading Animation -->
        <div class="loading-overlay" id="loadingOverlay">
          <div class="spinner-system">
            <div class="spinner-ring"></div>
            <div class="spinner-ring"></div>
            <div class="spinner-ring"></div>
            <div class="spinner-core"></div>
          </div>
          <div class="loading-content">
            <div class="loading-title">Connecting to Live Stream</div>
            <div class="loading-subtitle">Initializing high-quality cricket broadcast...</div>
            <div class="loading-progress">
              <div class="loading-bar"></div>
            </div>
          </div>
        </div>
        
        <!-- Stream Iframe -->
        <iframe 
          class="stream-iframe" 
          src="https://radarxtv.site/WCL" 
          allowfullscreen
          id="streamIframe"
          onload="hideLoading()"
        ></iframe>
      </div>
    </div>
  </main>

  <script>
    // GSAP Initialization
    gsap.registerPlugin(ScrollTrigger);

    // Initialize background elements
    function initStarfield() {
      const starfield = document.getElementById('starfield');
      const numStars = 200;
      
      for (let i = 0; i < numStars; i++) {
        const star = document.createElement('div');
        star.className = 'star';
        star.style.left = Math.random() * 100 + '%';
        star.style.top = Math.random() * 100 + '%';
        star.style.animationDelay = Math.random() * 3 + 's';
        star.style.opacity = Math.random() * 0.8 + 0.2;
        starfield.appendChild(star);
      }
    }

    // Create energy particles
    function createEnergyParticle() {
      const particleSystem = document.getElementById('particleSystem');
      const particle = document.createElement('div');
      particle.className = 'energy-particle';
      
      const startX = Math.random() * window.innerWidth;
      const startY = window.innerHeight + 20;
      const endX = startX + (Math.random() - 0.5) * 200;
      const endY = -20;
      
      particle.style.left = startX + 'px';
      particle.style.top = startY + 'px';
      
      particleSystem.appendChild(particle);
      
      gsap.to(particle, {
        x: endX - startX,
        y: endY - startY,
        opacity: 1,
        duration: Math.random() * 3 + 2,
        ease: "none",
        onComplete: () => {
          if (particle.parentNode) {
            particle.parentNode.removeChild(particle);
          }
        }
      });
      
      gsap.to(particle, {
        opacity: 0,
        duration: 0.5,
        delay: Math.random() * 2 + 1.5
      });
    }

    // Create geometric elements
    function createGeometricElement() {
      const geometricBg = document.getElementById('geometricBg');
      const element = document.createElement('div');
      element.className = 'geo-element';
      
      const shapes = ['square', 'triangle', 'hexagon'];
      const shape = shapes[Math.floor(Math.random() * shapes.length)];
      
      const size = Math.random() * 60 + 20;
      element.style.width = size + 'px';
      element.style.height = size + 'px';
      element.style.left = Math.random() * 100 + '%';
      element.style.animationDuration = (Math.random() * 10 + 15) + 's';
      element.style.animationDelay = Math.random() * 5 + 's';
      
      if (shape === 'triangle') {
        element.style.clipPath = 'polygon(50% 0%, 0% 100%, 100% 100%)';
      } else if (shape === 'hexagon') {
        element.style.clipPath = 'polygon(30% 0%, 70% 0%, 100% 50%, 70% 100%, 30% 100%, 0% 50%)';
      }
      
      geometricBg.appendChild(element);
      
      setTimeout(() => {
        if (element.parentNode) {
          element.parentNode.removeChild(element);
        }
      }, 20000);
    }

    // GSAP Animations
    function initAnimations() {
      // Header scroll effect
      ScrollTrigger.create({
        trigger: "body",
        start: "top -100",
        onUpdate: self => {
          if (self.direction === 1) {
            document.getElementById('header').classList.add('scrolled');
          } else {
            document.getElementById('header').classList.remove('scrolled');
          }
        }
      });

      // Entrance animation for stream card
      gsap.to("#streamCard", {
        opacity: 1,
        y: 0,
        scale: 1,
        duration: 1.2,
        ease: "power3.out",
        delay: 0.5
      });

      // Parallax effects
      gsap.to(".nebula-layer", {
        y: "20%",
        ease: "none",
        scrollTrigger: {
          trigger: "body",
          start: "top bottom",
          end: "bottom top",
          scrub: true
        }
      });
    }

// Loading animation
    function hideLoading() {
      gsap.to("#loadingOverlay", {
        opacity: 0,
        scale: 0.9,
        duration: 0.8,
        ease: "power3.inOut",
        onComplete: () => {
          document.getElementById('loadingOverlay').classList.add('hidden');
        }
      });
    }

    // Fallback loading hide
    setTimeout(hideLoading, 15000);

    // Particle creation intervals
    setInterval(createEnergyParticle, 800);
    setInterval(createGeometricElement, 3000);

    // Initialize everything
    document.addEventListener('DOMContentLoaded', () => {
      initStarfield();
      initAnimations();
      
      // Create initial burst of particles
      for (let i = 0; i < 10; i++) {
        setTimeout(createEnergyParticle, i * 200);
      }
      
      // Create initial geometric elements
      for (let i = 0; i < 5; i++) {
        setTimeout(createGeometricElement, i * 1000);
      }
    });

    // Prevent context menu on iframe
    document.getElementById('streamIframe').addEventListener('contextmenu', function(e) {
      e.preventDefault();
    });

    // Performance optimizations
    let ticking = false;
    function updateAnimations() {
      ticking = false;
    }

    window.addEventListener('scroll', () => {
      if (!ticking) {
        requestAnimationFrame(updateAnimations);
        ticking = true;
      }
    });
  </script>
</body>
</html>
     