<?php

header("Content-Type: application/json; charset=UTF-8");

class Book
{
    public $title;
    public $description;
    public $image;
    public $price;

    public function __construct(array $data) 
    {
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->image = $data['image'];
        $this->price = $data['price'];
    }

}
//Vera hhhh

$book1 = new Book(array('title' => 'Skärmhjärnan : hur en hjärna i osynk med sin tid kan göra oss stressade, deprimerade och ångestfyllda
av Anders Hansen', 'description' => 'Den psykiska ohälsan håller på att ta över som det stora hälsohotet i vår tid. Ett högt tempo, konstant stress och en digital livsstil med ständig uppkoppling börjar få konsekvenser för vår hjärna. För hur mycket du än gillar att kolla bildflödet på instagram, nyheterna i mobilen eller filmer på plattan, är din hjärna inte anpassad till det som dagens samhälle för med sig. Den är helt enkelt i osynk med vår tid!', 
'image' => 'https://image.bokus.com/images/9789178871582_200x_skarmhjarnan-hur-en-hjarna-i-osynk-med-sin-tid-kan-gora-oss-stressade-deprimerade-och-angestfyllda_pocket', 'price' => '111 kr'));
$book2 = new Book(array('title' => 'Databasteknik
av Thomas Padron-Mccarthy, Tore Risch', 'description' => 'Databasteknik används nästan överallt i dag där data behöver lagras och bearbetas. Allt från webbplatser till mobilappar lagrar sina data i databaser. Databaser har därför blivit ett av de områden inom datatekniken som man har störst nytta av att kunna, vare sig man är användare, datatekniker eller programmerare.', 'image' => 'https://image.bokus.com/images/9789144069197_200x_databasteknik', 'price' => '548 kr'));
$book3 = new Book(array('title' => 'Designing User Experience A guide to HCI, UX and interaction design av David Benyon', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book4 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book5 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book6 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book7 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book8 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book9 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book10 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));


$array = array($book1,$book2,$book3, $book4, $book5, $book6, $book7, $book8, $book9, $book10);

echo json_encode($array, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);


?>