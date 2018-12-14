<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coleta;

class ColetasController extends Controller
{
  public function requisitar(Request $request){
  $this->validate($request,[
  'endereco'=> 'required',
  'qtd'=> 'required',
  'disp'=>'required'
  ]);

  $coleta = new Coleta;
  $coleta->user_id = auth()->user()->id;
  $coleta->endereco = $request->input('endereco');
  $coleta->qtd = $request->input('qtd');
  $coleta->tipo = $request->input('tipo');
  $coleta->disp = $request->input('disp');
  $coleta->save();

  return redirect('/')->with('success', 'Mensagem Enviada com Sucesso');
}
  public function store(Request $request)
  {
    $request->validate([
        'endereco' => 'required',
        'tipos' => 'required'
    ]);

    $consulta = Coleta::create([
        'user_id' => auth()->user()->id,
        'endereco' => $request->endereco,
        'qtd' => $request->qtd,
        'tipos' => implode(', ', $request->tipos),
        'disp' => $request->disp,
    ]);
    return redirect('/obrigado')->with('success', 'Coleta Solcitada com Sucesso');

  }


  public function getColetas(){
  $Coletas1 = Coleta::all();
  return view('listcoletas')->with('Coletas1',$Coletas1);
}
}
