<?php

require_once "../config.php";

$sql = "SELECT name, price, description, src FROM flowers";

if ($stmt = $mysqli->prepare($sql)) {
    $stmt->execute();
    $stmt->store_result();
}
$mysqli->close();
