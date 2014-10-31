<?php

class Cliente extends \Eloquent 
{
	/**
	 * The database table used deleted_at.
	 *
	 * value true or false
	 */
	protected $softDelete = true;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'clientes';

	protected $garded = [
		"id",
		"created_at",
		"updated_at",
		"deleted_at"
	];

	// Don't forget to fill this array
	protected $fillable = [
		"nome",
		"rg",
		"cpf",
		"civil",
		"email",
		"phone"
	];

	
	//Relacionamentos

	public function saida()
    {
        return $this->hasMany('Saida');
    }

}