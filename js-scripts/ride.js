//Control Functions
const moveDown = () => {
    $(".form-group").css({
      "margin-top": "150px"
    })
}

const moveUp = () => {
    $(".form-group").css({
        "margin-top": "0px"
    })
}

const onFormChange = () => {
    document.getElementById('result').innerHTML =
        `<table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Selected car</th>
            <th scope="col">Source</th>
            <th scope="col">Destination</th>
            <th scope="col">Price per Km</th>
            <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>` + document.getElementById('cars').value.split(' - ')[0] + `</td>
            <td>` + document.getElementById('source').value + `</td>
            <td>` + document.getElementById('destination').value + `</td>
            <td id="price-km">` + document.getElementById('cars').value.split(' - ')[1] + `/km</td>
            <td id="price"></td>
            </tr>
            </tbody>
        </table>`
        if(document.getElementById('cars') && document.getElementById('source').value && document.getElementById('destination').value) calcRoute();
}

const onFormSubmit = (e) => {
    let info = document.getElementById("info");
    e.preventDefault();
    info.innerHTML = `
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Your trip was added to the shopping cart!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>`;
    document.getElementById("checkout").classList.remove("d-none");
    setTimeout(() => {
        info.innerHTML = ""
    }, 2000);
}

//Maps functions
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