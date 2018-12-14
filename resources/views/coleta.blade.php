@extends('layouts.coleta')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 card">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Solicitar Coleta</h1></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    {!! Form::open(['url' => 'coleta/store']) !!}
                        <div class="form-group">
                           {{ csrf_field() }}
                         {{Form::label('endereco', 'Endereço')}}
                         {{Form::text('endereco','',['class' => 'form-control','placeholder' => 'Digite seu Endereço'])}}
                       </div>
                        <div class="form-group">
                         {{Form::label('qtd', 'Quantidade de Material')}}
                         {{Form::number('qtd','',['class' => 'form-control','placeholder' => 'Quantidade de sacos de 100L'])}}
                         </div>

                         <div class="form-group"><label class="col-sm-12 control-label">Tipos de Material</label>
                                    <div class="col-sm-14">
                                      <div class="controls span2">
                                        <div class="col-md-3"><label class="btn btn-primary"><img src="img/papel.png" alt="Papel" class="img-thumbnail img-check"><input type="checkbox" name="tipos[]" id="papel" value="papel" autocomplete="off"></label></div>
                                        <div class="col-md-3"><label class="btn btn-primary"><img src="img/platico.png" alt="Plástico" class="img-thumbnail img-check"><input type="checkbox" name="tipos[]" id="plastico" value="plastico" autocomplete="off"></label></div>
                                        </div>
                                        <div class="controls span2">
                                        <div class="col-md-3"><label class="btn btn-primary"><img src="img/aluminio.png" alt="Alumínio" class="img-thumbnail img-check"><input type="checkbox" name="tipos[]" id="aluminio" value="aluminio" autocomplete="off"></label></div>
                                        <div class="col-md-3"><label class="btn btn-primary"><img src="img/vidro.png" alt="Vidro" class="img-thumbnail img-check"><input type="checkbox" name="tipos[]" id="vidro" value="vidro" class="vidro" autocomplete="off"></label></div>
                                        </div>
                                    </div>
                          </div>
                              <br>
                       <div class="form-group">
                         {{Form::label('disp', 'Disponibilidade')}}
                         {{Form::text('disp', '',['class' => 'form-control','placeholder' => 'Exemplo: 12h00 -14h00'])}}
                       </div>

                       <div>
                         {{Form::submit('Solicitar Coleta',['class'=>'btn btn-primary'])}}
                       </div>
                     {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
