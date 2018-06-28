<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = ['nome','telefone','celular',	'endereco',	'email'];
    protected $guarded = ['id_contatos'];
    protected $table = 'contatos';*/
	
   protected $table = "contatos";

   public $primarykey = "id_contato";

   public static $rules = [
        'name' => 'required|min:2|max:100',
        'telefone' => 'required|numeric',
        'celular' => 'required|numeric',
        'endereco' => 'required|min:2|max:100',
        'email' => 'required|min:2|max:100',
   ];
    

}
