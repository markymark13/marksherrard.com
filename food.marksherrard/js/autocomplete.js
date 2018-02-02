function initializeAutocomplete(id) {
  var element = document.getElementById(id);
  if (element) {
    var autocomplete = new google.maps.places.Autocomplete(element);
    google.maps.event.addListener(autocomplete, 'place_changed', onPlaceChanged);
  }
}

function onPlaceChanged() {
  var place = this.getPlace();

  // console.log(place);  // Uncomment this line to view the full object returned by Google API.

  for (var i in place.address_components) {
    var component = place.address_components[i];
    for (var j in component.types) {  // Some types are ["country", "political"]
      var type_element = document.getElementById(component.types[j]);
      if (type_element) {
        type_element.value = component.long_name;
      }
    }
  }
  document.getElementById('name').value = place.name;
  document.getElementById('price_level').value = place.price_level;
  document.getElementById('lat').value = place.geometry.location.lat();
  document.getElementById('lng').value = place.geometry.location.lng();
  document.getElementById('place_id').value = place.place_id;
  document.getElementById('url').value = place.url;
  document.getElementById('formatted_address').value = place.formatted_address;
}

google.maps.event.addDomListener(window, 'load', function() {
  initializeAutocomplete('user_input_autocomplete_address');
});