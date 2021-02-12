<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once ("database.php");

    $name = filter_var ($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var ($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo("$email är giltig e-post adress");
      } else {
        echo("$email är ogiltig e-post adress");
      }
    $message = filter_var ($_POST['message'], FILTER_SANITIZE_STRING);
 
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message)
                                VALUES (:name , :email, :message)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);
    $stmt->execute();
    $message = "<div class='alert alert-success' role='alert'>
                    <p> Tack $name! Ditt meddelande har skickats! </p>
                </div>";     
}
?>


<form action="#" method="post" class="row">
<div class="col-md-6 form-group">
            <input name="name" type="text" required
            class="form-control" placeholder="Namn">
        </div>        
        <div class="col-md-6 form-group">
            <input name="email" type="email" required
            class="form-control" placeholder="E-post">
        </div>       
        <div class="col-md-12 form-group">
            <textarea name="message" cols="30" rows="5" required
            class="form-control" placeholder="Skriv ett meddelande"></textarea>
        </div>
        <div class="col-md-4 form-group">
            <input type="submit" value="Skicka meddelandet"
            class='btn btn-primary btn-xl text-uppercase'>
        </div>
    </form>

</body>
</html>

<?php

if(isset($message)) echo $message;

?>