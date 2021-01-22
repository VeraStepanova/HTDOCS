<?php
class App
{
    public static $endpoint = "http://localhost/Webshop/api/";
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
        $table = "<table class='table table-bordered'>";
        $table .= "<tr><th width='150'>Picture</th><th width='400'>Title</th><th>Description</th><th>Price</th></tr>";
        foreach ($products as $key => $value) {
            $table .= "<tr>
 <td><img src='$value[image]' style='width:150px' 'height:150px' ></td>
 <td>$value[title]</td>
 <td>$value[description]</td>
 <td>$value[price]</td>
 </tr>";
        }
        $table .= "</table>";
        echo "<h1></h1>";
        echo $table;
        echo "<br>";
        "<br>";
        "<br>";
    }
}
