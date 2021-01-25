<?php

require_once 'api/book.php';

class App{

    public static function main(){

        
        $test1 = new Book ("title");
        print_r($test1->toArray());

       
    }
}

?>