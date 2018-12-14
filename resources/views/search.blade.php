@extends('layouts.app')

@section('content')
  <h1>Resultado de Pesquisa por usuario</h1>

  @if(count($Coletas2) > 0)
  <div class="table-responsive card body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome usuário</th>
                                    <th>Endereço</th>
                                    <th>Quantidade</th>
                                    <th>Tipos</th>
                                    <th>Disponiblidade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Coletas2 as $Coletas)
                                    <tr>
                                        <td>{{ $Coletas->id }}</td>
                                        <td>{{ $Coletas->user1->name }}</td>
                                        <td>{{ $Coletas->endereco }}</td>
                                        <td>{{ $Coletas->qtd }}</td>
                                        <td>{{ $Coletas->tipos }}</td>
                                        <td>{{ $Coletas->disp }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
  @endif
@endsection
