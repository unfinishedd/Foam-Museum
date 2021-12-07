var $ = jQuery;
$(window).on("load", function () {
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
  setTimeout(removeLoader, 5000); //wait for page load PLUS two seconds.
});

function removeLoader() {
  $("#loadingDiv").fadeOut(400, function () {
    // fadeOut complete. Remove the loading div
    $("#loadingDiv").remove(); //makes page more lightweight
    $("html").removeClass("overflow-hidden");
  });
}
