<?php

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

Route::get('/test', function () {
    return view('form');
});

Route::post('/test', function () {
    $name = $_POST["fname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $arr = array("name" => $name, "email" => $email, "password" => $pass);

    /*echo $name . " " . $email . " " . $pass; test */
    //return json_encode($arr); //pas aux formats json ici mais au  format html

    $user = App\Models\User::updateOrCreate($arr);


    /*return response()->json(
        $arr
    );*/

    return "saved <br> <a href=/>retour à l'accueil";
});

Route::get('/liste', function () {
    $users = App\Models\User::all();
    $res = "";
    foreach ($users as $user) {
        $res = $res .  "name : " . $user->name . " email : " . $user->email . "<br>";
    }
    $res = $res . "<br><br> <a href=/>retour à l'accueil";
    return $res;
});
