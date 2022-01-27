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
    // Change Icon
    if ($("#menu-search-close")) {
      $("#menu-search-close").click();
    }
    // Fade Out bottom sub menu
    $("#sub-menu-3").fadeOut(500);

    // Show time menu
    $("#time-menu").removeClass("hidden");

    // Show socials menu with delay
    setTimeout(function () {
      $("#socials-menu-1").removeClass("hidden");
    }, 500);

    // Fade in text for both
    $("#sub-menu-1").fadeIn(500);
    $("#sub-menu-2").fadeIn(500);

    // Change height in menu
    $("#menu-open").removeClass("h-0");
    $("#menu-open").addClass("h-[32rem]");
    // Change id of the icon
    setTimeout(function () {
      $("#menu-icon-open").attr("id", "menu-icon-close");
    }, 700);
  });

  // Menu close function
  $("#menu-button").on("click", "#menu-icon-close", function () {
    // Fade in bottom sub menu
    $("#sub-menu-3").fadeIn(500);

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
    setTimeout(function () {
      $("#menu-icon-close").attr("id", "menu-icon-open");
    }, 700);
  });

  // Search open Function

  $("#menu-search-button").on("click", "#menu-search-open", function () {
    // Change Icon
    if ($("#menu-icon-close")) {
      $("#menu-icon-close").click();
    }

    $("#menu-search-open").fadeOut(100).removeClass("fa-search fa-md");
    $("#menu-search-open").fadeIn(100).addClass("fa-times fa-lg");
    // Change height in menu
    $("#menu-open-search").removeClass("h-0");
    $("#menu-open-search").addClass("h-[4rem]");

    $("#search-element").removeClass("hidden");

    // Change id of the icon
    setTimeout(function () {
      $("#menu-search-open").attr("id", "menu-search-close");
    }, 700);
  });

  // Menu close function
  $("#menu-search-button").on("click", "#menu-search-close", function () {
    // Change Icon
    $("#menu-search-close").fadeOut(100).addClass("fa-search fa-md");
    $("#menu-search-close").fadeIn(100).removeClass("fa-times fa-lg");

    // Change height in menu
    $("#menu-open-search").addClass("h-0");
    $("#menu-open-search").removeClass("h-[4rem]");

    $("#search-element").addClass("hidden");

    // Change id of the icon
    setTimeout(function () {
      $("#menu-search-close").attr("id", "menu-search-open");
    }, 700);
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
