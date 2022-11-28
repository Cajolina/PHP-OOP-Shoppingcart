<?php


class Product
{


    private $id;
    private $title;
    private $price;
    private $inStock;

    // TODO Skriv en konstruktor som sätter alla properties
    public function __construct($id, $title, $price, $inStock) //tar emot i constructorn
    {
        $this->id = $id;                 //knyta till våra prpoertys. Använder this 
        $this->title = $title;
        $this->price = $price;
        $this->inStock = $inStock;
    }
    // TODO Skriv getters för alla properties

    public function getProduct()
    {
        return $this->id . " " . $this->title . " " . $this->price . " " . $this->inStock;
    }
};


//getter returnerar en prperty GET?
//setter - samma men skickar in ett värde och så sätter den property, ändrar en prperty som en constructor, men kan skapa nått genom konstruktor och sen senare i koden ändrar nått 