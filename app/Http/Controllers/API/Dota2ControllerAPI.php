<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;

use App\Models\Dota2;

class Dota2ControllerAPI extends Controller
{
    public function index()
    {
        $heros = Dota2::all();

        return response()->json(['heros'=>$heros],200);
    }
}
