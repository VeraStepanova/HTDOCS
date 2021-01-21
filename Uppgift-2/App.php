<?php
class App{

    public static $endpoint = "https://fakestoreapi.com/products";

    public static function main () {
        try {
            $products = self::getData();
            self::viewDataW($products);
            self::viewDataM($products);
            self::viewDataJ($products);

        } catch (Exception $e){
            echo $e->getMessage();
        }
    }

    public static function getData () {

        $json = @file_get_contents(self::$endpoint);
        if(!$json){
            throw new Exception("
             <div class='alert alert-danger' role='alert'>
            Problem med att hämta produkter just nu! 
             </div>
            ");
        }

        return json_decode($json, true);
    }

    public static function viewDataW($products){

        $women = "women clothing";
        $table = "<table class='table table-bordered'>";
        $table .= "<tr><th width='200'>Picture</th><th width='400'>Title</th><th>Description</th><th>Price EUR</th></tr>";
        foreach ($products as $key => $value){
            if($value['category'] == $women)
            $table .= "<tr>
            <td><img src='$value[image]' style='width:150px' 'height:150px' ></td> 
            <td>$value[title]</td>           
            <td>$value[description]</td>
            <td>$value[price]</td>
            </tr>";
        }             
       $table .= "</table>";
       echo "<h1>Women clothing</h1>";
       echo $table;
       echo "<br>"; "<br>"; "<br>";
    }

    public static function viewDataM($products){
        $men = "men clothing";
        $table = "<table class='table table-bordered'>";
        $table .= "<tr><th width='200'>Picture</th><th width='400'>Title</th><th>Description</th><th>Price EUR</th></tr>";
        foreach ($products as $key => $value){
            if($value['category'] == $men)
            $table .= "<tr>
            <td><img src='$value[image]' style='width:150px' 'height:150px' ></td> 
            <td>$value[title]</td>            
            <td>$value[description]</td>
            <td>$value[price]</td>
            </tr>";
        }             
       $table .= "</table>";
       echo "<h1>Men clothing</h1>";
       echo $table;
       echo "<br>"; "<br>"; "<br>";
       
    }

    public static function viewDataJ($products){
        $jewelery = "jewelery";
        $table = "<table class='table table-bordered'>";
        $table .= "<tr><th width='200'>Picture</th><th width='400'>Title</th><th>Description</th><th>Price EUR</th></tr>";
        foreach ($products as $key => $value){
            if($value['category'] == $jewelery)
            $table .= "<tr>
            <td><img src='$value[image]' style='width:150px' 'height:150px' ></td> 
            <td>$value[title]</td>             
            <td>$value[description]</td>
            <td>$value[price]</td>  
            </tr>";
        }             
       $table .= "</table>";
       echo "<h1>Jewelery</h1>";
       echo $table;
       echo "<br>"; "<br>"; "<br>";
    }   
}