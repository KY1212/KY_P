// $(function () {
// Wordpress化する際下行に変更↓↓
jQuery(function($){

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
          $spMenu.addClass("open");
          $hamburgerLine.addClass("open");
        //閉じるアクション
        } else if (!($hamburger).hasClass("open")) {
          $spMenu.removeClass("open");
          $hamburgerLine.removeClass("open");
        }
      }
      $hamburger.on("click", toggleAction);
    }

  //アニメーション フェードイン、アウト
  function titeAnimate() {

    ScrollReveal().reveal('.top1', {
      duration: 1000,
      origin: 'top',
      distance: '50px',
      reset: true
    });
    ScrollReveal().reveal('.top2', {
      duration: 1000,
      origin: 'bottom',
      distance: '50px',
      reset: true
    });
    // ScrollReveal().reveal('.about', {
    //   duration: 1000,
    //   distance: '150px',
    //   scale: 0.1,
    //   reset: true
    // });
    // ScrollReveal().reveal('.works', {
    //   duration: 1000,
    //   distance: '150px',
    //   scale: 0.1,
    //   reset: true
    // });
    // ScrollReveal().reveal('.form', {
    //   duration: 1000,
    //   distance: '150px',
    //   scale: 0.1,
    //   reset: true
    // });

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

  function hoverAnimate() {
    const $post = $(".works .postWrap .post");

    $post.hover(function () {
      $(this).find(".image").toggleClass("active");
      $(this).find(".discription").toggleClass("active");
    });
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

  function scroll() {
      $('a[href^="#"]').click(function(){
    // 移動先を0px調整する。0を30にすると30px下にずらすことができる。
    const adjust = 150;
    // スクロールの速度
    const speed = 400; // ミリ秒
    // アンカーの値取得
    let href= $(this).attr("href");
    // 移動先を取得
    let target = $(href == "#" || href == "" ? 'html' : href);
    // 移動先を調整
    let position = target.offset().top - adjust;
    // スムーススクロール
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
  }

  //アニメーションストップ
  function stopAnimate() {
    $(this).hover(function () {
      clearInterval(menuAnimate);
    });
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
    hoverAnimate();
    toggleNav();
    scroll();

  }
  init();
});
