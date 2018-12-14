@extends('layouts.app')

@section('content')
  <h1>Todas Mensagens</h1>

  @if(count($Mensagens1) > 0)
  <div class="table-responsive card body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Mensagem</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Mensagens1 as $Mensagens)
                                    <tr>
                                        <td>{{ $Mensagens->id }}</td>
                                        <td>{{ $Mensagens->nome }}</td>
                                        <td>{{ $Mensagens->email }}</td>
                                        <td>{{ $Mensagens->mensagem }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
  @endif
@endsection
