$(document).ready(function() {
  $('.enter').click(function() {
    if (localStorage.getItem("location") === null) {
      localStorage.setItem("location", "init");
    }
    // window.open("../Controller/index.controller.php?location="+localStorage.getItem("location"));
  });

  if (localStorage.getItem("position") != null) {
    $('#myblock').attr('src', '../Data/'+localStorage.getItem("position")+'.jpg')
  }

  $('#myblock').draggable({
    axis: 'x',
    drag: function( event, ui ) {
    // Setting limits
    if (ui.position.left > 800) {
      ui.position.left = 800;
    }
    if (ui.position.left < -1000) {
      ui.position.left = -1000
    }
  }
  });


  // up event listener
  $('.up').click(function() {
    $('#myblock').hide();
    if (localStorage.getItem("position") === null) {
      localStorage.setItem("position", "010");
    }
    raw = localStorage.getItem("position");
    inc = 1;
    i = 2;
    while (raw.charAt(i) == "0" && i >= 0) {
      inc *= 10;
      i--;
    }
    num = parseInt(raw, 10) + inc;
    num = num + "";
    for (var i = 0; i < 3 - num.length; i++) {
      num = "0" + num;
    }
    localStorage.setItem("position", num);

    $('#myblock').attr('src', '../Data/'+localStorage.getItem("position")+'.jpg');

    $('#myblock').fadeIn(1000)
  })

  // down event listener
  $('.down').click(function() {
    $('#myblock').hide();
    if (localStorage.getItem("position") === null) {
      localStorage.setItem("position", "010");
    }
    raw = localStorage.getItem("position");
    inc = 1;
    i = 2;
    while (raw.charAt(i) == "0" && i >= 0) {
      inc *= 10;
      i--;
    }
    num = parseInt(raw, 10) - inc;
    num = num + "";
    for (var i = 0; i < 3 - num.length; i++) {
      num = "0" + num;
    }
    localStorage.setItem("position", num);

    $('#myblock').attr('src', '../Data/'+localStorage.getItem("position")+'.jpg');

    $('#myblock').fadeIn(1000)
  })

  // left event listener
  $('.left').click(function() {
    $('#myblock').hide();
    if (localStorage.getItem("position") === null) {
      localStorage.setItem("position", "010");
    }
    num = "";
    raw = localStorage.getItem("position");
    console.log(raw)
    tmp = raw.charAt(0);
    for (var i = 0; i < raw.length - 1; i++) {
      num += raw.charAt(i+1);
    }
    num += tmp;
    console.log(num)
    localStorage.setItem("position", num);

    $('#myblock').attr('src', '../Data/'+localStorage.getItem("position")+'.jpg');

    $('#myblock').fadeIn(1000)
  })

  // right event listener
  $('.right').click(function() {
    $('#myblock').hide();
    if (localStorage.getItem("position") === null) {
      localStorage.setItem("position", "010");
    }
    raw = localStorage.getItem("position");
    console.log(raw)
    num = "" + raw.charAt(raw.length - 1);
    for (var i = 0; i < raw.length - 1; i++) {
      num += raw.charAt(i);
    }
    console.log(num)
    localStorage.setItem("position", num);

    $('#myblock').attr('src', '../Data/'+localStorage.getItem("position")+'.jpg');

    $('#myblock').fadeIn(1000)
  })

  // DEBUG MODE only
  localStorage.clear();
});
