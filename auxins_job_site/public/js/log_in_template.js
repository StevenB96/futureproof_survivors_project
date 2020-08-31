function publicPage () {
  alert('You must be logged out to access this page, you will be redirected to the about page.');
  window.location.href='http://127.0.0.1:8000/about';
}

$(document).ready(function() {
  originalHeight = $(document).height()
  originalWidth = $("#rootHeader").width()
  /* Log In Template Stuff */
  // Scale all main elements based off the index template to give the page the same ratio as an A4 piece of paper.
  $("#logInTemplateMain").css({
    'height': (((Math.sqrt(2)*originalWidth)-originalHeight*(originalWidth/originalHeight)) + 'px')
  });

  /* Register and Log In Stuff */
  // Specify registration form position and width.
  $("#registrationForm").css({
    'left': (($(window).width()/2-originalWidth*0.31) + 'px'),
    'width': ($("#rootHeader").width()*0.62 + 'px')
  })
  // Specify login form position and width.
  $("#loginForm").css({
    'left': (($(window).width()/2-originalWidth*0.31) + 'px'),
    'width': (originalWidth*0.62 + 'px')
  })
  // Input height.
  $("#registrationForm > div > input, #loginForm > div > input").css({
    'height': (originalWidth/22.32 + 'px')
  })
  $("input[type='checkbox'], input[type='submit'").css({
    'width': (originalWidth/59.52 + 'px'),
    'height': (originalWidth/59.52 + 'px')
  })
  $("button[type='submit']").css({
    'height': (originalWidth/22.32 + 'px')
  });
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
  updatedHeight = $(document).height()
  updatedWidth = $("#rootHeader").width()
  /* Log In Template Stuff */
  // Scale all main elements based off the index template to give the page the same ratio as an A4 piece of paper.
  $("#logInTemplateMain").css({
    'height': (((Math.sqrt(2)*updatedWidth)-updatedHeight*(updatedWidth/updatedHeight)) + 'px')
  });

  /* Register and Log In Stuff */
  // Specify registration form position and width.
  $("#registrationForm").css({
    'left': (($(window).width()/2-updatedWidth*0.31) + 'px'),
    'width': (updatedWidth*0.62 + 'px')
  })
  // Specify login form position and width.
  $("#loginForm").css({
    'left': (($(window).width()/2-updatedWidth*0.31) + 'px'),
    'width': (updatedWidth*0.62 + 'px')
  })
  // Input height.
  $("#registrationForm > div > input, #loginForm > div > input").css({
    'height': (updatedWidth/22.32 + 'px')
  })
  $("input[type='checkbox']").css({
    'width': (updatedWidth/59.52 + 'px'),
    'height': (updatedWidth/59.52 + 'px')
  });
  $("button[type='submit']").css({
    'height': (updatedWidth/22.32 + 'px')
  });
});