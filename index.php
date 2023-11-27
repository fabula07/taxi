<?php

abstract class Taxi
{
    abstract public function getModel(): string;
    abstract public function getPrice(): float;
}

// Абстрактный класс создателя такси
abstract class CreatorTaxi
{
    abstract public function createTaxi(): Taxi;

    public function getTaxi(): string
    {
        $taxi = $this->createTaxi();
        return $taxi->getModel() . $taxi->getPrice();
    }
}

class EconomyCreator extends CreatorTaxi
{
    public function createTaxi(): Taxi
    {
        return new class() extends Taxi {
            public function getModel(): string
            {
                return "Economy Car";
            }

            public function getPrice(): float
            {
                return 1;
            }
        };
    }
}

class StandardCreator extends CreatorTaxi
{
    public function createTaxi(): Taxi
    {
        return new class() extends Taxi {
            public function getModel(): string
            {
                return "Standard Car";
            }

            public function getPrice(): float
            {
                return 2;
            }
        };
    }
}

class LuxCreator extends CreatorTaxi
{
    public function createTaxi(): Taxi
    {
        return new class() extends Taxi {
            public function getModel(): string
            {
                return "Lux Car";
            }

            public function getPrice(): float
            {
                return 3;
            }
        };
    }
}

class ClientTaxi
{
    public function infoGet(CreatorTaxi $infoForClient): string
    {
        return $infoForClient->getTaxi();
    }
}

$economyCreator = new EconomyCreator();
$standardCreator = new StandardCreator();
$luxCreator = new LuxCreator();

$ClientTaxi = new ClientTaxi();

$ClientTaxi->infoGet($economyCreator);
$ClientTaxi->infoGet($standardCreator);
$ClientTaxi->infoGet($luxCreator);