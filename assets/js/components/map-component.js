import {initMap} from '../shared/map';

export default function() {

  // Single property media tabbed section
  if ($('.js-map').length) {
    var map;
    initMap(map);
  }
}
