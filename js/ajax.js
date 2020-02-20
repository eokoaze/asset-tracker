//Search fucntion for the home page
$(function(){
  
  $("#search").on("submit", function(e){
    e.preventDefault();
    $.ajax({
      url: "script/search.php",
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

//Retrieve Password
$(function(){
  
  $("#ret_pword").on("submit", function(e){
    e.preventDefault();
    $.ajax({
      url: "script/password.php",
      type: 'POST',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      success: function(feedback){
        if(feedback == "success")
        {
          $('#ret_pword').html("<b>Hi User, Your password has been sent to your registered email address, please proceed to your mailbox.</b>");
        }
        else
        {
          $("#result").html(feedback);
        }
      }
    });
  });
});



//Add Guard Page Function
$(function(){
  
  $("#add_guard").on("submit", function(e){
    e.preventDefault();
    $.ajax({
      url: "script/add_guard_exe.php",
      type: 'POST',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      success: function(data){
        if(data == "password")
        {
          $("#pword").val("");
          $("#c_pword").val("");
          $("#pword").focus();
          $("#result").html("Password Match Error!");
        }
        else if(data == "user")
        {
          $("#email").val("");
          $("#name").val("");
          $("#email").focus();
          $("#result").html("Security Guard with this ID already exist!");
        }
        else if(data == "success")
        {
          alert("Security Guard Successfully Added!!!");
        }
        else
        {
          $("#add_guard_data").css("color","#0066CC");
          $("#add_guard_data").html(data);
        }
      }
    });
  });
});



//Add Staff Page Function
$(function(){
  
  $("#add_staff").on("submit", function(e){
    e.preventDefault();
    $.ajax({
      url: "script/add_staff_exe.php",
      type: 'POST',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      success: function(data){        
        if(data == "user")
        {
          $("#email").val("");
          $("#lname").val("");
          $("#fname").val("");
          $("#department").val("");
          $("#id").focus();
          $("#result").html("Staff with this ID already exist!");
        }
        else if(data == "email")
        {
          $("#email").val("");
          $("#email").focus();
          $("#id").val("");
          $("#fname").val("");
          $("#lname").val("");
          $("#result").html("Invalid Email Format!")
        }
        else if(data == "success")
        {
          alert("New Staff Successfully Added!!!");
        }
        else
        {
          $("#add_staff_data").css("color","#0066CC");
          $("#add_staff_data").html(data);
        }
      }
    });
  });
});



//Add PC Page Function
$(function(){
  
  $("#add_pc").on("submit", function(e){
    e.preventDefault();
    $.ajax({
      url: "script/add_pc_exe.php",
      type: 'POST',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      success: function(data){
       if(data == "user")  {
          $("#pcNo").val("");
          $("#pcName").val("");
          $("#serialNo").val("");
          $("#desc").val("");
          $("#pcNo").focus();
          $("#result").html("This PC Number Already Exist!");
        }
        else if(data == "success")   {
          alert("New PC Successfully Added!!!");
        }
        else    {
          $("#add_pc_data").css("color","#0066CC");
          $("#add_pc_data").html(data);
        }
      }
    });
  });
});



//Assign PC Page Function
$(function(){
  
  $("#assign_pc").on("submit", function(e){
    e.preventDefault();
    $.ajax({
      url: "script/assign_pc_exe.php",
      type: 'POST',
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      success: function(data){
       if(data == "exist")  {
          $("#result").html("PC Already Assigned to a User!");
        }
        else if(data == "success")   {
          alert("PC Assigned Successfully!!!");
        }
        else    {
          $("#assign_pc_data").css("color","#0066CC");
          $("#assign_pc_data").html(data);
        }
      }
    });
  });
});



//Track fucntion for the Administrator
$(function(){
  
  $("#track").on("submit", function(e){
    e.preventDefault();
    $.ajax({
      url: "script/tracker_exe.php",
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