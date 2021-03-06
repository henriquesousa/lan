<?php

class Produto extends \Eloquent 
{

	protected $softDelete = true;

	protected $table = 'produtos';
	
	protected $garded = [
		"id",
		"created_at",
		"updated_at",
		"deleted_at"
	];
	
	// Don't forget to fill this array
	protected $fillable = [];

	//Relacionamentos

	public function fornecedor()
	{
		return $this->belongsTo('Fornecedor');
	}

	public function categoria()
	{
		return $this->belongsTo('Categoria');
	}

	public function saida()
	{
		return $this->hasMany('Saida');
	}

}