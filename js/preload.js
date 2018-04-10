$(document).ready(function(){
  var animIn = anime({
      targets: ['#one', 'line', '#two', '#three'],
      strokeDashoffset: [anime.setDashoffset, 0],
      duration: 600,
      easing: 'easeInOutQuad',
      elasticity: 600,
      delay: function(el, i) { return i * 340 },
      direction: 'alternate',
      loop: true,
    });

  var titleFadeIn = anime({
      targets: 'text',
      opacity: 1,
      delay: 1100,
      easing: 'easeOutQuad',
      duration: 1500,
  });

  $(window).on("load", function(){
    setTimeout(function(){
      $('body').addClass("loaded");
    }, 500);
  });
  if (document.readyState == 'complete') {
    setTimeout(function(){
      $('body').addClass("loaded");
    }, 1000);
  };
});
