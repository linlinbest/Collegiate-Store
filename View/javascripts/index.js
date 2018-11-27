$(document).ready(function() {
  $('.enter').click(function() {
    if (localStorage.getItem("location") === null) {
      localStorage.setItem("location", "init");
    }
    window.open("../Controller/index.controller.php?location="+localStorage.getItem("location"));
  });

  $('#myblock').draggable({
    appendTo: "#canvas"
  });
});
