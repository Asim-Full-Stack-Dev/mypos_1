/*------------------------------------------------------------------
    File Name: custom.js
    Template Name: Quantic - Responsive HTML5 Template
-------------------------------------------------------------------*/

/*------------- wow animation -------------*/

new WOW().init();

/*------------- loader js -------------*/

// $("body").prepend('<div id="preloader"><div class="spinner-sm spinner-sm-1" id="status"><img src="images/loader_icon.png" alt="#" /></div></div>');
$(window).on('load', function() { // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(150).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(150).css({
        'overflow': 'visible'
    });
})

/*------------- menu js -------------*/

$("#navbar_menu").menumaker({
	title: "Menu",
	format: "multitoggle"
});

/*------------- counter js -------------*/

var a = 0;
$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-count').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {
          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    a = 1;
  }

});

/*------------- owl slider -------------*/

$(document).ready(function() {

    /** half slider **/

    var owl = $('.owl-carousel_haf');
    owl.owlCarousel({
        stagePadding: 50,
        margin: 61,
        nav: true,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    })



})

/*------------- progress_bar js -------------*/

	 $(document).ready(function() {
      $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
        )
    });

/*------------- google_map js -------------*/


      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Australia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: {lat: 40.645037, lng: -73.880224},
      styles: [
               {
                 elementType: 'geometry',
                 stylers: [{color: '#fefefe'}]
               },
               {
                 elementType: 'labels.icon',
                 stylers: [{visibility: 'off'}]
               },
               {
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#616161'}]
               },
               {
                 elementType: 'labels.text.stroke',
                 stylers: [{color: '#f5f5f5'}]
               },
               {
                 featureType: 'administrative.land_parcel',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#bdbdbd'}]
               },
               {
                 featureType: 'poi',
                 elementType: 'geometry',
                 stylers: [{color: '#eeeeee'}]
               },
               {
                 featureType: 'poi',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#757575'}]
               },
               {
                 featureType: 'poi.park',
                 elementType: 'geometry',
                 stylers: [{color: '#e5e5e5'}]
               },
               {
                 featureType: 'poi.park',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#9e9e9e'}]
               },
               {
                 featureType: 'road',
                 elementType: 'geometry',
                 stylers: [{color: '#eee'}]
               },
               {
                 featureType: 'road.arterial',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#3d3523'}]
               },
               {
                 featureType: 'road.highway',
                 elementType: 'geometry',
                 stylers: [{color: '#eee'}]
               },
               {
                 featureType: 'road.highway',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#616161'}]
               },
               {
                 featureType: 'road.local',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#9e9e9e'}]
               },
               {
                 featureType: 'transit.line',
                 elementType: 'geometry',
                 stylers: [{color: '#e5e5e5'}]
               },
               {
                 featureType: 'transit.station',
                 elementType: 'geometry',
                 stylers: [{color: '#000'}]
               },
               {
                 featureType: 'water',
                 elementType: 'geometry',
                 stylers: [{color: '#c8d7d4'}]
               },
               {
                 featureType: 'water',
                 elementType: 'labels.text.fill',
                 stylers: [{color: '#b1a481'}]
               }
             ]
    });

        var image = 'images/marker.png';
        var beachMarker = new google.maps.Marker({
          position: {lat: 40.645037, lng: -73.880224},
          map: map,
          icon: image
        });
      }


