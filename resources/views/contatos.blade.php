@extends('layouts.app')

@section('titulo')
 Contatos
@endsection

@section('content')


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center><h1>Cadastrar Contato</h1></center>

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
                                               
                                                    <form class="form-horizontal" role="form" method="get" 
                                                    
                                                        action="{{ route('cadeditarcontato') }}/{{ $id }}">
                                                                                                        
                                                        {{ csrf_field() }}

                                                        <div class="form-group row">
                                                            <label for="name" class="col-md-4 control-label">Nome</label>

                                                            <div class="col-md-6">
                                                                <input id="name" type="text"
                                                                maxlength="100" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $dado->nome or old('name') }}" required >

                                                                @if ($errors->has('name'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('name') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="telefone" class="col-md-4 control-label">Telefone</label>

                                                            <div class="col-md-6">
                                                                <input id="telefone" type="text" class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}" name="telefone" value="{{ $dado->telefone or old('telefone') }}" maxlength="12" required >

                                                                @if ($errors->has('telefone'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('telefone') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                       

                                                        <div class="form-group row">
                                                            <label for="celular" class="col-md-4 control-label">Celular</label>

                                                            <div class="col-md-6">
                                                                <input id="celular" type="text" class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}" name="celular" value="{{ $dado->celular or old('celular') }}" maxlength="12" required >

                                                                @if ($errors->has('celular'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('celular') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                            <div class="form-group row">
                                                            <label for="endereco" class="col-md-4 control-label">Endereço</label>

                                                            <div class="col-md-6">
                                                                <input id="endereco" type="text" maxlength="100" class="form-control{{ $errors->has('endereco') ? ' is-invalid' : '' }}" name="endereco" value="{{ $dado->endereco or old('endereco') }}" required >

                                                                @if ($errors->has('endereco'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('endereco') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>

                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="email" class="col-md-4 control-label">E-Mail </label>

                                                            <div class="col-md-6">
                                                                <input id="email" type="email" maxlength="100" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $dado->email or old('email') }}" required>

                                                                @if ($errors->has('email'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('email') }}</strong>
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

                            </div>
                        </div>
                    </div>
                </div>
</center>
@endsection
