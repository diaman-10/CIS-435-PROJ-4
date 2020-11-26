
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

  //---------------------navbar links-------------------------
  //array of all link id's
  var linkarr = ("#home", "#chart", "#bmi", "#inputWeight", "#loginlnk", "#registerlnk");
  //function to remove active style change and reactivate link
  function changeActive(){

  }
  //change styles and make links unclickable if clicked
  //$("#home").click(fu
}); // end ready
