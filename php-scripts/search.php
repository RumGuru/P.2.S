<?php

require_once "../config.php";

$order_id = $_POST["order_id"];
$sql = "SELECT id, issued_date, done_date, total_price FROM orders WHERE id = ?";

if ($stmt = $mysqli->prepare($sql)) {
    $stmt->bind_param("i", $id);
    $id = $order_id;
    if ($stmt->execute()) {
        $stmt->store_result();
        $i = 0;
        while ($i < $stmt->num_rows) {
            $stmt->bind_result($id, $issued_date, $done_date, $price);
            if ($stmt->fetch()) {
                echo "Order number: " . $id . " Date issued: " . $issued_date . " Date done: " . $done_date . " Price: $" . $price;
            }
            $i++;
        };
    }
}
$mysqli->close();
