/*-------Menu-section--------*/

$(document).ready(function () {
    var menuKiOpen = false;
    $(".Menu-section .mobile-menu").on("click", function () {
        //$(".Menu-section .menu").slideToggle(1000);
        if (menuKiOpen == false) {
            $(".Menu-section .menu-area").slideDown(1000);
            $(".Menu-section .mobile-menu i").addClass("fa-times").removeClass("fa-bars");
            menuKiOpen = true;
        }
        else {
            $(".Menu-section .menu-area").slideUp(1000);
            $(".Menu-section .mobile-menu i").removeClass("fa-times").addClass("fa-bars");
            menuKiOpen = false;
        }
    });
    $(window).on("resize", function () {
        var deviceWidth = $(window).width();
        if (deviceWidth > 767) {
            $(".Menu-section .menu-area").removeAttr("style");
        }
    });
    /* ------------------------------------------------- */
    $(".contact-us .single-input input,.contact-us .single-input textarea").on("focus", function () {
        /*
        $(".contact-us .single-input label").css({
           "top":"8px",
            "transition":".5s"
        });
        */
        $(this).prev().css({
            "top": "8px",
            "transition": ".5s"
        });
    });
    
    
    $(".contact-us .single-input input,.contact-us .single-input textarea").on("blur", function () {
        var inputFieldValue = $(this).val();
        if (inputFieldValue == "") {
            $(this).prev().css({
                "top": "",
                "transition": ".5s"
            });
        }else{
            var a = $(this).prev().css({
                "color":"green"
            })
        }
    });
});





const backToTopButton = document.querySelector("#back-to-top-btn");

window.addEventListener("scroll", scrollFunction);

function scrollFunction() {
  if (window.pageYOffset > 300) { // Show backToTopButton
    if(!backToTopButton.classList.contains("btnEntrance")) {
      backToTopButton.classList.remove("btnExit");
      backToTopButton.classList.add("btnEntrance");
      backToTopButton.style.display = "block";
    }
  }
  else { // Hide backToTopButton
    if(backToTopButton.classList.contains("btnEntrance")) {
      backToTopButton.classList.remove("btnEntrance");
      backToTopButton.classList.add("btnExit");
      setTimeout(function() {
        backToTopButton.style.display = "none";
      }, 250);
    }
  }
}

backToTopButton.addEventListener("click", smoothScrollBackToTop);

// function backToTop() {
//   window.scrollTo(0, 0);
// }

function smoothScrollBackToTop() {
  const targetPosition = 0;
  const startPosition = window.pageYOffset;
  const distance = targetPosition - startPosition;
  const duration = 750;
  let start = null;
  
  window.requestAnimationFrame(step);

  function step(timestamp) {
    if (!start) start = timestamp;
    const progress = timestamp - start;
    window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
    if (progress < duration) window.requestAnimationFrame(step);
  }
}

function easeInOutCubic(t, b, c, d) {
	t /= d/2;
	if (t < 1) return c/2*t*t*t + b;
	t -= 2;
	return c/2*(t*t*t + 2) + b;
};
/* ----#End top to home---- */