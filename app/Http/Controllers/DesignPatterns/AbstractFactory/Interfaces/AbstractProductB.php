<?php


namespace App\Http\Controllers\DesignPatterns\AbstractFactory\Interfaces;


interface AbstractProductB
{
    public function usefulFunctionB(): string;

    public function anotherUsefulFunctionB(AbstractProductA $collaborator): string;
}
