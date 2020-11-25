
$(document).ready(function(){
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

}); // end ready
