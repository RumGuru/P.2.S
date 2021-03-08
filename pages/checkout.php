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

  <div>

    <h1 class="">Shopping Cart Total= $142.60</h1> <!-- Hard coded for now -->

    <div id="accordion">
      <div class="card">
        <div class="card-header">
          <h5>
            <a href="#collapse1" data-parent="#accordion">
              Personal Info
            </a>
          </h5>
        </div>

        <div id="collapse1" class="collapse show">
          <div class="card-body">
            <div class="form-group">
              <label for="name">Name</label>
              <input class="form-control mb-2" type="text" id="name" placeholder="Enter name" onchange="checkPersonal()">
              <label for="name">Email Address</label>
              <input class="form-control Name" type="text" id="email" placeholder="Enter email" onchange="checkPersonal()">
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h5>
            <a href="#collapse2" data-parent="#accordion">
              Address Info
            </a>
          </h5>
        </div>

        <div id="collapse2" class="collapse">
          <div class="card-body">
            <label for="name">Address</label>
            <input class="form-control Name" type="text" id="address" placeholder="Enter name" onchange="checkAddress()">
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h5>
            <a href="#collapse3" data-parent="#accordion">
              Payment Info
            </a>
          </h5>
        </div>

        <div id="collapse3" class="collapse">
          <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis ea iste a doloremque, cumque, debitis eum vel ipsum architecto
            aut, recusandae totam ullam aperiam. Nesciunt expedita officiis animi quam corporis optio inventore facilis sint
            et nulla in, repellat debitis dolor at nisi quo, unde temporibus. Quos nisi nostrum officia, illo.
          </div>
        </div>
      </div>
    </div>







    <?php include 'footer.php'; ?>

    <script src="/js-scripts/checkout.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>