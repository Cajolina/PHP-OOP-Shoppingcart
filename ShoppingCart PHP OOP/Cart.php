<?php


class Cart
{
    private array $items = [];

    //TODO Skriv getter för items
    public function getItems()
    {
        return $this->items; //eller?????
    }
    //$this - referar till, oop - varje instans . klass mall, sen gör 2 objekt 2 instarer- varje sånt objekt har sin vertioner. this varje instans. egentligen inne i en klas och vill peka på en property. inne i klassen. den här propertyn som ligger är här. när vi klarrar på get items så får vi tillbaka. this blir olika objekt av klassen så kan items see olika hr, det här objektets items. instansens verisoner av prpertyn. inne i klas komma in måste peka på this. 
    //Inne i en klass - då gäller inte dom sakerna , php procidural. oop så länge innanför min klass.Private bara inne i sin klass, protected i sina subklasser, utanför där. 
    /*
     Skall lägga till en produkt i kundvagnen genom att
     skapa ett nytt cartItem och lägga till i $items array.
     Metoden skall returnera detta cartItem.

     VG: Om produkten redan finns i kundvagnen
     skall istället quantity på cartitem ökas.
     */
    public function addProduct($product)
    {
        //skapa ett nytt cartItem 
        //få in en prodcut, sen vill skapa ett cart item nytt, sen lägga till i arrayen items. Tänkta om jag vill göra en vanlig array eller assoativ array. lätt hitta. sen returna. Inte skapa element. det vi gör nu, inget med front end eller backend bara övning på oop.sitter i php, tankesättet. 
        array_push($items, $product); ///rätt?
    }

    //Skall ta bort en produkt ur kundvagnen (använd unset())
    public function removeProduct($product)
    {
        unset($product); //eller?
    }

    //Skall returnera totala antalet produkter i kundvagnen
    //OBS: Ej antalet unika produkter
    public function getTotalQuantity()
    {
    }

    //Skall räkna ihop totalsumman för alla produkter i kundvagnen
    //VG: Tänk på att ett cartitem kan ha olika quantity
    public function getTotalSum()
    {
    }
}
