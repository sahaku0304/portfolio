//JavaScript Document
"use strict";

//ハンバーガーメニューbutton
const header = document.getElementById("header");
const btn = document.querySelector(".header__right");
const button = document.querySelector(".header__humburger-button");
const head = document.querySelector(".header__head");
const mobileNav = document.querySelector(".header__mobile-navigation");
const eventType = window.ontouchstart ? "touchstart" : "click";

btn.addEventListener(eventType, () => {
  header.classList.toggle("active")
  button.classList.toggle("active");
  head.classList.toggle("active");
  mobileNav.classList.toggle("active");
});
// スムーススクロール
document.querySelectorAll('a[href^="#"]').forEach(link => {
  link.addEventListener('click', function(e) {
    e.preventDefault();
    const header = document.getElementById('header').clientHeight,
          id = this.getAttribute('href');
    let position = 0;
    if(id !== "#") {
      position = window.scrollY + document.querySelector(id).getBoundingClientRect().top - 50;
      console.log(position);
    }

    window.scrollTo({
      top: position,
      behavior: 'smooth'
    })
    //ハンバーガーメニューを押したらスクロールして消える
    if (document.querySelector('.header__mobile-navigation').classList.contains('active')) {
      const timerID = setInterval(() => {
        console.log(timerID);
        if (window.scrollY === position){
          clearInterval(timerID);
          document.querySelector('.header__mobile-navigation').classList.remove('active');
          document.querySelector('.header__head').classList.remove('active');
          document.querySelector('.header__humburger-button').classList.remove('active');
        }
      }, 16)
    }

  })
})

//メニューの表示非表示
// document.getElementById('hamburger__icon').addEventListener('click', function() {
//   this.classList.toggle('active')
//   document.getElementById('hamburger__content').classList.toggle('active')
//   document.getElementById('hamburger__background').classList.toggle('active')
// })
