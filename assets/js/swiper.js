import Swiper from 'swiper/bundle';
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    if (document.body.classList.contains("page-template-page-home")) {
      const agendaEventsSwiper = new Swiper('.swiper-agenda-events', {
        loop: true,
        //effect: 'flip',
        speed: 800,
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next.agenda-events-button-next',
          prevEl: '.swiper-button-prev.agenda-events-button-prev',
        },
      });
    }


  }, false);
});
