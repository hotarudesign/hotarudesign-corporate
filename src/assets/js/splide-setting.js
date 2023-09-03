"use strict";
const options = {
  // 通常のオプション
  type: "loop",
  perPage: 4,
  arrows: false,
  drag: false,
  pagination: false,
  autoScroll: {
    speed: 0.5,
    pauseOnHover: false,
  },
};
const splide = new Splide(".splide1", options);
splide.mount(window.splide.Extensions);
