<?php
    

require_once ("read.php");
require_once ("database.php");


$sql = "DELETE FROM contacts";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$rowCount = $stmt->rowCount();

$message = "<div class='alert alert-danger' role='alert'>
                <p>$rowCount rad har raderats!</p>
            </div>";  

echo $message;