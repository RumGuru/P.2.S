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
              <th scope="col">Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>` + document.getElementById('cars').value + `</td>
              <td>` + document.getElementById('source').value + `</td>
              <td>` + document.getElementById('destination').value + `</td>
              <td>$500</td>
            </tr>
            </tbody>
          </table>`
    }
  </script>
</head>

<body>
  <?php include 'header.php'; ?>
  <div class="container">
    <h1 class="">Plan your trip</h1>
    <br>
    <form onchange="onFormChange()">
      <div class="form-group">
        <label for="cars">Available cars</label>
        <select class="form-control" id="cars">
          <option selected>Choose...</option>
          <option value="Tesla Model S">Tesla Model S - Price: CAD$100/km</option>
          <option value="Tesla Model 3">Tesla Model 3 - Price: CAD$150/km</option>
          <option value="Tesla Model X">Tesla Model X - Price: CAD$200/km</option>
          <option value="Tesla Model Y">Tesla Model Y - Price: CAD$250/km</option>
        </select>
        <br>
        <label for="source">Source</label>
        <input onchange="initMap()" type="email" class="form-control" id="source" placeholder="Enter source address">
        <br>
        <label for="destination">Destination</label>
        <input onchange="initMap()" type="email" class="form-control" id="destination" placeholder="Enter destination address">
      </div>
    </form>
    <br>
    <div id="result"></div>
    <div id="map"></div>
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