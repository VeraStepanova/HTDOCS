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

//vera ändringar


}

$book1 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book2 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book3 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));
$book4 = new Book(array('title' => 'Title', 'description' => 'Description', 'image' => 'Image', 'price' => 'Price'));


$array = array($book1,$book2,$book3, $book4);

echo json_encode($array);


?>