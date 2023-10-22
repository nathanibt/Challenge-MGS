<?php

namespace App\Http\Controllers;

use App\SiteSetting;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $donnees = SiteSetting::all(); // Récupère toutes les données

        return view('welcome', ['donnees' => $donnees]);
    }
}
