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
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="manifest" href="/manifest.json" />

  <style>
    html, body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', 'Inter', sans-serif;
      scroll-behavior: smooth;
    }

    *, *::before, *::after {
      box-sizing: border-box;
    }

    /* Custom animations and keyframes */
    @keyframes float {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      33% { transform: translateY(-12px) rotate(120deg); }
      66% { transform: translateY(-8px) rotate(240deg); }
    }

    @keyframes floatReverse {
      0%, 100% { transform: translateY(0px) rotate(360deg); }
      50% { transform: translateY(-18px) rotate(180deg); }
    }

    @keyframes pulse-soft {
      0%, 100% { opacity: 0.3; transform: scale(1); }
      50% { opacity: 0.7; transform: scale(1.05); }
    }

    @keyframes gradient-flow {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    @keyframes wave-motion {
      0% { transform: translateY(0px) rotateZ(0deg); }
      50% { transform: translateY(-10px) rotateZ(180deg); }
      100% { transform: translateY(0px) rotateZ(360deg); }
    }

    @keyframes ripple {
      to { transform: scale(4); opacity: 0; }
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* FIXED: Loading animation for page transitions */
    @keyframes pageExit {
      from { opacity: 1; transform: scale(1); }
      to { opacity: 0.3; transform: scale(0.98); }
    }

    @keyframes pageEnter {
      from { opacity: 0.3; transform: scale(0.98); }
      to { opacity: 1; transform: scale(1); }
    }

    /* Custom utility classes */
    .animate-float { animation: float 6s ease-in-out infinite; }
    .animate-float-reverse { animation: floatReverse 8s ease-in-out infinite; }
    .animate-pulse-soft { animation: pulse-soft 4s ease-in-out infinite; }
    .animate-gradient-flow { animation: gradient-flow 10s ease infinite; }
    .animate-wave { animation: wave-motion 15s ease-in-out infinite; }

    /* FIXED: Ensure body always resets to full opacity */
    body {
      opacity: 1 !important;
      transform: scale(1) !important;
      transition: none !important;
    }

    body.page-loading {
      animation: pageExit 0.3s ease-out forwards;
    }

    body.page-entering {
      animation: pageEnter 0.4s ease-out forwards;
    }

    /* FIXED: Force visibility and ensure proper display */
    .features-section {
      padding: 60px 20px 40px;
      max-width: 900px;
      margin: 40px auto 0;
      opacity: 1 !important;
      visibility: visible !important;
      display: block !important;
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
      display: flex !important;
      flex-direction: column !important;
      gap: 24px !important;
      opacity: 1 !important;
      visibility: visible !important;
    }

    /* FIXED: Glass morphism cards - REMOVED anchor tag, made div clickable */
    .glass-card {
      display: flex !important;
      align-items: center !important;
      padding: 24px !important;
      border-radius: 20px !important;
      background: rgba(255, 255, 255, 0.08) !important;
      backdrop-filter: blur(20px) !important;
      -webkit-backdrop-filter: blur(20px) !important;
      border: 1px solid rgba(255, 255, 255, 0.12) !important;
      box-shadow: 
        0 8px 32px rgba(0, 0, 0, 0.3),
        0 2px 16px rgba(0, 0, 0, 0.2),
        inset 0 1px 0 rgba(255, 255, 255, 0.1) !important;
      text-decoration: none !important;
      color: inherit !important;
      transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94) !important;
      position: relative !important;
      overflow: hidden !important;
      cursor: pointer !important;
      opacity: 1 !important;
      visibility: visible !important;
      transform: translateY(0) !important;
      min-height: 120px !important;
      margin-bottom: 0 !important;
    }

    .glass-card:hover {
      transform: translateY(-8px) scale(1.02) !important;
      box-shadow: 
        0 20px 60px rgba(0, 0, 0, 0.4),
        0 10px 40px rgba(255, 56, 161, 0.15),
        0 5px 20px rgba(0, 180, 255, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.2) !important;
      border-color: rgba(255, 255, 255, 0.2) !important;
      background: rgba(255, 255, 255, 0.12) !important;
    }

    /* FIXED: Image section with proper sizing */
    .feature-image {
      flex-shrink: 0 !important;
      width: 80px !important;
      height: 80px !important;
      border-radius: 16px !important;
      overflow: hidden !important;
      margin-right: 24px !important;
      position: relative !important;
      background: linear-gradient(45deg, #ff38a1, #00d9ff) !important;
      padding: 2px !important;
    }

    .feature-image img {
      width: 100% !important;
      height: 100% !important;
      object-fit: cover !important;
      border-radius: 14px !important;
      transition: transform 0.3s ease !important;
      display: block !important;
    }

    .feature-content {
      flex: 1 !important;
      display: flex !important;
      flex-direction: column !important;
      gap: 8px !important;
      min-width: 0 !important;
    }

    .feature-title {
      font-size: 1.3rem !important;
      font-weight: 700 !important;
      background: linear-gradient(90deg, #6e40c9, #00b4ff) !important;
      background-clip: text !important;
      -webkit-background-clip: text !important;
      -webkit-text-fill-color: transparent !important;
      margin: 0 !important;
      display: flex !important;
      align-items: center !important;
      gap: 12px !important;
    }

    .feature-title i {
      color: #ff38a1 !important;
      font-size: 1.1rem !important;
      flex-shrink: 0 !important;
    }

    .feature-description {
      font-size: 1rem !important;
      color: rgba(255, 255, 255, 0.75) !important;
      line-height: 1.5 !important;
      margin: 0 !important;
    }

    .feature-action {
      flex-shrink: 0 !important;
      margin-left: 20px !important;
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
      gap: 8px !important;
    }

    /* FIXED: Made buttons functional */
    .watch-btn {
      padding: 10px 20px !important;
      border-radius: 25px !important;
      background: linear-gradient(90deg, #ff38a1, #125bff) !important;
      color: white !important;
      font-size: 0.9rem !important;
      font-weight: 600 !important;
      border: none !important;
      cursor: pointer !important;
      transition: all 0.3s ease !important;
      text-transform: uppercase !important;
      letter-spacing: 0.5px !important;
      white-space: nowrap !important;
      position: relative !important;
      z-index: 10 !important;
    }

    .watch-btn:hover {
      transform: scale(1.05) !important;
      box-shadow: 0 8px 25px rgba(255, 56, 161, 0.4) !important;
    }

    .feature-meta {
      font-size: 0.8rem !important;
      color: rgba(255, 255, 255, 0.5) !important;
      text-align: center !important;
      white-space: nowrap !important;
    }

    /* Gradient text */
    .gradient-text {
      background: linear-gradient(90deg, #00d9ff, #b16cff, #e95388, #ca21de);
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    /* Header & Hero */
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

    /* Responsive Design */
    @media (max-width: 768px) {
      .features-section {
        padding: 40px 15px 30px;
      }
      
      .glass-card {
        flex-direction: column !important;
        text-align: center !important;
        padding: 20px !important;
        gap: 16px !important;
        min-height: auto !important;
      }
      
      .feature-image {
        margin: 0 0 16px 0 !important;
        width: 100px !important;
        height: 100px !important;
      }
      
      .feature-action {
        margin: 16px 0 0 0 !important;
        flex-direction: row !important;
        justify-content: center !important;
      }
      
      .feature-title {
        font-size: 1.2rem !important;
        justify-content: center !important;
      }
      
      .hero-content h1 {
        font-size: 2.2rem;
      }
      
      .section-title {
        font-size: 1.8rem;
      }
    }

    @media (max-width: 480px) {
      .glass-card {
        padding: 16px !important;
        gap: 12px !important;
      }
      
      .feature-image {
        width: 80px !important;
        height: 80px !important;
      }
      
      .features-list {
        gap: 16px !important;
      }
      
      .feature-title {
        font-size: 1.1rem !important;
      }
      
      .feature-description {
        font-size: 0.9rem !important;
      }

      .watch-btn {
        padding: 8px 16px !important;
        font-size: 0.8rem !important;
      }
    }
  </style>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: {
              50: '#f0f9ff',
              500: '#0ea5e9',
              600: '#0284c7',
              700: '#0369a1',
              900: '#0c4a6e'
            },
            accent: {
              500: '#ff38a1',
              600: '#e91e63'
            }
          },
          fontFamily: {
            'poppins': ['Poppins', 'sans-serif'],
            'inter': ['Inter', 'sans-serif']
          },
          backgroundImage: {
            'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
          }
        }
      }
    }
  </script>
</head>

<body class="m-0 p-0 font-poppins bg-slate-900 text-gray-50 overflow-x-hidden min-h-screen">

  <!-- 🌌 RESTORED: Enhanced Multi-Layer Parallax Background with Tailwind CSS -->
  <div class="fixed inset-0 -z-10 overflow-hidden">
    <!-- Base gradient layer -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-purple-900/20 to-indigo-900/30"></div>
    
    <!-- Animated flowing gradient -->
    <div class="absolute inset-0 bg-gradient-to-r from-purple-600/8 via-blue-600/12 to-pink-600/8 bg-[length:400%_400%] animate-gradient-flow"></div>
    
    <!-- Parallax layer 1 - Slow moving shapes -->
    <div class="absolute inset-0 opacity-10" data-speed="0.2">
      <svg class="w-full h-full" viewBox="0 0 1440 900" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <linearGradient id="bg-grad1" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:#6e40c9;stop-opacity:0.4" />
            <stop offset="50%" style="stop-color:#00b4ff;stop-opacity:0.3" />
            <stop offset="100%" style="stop-color:#ff38a1;stop-opacity:0.2" />
          </linearGradient>
        </defs>
        <path fill="url(#bg-grad1)" d="M0,400 Q360,500 720,350 Q1080,200 1440,320 L1440,900 L0,900 Z" />
        <ellipse cx="300" cy="200" rx="150" ry="80" fill="url(#bg-grad1)" opacity="0.3" class="animate-wave" />
      </svg>
    </div>

    <!-- Parallax layer 2 - Medium moving elements -->
    <div class="absolute inset-0 opacity-15" data-speed="0.4">
      <svg class="w-full h-full" viewBox="0 0 1440 900" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <radialGradient id="bg-grad2">
            <stop offset="0%" style="stop-color:#00d9ff;stop-opacity:0.3" />
            <stop offset="100%" style="stop-color:#ca21de;stop-opacity:0.1" />
          </radialGradient>
        </defs>
        <circle cx="1200" cy="300" r="200" fill="url(#bg-grad2)" />
        <path fill="url(#bg-grad2)" d="M0,600 Q720,450 1440,550 L1440,900 L0,900 Z" />
      </svg>
    </div>

    <!-- Floating particles system using Tailwind classes -->
    <div class="absolute inset-0">
      <!-- Primary particles -->
      <div class="absolute top-1/4 left-1/4 w-3 h-3 bg-blue-400/40 rounded-full animate-float"></div>
      <div class="absolute top-1/3 right-1/3 w-2 h-2 bg-purple-400/50 rounded-full animate-float-reverse"></div>
      <div class="absolute bottom-1/3 left-1/2 w-4 h-4 bg-pink-400/30 rounded-full animate-pulse-soft"></div>
      <div class="absolute top-2/3 right-1/4 w-2.5 h-2.5 bg-cyan-400/35 rounded-full animate-float"></div>
      <div class="absolute bottom-1/4 left-1/3 w-1.5 h-1.5 bg-violet-400/60 rounded-full animate-float-reverse"></div>
      
      <!-- Secondary particles -->
      <div class="absolute top-1/2 left-1/6 w-1 h-1 bg-blue-300/70 rounded-full animate-pulse-soft"></div>
      <div class="absolute top-1/5 right-1/5 w-3.5 h-3.5 bg-indigo-400/25 rounded-full animate-float"></div>
      <div class="absolute bottom-2/5 right-2/3 w-2 h-2 bg-rose-400/40 rounded-full animate-float-reverse"></div>
    </div>

    <!-- Geometric shapes layer using Tailwind -->
    <div class="absolute inset-0 opacity-5">
      <!-- Rotating ring -->
      <div class="absolute top-20 right-20 w-32 h-32 border border-blue-400/30 rounded-full animate-spin" style="animation-duration: 25s;"></div>
      
      <!-- Floating squares -->
      <div class="absolute bottom-32 left-16 w-24 h-24 bg-gradient-to-br from-purple-500/10 to-pink-500/10 rotate-45 animate-pulse-soft"></div>
      <div class="absolute top-1/2 right-1/3 w-16 h-16 border-2 border-cyan-400/20 rotate-12 animate-float"></div>
      
      <!-- Subtle lines using Tailwind gradients -->
      <div class="absolute top-0 left-1/4 w-px h-full bg-gradient-to-b from-transparent via-blue-400/10 to-transparent"></div>
      <div class="absolute top-0 right-1/3 w-px h-full bg-gradient-to-b from-transparent via-purple-400/8 to-transparent"></div>
    </div>

    <!-- Subtle noise texture overlay using Tailwind -->
    <div class="absolute inset-0 bg-gradient-radial from-transparent to-slate-900/10 opacity-50"></div>
  </div>

  <!-- ✨ Header + Hero Section with Tailwind -->
  <header class="relative z-10 text-center pt-16 pb-8 px-5">
    <div class="max-w-2xl mx-auto pt-5">
      <h1 class="text-5xl md:text-6xl font-extrabold gradient-text mb-5 drop-shadow-2xl">
        Welcome to <span class="text-accent-500">RADARxTV</span>
      </h1>
      <p class="text-xl text-violet-200/90 mb-8 font-normal leading-relaxed">
        Your Gateway to <strong class="text-white">Live Cricket</strong>, Latest News & PWA Experience
      </p>
      <a href="#features" class="inline-block text-lg font-semibold px-7 py-3 rounded-full bg-gradient-to-r from-accent-500 to-primary-600 text-white shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 transform hover:from-accent-600 hover:to-primary-700">
        🚀 Explore Features
      </a>
      <div class="text-base text-pink-300/80 mt-4">
        Your IP: <span id="userIP" class="font-medium">Loading...</span>
      </div>
    </div>
  </header>

  <!-- 💎 FIXED: Features List with Working Navigation -->
  <section class="features-section relative z-10" id="features">
    <h2 class="section-title">Discover Our Features</h2>
    
    <div class="features-list">
      
      <!-- Card 1: Live Streams -->
      <div class="glass-card" data-href="Routes">
        <div class="feature-image">
          <img src="don/qyar.jpg" alt="Live Streams" onerror="this.style.background='linear-gradient(45deg, #6e40c9, #00b4ff)'; this.style.display='flex'; this.style.alignItems='center'; this.style.justifyContent='center'; this.style.fontSize='2rem'; this.style.color='white'; this.innerHTML='🎬';" />
        </div>
        <div class="feature-content">
          <h3 class="feature-title">
            <i class="fas fa-broadcast-tower"></i>
            LIVE STREAMS
          </h3>
          <p class="feature-description">
            Watch live matches in crisp HD and zero buffering, now powered by our AI autonet stream engine.
          </p>
        </div>
        <div class="feature-action">
          <button class="watch-btn" onclick="navigateToPage('Routes')">Watch Now</button>
          <span class="feature-meta">HD Quality</span>
        </div>
      </div>

      <!-- Card 2: About Radar -->
      <div class="glass-card" data-href="about">
        <div class="feature-image">
          <img src="don/qyak.jpg" alt="About Radar" onerror="this.style.background='linear-gradient(45deg, #6e40c9, #00b4ff)'; this.style.display='flex'; this.style.alignItems='center'; this.style.justifyContent='center'; this.style.fontSize='2rem'; this.style.color='white'; this.innerHTML='👥';" />
        </div>
        <div class="feature-content">
          <h3 class="feature-title">
            <i class="fas fa-users"></i>
            ABOUT RADAR
          </h3>
          <p class="feature-description">
            Learn more about the RADARxTV team, mission, and the tech behind this futuristic cricket hub.
          </p>
        </div>
        <div class="feature-action">
          <button class="watch-btn" onclick="navigateToPage('about')">Learn More</button>
          <span class="feature-meta">Our Story</span>
        </div>
      </div>

      <!-- Card 3: Cricket News -->
      <div class="glass-card" data-href="stipl/news.php">
        <div class="feature-image">
          <img src="don/chut.jpg" alt="News" onerror="this.style.background='linear-gradient(45deg, #6e40c9, #00b4ff)'; this.style.display='flex'; this.style.alignItems='center'; this.style.justifyContent='center'; this.style.fontSize='2rem'; this.style.color='white'; this.innerHTML='📰';" />
        </div>
        <div class="feature-content">
          <h3 class="feature-title">
            <i class="fas fa-newspaper"></i>
            CRICKET NEWS
          </h3>
          <p class="feature-description">
            Stay updated with breaking sports news, analysis and cricket insights anytime, anywhere. From match results to exclusive interviews.
          </p>
        </div>
        <div class="feature-action">
          <button class="watch-btn" onclick="navigateToPage('stipl/news.php')">Read News</button>
          <span class="feature-meta">Latest Updates</span>
        </div>
      </div>

      <!-- Card 4: Install App -->
      <div class="glass-card" id="installCard">
        <div class="feature-image">
          <img src="https://img.freepik.com/free-vector/installing-application-concept-illustration_114360-5163.jpg?w=700" alt="Install App" onerror="this.style.background='linear-gradient(45deg, #6e40c9, #00b4ff)'; this.style.display='flex'; this.style.alignItems='center'; this.style.justifyContent='center'; this.style.fontSize='2rem'; this.style.color='white'; this.innerHTML='📱';" />
        </div>
        <div class="feature-content">
          <h3 class="feature-title">
            <i class="fas fa-mobile-alt"></i>
            INSTALL APP
          </h3>
          <p class="feature-description">
            Install RADARxTV as a Progressive Web App (PWA) for app-like speed & offline access.
          </p>
        </div>
        <div class="feature-action">
          <button class="watch-btn" onclick="installPWA()">Install PWA</button>
          <span class="feature-meta">Offline Ready</span>
        </div>
      </div>

    </div>
  </section>

  <footer class="relative z-10 text-center text-sm py-8 px-3 bg-white/5 text-gray-400 mt-10 backdrop-blur-sm border-t border-white/10">
    &copy; 2025 RadarXTV. Built for Cricket Fans. All Rights Reserved.
  </footer>

<script>
    // FIXED: Proper page navigation with state reset
    function navigateToPage(url) {
      console.log('Navigating to:', url);
// Add loading class
      document.body.classList.add('page-loading');
      
      // Navigate after animation
      setTimeout(() => {
        window.location.href = url;
      }, 300);
    }

    // FIXED: Reset page state on load/back navigation
    function resetPageState() {
      // Remove any loading classes
      document.body.classList.remove('page-loading', 'page-entering');
      
      // Force reset body opacity and transform
      document.body.style.opacity = '1';
      document.body.style.transform = 'scale(1)';
      document.body.style.transition = 'none';
      
      // Brief entering animation for smooth return
      setTimeout(() => {
        document.body.classList.add('page-entering');
      }, 50);
      
      // Clean up entering class
      setTimeout(() => {
        document.body.classList.remove('page-entering');
        document.body.style.transition = '';
      }, 500);
      console.log('Page state reset complete');
    }

    // PWA Installation Logic
    let deferredPrompt;
    
    function installPWA() {
      if (deferredPrompt) {
        deferredPrompt.prompt();
        deferredPrompt.userChoice.then((choice) => {
          if (choice.outcome === 'accepted') {
            console.log('✅ User accepted PWA install');
            alert('🎉 RADARxTV has been installed successfully!');
          } else {
            console.log('❌ User dismissed PWA install');
          }
          deferredPrompt = null;
        });
      } else {
        // Fallback for browsers that don't support PWA install
        alert('📱 To install RADARxTV:\n\n1. Open browser menu\n2. Look for "Add to Home Screen" or "Install App"\n3. Follow the prompts\n\nNote: PWA installation varies by browser.');
      }
    }

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

    // Performance-optimized scroll-based parallax
    let ticking = false;
    function updateParallax() {
      const scrolled = window.pageYOffset;
      const parallaxElements = document.querySelectorAll('[data-speed]');
      
      parallaxElements.forEach(el => {
        const speed = parseFloat(el.dataset.speed) || 0.5;
        const yPos = -(scrolled * speed);
        el.style.transform = `translate3d(0, ${yPos}px, 0)`;
      });
      
      ticking = false;
    }

    // Throttled scroll event for better performance
    window.addEventListener('scroll', () => {
      if (!ticking) {
        requestAnimationFrame(updateParallax);
        ticking = true;
      }
    });

    // FIXED: Handle page load and back navigation
    window.addEventListener('pageshow', function(event) {
      console.log('Page show event:', event.persisted ? 'from cache' : 'fresh load');
      resetPageState();
    });

    window.addEventListener('load', function() {
      console.log('Window load event');
      resetPageState();
    });

    // FIXED: Initialize page immediately
    document.addEventListener('DOMContentLoaded', function() {
      console.log('DOM loaded, initializing...');
      
      // Reset page state first
      resetPageState();
      
      const featuresList = document.querySelector('.features-list');
      const featureCards = document.querySelectorAll('.glass-card');
      
      // Force show the container
      if (featuresList) {
        featuresList.style.display = 'flex';
        featuresList.style.flexDirection = 'column';
        featuresList.style.gap = '24px';
        featuresList.style.opacity = '1';
        featuresList.style.visibility = 'visible';
        console.log('Features list forced visible');
      }
      
      // Force show each card
      featureCards.forEach((card, index) => {
        card.style.display = 'flex';
        card.style.alignItems = 'center';
        card.style.opacity = '1';
        card.style.visibility = 'visible';
        card.style.transform = 'translateY(0)';
        card.style.minHeight = '120px';
        
        console.log(`Card ${index + 1} forced visible`);
        
        // Add click event for navigation (excluding install card)
        if (card.dataset.href) {
          card.addEventListener('click', (e) => {
            // Only navigate if clicking on the card itself, not the button
            if (!e.target.classList.contains('watch-btn')) {
              navigateToPage(card.dataset.href);
            }
          });
        }
        
        // Add a small delay to show them one by one
        setTimeout(() => {
          card.style.animation = 'fadeInUp 0.6s ease-out';
        }, index * 150);
      });
      
      console.log(`Total cards found: ${featureCards.length}`);
    });

    // Enhanced GSAP Animations
    setTimeout(() => {
      if (typeof gsap !== 'undefined') {
        try {
          gsap.registerPlugin(ScrollTrigger);
          // Stagger animation for feature items
          gsap.from(".glass-card", {
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
            stagger: 0.15
          });

          // Animate floating particles
          gsap.to(".animate-float", {
            duration: 6,
            y: "+=15",
            rotation: 360,
            ease: "sine.inOut",
            yoyo: true,
            repeat: -1,
            stagger: 0.2
          });

          console.log('GSAP animations loaded successfully');
        } catch (e) {
          console.log('GSAP error, using CSS fallback:', e);
        }
      } else {
        console.log('GSAP not available, using CSS animations');
      }
    }, 500);

    // PWA Install Prompt Handler
    const installBtn = document.createElement('button');
    installBtn.innerHTML = '📲 Install RadarXTV';
    installBtn.className = 'fixed bottom-5 right-5 px-4 py-3 bg-gradient-to-r from-accent-500 to-primary-600 text-white border-0 rounded-2xl font-bold cursor-pointer hidden z-50 shadow-2xl hover:scale-105 transition-transform duration-300';
    
    document.body.appendChild(installBtn);
    
    window.addEventListener('beforeinstallprompt', (e) => {
      e.preventDefault();
      deferredPrompt = e;
      installBtn.classList.remove('hidden');
      // Also enable the install card button
      const installCard = document.getElementById('installCard');
      if (installCard) {
        installCard.classList.add('pwa-ready');
      }
    });

    installBtn.addEventListener('click', installPWA);

    // 🛠️ Service Worker Registration
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register('/service-worker.js')
        .then(() => console.log('✅ Service Worker Registered'))
        .catch(err => console.error('❌ Service Worker Error:', err));
    }

    // Button click animations with ripple effect
    document.addEventListener('click', (e) => {
      if (e.target.classList.contains('watch-btn')) {
        const btn = e.target;
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
      }
    });
        // Image error handling with emoji fallbacks
    document.querySelectorAll('.feature-image img').forEach(img => {
      img.addEventListener('error', function() {
        this.style.background = 'linear-gradient(45deg, #6e40c9, #00b4ff)';
        this.style.display = 'flex';
        this.style.alignItems = 'center';
        this.style.justifyContent = 'center';
        this.style.fontSize = '2rem';
        this.style.color = 'white';
        
        const altText = this.alt.toLowerCase();
        if (altText.includes('stream')) this.innerHTML = '🎬';
        else if (altText.includes('about') || altText.includes('radar')) this.innerHTML = '👥';
        else if (altText.includes('news')) this.innerHTML = '📰';
        else if (altText.includes('install') || altText.includes('app')) this.innerHTML = '📱';
        else this.innerHTML = '🎯';
      });
    });

    // Performance optimization: Reduce animations on low-end devices
    if (navigator.hardwareConcurrency < 4) {
      document.querySelectorAll('.animate-float, .animate-float-reverse, .animate-pulse-soft').forEach(el => {
        el.style.animationDuration = '10s';
      });
    }

    // Debug logging
    console.log('✅ Script loaded successfully');
    console.log('Features section:', document.querySelector('.features-section'));
    console.log('Features list:', document.querySelector('.features-list'));
    console.log('Glass cards:', document.querySelectorAll('.glass-card').length);
  </script>
</body>

</html>