@extends('layouts.app')

@section('titulo')
 Inicio
@endsection

@section('content')


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center><h1>Agenda Pessoal</h1></center>

                    <br />
                    <br />
                    <br />

                        <center>
                    <div class="conteiner">
                        <div class="row">
                            <div class="col-sm-3" id="bl1">
                                
                            </div>
                        <div class="row">
                            <div class="col-sm-4" id="bl1">
                                <a href="{{ route('mostrarcontato')}}" ><img class="img-rounded" src='{{ asset("imagens/telefone.png")}}' id='id' width='200px' height='180px'></a>
                                <p>Seus contatos guardados<br>
                                e em segurança <br>
                                </p></a>
                            </div>
                            <div class="col-sm-1" id="bl1">
                              &nbsp  &nbsp&nbsp&nbsp  &nbsp&nbsp
                            </div>
                            <div class="col-sm-4" id="bl3">
                                <a href="{{ route('mostrarcompromisso')}}" ><img class="img-rounded" src='{{ asset("imagens/agenda.png")}}' id='id' width='200px' height='180px'></a></br>
                                <p>Seus compromissos <br>
                                importantes</p></a>            
                            </div>
                        </div>
                    </div>
                </div>
</center>
@endsection