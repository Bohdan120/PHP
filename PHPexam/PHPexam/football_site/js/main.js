$(document).ready(function(){

   
    $("#owl-away").owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      dots: false,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:3
        },
        1000:{
          items:4
        }
      }
    });

   
    $("#left_away").click(function(event){
      event.preventDefault(); 
      $("#owl-away").trigger("prev.owl.carousel");
    });

    $("#right_away").click(function(event){
        event.preventDefault(); 
        $("#owl-away").trigger("next.owl.carousel");
    });

   
    $("#owl-home").owlCarousel({
      loop:true,
      margin:10,
      nav:false,
      dots: false,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:3
        },
        1000:{
          items:4
        }
      }
    });

    
    $("#left_home").click(function(event){
      event.preventDefault(); 
      $("#owl-home").trigger("prev.owl.carousel");
    });

    $("#right_home").click(function(event){
        event.preventDefault(); 
        $("#owl-home").trigger("next.owl.carousel");
    });

  });