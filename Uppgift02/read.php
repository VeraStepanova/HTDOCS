<?php

require_once("database.php");

$stmt = $conn->prepare("SELECT * FROM books");

$stmt->execute();

$result = $stmt->fetchAll();

$table = "";

foreach ($result as $key => $value) {

    $id = $value['book_id'];

    $table .= "
    <div class= row align-items-center no-gutters mb-4 mb-lg-5>
    <div class= 'col-xl-3 col-lg-4'>    
    <img - fluid' src='$value[image]'></div>         
    
    <div 
    class='col-xl-9 col-lg-8'> 
    <h4>$value[title]</h4>                                      
    <div class='timeline-body'><p class='text-muted'>$value[description]</p></div>        
    <h5 class='subheading'> Pris: $value[price] kr</h5>
    
    <a href='customer.php?id=$value[book_id]'
    button class='btn btn-primary btn-xl text-uppercase' id='sendMessageButton' type='submit>
    button type='button'>
    Köp
    </button>
    </a>

    </div>
   
</div> <hr>
    ";
}

$table .= "</>";

echo $table;
