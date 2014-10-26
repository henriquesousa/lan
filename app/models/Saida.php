<?php

class Saida extends Eloquent {

	/**
	 * The database table used deleted_at.
	 *
	 * value true or false
	 */
	protected $softDelete = true;

	protected $garded = [
		"id",
		"created_at",
		"updated_at",
		"deleted_at"
	];

	// Don't forget to fill this array
	protected $fillable = [];


	public static $rules = 
	[
		"cliente"	=> "required",
		"produto"	=> "required",
		"status"	=> "required",
		"valor"		=> "required"
	];

	//Relacionamentos


    public function status()
	{
		return $this->belongsTo('Status');
	}

	public function cliente()
	{
		return $this->belongsTo('Cliente');
	}

	public function funcionario()
	{
		return $this->belongsTo('Funcionario');
	}

	public function produto()
	{
		return $this->belongsTo('Produto');
	}

}