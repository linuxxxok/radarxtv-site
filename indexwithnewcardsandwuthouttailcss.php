
<!DOCTYPE html>
<?php include 'banner.php'; ?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>RADARxTV - Watch Live Cricket</title>

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&family=Inter:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  <link rel="manifest" href="/manifest.json" />

  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', 'Inter', sans-serif;
      background: #0f1021;
      color: #f9fafc;
      scroll-behavior: smooth;
    }

    *, *::before, *::after {
      box-sizing: border-box;
    }

    /* Background Parallax */
    .parallax-bg {
      position: fixed;
      top: 0;
      left: 0;
      z-index: -1;
      width: 100vw;
      height: 100vh;
      overflow: hidden;
    }

    .parallax-bg svg {
      width: 140vw;
      height: 140vh;
      position: absolute;
      top: -25vh;
      left: -10vw;
      opacity: 0.2;
      filter: blur(1px);
      animation: waveShift 30s ease-in-out infinite alternate;
    }

    @keyframes waveShift {
      0% {
        transform: translateY(0px);
      }
      100% {
        transform: translateY(-80px);
      }
    }

    /* Header & Hero */
    header {
      text-align: center;
      padding: 65px 20px 20px;
    }

    .hero-content {
      padding-top: 20px;
      max-width: 680px;
      margin: 0 auto;
    }

    .hero-content h1 {
      font-size: 2.8rem;
      font-weight: 800;
      background: linear-gradient(90deg, #00d9ff, #b16cff, #e95388, #ca21de);
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 18px;
      text-shadow: 0 2px 28px rgba(0, 0, 0, 0.3);
    }

    .hero-content h1 span {
      color: #ff38a1;
    }

    .hero-content p {
      font-size: 1.2rem;
      color: #c2bbeb;
      margin-bottom: 2rem;
      font-weight: 400;
    }

    .cta-btn {
      display: inline-block;
      font-size: 1.1rem;
      font-weight: 600;
      padding: 12px 28px;
      border-radius: 40px;
      background: linear-gradient(90deg, #ff38a1, #125bff);
      color: #fff;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
      border: none;
      cursor: pointer;
      text-decoration: none;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .cta-btn:hover {
      transform: scale(1.05);
      box-shadow: 0 0 30px rgba(0, 212, 255, 0.2);
    }

    .ip-address {
      font-size: 0.98rem;
      color: #ffaaec;
      margin-top: 1rem;
    }

    /* Modern List Layout - Fixed Visibility */
    .features-section {
      padding: 60px 20px 40px;
      max-width: 900px;
      margin: 40px auto 0;
      opacity: 1;
      visibility: visible;
    }

    .section-title {
      text-align: center;
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 50px;
      background: linear-gradient(90deg, #00d9ff, #b16cff);
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .features-list {
      display: flex;
      flex-direction: column;
      gap: 24px;
      opacity: 1 !important;
      visibility: visible !important;
    }

    /* Glassmorphism List Item - Fixed */
    .feature-item {
      display: flex !important;
      align-items: center;
      padding: 24px;
      border-radius: 20px;
      background: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.12);
      box-shadow: 
        0 8px 32px rgba(0, 0, 0, 0.3),
        0 2px 16px rgba(0, 0, 0, 0.2),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
      text-decoration: none;
      color: inherit;
      transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      position: relative;
      overflow: hidden;
      cursor: pointer;
      opacity: 1 !important;
      transform: translateY(0) !important;
      min-height: 120px;
    }

    /* Glassmorphism overlay effect */
    .feature-item::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, 
        rgba(255, 255, 255, 0.1) 0%, 
        rgba(255, 255, 255, 0.05) 50%, 
        rgba(255, 255, 255, 0.02) 100%);
      pointer-events: none;
      border-radius: 20px;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .feature-item:hover::before {
      opacity: 1;
    }

    /* Hover Effects */
    .feature-item:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 
        0 20px 60px rgba(0, 0, 0, 0.4),
        0 10px 40px rgba(255, 56, 161, 0.15),
        0 5px 20px rgba(0, 180, 255, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.2);
      border-color: rgba(255, 255, 255, 0.2);
    }

    /* Image Section - Fixed */
    .feature-image {
      flex-shrink: 0;
      width: 80px;
      height: 80px;
      border-radius: 16px;
      overflow: hidden;
      margin-right: 24px;
      position: relative;
      background: linear-gradient(45deg, #ff38a1, #00d9ff);
      padding: 2px;
    }

    .feature-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 14px;
      transition: transform 0.3s ease;
      background: #1a1d35; /* Fallback if image fails to load */
    }

    /* Fallback for missing images */
    .feature-image img:not([src]), 
    .feature-image img[src=""],
    .feature-image img[src*="undefined"] {
      background: linear-gradient(45deg, #6e40c9, #00b4ff);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .feature-image img::after {
      content: "🎬";
      font-size: 2rem;
      color: white;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .feature-item:hover .feature-image img {
      transform: scale(1.1);
    }

    /* Content Section - Fixed */
    .feature-content {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 8px;
      min-width: 0; /* Prevents overflow issues */
    }

    .feature-title {
      font-size: 1.3rem;
      font-weight: 700;
      background: linear-gradient(90deg, #6e40c9, #00b4ff);
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin: 0;
      display: flex;
      align-items: center;
      gap: 12px;
      word-break: break-word;
    }

    .feature-title i {
      color: #ff38a1;
      font-size: 1.1rem;
      flex-shrink: 0;
    }

    .feature-description {
      font-size: 1rem;
      color: rgba(255, 255, 255, 0.75);
      line-height: 1.5;
      margin: 0;
      word-break: break-word;
    }

    /* Action Section - Fixed */
    .feature-action {
      flex-shrink: 0;
      margin-left: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 8px;
    }

    .watch-btn {
      padding: 10px 20px;
      border-radius: 25px;
      background: linear-gradient(90deg, #ff38a1, #125bff);
      color: white;
      font-size: 0.9rem;
      font-weight: 600;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      white-space: nowrap;
    }

    .watch-btn:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 25px rgba(255, 56, 161, 0.4);
    }

    .feature-meta {
      font-size: 0.8rem;
      color: rgba(255, 255, 255, 0.5);
      text-align: center;
      white-space: nowrap;
    }

    /* Responsive Design - Fixed */
    @media (max-width: 768px) {
      .features-section {
        padding: 40px 15px 30px;
      }
      
      .feature-item {
        flex-direction: column !important;
        text-align: center;
        padding: 20px;
        gap: 16px;
        min-height: auto;
      }
      
      .feature-image {
        margin: 0 0 16px 0;
        width: 100px;
        height: 100px;
      }
      
      .feature-action {
        margin: 16px 0 0 0;
        flex-direction: row;
        justify-content: center;
      }
      
      .feature-title {
        font-size: 1.2rem;
        justify-content: center;
      }
      
      .hero-content h1 {
        font-size: 2.2rem;
      }
      
      .section-title {
        font-size: 1.8rem;
      }
    }

    @media (max-width: 480px) {
      .feature-item {
        padding: 16px;
        gap: 12px;
      }
      
      .feature-image {
        width: 80px;
        height: 80px;
      }
      
      .features-list {
        gap: 16px;
      }
      
      .feature-title {
        font-size: 1.1rem;
      }
      
      .feature-description {
        font-size: 0.9rem;
      }

      .watch-btn {
        padding: 8px 16px;
        font-size: 0.8rem;
      }
    }

    footer {
      text-align: center;
      font-size: 0.9rem;
      padding: 30px 10px;
      background: rgba(255, 255, 255, 0.03);
      color: #aaa;
      margin-top: 40px;
    }

    /* Animation Keyframes */
    @keyframes ripple {
      to {
        transform: scale(4);
        opacity: 0;
      }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Fallback animation without GSAP */
    .features-list {
      animation: fadeInUp 0.8s ease-out;
    }

    .feature-item:nth-child(1) { animation-delay: 0.1s; }
    .feature-item:nth-child(2) { animation-delay: 0.2s; }
    .feature-item:nth-child(3) { animation-delay: 0.3s; }
    .feature-item:nth-child(4) { animation-delay: 0.4s; }
  </style>
</head>

<body>

  <!-- 🌀 Parallax Background -->
  <div class="parallax-bg">
    <svg viewBox="0 0 1440 630" xmlns="http://www.w3.org/2000/svg">
      <path fill="#6e40c9" fill-opacity="0.5" d="M0,420 Q600,580 1440,120 L1440,630 L0,630 Z"></path>
      <path fill="#00b4ff" fill-opacity="0.3" d="M0,120 Q840,480 1440,40 L1440,630 L0,630 Z"></path>
      <path fill="#ff38a1" fill-opacity="0.15" d="M0,320 Q700,450 1440,80 L1440,630 L0,630 Z"></path>
    </svg>
  </div>

  <!-- ✨ Header + Hero Section -->
  <header>
    <div class="hero-content">
      <h1>Welcome to <span>RADARxTV</span></h1>
      <p>Your Gateway to <strong>Live Cricket</strong>, Latest News & PWA Experience</p>
      <a href="#features" class="cta-btn">🚀 Explore Features</a>
      <div class="ip-address">
        Your IP: <span id="userIP">Loading...</span>
      </div>
    </div>
  </header>

  <!-- 💎 Modern Features List -->
  <section class="features-section" id="features">
    <h2 class="section-title">Discover Our Features</h2>
    
    <div class="features-list">
      
      <a href="lo.html" class="feature-item">
        <div class="feature-image">
          <img src="don/qyar.jpg" alt="Live Streams" onerror="this.style.background='linear-gradient(45deg, #6e40c9, #00b4ff)'; this.innerHTML='🎬';" />
        </div>
        <div class="feature-content">
          <h3 class="feature-title">
            <i class="fas fa-broadcast-tower"></i>
            Live Streams
          </h3>
          <p class="feature-description">
            Watch live matches in crisp HD and zero buffering, now powered by our AI autonet stream engine.
          </p>
        </div>
        <div class="feature-action">
          <button class="watch-btn">Watch Now</button>
          <span class="feature-meta">HD Quality</span>
        </div>
      </a>

      <a href="about" class="feature-item">
        <div class="feature-image">
          <img src="don/qyak.jpg" alt="About Radar" onerror="this.style.background='linear-gradient(45deg, #6e40c9, #00b4ff)'; this.innerHTML='👥';" />
        </div>
        <div class="feature-content">
          <h3 class="feature-title">
            <i class="fas fa-users"></i>
            About Radar
          </h3>
          <p class="feature-description">
            Learn more about the RADARxTV team, mission, and the tech behind this futuristic cricket hub.
          </p>
        </div>
        <div class="feature-action">
          <button class="watch-btn">Learn More</button>
          <span class="feature-meta">Our Story</span>
        </div>
      </a>

      <a href="stipl/news.php" class="feature-item">
        <div class="feature-image">
          <img src="don/chut.jpg" alt="News" onerror="this.style.background='linear-gradient(45deg, #6e40c9, #00b4ff)'; this.innerHTML='📰';" />
        </div>
        <div class="feature-content">
          <h3 class="feature-title">
            <i class="fas fa-newspaper"></i>
            Cricket News
          </h3>
          <p class="feature-description">
            Stay updated with breaking sports news, analysis and cricket insights anytime, anywhere. From match results to exclusive interviews.
          </p>
        </div>
        <div class="feature-action">
          <button class="watch-btn">Read News</button>
          <span class="feature-meta">Latest Updates</span>
        </div>
      </a>

      <a href="#" class="feature-item" id="installCard">
        <div class="feature-image">
          <img src="https://img.freepik.com/free-vector/installing-application-concept-illustration_114360-5163.jpg?w=700" alt="Install App" onerror="this.style.background='linear-gradient(45deg, #6e40c9, #00b4ff)'; this.innerHTML='📱';" />
        </div>
        <div class="feature-content">
          <h3 class="feature-title">
            <i class="fas fa-mobile-alt"></i>
            Install App
          </h3>
          <p class="feature-description">
            Install RADARxTV as a Progressive Web App (PWA) for app-like speed & offline access.
          </p>
        </div>
        <div class="feature-action">
          <button class="watch-btn">Install PWA</button>
          <span class="feature-meta">Offline Ready</span>
        </div>
      </a>

    </div>
  </section>

  <footer>&copy; 2025 RadarXTV. Built for Cricket Fans. All Rights Reserved.</footer>

  <script>
    // IP Display
    async function getUserIP() {
      try {
        const res = await fetch('https://checkip.amazonaws.com');
        const ip = await res.text();
        document.getElementById('userIP').textContent = ip.trim();
      } catch {
        document.getElementById('userIP').textContent = "Unavailable";
      }
    }
    getUserIP();

    // Force visibility on page load (fallback)
    document.addEventListener('DOMContentLoaded', function() {
      // Ensure all elements are visible
      const featureItems = document.querySelectorAll('.feature-item');
      const featuresList = document.querySelector('.features-list');
      
      if (featuresList) {
        featuresList.style.opacity = '1';
        featuresList.style.visibility = 'visible';
        featuresList.style.display = 'flex';
      }
      
      featureItems.forEach((item, index) => {
        item.style.opacity = '1';
        item.style.transform = 'translateY(0)';
        item.style.display = 'flex';
        
        // Stagger animation fallback
        setTimeout(() => {
          item.style.animation = `fadeInUp 0.6s ease-out`;
        }, index * 100);
      });
    });

    // Enhanced GSAP Animation with fallback
    if (typeof gsap !== 'undefined') {
      try {
        gsap.registerPlugin(ScrollTrigger);
        
        // Stagger animation for feature items
        gsap.from(".feature-item", {
          scrollTrigger: {
            trigger: ".features-section",
            start: "top 80%",
            toggleActions: "play none none reverse"
          },
          opacity: 0,
          y: 50,
          scale: 0.95,
          duration: 0.8,
          ease: "power2.out",
          stagger: 0.2
        });

        // Enhanced hover effects with GSAP
        document.querySelectorAll('.feature-item').forEach(item => {
          item.addEventListener('mouseenter', () => {
            gsap.to(item, {
              duration: 0.3,
              scale: 1.02,
              y: -8,
              ease: "power2.out"
            });
          });

          item.addEventListener('mouseleave', () => {
            gsap.to(item, {
              duration: 0.3,
              scale: 1,
              y: 0,
              ease: "power2.out"
            });
          });
        });
      } catch (e) {
        console.log('GSAP animations not available, using CSS fallback');
      }
    }

    // 📦 Add to Home Screen logic
    let deferredPrompt;
    const installBtn = document.createElement('button');
    installBtn.id = 'installBtn';
    installBtn.innerText = '📲 Install RadarXTV';
    installBtn.style.cssText = 'position: fixed; bottom: 20px; right: 20px; padding: 12px 20px; background: #ff416c; color: white; border: none; border-radius: 10px; font-weight: bold; cursor: pointer; display: none; z-index: 999; box-shadow: 0 4px 15px rgba(0,0,0,0.3);';
    document.body.appendChild(installBtn);

    window.addEventListener('beforeinstallprompt', (e) => {
      e.preventDefault();
      deferredPrompt = e;
      installBtn.style.display = 'block';
    });

    installBtn.addEventListener('click', () => {
      installBtn.style.display = 'none';
      if (deferredPrompt) {
        deferredPrompt.prompt();
        deferredPrompt.userChoice.then((choice) => {
          if (choice.outcome === 'accepted') {
            console.log('✅ User accepted install prompt');
          } else {
            console.log('❌ User dismissed install prompt');
          }
          deferredPrompt = null;
        });
      }
    });

    document.getElementById('installCard').addEventListener('click', (e) => {
      e.preventDefault();
      if (deferredPrompt) {
        deferredPrompt.prompt();
      } else {
        alert("PWA install prompt not available or already installed.");
      }
    });

    // 🛠️ Register Service Worker
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register('/service-worker.js')
        .then(() => console.log('✅ Service Worker Registered'))
        .catch(err => console.error('❌ Service Worker Error:', err));
    }

    // Button click animations with ripple effect
    document.querySelectorAll('.watch-btn').forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        
        // Create ripple effect
        const ripple = document.createElement('span');
        ripple.style.cssText = `
          position: absolute;
          border-radius: 50%;
          background: rgba(255, 255, 255, 0.6);
          transform: scale(0);
          animation: ripple 0.6s linear;
          pointer-events: none;
        `;
        
        const rect = btn.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = e.clientX - rect.left - size / 2 + 'px';
        ripple.style.top = e.clientY - rect.top - size / 2 + 'px';
        
        btn.style.position = 'relative';
        btn.appendChild(ripple);
        
        setTimeout(() => ripple.remove(), 600);
      });
    });
    // Image error handling with emoji fallbacks
document.querySelectorAll('.feature-image img').forEach(img => {
      img.addEventListener('error', function() {
        this.style.background = 'linear-gradient(45deg, #6e40c9, #00b4ff)';
        this.style.display = 'flex';
        this.style.alignItems = 'center';
        this.style.justifyContent = 'center';
        // Image error handling with emoji fallbacks
document.querySelectorAll('.feature-image img').forEach(img => {
      img.addEventListener('error', function() {
        this.style.background = 'linear-gradient(45deg, #6e40c9, #00b4ff)';
        this.style.display = 'flex';
        this.style.alignItems = 'center';
        this.style.justifyContent = 'center';
        this.style.fontSize = '2rem';
        this.style.color = 'white';
        
        // Set emoji based on alt text
        const altText = this.alt.toLowerCase();
        if (altText.includes('stream')) this.innerHTML = '🎬';
        else if (altText.includes('about') || altText.includes('radar')) this.innerHTML = '👥';
        else if (altText.includes('news')) this.innerHTML = '📰';
        else if (altText.includes('install') || altText.includes('app')) this.innerHTML = '📱';
        else this.innerHTML = '🎯';
      });
    });

    // Debug log to check if elements are loaded
    console.log('Feature items found:', document.querySelectorAll('.feature-item').length);
    console.log('Features list found:', document.querySelector('.features-list'));
  </script>
</body>

</html>