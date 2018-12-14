<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensagem;

class MensagensController extends Controller
{
  public function enviar(Request $request){
  $this->validate($request,[
  'nome'=> 'required',
  'email'=> 'required',
  'mensagem'=>'required'
  ]);

  $mensagem = new Mensagem;
  $mensagem->nome = $request->input('nome');
  $mensagem->email = $request->input('email');
  $mensagem->mensagem = $request->input('mensagem');
  $mensagem->save();

  return redirect('/')->with('success', 'Mensagem Enviada com Sucesso');
}
}
