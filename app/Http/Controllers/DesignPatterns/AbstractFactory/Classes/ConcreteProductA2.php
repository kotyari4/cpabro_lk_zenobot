<?php


namespace App\Http\Controllers\DesignPatterns\AbstractFactory\Classes;

use App\Http\Controllers\DesignPatterns\AbstractFactory\Interfaces\AbstractProductA;

class ConcreteProductA2 implements AbstractProductA
{

    public function usefulFunctionA(): string
    {
        // TODO: Implement usefulFunctionA() method.
        return "The result of the product A2.";
    }
}
