<?php


class Cart
{
    private array $items = [];

    //TODO Skriv getter för items

    public function getItems() {
      return $this->items;
    }

    public function setItems($item) {
      array_push($this->items, $item);
    }

    /*
     Skall lägga till en produkt i kundvagnen genom att
     skapa ett nytt cartItem och lägga till i $items array.
     Metoden skall returnera detta cartItem.

     VG: Om produkten redan finns i kundvagnen
     skall istället quantity på cartitem ökas.
     */
    public function addProduct($product, $quantity)
    {
      $cartItem = new CartItem($product, $quantity);
      $this->setItems($cartItem);
      return $cartItem;
    }

    public function getProduct() {
      return $product;
    }

    //Skall ta bort en produkt ur kundvagnen (använd unset())
    public function removeProduct($product)
    {
    }

    //Skall returnera totala antalet produkter i kundvagnen
    //OBS: Ej antalet unika produkter
    public function getTotalQuantity()
    {
      return count($this->getItems());
    }

    //Skall räkna ihop totalsumman för alla produkter i kundvagnen
    //VG: Tänk på att ett cartitem kan ha olika quantity
    public function getTotalSum()
    {
      $total = 0;
      $items = $this->getItems();
      foreach ($items as $item) {
        $total += $item->getProduct()->getPrice();
      }
      return $total;
    }
}
