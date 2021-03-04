function initMap() {
    geocoder = new google.maps.Geocoder();
    directionsService = new google.maps.DirectionsService;
    directionsDisplay = new google.maps.DirectionsRenderer;
    
    let initLocation = {lat: 43.7272, lng: -79.4121};

    map = new google.maps.Map(document.getElementById("map"), {
      zoom: 14,
      center: initLocation
    });
   

    directionsDisplay.setMap(map);
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

function calcRoute(){
    directionsService.route({
        origin: document.getElementById('source').value,
        destination: document.getElementById('destination').value,
        travelMode: 'DRIVING'
    }, function(response,status){
        if (status === 'OK'){
            directionsDisplay.setDirections(response);
            document.getElementById('price').innerHTML = parseInt(document.getElementById('cars').value.split(' - ')[1]) * response.routes[0].legs[0].distance.value/1000;
        } else {
            window.alert('Directions request failed ' + status);
        }
    })
}

  