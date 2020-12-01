
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
  $("#date").datepicker({dateFormat:'yy-mm-dd'});
  $("#weightbtn").button();
  //when submit button clicked
  $("#weightbtn").click(function(){
    var weight = $("#weight").val();
    var date = $("#date").val();
    var feet = $("#feet").val();
    var inches = $("#inches").val();
    var theForm = $("#weight_input");

    if(weight == "" || date=="" || feet == "" || inches == ""){
      alert("Empty Input field please try again");
    }
    else {
      theForm.submit();
    }
  }); //end click function

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
  }); //end click function

}); // end ready
