function initMap() {
    geocoder = new google.maps.Geocoder();

    let initLocation = {lat: 43.7272, lng: -79.4121};

    map = new google.maps.Map(document.getElementById("map"), {
      zoom: 14,
      center: initLocation
    });
    codeAddress(document.getElementById('source').value, "Source");
    codeAddress(document.getElementById('destination').value, "Destination");
  }

const setMarker = (position, content) => {
    let marker = new google.maps.Marker({
        position, map
        });
    let infoWindow = new google.maps.InfoWindow({
        content: "<h5> " + content + " Address </h5>"
        });
        marker.addListener("click", function() {
        infoWindow.open(map, marker);
        });
}

const codeAddress = (address, content) => {
    geocoder.geocode({
        address: address
    }, (results) => {
        if (results.length !== 0) {
        map.setCenter(results[0].geometry.location);
        setMarker(results[0].geometry.location, content);
        }
    })
}

  