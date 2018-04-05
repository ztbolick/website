$(document).ready(function(){
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
      if (scroll > 1) {
        $('#navbar').addClass("scrolled");
      }
      else{
        $('#navbar').removeClass("scrolled");
        $('#navbar').addClass("not-scrolled");
      }
    });

  $('#calendar').fullCalendar({
      googleCalendarApiKey: 'AIzaSyDEvmCtCU7bnp6b_kOJCT-3Wq3q2BaD10I',
      events: {
          googleCalendarId: 'cscmesa@gmail.com',
          color: '#3BC9BB',
          textColor: 'white'
      },

      eventClick: function(event, jsEvent, view){
        $('#modalTitle').html(event.title);
        $('#modalBody').html('<b>Time</b><br>' + moment(event.start).format("MMMM DD, YYYY h:mm a") + ' - ' + moment(event.end).format("h:mm a")
                           + '<br><br><b>Description</b><br>' + event.description + '<br><br>'
                           + '<b>Location</b><br>' + event.location);
        $('#eventURL').attr('href', event.url);
        $('#calModal').modal();
        return false;
      }
  });
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000);
    } // End if
  });
  $('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
  });
});
