<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="../styles/footer.css">
  <title>CPS-ASSIGNMENT</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    #map {
      height: 500px;
      width: 100%;
    }
  </style>
  <script>
    function moveDown() {
      $(".form-group").css({
        "margin-top": "150px"
      })
    }

    function moveUp() {
      $(".form-group").css({
        "margin-top": "0px"
      })
    }

    function onFormChange() {
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
    }

    function onFormSubmit(e) {
      let info = document.getElementById("info");
      e.preventDefault();
      info.innerHTML = `
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Your trip was added to the shopping cart!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>`;
      setTimeout(() => {
        info.innerHTML = ""
      }, 2000);
    }
  </script>
</head>

<body>
  <?php include 'header.php'; ?>
  <div class="container">
    <h1 class="">Plan your trip</h1>
    <br>
    <form id="form" onsubmit="onFormSubmit(event)" onchange="onFormChange()">
      <div class="form-group">
        <label for="cars">Available cars</label>
        <select class="form-control" id="cars">
          <option selected>Choose...</option>
          <option value="Tesla Model S - 20">Tesla Model S - Price: $20/km</option>
          <option value="Tesla Model 3 - 10">Tesla Model 3 - Price: $10/km</option>
          <option value="Tesla Model X - 25">Tesla Model X - Price: $25/km</option>
          <option value="Tesla Model Y - 15">Tesla Model Y - Price: $15/km</option>
        </select>
        <br>
        <label for="source">Source</label>
        <input onchange="initMap()" class="form-control" id="source" placeholder="Enter source address">
        <br>
        <label for="destination">Destination</label>
        <input onchange="calcRoute()" class="form-control" id="destination" placeholder="Enter destination address">
      </div>
      <br>
      <div id="result"></div>
      <div id="map"></div>
      <br>
      <input type="submit" class="btn btn-secondary w-100" value="Add to shopping cart">
      <br>
      <br>
      <div id="info"></div>
    </form>
  </div>
  <?php include 'footer.php'; ?>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCT0erosDR5II_8-FtZMdtCjCC_o5p2msE&callback=initMap">
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="../scripts/ride.js"></script>
</body>

</html>