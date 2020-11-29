
$(document).ready(function(){
  //---------------------------------------login-----------------
  //loginbtn
  $("#loginbtn").button();
  //when login button clicked
  $("#loginbtn").click(function(){
    var userName = $("#userName").val();
    var pw = $("#passWord").val();
    var theForm = $("#login_form")

    //validatoin
    if(userName == "" || pw == ""){
      alert("Empty Input field please try again");
    }
    else{
      theForm.submit();
    }
  });

  //-------------------------weight-input---------------------
  //date picker
  $("#date").datepicker();
  $("#weightbtn").button();
  //when submit button clicked
  $("#weightbtn").click(function(){
    var weight = $("user_weight");
    var date = $("user_date");
    var theForm = $("#input_form");
    
    if(weight == "" || date==""){
      alert("Empty Input field please try again");
    }
    else {
      theForm.submit();
    }
  });
  //------------------------register user---------------------
  $("#registerbtn").button();
  //when button clicked
  $("#registerbtn").click(function(){
    var userName = $("user_name").val();
    var pw = $("#password").val();
    var first_name = $("first_name").val();
    var last_name = $("last_name").val();
    var theForm = $("#register_form");

    //validation
    if(userName == "" || pw == "" || first_name == "" || last_name == ""){
      alert("Empty Input field please try again");
    }
    else{
      theForm.submit();
    }
  });

  //---------------------navbar links-------------------------
  //array of all link id's
  var linkarr = ("#home", "#chart", "#bmi", "#inputWeight", "#loginlnk", "#registerlnk");
  //function to remove active style change and reactivate link
  function changeActive(){

  }
  //change styles and make links unclickable if clicked
  //$("#home").click(fu
}); // end ready
