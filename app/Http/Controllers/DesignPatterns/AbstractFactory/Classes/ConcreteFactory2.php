<?php


namespace App\Http\Controllers\DesignPatterns\AbstractFactory\Classes;

use App\Http\Controllers\DesignPatterns\AbstractFactory\Interfaces\AbstractFactory;

class ConcreteFactory2 implements AbstractFactory
{

    public function createProductA(): AbstractProductA
    {
        // TODO: Implement createProductA() method.
        return new ConcreteProductA2;

    }

    public function createProductB(): AbstractProductB
    {
        // TODO: Implement createProductB() method.
        return new ConcreteProductB2;
    }
}
