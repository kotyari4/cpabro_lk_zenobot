<?php


namespace App\Http\Controllers\DesignPatterns\AbstractFactory\Interfaces;

use App\Http\Controllers\DesignPatterns\AbstractFactory\Classes\AbstractProductA;
use App\Http\Controllers\DesignPatterns\AbstractFactory\Classes\AbstractProductB;

interface AbstractFactory
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}
