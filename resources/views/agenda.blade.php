@extends('layouts.app')

@section('titulo')
 Agenda
@endsection

@section('agend')

<!--formden.js communicates with FormDen server to validate fields and submit via AJAX -->

  <link href="https://cdnjs.cloudflare.com/ajax/libs/clockpicker/0.0.7/bootstrap-clockpicker.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

@endsection


@section('content')




                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center><h1>Agendar Compromisso </h1></center>

                    <br />
                    <br />
                    <br />

                        <center>
                    <div class="conteiner">
                        <div class="row">
                            <div class="col-sm-12" id="bl1">


                                <div class="conteiner">
                                    <div class="row">
                                        <div class="col-sm-12">

                                        <div class="panel panel-default">
                                            <div class="panel-heading"></div>
                                                <div class="panel-body">

                                                    @foreach($dados as $dado)

                                                    <form class="form-horizontal" role="form" method="GET" action="{{ route ('cadeditarcompromisso') }}/{{ $id }}">
                                                        {{ csrf_field() }}

                                                        <div class="form-group row">
                                                            <label for="assunto" class="col-md-4 control-label">Assunto</label>

                                                            <div class="col-md-6">
                                                                <input id="assunto" type="text" class="form-control{{ $errors->has('assunto') ? ' is-invalid' : '' }}" name="assunto" value="{{ $dado->assunto or old('assunto') }}" required >

                                                                @if ($errors->has('assunto'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('assunto') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <label for="data" class="col-md-4 control-label">Data</label>

                                                            <div class="col-md-6">
                                                                <input id="data" type="text" class="form-control{{ $errors->has('data') ? ' is-invalid' : '' }} date form-control" name="data" value="{{ $dado->datas or old('data') }}" required >

                                                                @if ($errors->has('data'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('data') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="hora" class="col-md-4 control-label">Horas</label>

                                                            <div class="col-md-6">
                                                                <input id="hora" type="time" class="form-control{{ $errors->has('hora') ? ' is-invalid' : '' }}" name="hora" value="{{$dado->horario }}" required >

                                                                @if ($errors->has('hora'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('hora') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="endereco" class="col-md-4 control-label">Endereço</label>

                                                            <div class="col-md-6">
                                                                <input id="endereco" type="text" class="form-control{{ $errors->has('endereco') ? ' is-invalid' : '' }}" name="endereco" value="{{ $dado->endereco or old('endereco') }}" required >

                                                                @if ($errors->has('endereco'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('endereco') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-6 col-md-offset-4">
                                                                <button type="submit" class="btn btn-primary">
                                                                    <i class="fa fa-btn fa-user"></i> Editar
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    @endforeach

                                                </div>
                                            </div>            
                                                    </div>
                                                </div>
                                            </div>

                                                        

                            <script type="text/javascript">

                                $('.date').datepicker({  

                                   format: 'mm-dd-yyyy'

                                 });  

                            </script>  


  
                            </div>
                        </div>
                    </div>
                </div>
</center>

@endsection