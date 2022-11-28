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
    // TODO Skriv getters för att hämta en viss prperty. är private måste gå igenom en funktion. En för varje. Gör bara getters för de som behövs. kanske plussar ihop å så. kontroll av vad vi exponerar utanför klassen, vad ska vara tillgängligt. 

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function getInStock()
    {
        return $this->inStock;
    }
};


//getter returnerar en prperty GET?
//setter - samma men skickar in ett värde och så sätter den property, ändrar en prperty som en constructor, men kan skapa nått genom konstruktor och sen senare i koden ändrar nått 