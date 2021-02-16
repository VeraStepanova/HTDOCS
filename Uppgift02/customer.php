<!doctype html>
<html lang="sv">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1 " />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Beställningsförmulär</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>


<?php
require_once("database.php");
if (isset($_GET['id'])) {
    $book_id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM books WHERE book_id = :book_id");
    $stmt->bindParam(':book_id', $book_id);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $table = "";
    foreach ($result as $key => $value) {
        $id = $value['book_id'];
        $table .= "
        <br><br><br>
        <div class= row align-items-center no-gutters mb-4 mb-lg-5>
        <div class= 'col-xl-3 col-lg-4'>    
        <img - fluid' src='$value[image]'></div>         
        <div 
        class='col-xl-9 col-lg-8'> 
        <h4>$value[title]</h4>                                      
        <div class='timeline-body'><p class='text-muted'>$value[description]</p></div>        
        <h5 class='subheading'> Pris SEK: $value[price]</h5>
        </div>

    </div> 
        ";
    }
    $table .= "</table>";
    echo $table;
}


// Hantera formuläret
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);

    $stmt = $conn->prepare("INSERT INTO customers (name, phone, email, address)
                            VALUES (:name , :phone, :email, :address)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':address', $address);
    $stmt->execute();

    $customer_id = $conn->lastInsertId();
    $stmt = $conn->prepare("INSERT INTO orders (customer_id, book_id) 
                            VALUES (:customer_id, :book_id)");
    $stmt->bindParam(':customer_id', $customer_id);
    $stmt->bindParam(':book_id', $book_id);
    $stmt->execute();

    $message = "<div class='alert alert-success' role='alert'>
             <p> Tack $name! Din order har registrerats! </p>
             </div>";
}
?>


<body class="container">
    <section class="page-section">
        <div class="container">
            <h2 class="section-heading text-uppercase">Beställningsförmulär</h2>
        </div>

        <form action="" method="post" class="row">
            <div class="col-md-6 form-group">
                <input name="name" type="text" required class="form-control" placeholder="Namn">
            </div>

            <div class="col-md-6 form-group">
                <input name="phone" type="phone" required class="form-control" placeholder="Telefonnummer">
            </div>

            <div class="col-md-6 form-group">
                <input name="email" type="email" required class="form-control" placeholder="E-post">
            </div>

            <div class="col-md-12 form-group">
                <textarea name="address" cols="30" rows="5" required class="form-control" placeholder="Leveransadress"></textarea>
            </div>

            <div class="col-md-4 form-group">
                <input type="submit" value="Beställa" class='btn btn-primary btn-xl text-uppercase'>
        
            </div>
        </form>
        </div>
    </section>
</body>

</html>

<?php

if (isset($message)) echo $message;

?>



 
  