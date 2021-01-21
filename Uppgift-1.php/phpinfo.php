
<?php


?>

<form action="#" method="post">
<h1> Fill in your first and last name </h1> <br>
First name: <input type="text" name="firstname"> <br><br>
Last name: <input type="text" name="lastname"> <br>
<br>
<input type="submit" value="Submit">
</form>

<?php

if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
    echo "Hello " . $_POST['firstname'] . " Your email address is:";
     
};

?>






