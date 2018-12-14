@extends('layouts.app')

@section('content')
  <h1>Todas Coletas</h1>

  @if(count($Coletas1) > 0)
  <div class="table-responsive card body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Endereço</th>
                                    <th>Quantidade</th>
                                    <th>Tipos</th>
                                    <th>Disponiblidade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Coletas1 as $Coletas)
                                    <tr>
                                        <td>{{ $Coletas->id }}</td>
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
