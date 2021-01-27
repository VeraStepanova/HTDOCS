<?php

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
        
            <div class= row align-items-center no-gutters mb-4 mb-lg-5>
                    <div class= 'col-xl-3 col-lg-4'>    
                    <img - fluid' src='/Webshop2/img/$value[image]'></div>         
                    
                    <div 
                    class='col-xl-9 col-lg-8'> 
                    <h4>$value[title]</h4>                                      
                    <div class='timeline-body'><p class='text-muted'>$value[description]</p></div>        
                    <h5 class='subheading'> Pris: $value[price]</h5>
                    <h5 class='subheading'>Antal i lager:  $value[antal]</h5>
                    <button class='btn btn-primary btn-xl text-uppercase' id='sendMessageButton' type='submit>Send Message</button>
                    <button type='button'>Köp</button>
                    </div>
                   
            </div> <hr>
            ";
        }
        echo $table;
    }
}
