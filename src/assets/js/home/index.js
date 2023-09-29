"use strict";

// mvの背景アニメーション
document.addEventListener("DOMContentLoaded", () => {
  const mv = document.getElementById("mv");
  mv.classList.add("showBg");
});

// heroタイプライター
const typewriter = (param) => {
  let el = document.querySelector(param.el);
  let speed = param.speed;
  let string = param.string.split("");
  string.forEach((char, index) => {
    setTimeout(() => {
      el.textContent += char;
    }, speed * index);
  });
};
typewriter({
  el: "#typewriter", //要素
  string: "Hotaru Design", //文字列
  speed: 80, //速度
});
