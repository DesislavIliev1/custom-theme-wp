

(function(){
    headerController();
})

function headerController(){
    $(".eho").on("click", function() {
        gsap.to(window, {
            scrollTo: ".about-us-section" ,
    });
      });

      $(".btn-2").on("click", function() {
        gsap.to(window, {
            scrollTo: ".section-1" ,
    });
      });

      $(".btn-3").on("click", function() {
        gsap.to(window, {
            scrollTo: ".section-2" ,
    });
      });

      $(".btn-4").on("click", function() {
        gsap.to(window, {
            scrollTo: ".section-3" ,
    });
      });

      $(".btn-5").on("click", function() {
        gsap.to(window, {
            scrollTo: ".section-4" ,
    });
      });
}