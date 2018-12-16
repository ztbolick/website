/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

;

(function (window, document, undefined) {
  'use strict';

  $(document).ready(function () {
    ourTeamInit(2018);
    $(window).scroll(function () {
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
    $('.magictab').click(function () {
      var selectedYear = this.innerHTML;
      ourTeamInit(selectedYear);
    });

    function ourTeamInit(yearArgs) {
      var imgPath = 'https://cscmesa.com/static/our-team/';
      var officerYear = yearArgs;
      var officerObj = {
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
        success: function success(data) {
          data = JSON.parse(data);
          var HTMLUpdate = '';

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

            var teamDiv = "<div class=\"col-md-3 my-2\">\n          <div class=\"card shadow\">\n          <img src=\"" + imgPath + officerYear + "/" + data[i] + "\" alt=\"" + officerObj[officerYear].officers[i].officerName + "\" class=\"img-fluid card-img-top\">\n          <div class=\"card-body\">\n            <h5 class=\"card-title mt-3\">" + officerObj[officerYear].officers[i].officerTitle + "</h5>\n            <p class=\"card-text\">" + officerObj[officerYear].officers[i].officerName + "</p>\n          </div>\n          </div>\n        </div>";
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
            } // console.log(HTMLUpdate);

          }

          $('#team').replaceWith('<div id="team">' + HTMLUpdate + '</div>'); // $('#team').append(HTMLUpdate);
          // console.log(HTMLUpdate);
        },
        error: function error(data) {
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
      eventClick: function eventClick(event, jsEvent, view) {
        $('#modalTitle').html(event.title);
        $('#modalBody').html('<b>Time</b><br>' + moment(event.start).format("MMMM DD, YYYY h:mm a") + ' - ' + moment(event.end).format("h:mm a") + '<br><br><b>Description</b><br>' + event.description + '<br><br>' + '<b>Location</b><br>' + event.location);
        $('#eventURL').attr('href', event.url);
        $('#calModal').modal();
        return false;
      }
    }); // Add smooth scrolling to all links

    $("a").on('click', function (event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault(); // Store hash

        var hash = this.hash; // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area

        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 1000);
      } // End if

    });
    $('.navbar-nav>li>a').on('click', function () {
      $('.navbar-collapse').collapse('hide');
    });
  });
})(window, document);

/***/ }),

/***/ 1:
/*!************************************!*\
  !*** multi ./resources/js/main.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Applications/XAMPP/xamppfiles/htdocs/cscmesa/dev/resources/js/main.js */"./resources/js/main.js");


/***/ })

/******/ });