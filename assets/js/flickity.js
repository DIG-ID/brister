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
        selectedAttraction: 0.020,
        friction: 0.80
      });
    }

  }, false);
});
