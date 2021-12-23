// Pre Loader
var $ = jQuery;
$(window).on("load", function () {
  // Pre Loader
  function preLoader() {
    if (history.scrollRestoration) {
      history.scrollRestoration = "manual";
    } else {
      window.onbeforeunload = function () {
        window.scrollTo(0, 0);
      };
    }
    $("#photography").delay(1000).animate({ opacity: "1" }, 200);
    $("#learn").delay(1500).animate({ opacity: "1" }, 200);
    $("#all").delay(2000).animate({ opacity: "1" }, 200);
    $("#about").delay(2500).animate({ opacity: "1" }, 200);
    $("#it").delay(3000).animate({ opacity: "1" }, 200);
    setTimeout(removeLoader, 5000);
  }

  // Remove Preloader
  function removeLoader() {
    $("#loadingDiv").fadeOut(400, function () {
      $("#loadingDiv").remove();
      $("html").removeClass("overflow-hidden");
    });
    customImage(1000);
  }

  // Custom Image Loader - Top
  function customImage(tijd) {
    $("html").removeClass("overflow-hidden");
    setTimeout(function () {
      $("#yes").removeClass("transform -translate-x-full");
    }, tijd);
  }

  // Menu open function
  $("#menu-button").on("click", "#menu-icon-open", function () {
    // Fade Out bottom sub menu
    $("#sub-menu-3").fadeOut(350);

    // Show time menu
    $("#time-menu").removeClass("hidden");

    // Show socials menu with delay
    setTimeout(function () {
      $("#socials-menu-1").removeClass("hidden");
    }, 500);

    // Fade in text for both
    $("#sub-menu-1").fadeIn(1500);
    $("#sub-menu-2").fadeIn(1500);

    // Change height in menu
    $("#menu-open").removeClass("h-0");
    $("#menu-open").addClass("h-[32rem]");
    // Change id of the icon
    $(this).attr("id", "menu-icon-close");
  });

  // Menu close function
  $("#menu-button").on("click", "#menu-icon-close", function () {
    // Fade in bottom sub menu
    $("#sub-menu-3").fadeIn(350);

    // Hide socials menu
    $("#socials-menu-1").addClass("hidden");

    // Fade out text for both
    $("#sub-menu-1").fadeOut(200);
    $("#sub-menu-2").fadeOut(200);

    // Hide time menu
    $("#time-menu").addClass("hidden");

    // Change height in menu
    $("#menu-open").addClass("h-0");
    $("#menu-open").removeClass("h-[32rem]");

    // Change id of the icon
    $(this).attr("id", "menu-icon-open");
  });

  if ($("#loadingDiv").length) {
    // Start PreLoader
    preLoader();
  } else {
    customImage(1000);
  }
});

// Menu Functions
$("#menu-button").click(function () {
  console.log("click");
  // if ($("#menu-icons-lines").attr("id") == "menu-icon-lines") {
  //     console.log("De menu is geklikt");
  // } else {
  //   //works your_id_name not exist (false part)
  //   console.log("De menu is niet geklikt");
  // }
  //   $("#myPara").addClass("three four").removeClass("two three");

  //   $("#container").text($("#myPara").attr("class"));
});
