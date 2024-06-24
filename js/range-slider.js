$(document).ready(function () {
 
  

  var v1 = 1000;
  var v2 = 50000;

  $("#slider-range").slider({
    range: true,
    min: 1000,
    max: 50000,
    values: [v1, v2],
    slide: function (event, ui) {
      $("#price").html(ui.values[0] + " - " + ui.values[1]);
      v1 = ui.values[0];
      v2 = ui.values[1];
      loadTable(v1, v2);
    },
  });

  $("#price").html(
    $("#slider-range").slider("values", 0) +
      " - " +
      $("#slider-range").slider("values", 1)
  );

  function loadTable(range1, range2) {
  
      $.ajax({
        url: "phpScript/get-data.php",
        type: "POST",
        data: { range1: range1, range2: range2 },
        success: function (data) {
          $("#all_property").html(data);
        },
      });
   
  }

  loadTable(v1, v2);



});

/*===================================================================================================================*/
