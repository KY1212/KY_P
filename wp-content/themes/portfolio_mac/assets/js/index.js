$(function () {
// Wordpress化する際下行に変更↓↓
// jQuery(function($){

  const $menuList = $(".firstView .menu li a");
  const $duplicateTxt = $(".firstView span");
  const $heading = $(".heading span");
  const $hamburger = $(".hamburger");
  const $hamburgerLine = $hamburger.find("span");
  const $spMenu = $("header .sp .list");
  const $spMenuTxt = $("header .sp .list span");

    //ハンバーガーメニューの表示非表示
    function toggleNav() {
      function toggleAction() {
        const duration = 300;
        $hamburger.toggleClass("open");
        //開くアクション
        if($hamburger.hasClass("open")) {
          //SPメニューのアニメーションと色の変更
          $spMenu.animate({
            top: 0
          }, 0);
          $spMenu.animate({
            opacity: 1
          }, duration).css({
            background: "rgba(108, 108, 108, 0.9)",
            display: "flex"
          }, duration);
          //hamburgerのライン色を変更
          $hamburgerLine.css({
            background: "#fff"
          },duration);
          //メインコンテンツを若干透過させる
          $("section, footer").css({
            opacity: "0.5"
          }, duration);

        //閉じるアクション
        } else if (!($hamburger).hasClass("open")) {
          //SPメニューのアニメーションと色の変更
          $spMenu.animate({
            opacity: 0
          }, duration);
          $spMenu.animate({
            top: -700
          }, 0);
          //hamburgerのライン色を変更
          $hamburgerLine.css({
            background: "#333"
          }, duration);
          //メインコンテンツの透過を解除
          $("section,footer").css({
            opacity: "1"
          }, duration);
        }
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

      $duplicateTxt.add($spMenuTxt).add($heading).animate({
        "top": x + "px",
        "left": y + "px",
        'color': getRumMyClr()
      },{
      'duration': 0
      });
      $duplicateTxt.add($spMenuTxt).add($heading).css({'color':getRumMyClr()});
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
    toggleNav();
  }
  init();
});
