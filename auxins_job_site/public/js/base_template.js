function anchorGuest (event) {
  event.preventDefault();
  event.stopPropagation();
  if (window.confirm('You must be logged in to access this page, clicking OK will redirect you to the log in page.')) {window.location.href='http://127.0.0.1:8000/log_in';
  }
}

function privatePage () {
  if (/dcv_builder/i.test(window.location.href) === true || /job_coaching/i.test(window.location.href) === true) {
    alert('You must be logged in to access this page, you will be redirected to the log in page.');
    window.location.href='http://127.0.0.1:8000/log_in';
  }
}

$(document).ready(function() {
  originalHeight = $(document).height();
  originalWidth = $("#baseTemplateHeader").width();
  /* ---Base Template Stuff--- */
  // Set Base Template's final grid row height equal to the Base Template Header.
  $("#baseTemplateFooter").css({
    'height': (originalWidth/4 + 'px')
  });
  // Set Base Template's final grid row height equal to the Base Template Header.
  $("#rootBody").css({
    'grid-template-rows': ('auto auto' + originalWidth/4 + 'px')
  });
  // Scale fonts relative to the Base Template Header's width.
  $(".fontLarge").css({
    'font-size': (originalWidth/49.6 + 'px')
  });
  $(".fontMedium").css({
    'font-size': (originalWidth/55.8 + 'px')
  });
  $(".fontSmall").css({
    'font-size': (originalWidth/68.677 + 'px')
  });
  // Scale padding relative to the Base Template Header's width.
  $("div table td, div table th").css({
    'padding': ('0px ' + originalWidth/89.28 + 'px')
  });

  /* ---About, DCV Builder and Job Coaching Stuff--- */
  // Set the minimum width of the drop down menu to the width of the button group that spawns it.
  $(".dropdown-menu-right > a").css({
      'min-width': ($(".btn-group").width() + 'px')
    });
  // Scale the primmary navbar's height relative to the Base Template Header's height.
  $(".primmaryNav").css({
    'height': (originalWidth/4*0.3844 + 'px')
  });
  // Scale the Border Bottom relative to the Base Template Header's width.
  $(".borderBottom").css({
    'border-bottom': ("solid rgb(41, 43, 44) " + originalWidth/297.6 + 'px')
  });
});

$(window).on('resize', function(){
  updatedHeight = $(document).height()
  updatedWidth = $("#baseTemplateHeader").width()
  /* ---Base Template Stuff--- */
  // Set Base Template's final grid row height equal to the Base Template Header.
  $("#baseTemplateFooter").css({
    'height': (updatedWidth/4 + 'px')
  });
  // Set Base Template's final grid row height equal to the Base Template Header.
  $("#rootBody").css({
    'grid-template-rows': ('auto auto' + updatedWidth/4 + 'px')
  });
  // Scale fonts relative to the Base Template Header's width.
  $(".fontLarge").css({
    'font-size': (updatedWidth/49.6 + 'px')
  });
  $(".fontMedium").css({
    'font-size': (updatedWidth/55.8 + 'px')
  });
  $(".fontSmall").css({
    'font-size': (updatedWidth/68.677 + 'px')
  });
  $("div table td, div table th").css({
    'padding': ('0px ' + updatedWidth/89.28 + 'px')
  });

  /* ---About, DCV Builder and Job Coaching Stuff--- */
  // Set the minimum width of the drop down menu to the width of the button group that spawns it.
  $(".dropdown-menu-right > a").css({
    'min-width': ($(".btn-group").width() + 'px')
  });
    // Scale the primmary navbar's height relative to the Base Template Header's height.
    $(".primmaryNav").css({
      'height': (updatedWidth/4*0.3844 + 'px')
    });
  // Scale the primmary navbar's height relative to the Base Template Header's width.
  $(".borderBottom").css({
    'border-bottom': ("solid rgb(41, 43, 44) " + updatedWidth/297.6 + 'px')
  });
});
