<?php
require_once ("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" />
    <title>Bekräftelse</title>
</head>
<body class="container">

    <h1>Orderbekräftelse</h1>
    <?php
    require_once("database.php");

    if (isset($_GET['id'])) {
        $order_id = $_GET['id'];
        $stmt = $conn->prepare("SELECT * FROM orders WHERE order_id = :order_id");
        $stmt->bindParam(':order_id', $order_id);
        $stmt->execute();
        $order = $stmt->fetch();

        $customer_id = $order['customer_id'];
        $book_id = $order['book_id'];
    
        $stmt = $conn->prepare("SELECT * FROM customers WHERE customer_id = :customer_id");
        $stmt->bindParam(':customer_id', $customer_id);
        $stmt->execute();
        $customer = $stmt->fetch();

        $stmt = $conn->prepare("SELECT * FROM books WHERE book_id = :book_id");
        $stmt->bindParam(':book_id', $book_id);
        $stmt->execute();
        $book = $stmt->fetch();

        echo "<br>";
        echo "<div class='alert alert-success' role='alert'>
             <p> Tack $customer[name]! Din order har registrerats! 
             <div> Ordernummer: $order[order_id]</div>
             <div>$book[title]</div>
             <div>Telefon: $customer[phone]</div>
             <div>E-post: $customer[email]</div>
             <div>Leveransadress: $customer[address]</div>
             </p>
             </div>";   
    }
    ?>

</body>

</html>


<hr>
<?php
echo "<br>";
echo "<br>";
?>
<footer class="text-center text-muted">
Copyright © Denitsa Dencheva & Vera Stepanova &copy; <?php echo date('Y'); ?>
</footer>
</body>
</html>
