$(function () {
// Wordpress化する際下行に変更↓↓
// jQuery(function($){

  const $menuList = $(".firstView .menu li a");
  const $duplicateTxt = $(".firstView span");

  //header適用の関数群

  function scrollTop() {
    let flag = "view";
    $(window).on("scroll", function () {
      if ($(this).scrollTop() > 200) {
        if (flag === "view") {
          $("header.pc").stop().css({ opacity: '1.0' }).animate({
              top: 0
            }, 500);
            flag = "hide";
            }
        } else {
          if (flag === "hide") {
            $("header.pc").stop().animate({ top: "-100px", opacity: 0 }, 500);
            flag = "view";
          }
        }
      });
  }

    //ハンバーガーメニューの表示非表示
    function toggleNav() {
      const $hamburger = $(".hamburger");
      const $menu = $("header.sp").find(".menu");

      function toggleAction() {
        $hamburger.toggleClass("open");
        $menu.toggleClass("open");
      }
      $hamburger.on("click", toggleAction);
    }


  //アニメーション フェードイン、アウト
  function titeAnimate() {

    ScrollReveal().reveal('.top1', {
      duration: 1000,
      origin: 'left',
      distance: '250px',
      reset: true
    });
    ScrollReveal().reveal('.top2', {
      duration: 1000,
      origin: 'right',
      distance: '250px',
      reset: true
    });
    ScrollReveal().reveal('.about', {
      duration: 1000,
      distance: '250px',
      scale: 0.1,
      reset: true
    });
    ScrollReveal().reveal('.works', {
      duration: 1000,
      distance: '250px',
      scale: 0.1,
      reset: true
    });

    function delayDisplay() {
      let delayTime = 300;
      for (let count = 1; count <= 4; count++){

        ScrollReveal().reveal(`.firstView li:nth-child(${count})`, {
          duration: 1000,
          origin: 'right',
          distance: '200px',
          reset: true,
          delay: delayTime*count
        });
      }
    }
    delayDisplay();
  }

  //ランダムで切り替えるテキストの色の設定
  function getRumMyClr(){
    const clrArr = [
      "#b4b2b5",
      "#dfd73f",
      "#6ed2dc",
      "#66cf5d",
      "#c542cb",
      "#d0535e",
      "#3733c9"
    ];
    let setColor = clrArr[Math.floor( Math.random()*clrArr.length)];
    return setColor;
  }

  //ランダムで要素を移動させる
  function startAnimate() {
    let y = 0.3, x = 0.3, sw = 1;
    menuAnimate = setInterval(function(){
      y = Math.floor( Math.random() * 10 )+1 * sw;
      x = Math.floor( Math.random() * 10 )+1 * sw;
      $menuList.animate({
        "left": 0+"px",
        "top": 0+"px"
      },{
      'duration': 0,
      });
      $duplicateTxt.animate({
        "top": x + "px",
        "left": y + "px",
        'color': getRumMyClr()
      },{
      'duration': 0
      });
      $duplicateTxt.css({'color':getRumMyClr()});
      sw *= -1;
    },100);
  }

  //アニメーションストップ
  function stopAnimate() {
    clearInterval(menuAnimate);
  }

  //マウスイベント
  function setEvent() {
    $menuList.on({
      mouseover: stopAnimate,
      mouseout: startAnimate
    });
  }

  function init() {
    titeAnimate();
    setEvent();
    startAnimate();

    if (window.matchMedia('(min-width: 768px)').matches) {
      scrollTop();
    } else if (window.matchMedia('(max-width: 767px)').matches) {
      toggleNav();
    }
  }

  init();

  function slider() {

    //変数の設定
    const $sliderWrap = $('.works');
    const $slider = $sliderWrap.find('.contentsWrap');
    const $slides = $slider.find('.focus');
    let currentIndex = 0;

    //スライドアニメーション
    function changeSlide() {
      const duration = 1000;
      currentIndex++;
      $slides.animate({
        left: (currentIndex) * -400 + "px"
      },duration);
    }
    //タイマースタート
    function startTimer() {
      const interval = 5000;
      timer = setInterval(changeSlide, interval);
    }
    startTimer();
  }
  // slider();

});
