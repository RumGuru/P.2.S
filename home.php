<?php
session_start();
if ($_SERVER["PHP_SELF"] == "/php-scripts/search.php") {
  require "./php-scripts/search.php";
}
echo $_POST["order_id"];

?>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="/styles/index.css" />
  <link rel="stylesheet" type="text/css" href="/styles/footer.css" />
  <title>CPS-ASSIGNMENT</title>
</head>

<body>
  <?php include './pages/header.php'; ?>
  <div class="container">
    <div class="row justify-center">
      <div class="jumbotron w-100">
        <h1 class="display-4">Welcome to P.2.S!</h1>
        <p class="lead">Book a ride or deliver an item!</p>
        <hr class="my-4">
        <p>P2S attempts to provide a smart green solution on this regard by matching up drivers who live, work, and finally drive in the same neighborhood and would like to provide trip services.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="/pages/about_us.php" role="button">Learn more</a>
        </p>
      </div>
    </div>
    <div class="row justify-content-between">
      <div id="ride" class="resize col-5 jumbotron">
        <h1 class="display-4">Ride</h1>
        <p class="lead">
          This service is for you to book a ride from a source to a
          destination.
        </p>
        <br />
        <hr class="my-4" />
        <p>
          It will find the closest driver available to give you a ride to any
          location instide the city or up to 50km far.
        </p>
        <br />
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="/pages/ride.php" role="button">Plan your trip</a>
        </p>
      </div>
      <div id="separator"></div>
      <div id="ride-deliver" class="resize col-5 jumbotron">
        <h1 class="display-4">Ride & Deliver</h1>
        <p class="lead">
          This service is for you to book a delivery from one of our two
          associated stores to a destination.
        </p>
        <hr class="my-4" />
        <p>
          It will find the closest driver available to deliver an item from
          the store of your choice.
        </p>
        <br />
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="/pages/deliver.php" role="button">Deliver an item</a>
        </p>
      </div>
    </div>
    <?php
    if ($_SESSION["order_id"] != "") {
      echo '<div class="row justify-center">
        <div class="jumbotron w-100">
          <h1 class="display-4">Order number #' . $_SESSION["order_id"] . '</h1>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Date issued</th>
                <th scope="col">Date done</th>
                <th scope="col">Total Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>' . $_SESSION["issued"] . '</td>
                <td>' . $_SESSION["done"] . '</td>
                <td>' . $_SESSION["total"] . '</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>';
    }
    ?>

  </div>

  <?php include './pages/footer.php'; ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>