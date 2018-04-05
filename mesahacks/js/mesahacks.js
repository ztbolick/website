
$(document).ready(function(){
    // // COUNTDOWN SCRIPT
    //
    // // Set the date we're counting down to
    // var countDownDate = new Date("June 1, 2018 9:00").getTime();
    //
    // // Update the count down every 1 second
    // var x = setInterval(function() {
    //
    //   // Get todays date and time
    //   var now = new Date().getTime();
    //
    //   // Find the distance between now an the count down date
    //   var distance = countDownDate - now;
    //
    //   // Time calculations for days, hours, minutes and seconds
    //   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    //   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    //   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    //   var seconds = Math.floor((distance % (1000 * 60)) / (1000));
    //
    //   // Display the result in the element with id="demo"
    //   document.getElementById("demo").innerHTML = days + " days " + hours + " hours "
    //   + minutes + " minutes " + seconds + " seconds";
    //
    //   // If the count down is finished, write some text
    //   if (distance < 0) {
    //     clearInterval(x);
    //     document.getElementById("demo").innerHTML = "We're live!";
    //   }
    // }, 1000);

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
