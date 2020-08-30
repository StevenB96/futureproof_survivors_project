function publicPage () {
  alert('You must be logged out to access this page, you will be redirected to the about page.');
  window.location.href='http://127.0.0.1:8000/about';
}

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
  $("#registrationForm").submit(function(event) {
    event.preventDefault();
    // Ensure quality of passwords.
    if (((/[A-Z]/.test(document.getElementById("password").value) === false) || (/[0-9]/.test(document.getElementById("password").value) === false) || ((document.getElementById("password").value.length > 7) === false))) {
      document.getElementById("password").setCustomValidity("Passwords must contain a minimum of: eight characters, one digit and one capital letter.");
      document.getElementById("password").reportValidity();     
    // Ensure passwords match.
    } else if (document.getElementById("password_confirm").value !== document.getElementById("password").value) {
      document.getElementById("password_confirm").setCustomValidity("Please ensure your passwords match.");
      document.getElementById("password_confirm").reportValidity();
    } else {
      document.getElementById("registrationForm").submit();
    }
  });
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