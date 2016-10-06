<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Evento;
use Auth;
use App\Confirmado;
use App\Http\Requests;

class UserController extends Controller
{
  //Confirmar presenca
  public function confirmPresence($id, $idevento, $idanunciante){
    DB::table('confirmados')->insert(
    ['id_usuario' => $id, 'id_evento' => $idevento, 'id_anunciante'=> $idanunciante]
    );

  }

    //Editar Perfil
    public function profile(){
      if (Auth::guest()){
      //Valida se usuario esta logado
      return url('user/login');
    }
      else {
        return view('user/profile');
      }
    }

    //Pegar preferencias
    public function preferences(){
      $id = Auth::user()->id;
      $eventos = DB::table('eventos')
          ->join('preferencias', 'eventos.idCategoria', '=', 'preferencias.idCategoria')
          ->join('categorias', 'eventos.idCategoria',  '=', 'categorias.idCategoria')
          ->join('anunciantes', 'eventos.idAnunciante', '=', 'anunciantes.idanunciante')
          ->join('classificacao', 'eventos.idClassificacao', '=', 'classificacao.idClassificacao')
          ->where('preferencias.idusuario','=',$id)
          ->select('eventos.*', 'categorias.descricaoCategoria', 'classificacao.descricao_classif', 'anunciantes.idanunciante')
          ->get();
      $tudo = DB::table('eventos')
          ->join('categorias', 'eventos.idCategoria',  '=', 'categorias.idCategoria')
          ->join('classificacao', 'eventos.idClassificacao', '=', 'classificacao.idClassificacao')
          ->join('anunciantes', 'eventos.idAnunciante', '=', 'anunciantes.idanunciante')
          ->join('subcategorias', 'eventos.idSubCat', '=', 'subcategorias.idsubcategoria')
          ->select('eventos.*', 'categorias.descricaoCategoria', 'classificacao.descricao_classif', 'subcategorias.descricaoSubcat','anunciantes.idanunciante')
          ->get();
      // $confirmados = DB::table('confirmados')->where('confirmados.id_usuario', '=',$id)->get('confirmados.id_evento');
      return view('user.home')->with('eventos', $eventos)->with('tudo', $tudo);
    }
    // Eventos confirmados
    public function confirmed(){
      if (Auth::guest()){
      //Valida se usuario esta logado
      return url('/login');;
    }
      else {
        $id = Auth::user()->id;
        $eventos = DB::table('eventos')
            ->join('confirmados', 'eventos.idevento', '=', 'confirmados.id_evento')
            ->join('categorias', 'eventos.idCategoria', '=', 'categorias.idCategoria')
            ->join('classificacao', 'eventos.idClassificacao', '=', 'classificacao.idClassificacao')
            ->where('confirmados.id_usuario','=',$id)
            ->select('eventos.*', 'categorias.descricaoCategoria', 'classificacao.descricao_classif')
            ->get();
        return view('user.confirmed')->with('eventos', $eventos);
      }
    }

    public function details($idevento){
      $evento = DB::table('eventos')
          ->join('categorias', 'eventos.idCategoria', '=', 'categorias.idCategoria')
          ->join('anunciantes', 'eventos.idAnunciante', '=', 'anunciantes.idanunciante')
          ->join('classificacao', 'eventos.idClassificacao', '=', 'classificacao.idClassificacao')
          ->join('subcategorias', 'eventos.idSubCat', '=', 'subcategorias.idsubcategoria')
          ->where('eventos.idevento','=',$idevento)
          ->select('eventos.*', 'categorias.descricaoCategoria', 'classificacao.descricao_classif', 'anunciantes.nomeFantasia', 'anunciantes.cnpj','anunciantes.razaosocial', 'anunciantes.telefone','anunciantes.email', 'subcategorias.descricaosubcat')
          ->get();
      return view('user.details')->with('evento', $evento);

    }

    public function preferencias(){
      return $this->belongsToMany('App\Preferencia');
    }

    public function alterar(){
      return view('home');
    }

    public function sair(){
      Auth::logout();
      return view('welcome');
    }
}
