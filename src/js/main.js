$(document).ready(function(){
  var animateButton = function(e) {

    e.preventDefault;
    //reset animation
    e.target.classList.remove('animate');

    e.target.classList.add('animate');
    setTimeout(function(){
      e.target.classList.remove('animate');
    },700);
  };

  var bubblyButtons = document.getElementsByClassName("bubbly-button");

  for (var i = 0; i < bubblyButtons.length; i++) {
    bubblyButtons[i].addEventListener('click', animateButton, false);
  }


});


$(document).ready(function($) {

var $event = $.event,
  $special,
  resizeTimeout;

$special = $event.special.debouncedresize = {
  setup: function() {
    $( this ).on( "resize", $special.handler );
  },
  teardown: function() {
    $( this ).off( "resize", $special.handler );
  },
  handler: function( event, execAsap ) {
    // Save the context
    var context = this,
      args = arguments,
      dispatch = function() {
        // set correct event type
        event.type = "debouncedresize";
        $event.dispatch.apply( context, args );
      };

    if ( resizeTimeout ) {
      clearTimeout( resizeTimeout );
    }

    execAsap ?
      dispatch() :
      resizeTimeout = setTimeout( dispatch, $special.threshold );
  },
  threshold: 150
};




// END debouncedresize


// resize logic

var ww = $(window).width();               // window width
var bpo = 640;                            // breaking point
var tot = $('.topbar .toggle');           // topbar toggle button
var ddl = $('.topbar .dropdown ul');      // dropdown list
var nav = $('.nav');                      // root ul navigation
var ddt = $('.topbar .dropdown > a');     // dropdown trigger

// toggle topbar
tot.click(function(ev){
  ev.preventDefault();
  nav.slideToggle()
});

// if mobile
if(!!('ontouchstart' in window)){
  clickOn();
} else {
  $(window).on("debouncedresize", function(event){
    ww = $(window).width(); // reset ww
    if (ww > bpo) {
      clickOff();
    } else {
      clickOn();
    };
  });
};

function clickOn() {
  nav.hide();
  ddl.css('display', 'none');
  tot.next().css('display', 'none');

  var ev = $._data(ddt[0], 'events');
  if (ev && ev.click) {
    // click already bounded do nothing
  } else {
    ddt.click(function(ev){
      ev.preventDefault();
      $(this).next().slideToggle();
      $(this).parent().siblings().children().next().slideUp();
      return false;
    });
  }
  return false;
}

function clickOff() {
  nav.show();
  ddl.removeAttr('style');
  ddt.off('click');
  return false;
}
});
