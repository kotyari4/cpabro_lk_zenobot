<?php


namespace App\Http\Controllers\DesignPatterns\AbstractFactory\Classes;

use App\Http\Controllers\DesignPatterns\AbstractFactory\Interfaces\AbstractProductA;
use App\Http\Controllers\DesignPatterns\AbstractFactory\Interfaces\AbstractProductB;

class ConcreteProductB1 implements AbstractProductB
{

    public function usefulFunctionB(): string
    {
        // TODO: Implement usefulFunctionB() method.
        return "The result of the product B1.";
    }

    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string
    {
        // TODO: Implement anotherUsefulFunctionB() method.
        $result = $collaborator->usefulFunctionA();

        return "The result of the B1 collaborating with the ({$result})";
    }
}
