<?php


abstract class Car{
    abstract public function doorNum();

}

class Ferrari extends Car{

    public function doorNum()
    {
        return 2;
    }
}

class Audi extends Car {

    public function doorNum()
    {
        return 4;
    }
}

$ferrari = new Ferrari();
$ferrari ->doorNum();
$audi = new Audi();
$audi ->doorNum();

