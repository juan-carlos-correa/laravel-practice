<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\User;

class InicioController extends Controller
{
  public function Inicio()
  {
    return View::make('home');
  }
  
  // Primera manera de instanciar modelo User
  public function guardarUsuario()
  {
    $user = User::create([
      'first_name' => 'Juan',
      'last_name' => 'Correa',
      'email' => 'jcorrea2',
      'password' => '123'
    ]);
    $user->save();
    return $user;
  }
  
  // Segunda manera de instanciar modelo User
  public function guardarUsuario2()
  {
    $user = new User();
    $user->first_name = 'Carlos';
    $user->last_name = 'Correa';
    $user->email = 'carlos@asd.com';
    $user->password = '123';
    $user->save();
    return $user;
  }
  
  // Consultar un usuario
  public function buscarUsuario()
  {
    $user = User::find(1);
    return $user;
  }
  
  public function modificarEmail()
  {
    $user = User::find(1);
    $user->email = 'email@asd.com';
    $user->save();
    return $user;
  }

}
