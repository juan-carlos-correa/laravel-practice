<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

class InicioController extends Controller
{
  public function Inicio()
  {
    return View::make('home');
  }

}
