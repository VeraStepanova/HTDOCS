<?php

require_once 'api/book.php';

class App
{
    public static $endpoint = "http://localhost/Webshop2/api/";
    public static function main()
    {
        try {
            $products = self::getData();
            self::viewDataW($products);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public static function getData()
    {
        $json = @file_get_contents(self::$endpoint);
        if (!$json) {
            throw new Exception("
 <div class='alert alert-danger' role='alert'>
 Problem med att hämta produkter just nu!
 </div>
 ");
        }
        return json_decode($json, true);
    }
    public static function viewDataW($products)
    {
        $table = "";
        foreach ($products as $key => $value) {
            $table .= "
            <div>
                <div class='timeline-heading'>
                    <img -fluid' src='$value[image]' />
                    <h4>$value[title]</h4>
                    
                </div>
                <div class='timeline-body'><p class='text-muted'>$value[description]</p></div>
                <h4 class='subheading'> Pris: $value[price]</h4>
                    <h4 class='subheading'>Antal i lager:  $value[antal]</h4>
                    <hr>
        
            </div>
            ";
        }
        echo $table;
        
    }
}
