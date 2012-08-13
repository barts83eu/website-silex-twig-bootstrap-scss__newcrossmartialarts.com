$('.carousel').carousel();
$(".collapse").collapse();
//$('#js-news').ticker();

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

// cross domain feeds dont work yet
// $(function () {
//     $('#js-news').ticker({
//         htmlFeed: false,
//         ajaxFeed: true,
//         feedUrl: 'https://api.twitter.com/1/statuses/user_timeline.rss?screen_name=NewCrossJudo',
//         feedType: 'xml'
//     });
// });

