
//Search fucntion for reservation page
$(function(){
  
  $("#form-reservation-search").on("submit", function(e){
    e.preventDefault();
    $.ajax({
      url: "script/reservation-search.php",
      type: 'POST',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      success: function(feedback){
        $("#result").html(feedback);
      }
    });
  });
});

//Modal Data
$(function(){
  
    $("#form-reservation-data").on("submit", function(e){
      e.preventDefault();
      $.ajax({
        url: "script/reservation-data.php",
        type: 'GET',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        success: function(feedback){
          $("#result").html(feedback);
        }
      });
    });
  });
