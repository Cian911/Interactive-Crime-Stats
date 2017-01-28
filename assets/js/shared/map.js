function initMap(map) {

  var map_container = document.getElementsByClassName('js-map')[0];
  var v_lat = 53.350140;
  var v_lng = -6.266155;
  var latlng = { lat: v_lat, lng: v_lng };

  map = new google.maps.Map(map_container, {
    center: {lat: v_lat, lng: v_lng},
    zoom: 13,
    scrollwheel: true
  });

}

export {initMap};