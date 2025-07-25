// service-worker.js

self.addEventListener('install', (event) => {
  console.log('[Service Worker] Installed');
  // Optional: precache assets here if needed
});

self.addEventListener('activate', (event) => {
  console.log('[Service Worker] Activated');
  // Optional: cleanup old caches here
});

self.addEventListener('fetch', (event) => {
  // Optional: you can cache requests or just let it pass
  // Example:
  // event.respondWith(fetch(event.request));
});