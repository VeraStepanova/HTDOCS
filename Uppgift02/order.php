<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" />
    <title>Bekräftelse</title>
</head>

<body class="container">

<h1>Bekräftelse</h1>
<?php
require_once ("database.php");

if (isset($_GET['id'])) {

    $order_id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM orders WHERE order_id = :order_id");
    $stmt->bindParam(':order_id', $order_id);
    $stmt->execute();
    $orders = $stmt->fetchAll();

    $order = $orders[0];

    $customer_id = $order['customer_id'];
    $book_id = $order['book_id'];

    $stmt = $conn->prepare("SELECT * FROM books WHERE book_id = :book_id");
    $stmt->bindParam(':book_id', $book_id);
    $stmt->execute();
    $books = $stmt->fetchAll();

    $book = $books[0];

    $stmt = $conn->prepare("SELECT * FROM customers WHERE customer_id = :customer_id");
    $stmt->bindParam(':customer_id', $customer_id);
    $stmt->execute();
    $customers = $stmt->fetchAll();

    $customer = $customers[0];

    echo "</br>";
    echo "<div class='alert alert-success' role='alert'>
             <p> Tack $customer[name]! Din order med nummer $order[order_id] Har registrerats!</p>
             </div>";
} 
?>

</body>
</html>


