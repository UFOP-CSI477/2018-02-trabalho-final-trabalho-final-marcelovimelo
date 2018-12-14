@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Solicitar Coleta</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <order-alert user_id="{{ auth()->user()->id }}"></order-alert>

                    <div class="row">
                        <div class="col-lg-12">
                            <form method="post" action="{{ route('user.orders.store') }}" class="form-horizontal">
                                {{ csrf_field() }}

                                <div class="form-group"><label class="col-sm-2 control-label">Endereço</label>
                                    <div class="col-sm-10"><input type="text" name="address" placeholder="Seu Endereço" class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Tipos de Material</label>
                                    <div class="col-sm-10">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="toppings[]" value="papel" id="papel"> Papel
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="toppings[]" value="plastico" id="plastico"> Plástico
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="toppings[]" value="aluminio" id="aluminio"> Alumínio
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="toppings[]" value="vidro" id="vidro"> Vidro
                                        </label>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">Instructions</label>

                                    <div class="col-sm-10"><input type="text" name="instructions" placeholder="Special Instructions here" class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-success" type="submit">Solicitar coleta Agora</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
