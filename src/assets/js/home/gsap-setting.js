"use strict";
gsap.registerPlugin(ScrollTrigger);

// hero-leadのスライド
gsap.from(".hero-lead", {
  opacity: 0,
  x: 200,
  delay: 1.4,
  ease: Power2.easeOut,
});

// circleのアニメーション
const fadeInSet = {
  opacity: 0,
  y: 50,
};
const fadeInTo = {
  opacity: 1,
  y: 0,
  duration: 2,
  ease: "power1.inOut",
};

const from = {
  y: 0,
};
const animeTo = {
  y: 50,
  repeat: -1,
  yoyo: true,
  duration: 3,
  ease: "power1.inOut",
};
gsap
  .timeline()
  //   circle01
  .fromTo(".circle__item01", fadeInSet, fadeInTo)
  .fromTo(".circle__item01", from, animeTo);
gsap
  .timeline()
  //   circle02
  .fromTo(".circle__item02", fadeInSet, { ...fadeInTo, delay: 0.5 })
  .fromTo(".circle__item02", from, animeTo);
gsap
  .timeline()
  //   circle03
  .fromTo(".circle__item03", fadeInSet, { ...fadeInTo, delay: 1 })
  .fromTo(".circle__item03", from, animeTo);
gsap
  .timeline()
  //   circle04
  .fromTo(".circle__item04", fadeInSet, { ...fadeInTo, delay: 1.5 })
  .fromTo(".circle__item04", from, animeTo);
gsap
  .timeline()
  //   circle05
  .fromTo(".circle__item05", fadeInSet, { ...fadeInTo, delay: 2 })
  .fromTo(".circle__item05", from, animeTo);
gsap
  .timeline()
  //   circle06
  .fromTo(".circle__item06", fadeInSet, { ...fadeInTo, delay: 2.5 })
  .fromTo(".circle__item06", from, animeTo);
gsap
  .timeline()
  //   circle07
  .fromTo(".circle__item07", fadeInSet, { ...fadeInTo, delay: 3 })
  .fromTo(".circle__item07", from, animeTo);
gsap
  .timeline()
  //   circle08
  .fromTo(".circle__item08", fadeInSet, { ...fadeInTo, delay: 3.5 })
  .fromTo(".circle__item08", from, animeTo);
gsap
  .timeline()
  //   circle09
  .fromTo(".circle__item09", fadeInSet, { ...fadeInTo, delay: 4 })
  .fromTo(".circle__item09", from, animeTo);
gsap
  .timeline()
  //   circle10
  .fromTo(".circle__item10", fadeInSet, { ...fadeInTo, delay: 4.5 })
  .fromTo(".circle__item10", from, animeTo);

ScrollTrigger.create({
  trigger: ".left",
  pin: true,
  start: "center center",
  endTrigger: ".works__thumb03",
  end: "center center",
  pinSpacing: false,
  markers: false,
});

gsap.set("#skill__line", {
  height: "0",
});
gsap.to("#skill__line", {
  height: "100%",
});
