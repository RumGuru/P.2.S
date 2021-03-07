<?php

require_once "../config.php";

$sql = "SELECT make, model, price FROM cars";

if ($stmt = $mysqli->prepare($sql)) {
    $stmt->execute();
    $stmt->store_result();
}
$mysqli->close();
