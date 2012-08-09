$('.carousel').carousel();
$(".collapse").collapse();

function fadeUp(){
  $('#wrap').addClass('loaded');
  $('.sonic').fadeOut(1000);

  $('.sonic').transition({ opacity:0 }, function(){
    console.log('yay')
  })
}

setTimeout(fadeUp, 1000);

$(window).on('load', function(){
  // Do nothing in development
});

var ui_tr_end;  // transition ends
