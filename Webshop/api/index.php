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

$book1 = new Book(array('title' => 'Skärmhjärnan : hur en hjärna i osynk med sin tid kan göra oss stressade, deprimerade och ångestfyllda av Anders Hansen', 'description' => 'Den psykiska ohälsan håller på att ta över som det stora hälsohotet i vår tid. Ett högt tempo, konstant stress och en digital livsstil med ständig uppkoppling börjar få konsekvenser för vår hjärna. För hur mycket du än gillar att kolla bildflödet på instagram, nyheterna i mobilen eller filmer på plattan, är din hjärna inte anpassad till det som dagens samhälle för med sig. Den är helt enkelt i osynk med vår tid!','image' => 'https://image.bokus.com/images/9789178871582_200x_skarmhjarnan-hur-en-hjarna-i-osynk-med-sin-tid-kan-gora-oss-stressade-deprimerade-och-angestfyllda_pocket', 'price' => '111 kr'));
$book2 = new Book(array('title' => 'Databasteknik av Thomas Padron-Mccarthy, Tore Risch', 'description' => 'Databasteknik används nästan överallt i dag där data behöver lagras och bearbetas. Allt från webbplatser till mobilappar lagrar sina data i databaser. Databaser har därför blivit ett av de områden inom datatekniken som man har störst nytta av att kunna, vare sig man är användare, datatekniker eller programmerare.', 'image' => 'https://image.bokus.com/images/9789144069197_200x_databasteknik', 'price' => '548 kr'));
$book3 = new Book(array('title' => 'Designing User Experience A guide to HCI, UX and interaction design av David Benyon', 'description' => 'Designing User Experience presents a comprehensive introduction to the practical issue of creating interactive systems, services and products from a human-centred perspective. It develops the principles and methods of humancomputer interaction (HCI) and Interaction Design (ID) to deal with the design of twenty-first-century computing and the demands for improved user experience (UX).', 'image' => 'https://image.bokus.com/images/9781292155517_200x_designing-user-experience_haftad', 'price' => '619 kr'));
$book4 = new Book(array('title' => 'Webbredaktörens skrivhandbok : klarspråk på nätet av Karin Guldbrand, Helena Englund Hjalmarsson', 'description' => 'Webbredaktörens skrivhandbok är en praktisk handbok för dig som arbetar med texter, mikrocopy och form för webb, surfplattor och mobiltelefoner. Författarna tar ett språkligt grepp på användbarhet och visar hur språket samspelar med andra element på sidan. Boken ger dig vägledning och konkreta tips och råd för alla delar av textproduktionen, i utvecklingsfasen såväl som i förvaltningsfasen.', 'image' => 'https://image.bokus.com/images/9789198125047_200x_webbredaktorens-skrivhandbok-klarsprak-pa-natet_haftad', 'price' => '429 kr'));
$book5 = new Book(array('title' => 'Webbutveckling med PHP och MySQL av Montathar Faraon', 'description' => 'PHP är ett av de ledande programmeringsspråken för webbutveckling. Det är ett flexibelt och enkelt språk som används för att skapa dyna miska webbplatser. Denna bok ger en lättillgänglig introduktion till PHP och databashantering. Läsaren får den kunskap som krävs för att snabbt utveckla egna webbapplikationer.', 'image' => 'https://image.bokus.com/images/9789144105567_200x_webbutveckling-med-php-och-mysql_haftad', 'price' => '391 kr'));
$book6 = new Book(array('title' => 'Artificial Intelligence: A Modern Approach, Global Edition av Stuart Russell', 'description' => 'For one or two-semester, undergraduate or graduate-level courses in Artificial Intelligence. The long-anticipated revision of this best-selling text offers the most comprehensive, up-to-date introduction to the theory and practice of artificial intelligence.', 'image' => 'https://image.bokus.com/images/9781292153964_200x_artificial-intelligence-a-modern-approach-global-edition_haftad', 'price' => '659 kr'));
$book7 = new Book(array('title' => 'Learning Web Design 5e av Jennifer Niederst Robbins', 'description' => 'Do you want to build web pages but have no prior experience? This friendly guide is the perfect place to start. You will begin at square one, learning how the web and web pages work, and then steadily build from there. By the end of the book, you will have the skills to create a simple site with multicolumn pages that adapt for mobile devices. Each chapter provides exercises to help you learn various techniques and short quizzes to make sure you understand key concepts.', 'image' => 'https://image.bokus.com/images/9781491960202_200x_learning-web-design-5e_haftad', 'price' => '499 kr'));
$book8 = new Book(array('title' => 'The Pragmatic Programmer av David Thomas', 'description' => 'The bestselling software development guide more than 200,000 sold now thoroughly updated by its world-class author team. Todays best approaches to transforming requirements into working, maintainable code that delights users. Thoroughly revised with 10 new sections, extensive new coverage, new examples throughout and future-proofed with greater technology-independence. Brings together pragmatic advice on everything from personal career fulfillment to more effective architecture', 'image' => 'https://image.bokus.com/images/9780135957059_200x_the-pragmatic-programmer', 'price' => '290 kr'));
$book9 = new Book(array('title' => 'Java - - steg för steg av Jan Skansholm', 'description' => 'Denna bok är tänkt att passa som kurslitteratur i grundläggande programmeringskurser, till exempel i en första kurs på universitet eller högskolan. På gymnasiet kan den användas i kurserna Programmering 1 och Programmering 2 samt i de matematikkurser som innehåller programmering som ett moment.', 'image' => 'https://image.bokus.com/images/9789144150789_200x_java-steg-for-steg_haftad', 'price' => '370 kr'));
$book10 = new Book(array('title' => 'Web Design with HTML, CSS, JavaScript and jQuery Set av Jon Duckett', 'description' => 'A two-book set for web designers and front-end developers This two-book set combines the titles HTML & CSS: Designing and Building Web Sites and JavaScript & jQuery: Interactive Front-End Development. Together these two books form an ideal platform for anyone who wants to master HTML and CSS before stepping up to JavaScript and jQuery.', 'image' => 'https://image.bokus.com/images/9781118907443_200x_web-design-with-html-css-javascript-and-jquery-set_haftad', 'price' => '399 kr'));


$array = array($book1,$book2,$book3, $book4, $book5, $book6, $book7, $book8, $book9, $book10);

echo json_encode($array, JSON_UNESCAPED_UNICODE);


?>