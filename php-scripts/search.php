<?php
session_start();

if ($_SERVER["PHP_SELF"] == "/home.php") {
    require_once "./config.php";
} else if ($_SERVER["PHP_SELF"]) {
    require_once "../config.php";
}

$order_id = $_POST["order_id"];
$id = $issued_date = $done_date = $price = "";
$sql = "SELECT id, issued_date, done_date, total_price FROM orders WHERE id = ?";

if ($stmt = $mysqli->prepare($sql)) {
    $stmt->bind_param("i", $id);
    $id = $order_id;
    if ($stmt->execute()) {
        $stmt->store_result();
        $i = 0;
        if ($stmt->num_rows == 0) {
            $_SESSION["order_id"] = "";
            $_SESSION["issued"] = $issued_date;
            $_SESSION["done"] = $done_date;
            $_SESSION["total"] = $price;
        }
        while ($i < $stmt->num_rows) {
            $stmt->bind_result($id, $issued_date, $done_date, $price);
            if ($stmt->fetch()) {
                $_SESSION["order_id"] = $id;
                $_SESSION["issued"] = $issued_date;
                $_SESSION["done"] = $done_date;
                $_SESSION["total"] = $price;
            }
            $i++;
        };
        header("location: /home.php");
        exit;
    }
}
$mysqli->close();
