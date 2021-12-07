var $ = jQuery;
$("#menu-button").click(function () {
  if ($("#menu-icons-lines").attr("id") == "menu-icon-lines") {
      console.log("De menu is geklikt");
  } else {
    //works your_id_name not exist (false part)
    console.log("De menu is niet geklikt");
  }
//   $("#myPara").addClass("three four").removeClass("two three");

//   $("#container").text($("#myPara").attr("class"));
});
