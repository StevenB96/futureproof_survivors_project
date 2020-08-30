function anchorGuest (event) {
  event.preventDefault();
  event.stopPropagation();
  if (window.confirm('You must be logged in to use this feature, clicking OK will take you to the registration page.')) {window.location.href='http://127.0.0.1:8000/register';
  }
}

function privatePage () {
  alert('You must be logged in to access this page, you will be redirected to the registration page.');
  window.location.href='http://127.0.0.1:8000/register';
}

function publicPage () {
  alert('You must be logged out to access this page, you will be redirected to the about page.');
  window.location.href='http://127.0.0.1:8000/about';
}

$(document).ready(function() {
  // Root Stuff
  // Set the root footer height equal to the root header.
  $("#rootFooter").css({
    'height': ($("#rootHeader").height() + 'px')
  });
  // Set root's final gird row height equal to the root header.
  $("#rootBody").css({
    'grid-template-rows': ('auto auto' + $("#rootHeader").height() + 'px')
  });
  // Scale fonts relative to the root header's width.
  $("table *, .rootP").css({
    'font-size': ($("#rootHeader").width()/55.8 + 'px')
  });
  // Scale table border spacing relative to the root header's width.
  $("table").css({
    'border-spacing': ($("#rootHeader").width()/446.4 + 'px')
  });
  // Scale padding relative to the root header's width.
  $("div table td, div table th").css({
    'padding': ('0px ' + $("#rootHeader").width()/178.56 + 'px')
  });

  // Page Stuff
  // Set the minimum width of the drop down menu to the width of the button group that spawns it.
  $(".dropdown-menu-right > a").css({
    'min-width': ($(".btn-group").width() + 'px')
  });
  // Scale the primmary navbar's height relative to the root header's height.
  $(".primmaryNav").css({
    'height': ($("#rootHeader").height()*0.3844 + 'px')
  });
  // Scale the primmary navbar's relative position relative to the root header's width.
  $(".dropdown-menu-right").css({
    'top': ($("#rootHeader").width()/10.5 + 'px')
  });
  // Scale fonts relative to the root header's width.
  $(".navA, .navStrong, .navButton, .indexText").css({
    'font-size': ($("#rootHeader").width()/37.2 + 'px')
  });
});

$(window).on('resize', function(){
  // Root Stuff
  // Set the root footer height equal to the root header.
  $("#rootFooter").css({
    'height': ($("#rootHeader").height() + 'px')
  });
  // Set root's final gird row height equal to the root header.
  $("#rootBody").css({
    'grid-template-rows': ('auto auto' + $("#rootHeader").height() + 'px')
  });
  // Scale fonts relative to the root header's width.
  $("table *, .rootP").css({
    'font-size': ($("#rootHeader").width()/55.8 + 'px')
  });
  // Scale table border spacing relative to the root header's width.
  $("table").css({
    'border-spacing': ($("#rootHeader").width()/446.4 + 'px')
  });
  // Scale padding relative to the root header's width.
  $("div table td, div table th").css({
    'padding': ('0px ' + $("#rootHeader").width()/178.56 + 'px')
  });

  // Page Stuff
  // Set the minimum width of the drop down menu to the width of the button group that spawns it.
  $(".dropdown-menu-right > a").css({
    'min-width': ($(".btn-group").width() + 'px')
  });
  // Scale the primmary navbar's height relative to the root header's height.
  $(".primmaryNav").css({
    'height': ($("#rootHeader").height()*0.3844 + 'px')
  });
  // Scale the primmary navbar's relative position relative to the root header's width.
  $(".dropdown-menu-right").css({
    'top': ($("#rootHeader").width()/10.5 + 'px')
  });
  // Scale fonts relative to the root header's width.
  $(".navA, .navStrong, .navButton, .indexText").css({
    'font-size': ($("#rootHeader").width()/37.2 + 'px')
  });
});
