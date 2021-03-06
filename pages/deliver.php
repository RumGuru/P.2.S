<?php require "../php-scripts/deliver_script.php"; ?>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="../styles/footer.css">
  <title>CPS-ASSIGNMENT</title>
</head>

<body>

  <?php include 'header.php'; ?>

  <h1 class="">Plan your Delivery</h1>
  <br>
  <div class='row'>
    <div class='col-10'>
      <?php
      $i = 0;
      while ($i < $stmt->num_rows) {
        $stmt->bind_result($name, $price, $description, $src);
        $stmt->fetch();
        echo '<div class="card shop-item" style="width: 10rem;" draggable="true">
            <img class="card-img-top img-fluid" src="' . $src . '" alt="">
            <div class="card-body">
              <h4 class="card-title-0">' . $name . '</h4>
              <p class="card-text">' . $description . '</p>
              <p class="card-text">
                <small class="text-muted"> $' . $price . '.99</small>
              </p>
            </div>
          </div>';
        $i++;
      }
      ?>
    </div>

    <div class="col-2 shop-cart" style="background-color: #F3F3F3">
      <h6>Shopping cart</h6>
      <h6 class="total-price">Total Price --> $0</h6>
      <button class="btn btn-dark btn-block" type="button" onclick="clearShoppingCart()">Clear</button>
      <a href='../pages/checkout.php'><button class="btn btn-dark btn-block" type="button">Checkout</button></a>
    </div>

  </div>

  
  <?php include 'footer.php'; ?>

  <script src="../js-scripts/drag-drop.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>