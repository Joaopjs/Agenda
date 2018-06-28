@extends('layouts.app')

@section('titulo')
 Mostrar Contatos
@endsection

@push('conector')

<script type="text/javascript">

  function alterar_div(op) {
      
    var page = op;
    var x;

    var r = confirm("Voce Realmente Deseja Excluir Este Anuncio!");

    if (r==true)
    {
        $.ajax({
            url: "{{ route('excluircompromisso')}}/"+page,
            method: "GET",
            dataType: "html",
            data: {usuario: page}
        }).done(function(data){
           //faz algo quando enviar certo
                 $('#conteudo').html(window.location.reload());
             
        }).fail(function(data){
            //faz algo quando der errado
            alert("Erro");
        }); 
    }
  else
    {
      alert("Ação Cancelada:");
    }
  
  }
         
    </script>

@endpush

@section('content')
<br />
<center><h1>Compromissos</h1></center>
           <br /><br /><br />     
        <table class="table" style="">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Assunto</th>
              <th scope="col">Data</th>
              <th scope="col">Horario</th>
              <th scope="col">Endereço</th>
              <th scope="col">Criado em</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody id="conteudo">
            @isset($dados)
            @foreach($dados as $compromisso)
                <tr>
                  <th></th>
                  <td>{{$compromisso->assunto}}</td>
                  <td>{{$compromisso->datas}}</td>
                  <td>{{$compromisso->horario}}</td>
                  <td>{{$compromisso->endereco}}</td>
                  <td>{{Carbon::parse($compromisso->created_at)->diffForHumans()}}</td>
                  <td><a href="{{ route ('editarcompromisso')}}/{{$compromisso->id_compromisso}}" class="btn btn-success">
                  	Editar
                  </a> <hr/>
                  </td>
                  <td><a href="{{ route ('excluircompromisso') }}/{{$compromisso->id_compromisso}}" class="btn btn-danger">Deletar</a></td>
                </tr>
            @endforeach 
            @endisset       
          </tbody>
        </table> <hr>

        <script>
                $("#edit1").click(function(){
                      $("#1").html("hhhhhhhhhhhh");
                });

        </script>
    
    

    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                
            </div>
            <div class="col-sm-4">
                {{ $dados->links() }}
            </div>
            <div class="col-sm-3">
                
            </div>            
        </div>
    </div>
           
@endsection