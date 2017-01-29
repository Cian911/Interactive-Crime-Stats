function initMap(map) {

  var map_container = document.getElementsByClassName('js-map')[0];
  var v_lat = 53.3804;
  var v_lng = -6.1751;
  var latlng = { lat: v_lat, lng: v_lng };

  map = new google.maps.Map(map_container, {
    center: {lat: v_lat, lng: v_lng},
    zoom: 15,
    scrollwheel: true
  });

  var marker = new google.maps.Marker({
    map: map,
    position: latlng,
    title: 'Raheny'
  });

  var boundery = new google.maps.Circle({
    map: map,
    radius: 1100,
    fillColor: '#BA3C3C',
    fillOpacity: 0.3,
    strokeColor: '#D85858',
    strokeOpacity: 0.4
  });

  boundery.bindTo('center', marker, 'position');

}

function loadMarkersByCrime() {

}

export {initMap, loadMarkersByCrime};