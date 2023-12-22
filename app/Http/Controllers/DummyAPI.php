<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyAPI extends Controller
{
    //
    function getData(){
        return [ "name"=>"ferdinand","email"=>"kumferdinand620@gmail.com","address"=>"muea"];
    }
}
