<?php


class Product
{
    public function __construct($id, $title, $price, $inStock)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->inStock = $inStock;
    }

    private $id;
    private $title;
    private $price;
    private $inStock;

    // TODO Skriv en konstruktor som sätter alla properties

    // TODO Skriv getters för alla properties

    public function getProduct()
    {
        return $this->id . " " . $this->title . " " . $this->price . " " . $this->inStock;
    }
};

//$product1 = new order();
//echo $product1->getProduct();