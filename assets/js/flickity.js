import Flickity from 'flickity';

document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    if (document.body.classList.contains("page-template-page-home")) {
      var flkty = new Flickity( '.testimonials-carousel', {
        // options
        wrapAround: true,
        autoPlay: 4000,
        pauseAutoPlayOnHover: false,
        prevNextButtons: false,
        selectedAttraction: 0.025,
        friction: 0.28
      });
    }

    if (document.body.classList.contains("page-template-page-about")) {
      /*var partnersflkty = new Flickity( '.partners-carousel', {
        // options
        //groupCells: 2,
        //cellSelector: '.partner-cell',
        wrapAround: true,
        imagesLoaded: true,
        
        autoPlay: 4000,
        //pauseAutoPlayOnHover: false,
        prevNextButtons: false,
        selectedAttraction: 0.025,
        friction: 0.28
      });*/
    }

  }, false);
});
