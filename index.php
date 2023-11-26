<?php

interface Taxi
{
  public function getCar();
  public function getPrice();

}

class EconomyTaxi implements Taxi
{
 public function getCar()
 {
     // TODO: Implement getCar() method.
 }

    public function getPrice()
  {
      // TODO: Implement getPrice() method.
  }
}

class StandardTaxi implements Taxi
{
    public function getCar()
    {
        // TODO: Implement getCar() method.
    }

    public function getPrice()
   {
       // TODO: Implement getPrice() method.
   }
}
class LuxTaxi implements Taxi
{
  public function getCar()
  {
      // TODO: Implement getCar() method.
  }
  public function getPrice()
  {
      // TODO: Implement getPrice() method.
  }
}
class ClientTaxi
{
    public function infoGet (Taxi $taxi): string
    {
        return $taxi-> getCar() . $taxi-> getPrice();
    }
}

$economyTaxi = new EconomyTaxi();
$luxTaxi = new LuxTaxi();
$standardTaxi = new StandardTaxi();

$ClientTaxi = new ClientTaxi();

$ClientTaxi->infoGet($economyTaxi);
$ClientTaxi->infoGet($standardTaxi);
$ClientTaxi->infoGet($luxTaxi);



