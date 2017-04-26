$(document).ready(function () {
	$.each($('#text-slider').find('.col-sm-3'), function () {
		$('#slider-element').append('<li>' + $(this).html() + '</li>');
	})

	$(window).on("load", function () {
		$('.bl2 .flexslider').flexslider({
			animation: "slide"
		});
	}); 

	$(window).on("load", function () {
		$('.bl3 .flexslider').flexslider({
			animation: "slide"
		});
	});

	
	$('.cmn-toggle-switch__htx').on('click', function (e) {
		e.preventDefault();
		$('#logo, .street ').slideToggle();
	});
	$(window).resize(function () {
		var wid = $(window).width();
		if (wid > 480 && $('#logo, .street ').is(':hidden')) {
			$('#logo, .street ').removeAttr('style');
		}
	});
	(function () {
		var toggles = document.querySelectorAll(".cmn-toggle-switch");
		for (var i = toggles.length - 1; i >= 0; i--) {
			var toggle = toggles[i];
			toggleHandler(toggle);
		};

		function toggleHandler(toggle) {
			toggle.addEventListener("click", function (e) {
				e.preventDefault();
				(this.classList.contains("active") === true) ? this.classList.remove("active"): this.classList.add("active");
			});
		}
	})();

	google.maps.event.addDomListener(window, 'load', init);

	function init() {
		var mapOptions = {
			zoom: 13,
			scrollwheel: false,
			scaleControl: false,
			draggable: false,
			streetViewControl: false,
			mapTypeControl: false,
			center: new google.maps.LatLng(50.4634708, 30.5163817),
			styles: [{
				"featureType": "water",
				"elementType": "geometry",
				"stylers": [{
					"color": "#e9e9e9"
				}, {
					"lightness": 17
				}]
			}, {
				"featureType": "landscape",
				"elementType": "geometry",
				"stylers": [{
					"color": "#f5f5f5"
				}, {
					"lightness": 20
				}]
			}, {
				"featureType": "road.highway",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#ffffff"
				}, {
					"lightness": 17
				}]
			}, {
				"featureType": "road.highway",
				"elementType": "geometry.stroke",
				"stylers": [{
					"color": "#ffffff"
				}, {
					"lightness": 29
				}, {
					"weight": 0.2
				}]
			}, {
				"featureType": "road.arterial",
				"elementType": "geometry",
				"stylers": [{
					"color": "#ffffff"
				}, {
					"lightness": 18
				}]
			}, {
				"featureType": "road.local",
				"elementType": "geometry",
				"stylers": [{
					"color": "#ffffff"
				}, {
					"lightness": 16
				}]
			}, {
				"featureType": "poi",
				"elementType": "geometry",
				"stylers": [{
					"color": "#f5f5f5"
				}, {
					"lightness": 21
				}]
			}, {
				"featureType": "poi.park",
				"elementType": "geometry",
				"stylers": [{
					"color": "#dedede"
				}, {
					"lightness": 21
				}]
			}, {
				"elementType": "labels.text.stroke",
				"stylers": [{
					"visibility": "on"
				}, {
					"color": "#ffffff"
				}, {
					"lightness": 16
				}]
			}, {
				"elementType": "labels.text.fill",
				"stylers": [{
					"saturation": 36
				}, {
					"color": "#333333"
				}, {
					"lightness": 40
				}]
			}, {
				"elementType": "labels.icon",
				"stylers": [{
					"visibility": "off"
				}]
			}, {
				"featureType": "transit",
				"elementType": "geometry",
				"stylers": [{
					"color": "#f2f2f2"
				}, {
					"lightness": 19
				}]
			}, {
				"featureType": "administrative",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#fefefe"
				}, {
					"lightness": 20
				}]
			}, {
				"featureType": "administrative",
				"elementType": "geometry.stroke",
				"stylers": [{
					"color": "#fefefe"
				}, {
					"lightness": 17
				}, {
					"weight": 1.2
				}]
			}]
		};

		var mapElement = document.getElementById('map');
		var map = new google.maps.Map(mapElement, mapOptions);
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(50.4634708, 30.5163817),
			map: map,
			raiseOnDrag: false,

		});
		marker.setMap(null);
	}

});