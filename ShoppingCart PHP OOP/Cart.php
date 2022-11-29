<?php


class Cart
{
    private array $items = [];

    //TODO Skriv getter för items
    public function getItems()
    {
        return $this->items;
    }

    /*
     Skall lägga till en produkt i kundvagnen genom att
     skapa ett nytt cartItem och lägga till i $items array.
     Metoden skall returnera detta cartItem.

     VG: Om produkten redan finns i kundvagnen
     skall istället quantity på cartitem ökas.
     */
    public function addProduct($product, $quantity) //cartiteam, product och hur många av dem
    {
        if (isset($this->items[$product->getId()])) {
            $this->items[$product->getId()]->increaseQuantity($quantity);
        } else {
            $cartItem = new CartItem($product, $quantity);
            $this->items[$product->getId()] = $cartItem;
        }

        return $cartItem;
        /*$cartItem = new CartItem($product, 1); //quantity, labborera 
        $this->items[$product->getId()] = $cartItem;
        return $cartItem;*/
    }

    //Skall ta bort en produkt ur kundvagnen (använd unset())
    public function removeProduct($product) //kan heta vad som
    {
        unset($this->items[$product->getId()]); //sätter en funktion för att ta bort, typ så. vilken av cartitems ligger min product i, plocka ut genom att ha idt för den producten. för vg 3-4 rader till. ass som js object
        //return? 
    }

    //Skall returnera totala antalet produkter i kundvagnen
    //OBS: Ej antalet unika produkter
    public function getTotalQuantity()
    { //som techstore, fast kvantitet och under pris
        $totalOuntity = 0;
        //loop gå igenom alla cart items
        foreach ($this->items as $item) {
            $totalOuntity += $item->getQuantity();
        }
        return $totalOuntity;
    }

    //Skall räkna ihop totalsumman för alla produkter i kundvagnen
    //VG: Tänk på att ett cartitem kan ha olika quantity
    public function getTotalSum()
    {
        $totalSum = 0;
        //loop gå igenom alla cart items
        foreach ($this->items as $item) { //loopar igenom cartitems, hur kommer vi åt grejerna? hur pratar de ihop? 
            $totalSum += $item->getQuantity() * $item->getProduct()->getPrice(); //getProduct för att kunna getta Price
        }
        return $totalSum;
    }
    //tänk på om vi siktar på g kan vi anta att varje product ligger med en . loop det här plus det här, men för vg 2 för denna kanske . ränka med det 2 grr
}




        //skapa ett nytt cartItem 
        //få in en prodcut, sen vill skapa ett cart item nytt, sen lägga till i arrayen items. Tänkta om jag vill göra en vanlig array eller assoativ array. lätt hitta. sen returna. Inte skapa element. det vi gör nu, inget med front end eller backend bara övning på oop.sitter i php, tankesättet.

       /* <?php


// class Cart
// {
//     private array $items = [];

//     //TODO Skriv getter för items
//     public function getItems()
//     {
//         return $this->items; //eller?????
//     }
//     //$this - referar till, oop - varje instans . klass mall, sen gör 2 objekt 2 instarer- varje sånt objekt har sin vertioner. this varje instans. egentligen inne i en klas och vill peka på en property. inne i klassen. den här propertyn som ligger är här. när vi klarrar på get items så får vi tillbaka. this blir olika objekt av klassen så kan items see olika hr, det här objektets items. instansens verisoner av prpertyn. inne i klas komma in måste peka på this. 
//     //Inne i en klass - då gäller inte dom sakerna , php procidural. oop så länge innanför min klass.Private bara inne i sin klass, protected i sina subklasser, utanför där. 

//     /*
//      Skall lägga till en produkt i kundvagnen genom att
//      skapa ett nytt cartItem och lägga till i $items array.
//      Metoden skall returnera detta cartItem.

//      VG: Om produkten redan finns i kundvagnen
//      skall istället quantity på cartitem ökas.
//      */
//     //public function addProduct($product) //cartiteam, product och hur många av dem
//     {
//         //ny cartitem, klassen. gjort och lagt till i array returnar vi - skapar cart item och lägger till array. Egent objekt som heter cartitem, hur många, quantety. cartitem lägger i kundvagnen. mer än bara producten, gruppera varje product 1 gång men antal. 
//         //få in en product, gör ett nytt cart. Ny sån - new cartitem () , få in product och antal. nyttobjekt, new acart item. 
//         //Få 0 in en product, skapa ett nytt cart item, sen pusha in i arrayen items, vanlig array eller ass array?, returna
//         $cartItem = new cartItem($product, 1); //quantity, labborera 

//         //ass array key id värde cartitem, lång lista. enkelt ta fram i remove product.
//         //array_push($this->items, $cartItem);

//         $this->items[$product->getId()] = $cartItem;
//         return $cartItem;
//     }

//     //Skall ta bort en produkt ur kundvagnen (använd unset())
//     public function removeProduct($product)
//     {
//         unset($product); //eller?
//     }

//     //Skall returnera totala antalet produkter i kundvagnen
//     //OBS: Ej antalet unika produkter
//     public function getTotalQuantity()
//     {
//     }

//     //Skall räkna ihop totalsumman för alla produkter i kundvagnen
//     //VG: Tänk på att ett cartitem kan ha olika quantity
//     public function getTotalSum()
//     {*/