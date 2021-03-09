<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

    $connectionString = "mysql:host=localhost;dbname=project";
    $pdo = new mysqli($servername, $username, $password, $dbname);

if ($pdo->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  
//$id = rand(0, 999999);

/*
Id int
Name archer
Price int
Description text
Source varchar 
*/

// sql to insert into table
    if (isset($_POST["addRide"])) {
        $response = '';
        try {
            $sql = "INSERT INTO ride (model, make, year, price)
            VALUES ('" . $_POST['model'] . "', '" . $_POST['make'] . "', '" . $_POST['year'] . "', '" . $_POST['price'] . "')";

            if ($pdo->query($sql)) {
                $response = "RECORD CREATED";
            }
            else {
                $response = "ERROR: " . $sql . "<br>" . $pdo->error;
            }

        }
        catch (Exception $e) {
            $response = "Error while inserting record: " . $e->getMessage();
        }

       echo $response;

    }
// sql to delete from table
elseif (isset($_POST["deleteRide"])) {
    try {
        $sql = "DELETE FROM ride WHERE id='".$_POST['id']."'";

        if ($pdo->query($sql)) {
            echo "RECORD DELETED";
        }
        else {
            echo "RECORD NOT DELETED: " . $pdo->error ;
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
}


    
$pdo = null;
?>