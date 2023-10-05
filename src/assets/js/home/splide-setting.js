"use strict";

const options1 = {
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
const splide1 = new Splide(".splide1", options1);
splide1.mount(window.splide.Extensions);

const options2 = {
  // 通常のオプション
  type: "loop",
  drag: false,
  arrows: false,
  pagination: false,
  focus: "center",
  perPage: 1,
  isNavigation: false,
  autoScroll: {
    speed: 1,
    pauseOnHover: false,
    pauseOnFocus: false,
    rewind: false,
  },
};
const splide2 = new Splide(".splide2", options2);
splide2.mount(window.splide.Extensions);
