<?php

namespace App\Http\Controllers\DesignPatterns;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DesignPatterns\AbstractFactory\Classes\ConcreteFactory1;
use App\Http\Controllers\DesignPatterns\AbstractFactory\Classes\ConcreteFactory2;
use App\Http\Controllers\DesignPatterns\AbstractFactory\Interfaces\AbstractFactory;
use Illuminate\Http\Request;

class AbstractFactoryController extends Controller
{
    public function init(){

        print "Client: Testing client code with the first factory type:\n";
        $this->factory(new ConcreteFactory1());

        print "Client: Testing the same client code with the second factory type:\n";
        $this->factory(new ConcreteFactory2());

    }
    public function factory(AbstractFactory $factory){

        $productA = $factory->createProductA();
        $productB = $factory->createProductB();

        print $productB->usefulFunctionB() . "\n";
        print $productB->anotherUsefulFunctionB($productA) . "\n";

    }
}
