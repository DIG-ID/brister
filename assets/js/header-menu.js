import { gsap } from "gsap";

$(function() {

    /* Make header sticky on*/
    let header = $('#header-main');
    let lastScroll = 0; 
  
    $(window).on( 'scroll', function() {
      const currentScroll = window.pageYOffset;
      if ( currentScroll <= 0 ) {
        //console.log('current scroll is ' + currentScroll);
        header.removeClass( 'sticky' );
        return;
      } 
      if ( currentScroll > lastScroll && currentScroll > 0 && ! header.hasClass('sticky') ) {
        //down
        header.removeClass( 'sticky' );
        header.addClass( 'sticky' );
      } 
      lastScroll = currentScroll;
    });

    /* Set hamburguer menu height */
    const megaMenu = document.querySelector('.main-menu-wrapper');
    const navHeight = 0; // Change this to match the actual height of your navigation bar

    function setElementHeight() {
      const height = window.innerHeight - navHeight;
      megaMenu.style.setProperty('--element-height', `${height}px`);
    }

    setElementHeight();
    window.addEventListener('resize', setElementHeight);

    /* Hamburguer menu toogle */ 
    const $toggleBtn = $('.main-menu-toggle')

    let togglerTl = gsap.timeline({
      defaults: {
        duration: 0.7,
        ease: 'ease-in-out',
        autoAlpha: 0
      },
    });

    let $targets = gsap.utils.toArray('.main-menu-content .menu-item');

    togglerTl.from($targets, { x:'-50%', opacity: 0, stagger: 0.15});

    togglerTl.paused(true);

    $toggleBtn.on( 'click', (e) => {
      $('.navigation-main').toggleClass('nav-open');
      $('body').toggleClass('nav-open');
      if (togglerTl.paused()) {
        togglerTl.play();
      } else if (togglerTl.reversed()) {
        togglerTl.restart().timeScale(1);
      } else {
        togglerTl.timeScale(2).reverse();
      }
    });

  
});