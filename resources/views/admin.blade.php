@extends('layouts.coleta')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 card">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Painel Administrativo</h1></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/listmensagens" class="btn btn-danger" role="button">Listar Mensagens</a>
                    <br>
                    <br>
                    <form method="POST" action="/listcoletas">
                      @csrf
                      {{Form::submit('Listar Coletas',['class'=>'btn btn-danger'])}}
                    </form>
                    <br>
                    <br>

                    <form action="/search" method="post">
                      @csrf
                      <div class="input-group">
                        <input type="search" name="search" class="form-control">
                        <span class="input-group-prepend">
                          <button type="submit" name="btn btn-primary">Pesquisar</button>
                        </span>
                      </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
