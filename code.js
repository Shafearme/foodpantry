  var markers = [];
  var in_area = [];
  var autocomplete;

  var geocoder = new google.maps.Geocoder();

  autocomplete = new google.maps.places.Autocomplete((document.getElementById('locator_text')));

  var map = new google.maps.Map(document.getElementById('map'), {
    center: {
      lat: 42.3601,
      lng: -71.0589
    },
    zoom: 11,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  for (i = 0; i < locations.length; i++) {
    add_marker(locations);
  }

  google.maps.event.addDomListener(window, "resize", function() {
    centermap();
  });

  $('#locator').submit(function(e) {
    e.preventDefault();
    var address = $('input[type="text"]').val();
    var radiusmiles = parseInt($('select').val());
    var radiusmetric = radiusmiles / 0.000621371192;
    in_area = [];

    geocoder.geocode({
      'address': address
    }, function(results, status) {
      if (status === google.maps.GeocoderStatus.OK) {

        var searchedlocation = results[0].geometry.location;
        var circle = new google.maps.Circle({
          radius: radiusmetric,
          center: searchedlocation
        });
        map.setCenter(searchedlocation);
        map.fitBounds(circle.getBounds());

        for (i = 0; i < locations.length; i++) {
          var position = new google.maps.LatLng(locations[i][1], locations[i][2]);
          var distance = google.maps.geometry.spherical.computeDistanceBetween(searchedlocation, position);

          if (distance <= radiusmetric) {
            markers[i].setMap(map);
            in_area.push([locations[i][0], locations[i][3], locations[i][4], (distance * 0.000621371192).toFixed(2)]);
          } else {
            markers[i].setMap(null);
          }

        }
        resultstotal(in_area.length, radiusmiles, address, circle);
      }
    });

  });

  function centermap() {
    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(center);
  }

  function add_marker(arraymarkers) {
    var latlng = new google.maps.LatLng(arraymarkers[i][1], arraymarkers[i][2]);
    var marker = new google.maps.Marker({
      position: latlng,
      map: map,
      icon: 'http://chart.apis.google.com/chart?cht=d&chdp=mapsapi&chl=pin%27i%5c%27%5b%27-2%27f%5chv%27a%5c%5dh%5c%5do%5c0099FF%27fC%5c000000%27tC%5c000000%27eC%5cLauto%27f%5c&ext=.png%27'    });
    markers[i] = marker;
  }

  function resultstotal(resultstotal, radius, search, circlearea) {
    $('main').empty().append('<p class="col">' + resultstotal + ' Food pantries within ' + radius + 'miles of ' + search + '</p><ol class="col"></ol>');
    in_area.sort(function(a, b) {
      return a[3] - b[3];
    });
    for (i = 0; i < in_area.length; i++) {

      var dealername = in_area[i][0];
      var dealeraddress = in_area[i][1];
      var dealeremail = in_area[i][2];
      var distanceround = in_area[i][3];

      $('main ol').append('<li>' +
        '<h4>' + dealername + ' (' + distanceround + ' mi away)</h4>' +
        '<p>' + dealeraddress + '</p>' +
        '<a href="mailto:' + dealeremail + '">' + dealeremail + '</a>' +
        '</li>');
    }

    $('main, #map').addClass('active');

    $('html, body').animate({
      scrollTop: $("main").offset().top
    }, 500);
    $('main').on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd', function(e) {
      centermap();
      map.fitBounds(circlearea.getBounds());
    });

  }
