$(document).ready(function(){
    $('.slider1').slick({
    asNavFor: '.slider2',
    arrows: false,
      });
  });
  
  $(document).ready(function(){
    $('.slider2').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider1',
        focusOnSelect: true,
        arrows: true,
        responsive: [
          {
            breakpoint: 900,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          }
        ]
      });
  });