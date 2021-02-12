<?php

 require_once ("database.php");

 $stmt = $conn->prepare("SELECT * FROM contacts");

 $stmt->execute();

 $result = $stmt->fetchAll();

 $table = "
 <body class='container'>
    <table class='table table-sm'>
    <tr>
        <th>Namn</th>
        <th>E-post</th>
        <th>Meddelande</th>
    </tr>
    </body>
    ";

 foreach($result as $key => $value){  

    $id = $value['id'];  

    $table .= "
    <body class='container'>
        <tr>
            <td>$value[name]</td>
            <td>$value[email]</td>
            <td>$value[message]</td>
            <td>
                
                <a href='delete.php?id=$value[id]'
                class='btn btn-sm btn-outline-danger'>
                Ta bort
                </a>
            </td>
        </tr>
        </body>
    ";

 }

 $table .= "</table>";

 echo $table;

 ?>


<!DOCTYPE html>
<html lang="sv">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Alla meddelanden</title>
</head>

<body class="container">
         
         <a href='deleteall.php' 
            class='btn btn-sm btn-outline-danger'>
            Ta bort alla meddelanden 
        </a>

</body>
</html>





 
