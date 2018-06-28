<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compromisso extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = ['nome','telefone','celular',	'endereco',	'email'];
    protected $guarded = ['id_contatos'];
    protected $table = 'contatos';*/
	
	protected $table = "compromissos";

	public $primarykey = "id_compromisso";
    
    public static $rules = [
        'assunto' => 'required|min:2|max:100',
        'data' => 'required',
        'hora' => 'required',
        'endereco' => 'required|min:2|max:100',
   ];
}
