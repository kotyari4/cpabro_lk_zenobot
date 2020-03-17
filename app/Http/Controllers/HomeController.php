<?php


namespace App\Http\Controllers;


use App\Models\AppClients;

class HomeController extends Controller
{
    public function test(){

        $clients = AppClients::all();

        print "<pre>";

        foreach ($clients as $client){

            $phone = explode(" ", $client['phone']);

            foreach ($phone as $num){

                print $num . "\n";

            }

        }

    }
}
