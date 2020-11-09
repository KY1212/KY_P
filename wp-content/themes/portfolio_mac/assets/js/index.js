$(function () {
// Wordpress化する際下行に変更↓↓
// jQuery(function($){

  //   function imageJustSize() {
  //     const mainVisual = document.getElementById('js-main-visual');
  //     // const winH = window.innerHeight;
  //     // mainVisual.style.height = winH + 'px';
  //     let vh = window.innerHeight * 0.01;
  //     // カスタム変数--vhの値をドキュメントのルートに設定
  //     document.documentElement.style.setProperty('--vh', `${vh}px`);
  //   }
  // window.addEventListener('resize', imageJustSize);

  function scrollTop() {
    let flag = "view";

    $(window).on("scroll", function () {
      if ($(this).scrollTop() > 200) {
        if (flag === "view") {
          $("header").stop().css({opacity: '1.0'}).animate({
          //”▲.header”の部分は固定ヘッダとして表示させるブロックのID名もしくはクラス名に
          top: 0
        }, 500);
        flag = "hide";
        }
      } else {
        if (flag === "hide") {
          $("header").stop().animate({top:"-100px",opacity: 0}, 500);
  		    //上にあがり切ったら透過度を0%にして背景が生きるように
          //”▲.header”の部分は固定ヘッダとして表示させるブロックのID名もしくはクラス名に
          flag = "view";
        }
      }
    });
  }

  function startAnimate() {
    let y = 0.6, x = 0.6, sw = 1;
    menuAnimate = setInterval(function(){
      y *= sw;
      x *= sw;
      $menuList.animate({
            "left": y+"px",
            "top": x+"px"
        },{
            'duration': 800,
            'easing': 'easeOutBack'
          });
          sw *= -1;
        },0);
      }

    //ストップ
    function stopAnimate() {
      clearInterval(menuAnimate);
    }

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
    ScrollReveal().reveal('.skill', {
      duration: 1000,
      distance: '250px',
      scale: 0.1,
      reset: true
    });
  }

  function toggleNav() {
    const $hamburger = $(".hamburger");
    const $menu = $("header").find(".menu");

    function toggleAction() {
      $hamburger.toggleClass("open");
      $menu.toggleClass("open");
    }
    $hamburger.on("click", toggleAction);
  }

  function init() {
    scrollTop();
    toggleNav();
    titeAnimate();
    setEvent();
    startAnimate();
  }

  const $menuList = $(".firstView li");
  function setEvent() {
    $menuList.on({
      mouseover: stopAnimate,
      mouseout: startAnimate
    });
  }

  init();

});
