$(document).ready(function() {
  //Index Stuff
  originalHeight = $(document).height()
  originalWidth = $("#rootHeader").width()
  console.log((((2**0.5)*originalWidth)-originalHeight))
  $(".indexMain").css({
    'height': (((Math.sqrt(2)*originalWidth)-originalHeight) + 'px')
  });
  $("#registrationForm").css({
    'left': (($(window).width()/2-$("#rootHeader").width()*0.31) + 'px'),
    'width': ($("#rootHeader").width()*0.62 + 'px')
  })
  $("#loginForm").css({
    'left': (($(window).width()/2-$("#rootHeader").width()*0.31) + 'px'),
    'width': ($("#rootHeader").width()*0.62 + 'px')
  })
});
$(window).on('resize', function(){
  //Index Stuff
  $(".indexMain").css({
    'height': (((Math.sqrt(2)*$("#rootHeader").width())-originalHeight*($("#rootHeader").width()/originalWidth)) + 'px')
  });
  $("#registrationForm").css({
    'left': (($(window).width()/2-$("#rootHeader").width()*0.31) + 'px'),
    'width': ($("#rootHeader").width()*0.62 + 'px')
  })
  $("#loginForm").css({
    'left': (($(window).width()/2-$("#rootHeader").width()*0.31) + 'px'),
    'width': ($("#rootHeader").width()*0.62 + 'px')
  })
});