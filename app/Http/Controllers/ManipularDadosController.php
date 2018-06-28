<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compromisso;
use App\Contato;

class ManipularDadosController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function agendarCompromisso(Request $request)
    {
    	 date_default_timezone_set('America/Sao_Paulo');
        $dated = date('Y-m-d H:i');

        $this->validate($request, Compromisso::$rules);
        
        $compromisso = new Compromisso;

        $compromisso->assunto = $request->assunto;
        $compromisso->endereco = $request->endereco;
        $compromisso->datas = $request->data;
        $compromisso->horario = $request->hora;
        $compromisso->registradoEm = $dated;

        $compromisso->save();

        return view('welcome');
    }

    public function cadastraContato(Request $request)
    { 
    	$this->validate($request, Contato::$rules);    
      
        $contato = new Contato;
        $contato->nome = $request->name;
        $contato->telefone = $request->telefone;
        $contato->celular = $request->celular;
        $contato->endereco = $request->endereco;
        $contato->email = $request->email;

        $contato->save();

        return view('welcome');
    }

     public function mostrarcontato(Request $request)
    {
      
        $dados = Contato::paginate(5);     

        return view('mostrarcontatos', ['dados' => $dados]);
    }

    public function mostrarcompromisso(Request $request)
    {
    	$dados = Compromisso::paginate(5); 

        return view('mostraragenda',  ['dados' => $dados]);
    }
    
    public function excluircontato($id = 1)
    { 
    	Contato::where('id_contatos', $id)->delete();

    	$dados = Contato::paginate(5);     

        return view('mostrarcontatos', ['dados' => $dados]);
    }

    public function editarcontato($id = 1, Request $request)
    { 

    	$dados = Contato::where('id_contatos', $id)->paginate(1);
    	
    	//dados = Contato::paginate(5);     

        return view('contatos', ['dados' => $dados,
    							 'id' => $id]);
    }

    public function cadeditarcontato($id = 1, Request $request)
    { 

    	Contato::where('id_contatos', $id)
    						   ->update(['nome' => $request->name,
    						             'telefone' => $request->telefone,
    						             'celular' => $request->celular, 
    						             'endereco' => $request->endereco,
    						             'email' => $request->email ]);
    	
    	$dados = Contato::where('id_contatos', $id)->paginate(1);     

        return view('mostrarcontatos', ['dados' => $dados]);
    }

    public function excluircompromisso($id = 1)
    { 
    	Compromisso::where('id_compromisso', $id)->delete();

    	$dados = Compromisso::paginate(5);     

        return view('mostraragenda', ['dados' => $dados]);
    }
                    
    public function editarcompromisso($id = 1, Request $request)
    { 

    	$dados = Compromisso::where('id_compromisso', $id)->paginate(1);
    	
    	//dados = Contato::paginate(5);     

        return view('agenda', ['dados' => $dados,
    							 'id' => $id]);
    }

    public function cadeditarcompromisso($id = 1, Request $request)
    {

    	Compromisso::where('id_compromisso', $id)
    						   ->update(['assunto' => $request->assunto,
    						             'endereco' => $request->endereco,
    						             'datas' => $request->data, 
    						             'horario' => $request->hora]);
    	
    	$dados = Compromisso::where('id_compromisso', $id)->paginate(1);     

        return view('mostraragenda', ['dados' => $dados]);
    }

    
}
