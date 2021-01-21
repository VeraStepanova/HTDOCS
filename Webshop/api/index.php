<?php

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
    //Vera gggg
}

$book1 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book2 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book3 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book4 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book5 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book6 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book7 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book8 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book9 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book10 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));


$array = array($book1,$book2,$book3, $book4);

echo json_encode($array);


?>