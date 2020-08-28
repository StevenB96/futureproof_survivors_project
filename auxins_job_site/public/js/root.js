$(document).ready(function() {
  // Root Stuff
  $("#rootFooter").css({
    'height': ($("#rootHeader").height() + 'px')
  });
  $("#rootBody").css({
    'grid-template-rows': ('auto auto' + $("#rootHeader").height() + 'px')
  });
  $("table *, .rootP").css({
    'font-size': ($("#rootHeader").width()/55.8 + 'px')
  });
  $("table").css({
    'border-spacing': ($("#rootHeader").width()/446.4 + 'px')
  });
  $("div table td, div table th").css({
    'padding': ('0px ' + $("#rootHeader").width()/178.56 + 'px')
  });

  // Page Stuff
  $(".dropdown-menu-right > a").css({
    'min-width': ($(".btn-group").width()-1 + 'px')
  });
  $(".pageNav").css({
    'height': ($("#rootHeader").height()*0.3844 + 'px')
  });
  $(".dropdown-menu-right").css({
    'top': ($("#rootHeader").width()/10 + 'px')
  });
  $(".pageA, .pageStrong, .pageButton").css({
    'font-size': ($("#rootHeader").width()/37.2 + 'px')
  });

  //Index Stuff
  originalHeight = $(document).height()
  originalWidth = $("#rootHeader").width()
  console.log((((2**0.5)*originalWidth)-originalHeight))
  $(".indexMain").css({
    'height': (((Math.sqrt(2)*originalWidth)-originalHeight) + 'px')
  });
  $("#registrationForm").css({
    'left': "calc(" + ($(window).width()/2 + 'px') + " - 31%" + ")"
  })
});
$(window).on('resize', function(){
    // Root Stuff
  $("#rootFooter").css({
    'height': ($("#rootHeader").height() + 'px')
  });
  $("#rootBody").css({
    'grid-template-rows': ('auto auto' + $("#rootHeader").height() + 'px')
  });
  $("table *, .rootP").css({
    'font-size': ($("#rootHeader").width()/55.8 + 'px')
  });
  $("table").css({
    'border-spacing': ($("#rootHeader").width()/446.4 + 'px')
  });
  $("div table td, div table th").css({
    'padding': ('0px ' + $("#rootHeader").width()/178.56 + 'px')
  });

  // Page Stuff
  $(".dropdown-menu-right > a").css({
    'min-width': ($(".btn-group").width()-1 + 'px')
  });
  $(".pageNav").css({
    'height': ($("#rootHeader").height()*0.3844 + 'px')
  });
  $(".dropdown-menu-right").css({
    'top': ($("#rootHeader").width()/10 + 'px')
  });
  $(".pageA, .pageStrong, .pageButton").css({
    'font-size': ($("#rootHeader").width()/37.2 + 'px')
  });
  $(".pageA, .pageStrong, .pageButton").css({
    'font-size': ($("#rootHeader").width()/37.2 + 'px')
  });

  //Index Stuff
  $(".indexMain").css({
    'height': (((Math.sqrt(2)*$("#rootHeader").width())-originalHeight*($("#rootHeader").width()/originalWidth)) + 'px')
  });
  $("#registrationForm").css({
    'left': "calc(" + ($(window).width()/2 + 'px') + " - 31%" + ")"
  })
});
