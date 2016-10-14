<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB, Auth, Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

class Anunciantes extends Controller
{

  public function login(){
      // create our user data for the authentication
    $userdata = array(
        'email'     => Input::get('email'),
        'password'  => Input::get('password')
    );

    // attempt to do the login
    if (Auth::guard('anunciante')->attempt($userdata)) {
      return redirect('login/home');

    } else {
        // validation not successful, send back to form
        return Redirect::to('anunc');
       }
  }


    public function index(){
      $id = (Auth::guard('anunciante')->user()->idanunciante);
      $total = DB::table('eventos')
          ->where('eventos.idanunciante','=',$id)
          ->count();
      $conf = DB::table('confirmados')
      ->where('confirmados.id_anunciante','=',$id)
      ->count();
      $detalhes = DB::table('confirmados')
      ->select(array('eventos.nome','eventos.dataInicio', DB::raw('COUNT(confirmados.id_evento) as total_conf')))
      ->where('confirmados.id_anunciante','=',$id)
      ->join('eventos','eventos.idAnunciante', '=', 'confirmados.id_anunciante')
      ->orderBy('eventos.dataInicio')
      ->groupBy('eventos.nome','eventos.dataInicio')
      ->take(5)
      ->get();
      return view('anunciante.home')->with('total', $total)->with('conf', $conf)->with('detalhes', $detalhes);

    }

    public function novoEvento(){
      var_dump(Auth::guard('anunciante')->user());
    }
}
