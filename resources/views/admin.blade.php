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
                    <a href="/listcoletas" class="btn btn-info" role="button">Listar Coletas</a>
                    <a href="/listmensagens" class="btn btn-info" role="button">Listar Mensagens</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
