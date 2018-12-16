;(function(window, document, undefined) {
    'use strict';
    $(document).ready(function() {
        ourTeamInit(2018);
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > 1) {
                $('#csclogo').removeClass("cscLogo-notScrolled");
                $('#csclogo').addClass("cscLogo-scrolled");
                $('#navbar').removeClass("not-scrolled");
                $('#navbar').addClass("scrolled");
                $('#topdiv').addClass("mt-5");
            } else {
                $('#csclogo').removeClass("cscLogo-scrolled");
                $('#csclogo').addClass("cscLogo-notScrolled");
                $('#navbar').removeClass("scrolled");
                $('#navbar').addClass("not-scrolled");
                $('#topdiv').removeClass("mt-5");
            }
        });
        $('.magictab').click(function() {
            let selectedYear = this.innerHTML;
            ourTeamInit(selectedYear);
        });

        function ourTeamInit(yearArgs) {
            let imgPath = 'https://cscmesa.com/static/our-team/';
            let officerYear = yearArgs;
            let officerObj = {
                2017: {
                    officers: [{
                        officerTitle: 'President',
                        officerName: 'Preston Reed'
                    }, {
                        officerTitle: 'Vice President',
                        officerName: 'Devon Rojas'
                    }, {
                        officerTitle: 'Vice President',
                        officerName: 'Marehan Waly'
                    }, {
                        officerTitle: 'Secretary',
                        officerName: 'Brandon Minjares'
                    }, {
                        officerTitle: 'Treasurer',
                        officerName: 'Gabriel Bettinelli'
                    }, {
                        officerTitle: 'Events Chair',
                        officerName: 'Katherine Solchaga'
                    }]
                },
                2018: {
                    officers: [{
                        officerTitle: 'President',
                        officerName: 'Devon Rojas'
                    }, {
                        officerTitle: 'Vice President',
                        officerName: 'Yueqi Le'
                    }, {
                        officerTitle: 'Vice President',
                        officerName: 'Natalia Sudjana'
                    }, {
                        officerTitle: 'Secretary',
                        officerName: 'Julio Galan'
                    }, {
                        officerTitle: 'Director of Events',
                        officerName: 'Mahlet Merachew'
                    }, {
                        officerTitle: 'Director of Outreach',
                        officerName: 'Lucy Lee'
                    }, {
                        officerTitle: 'Webmaster',
                        officerName: 'Zac Bolick'
                    }, {
                        officerTitle: 'MesaHacks Committee',
                        officerName: 'Devon Rojas'
                    }, {
                        officerTitle: 'ICC Rep',
                        officerName: 'Sergio Riegas'
                    }, {
                        officerTitle: 'Treasurer',
                        officerName: 'Robin W'
                    }]
                }
            };
            $.ajax({
                url: 'https://cscmesa.com/static/our-team/' + officerYear + '/contents.php',
                success: function(data) {
                    data = JSON.parse(data);
                    let HTMLUpdate = '';
                    for (var i = 0; i < officerObj[officerYear].officers.length; i++) {
                        if (i == 0) {
                            HTMLUpdate += '<div class="row justify-content-center text-center mt-4">';
                        }
                        if (i == 3) {
                            HTMLUpdate += '</div>';
                            HTMLUpdate += '<div class="row justify-content-center text-center mt-4">';
                        }
                        if (i == 6) {
                            HTMLUpdate += '</div>';
                            HTMLUpdate += '<div class="row justify-content-center text-center mt-4">';
                        }
                        if (i == 9) {
                            HTMLUpdate += '</div>';
                            HTMLUpdate += '<div class="row justify-content-center text-center mt-4">';
                        }
                        if (i == 12) {
                            HTMLUpdate += '</div>';
                            HTMLUpdate += '<div class="row justify-content-center text-center mt-4">';
                        }
                        let teamDiv = `<div class="col-md-3 my-2">
          <div class="card shadow">
          <img src="` + imgPath + officerYear + `/` + data[i] + `" alt="` + officerObj[officerYear].officers[i].officerName + `" class="img-fluid card-img-top">
          <div class="card-body">
            <h5 class="card-title mt-3">` + officerObj[officerYear].officers[i].officerTitle + `</h5>
            <p class="card-text">` + officerObj[officerYear].officers[i].officerName + `</p>
          </div>
          </div>
        </div>`;
                        HTMLUpdate += teamDiv;
                        if (officerObj[officerYear].officers.length - 1 == i && i == 2) {
                            HTMLUpdate += '</div>';
                        }
                        if (officerObj[officerYear].officers.length - 1 == i && i == 5) {
                            HTMLUpdate += '</div>';
                        }
                        if (officerObj[officerYear].officers.length - 1 == i && i == 8) {
                            HTMLUpdate += '</div>';
                        }
                        if (officerObj[officerYear].officers.length - 1 == i && i == 11) {
                            HTMLUpdate += '</div>';
                        }
                        // console.log(HTMLUpdate);
                    }
                    $('#team').replaceWith('<div id="team">' + HTMLUpdate + '</div>');
                    // $('#team').append(HTMLUpdate);
                    // console.log(HTMLUpdate);
                },
                error: function(data) {
                    console.log('Change team ajax error');
                }
            });
        }
        $('#calendar').fullCalendar({
            googleCalendarApiKey: 'AIzaSyDEvmCtCU7bnp6b_kOJCT-3Wq3q2BaD10I',
            events: {
                googleCalendarId: 'cscmesa@gmail.com',
                color: '#3BC9BB',
                textColor: 'white'
            },
            eventClick: function(event, jsEvent, view) {
                $('#modalTitle').html(event.title);
                $('#modalBody').html('<b>Time</b><br>' + moment(event.start).format("MMMM DD, YYYY h:mm a") + ' - ' + moment(event.end).format("h:mm a") + '<br><br><b>Description</b><br>' + event.description + '<br><br>' + '<b>Location</b><br>' + event.location);
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
        $('.navbar-nav>li>a').on('click', function() {
            $('.navbar-collapse').collapse('hide');
        });
    });
})(window, document);