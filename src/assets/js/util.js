"use strict";
//ハンバーガーメニュー
const toggleBtn = document.querySelector(".toggle-btn");
const slideMenu = document.querySelector(".g-nav");
const body = document.querySelector("body");
toggleBtn.addEventListener("click", () => {
  toggleBtn.classList.toggle("is-active");
  slideMenu.classList.toggle("is-show");
  body.classList.toggle("is-menuOpen");
});
