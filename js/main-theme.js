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


  // something something
  jQuery.fn.idToggle = function (a, b) {
    function cb() {
      [b, a][(this._tog ^= 1)].call(this);
    }
    return this.on("click", cb);
  };

  $("#menu-button").on("click", "#menu-icon-open", function () {
    $(this).attr("id", "menu-icon-close");
  });

  $("#menu-button").on("click", "#menu-icon-close", function () {
    $(this).attr("id", "menu-icon-open");
  });

  if( $("#loadingDiv").length ){
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
