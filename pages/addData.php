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


<h1>Add item to Flower Database</h1>


    

<p>Write down select statement here:</p>
    <form class="databaseSelect" action="../php-scripts/add.php" method="post">
        
    <label for="year">Name</label>
        <input type="text" id="name" name="name">
    
    <label for="year">price</label>
        <input type="text" id="price" name="price">
    
    <label for="year">Description Text</label>
        <input type="text" id="description" name="description">

    
    <label for="year">Image Source</label>
        <input type="text" id="src" name="src">
    
    <input type="submit" name="addFlower" value="Save Record" style="float:right;" />
    </form>


    <h1>Delete item from Flower Database</h1>
    <form class="databaseSelect" action="../php-scripts/add.php" method="post">
        
        <label for="year">ID</label>
            <input type="text" id="id" name="id">
        
        
        <input type="submit" name="deleteFlower" value="Delete Record" style="float:right;" />
        </form>



<?php include 'footer.php'; ?>

<script src="../js-scripts/drag-drop.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>