<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once ("database.php");

    $name = filter_var ($_POST['name'], FILTER_SANITIZE_STRING);
    $phone = filter_var ($_POST['phone'], FILTER_SANITIZE_STRING);
    $email = filter_var ($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo("$email är giltig e-post adress");
      } else {
        echo("$email är ogiltig e-post adress");
      }
    $adress = filter_var ($_POST['adress'], FILTER_SANITIZE_STRING);
 
    $stmt = $conn->prepare("INSERT INTO customers (name, phone, email, adress)
                                VALUES (:name , :phone, :email, :adress)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':adress', $adress);
    $stmt->execute();
    $message = "<div class='alert alert-success' role='alert'>
                    <p> Tack $name! Din order har lagts! </p>
                </div>";     
}
?>

<!doctype html>
<html lang="sv">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Beställningsförmulär</title>
  </head>
  <body class="container">
<h1 class="text-center">
    <a href="index.php">
       Data&IT bokhandel
    </a>
</h1>


<form action="#" method="post" class="row">
<div class="col-md-6 form-group">
            <input name="name" type="text" required
            class="form-control" placeholder="Namn">
        </div>   

        <div class="col-md-6 form-group">
            <input name="phone" type="phone" required
            class="form-control" placeholder="Telefonnummer">
        </div>          
       
        <div class="col-md-6 form-group">
            <input name="email" type="email" required
            class="form-control" placeholder="E-post">
        </div>       
       
        <div class="col-md-12 form-group">
            <textarea name="message" cols="30" rows="5" required
            class="form-control" placeholder="Leveransadress"></textarea>
        </div>
       
        <div class="col-md-4 form-group">
            <input type="submit" value="Beställa"
            class='btn btn-primary btn-xl text-uppercase'>
        </div>
    </form>

</body>
</html>

<?php

if(isset($message)) echo $message;

?>