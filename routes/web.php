<?php

use App\SiteSetting;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ajouter-site-setting', function () {
    $setting = new SiteSetting;
    $setting->title = 'Titre du site';
    $setting->text = 'Texte du site';
    $setting->logo = 'chemin/vers/logo.png';
    $setting->address = 'Adresse du site';
    $setting->menu_structure = ['Accueil', 'À Propos', 'Services', 'Contact'];
    $setting->slider_photos = ['slide1.jpg', 'slide2.jpg', 'slide3.jpg'];
    $setting->save();

    return 'Données ajoutées avec succès!';
});
