// GSAP animation for hero text and CTA button
window.addEventListener('DOMContentLoaded', () => {
  gsap.from(".hero-content h1", {
    duration: 1,
    y: -50,
    opacity: 0,
    ease: "power2.out"
  });

  gsap.from(".hero-content p", {
    duration: 1,
    y: 30,
    opacity: 0,
    delay: 0.5,
    ease: "power2.out"
  });

  gsap.from(".cta", {
    duration: 1,
    scale: 0.8,
    opacity: 0,
    delay: 1,
    ease: "back.out"
  });

  gsap.from(".feature-box", {
    scrollTrigger: {
      trigger: ".features",
      start: "top 80%"
    },
    duration: 0.8,
    y: 30,
    opacity: 0,
    stagger: 0.2,
    ease: "power1.out"
  });
});
