"use strict";
gsap.registerPlugin(ScrollTrigger);

gsap.from("#profile__line", {
  height: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".profile",
    start: "top center",
    once: true,
  },
});

gsap.from("#history__line", {
  height: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".history",
    start: "top center",
    once: true,
  },
});

gsap.from("#skill__line", {
  height: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".skill",
    start: "top center",
    once: true,
  },
});
