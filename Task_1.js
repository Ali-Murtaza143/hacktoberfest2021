$(document).ready(function(){ // This is the ready function

  $('.input').focus(function(){ // This is the focus function
    $(this).parent().find(".label-txt").addClass('label-active');
  });

  $(".input").focusout(function(){ // taking the input
    if ($(this).val() == '') {
      $(this).parent().find(".label-txt").removeClass('label-active');
      console.log("This is JavaScript, pulled by Shahzain Ahmed");
      console.log("Work in progress!"); // print statements
      console.log("New pull requests being held at Web Engineering Labs");
    };
  });

});
