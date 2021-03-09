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
    if (isset($_POST["addFlower"])) {
        $response = '';
        try {
            $sql = "INSERT INTO flowers (name, price, description, src)
            VALUES ('" . $_POST['name'] . "', '" . $_POST['price'] . "', '" . $_POST['description'] . "', '" . $_POST['src'] . "')";

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
elseif (isset($_POST["deleteFlower"])) {
    try {
        $sql = "DELETE FROM flowers WHERE id='".$_POST['id']."'";

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