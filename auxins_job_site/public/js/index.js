$(document).ready(function() {
  //Index Stuff
  originalHeight = $(document).height()
  originalWidth = $("#rootHeader").width()
  // Scale all main elements based off the index template to give the page the same ratio as an A4 piece of paper.
  $(".indexMain").css({
    'height': (((Math.sqrt(2)*originalWidth)-originalHeight) + 'px')
  });
  // Specify registration form position and width.
  $("#registrationForm").css({
    'left': (($(window).width()/2-$("#rootHeader").width()*0.31) + 'px'),
    'width': ($("#rootHeader").width()*0.62 + 'px')
  })
  // Specify login form position and width.
  $("#loginForm").css({
    'left': (($(window).width()/2-$("#rootHeader").width()*0.31) + 'px'),
    'width': ($("#rootHeader").width()*0.62 + 'px')
  })
  // Display custom validity notices.
  $("#registerSubmit").click(function(event) {
    event.preventDefault();
    if (($("#password_confirm").val() === "") && ($("#password").val() !== "")) {
      document.getElementById("password_confirm").setCustomValidity("Please fill out this field.");
      document.getElementById("password_confirm").reportValidity()
    } else if ($("#password_confirm").val() !== $("#password").val()) {
      document.getElementById("password_confirm").setCustomValidity("Please ensure your passwords match.");
      document.getElementById("password_confirm").reportValidity();
    } else {
      document.getElementById("registrationForm").submit();
    }
  })
});

$(window).on('resize', function(){
  //Index Stuff
  // Scale all main elements based off the index template to give the page the same ratio as an A4 piece of paper.
  $(".indexMain").css({
    'height': (((Math.sqrt(2)*$("#rootHeader").width())-originalHeight*($("#rootHeader").width()/originalWidth)) + 'px')
  });
  // Specify registration form position and width.
  $("#registrationForm").css({
    'left': (($(window).width()/2-$("#rootHeader").width()*0.31) + 'px'),
    'width': ($("#rootHeader").width()*0.62 + 'px')
  })
  // Specify login form position and width.
  $("#loginForm").css({
    'left': (($(window).width()/2-$("#rootHeader").width()*0.31) + 'px'),
    'width': ($("#rootHeader").width()*0.62 + 'px')
  })
});