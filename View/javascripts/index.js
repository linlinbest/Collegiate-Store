$(document).ready(function() {
  $('.enter').click(function() {
    if (localStorage.getItem("location") === null) {
      localStorage.setItem("location", "init");
    }
    window.open("../Controller/index.controller.php?location="+localStorage.getItem("location"));
  });

  if (localStorage.getItem("position") != null) {
    $('#myblock').attr('src', '../Data/'+localStorage.getItem("position")+'.jpg')
  }

  $('#myblock').draggable({
    appendTo: "#canvas"
  });

  $('.up').click(function() {
    if (localStorage.getItem("position") === null) {
      localStorage.setItem("position", "010");
    }
    num = parseInt(localStorage.getItem("position"), 10) + 10;
    num = num + "";
    for (var i = 0; i < 3 - num.length; i++) {
      num = "0" + num;
    }
    localStorage.setItem("position", num);

    $('#myblock').attr('src', '../Data/'+localStorage.getItem("position")+'.jpg')

    alert(localStorage.getItem("position"))
  })

  // DEBUG MODE only
  // localStorage.clear();
});
