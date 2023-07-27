import { Fancybox } from "@fancyapps/ui";

$(function() {

  if (document.body.classList.contains("post-template-default")) {
    Fancybox.bind( $(".wp-block-gallery .wp-block-image a"), {
      // Your custom options
    });
  }



});