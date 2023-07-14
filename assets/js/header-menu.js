$(function() {

    /* Make header sticky on*/
    let header = $('#main-header');
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
    const megaMenu = document.querySelector('.mega-menu-navigation');
    const navHeight = 75; // Change this to match the actual height of your navigation bar

    function setElementHeight() {
      const height = window.innerHeight - navHeight;
      megaMenu.style.setProperty('--element-height', `${height}px`);
    }

    /* Hamburguer menu toogle */ 
    $('.navbar-toggler').on( 'click', function(e) {
      $('.navbar').toggleClass('nav-open');
    });
  
});