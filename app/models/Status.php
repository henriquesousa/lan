<?php

class Status extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	protected $table = 'status';

	// Don't forget to fill this array
	protected $fillable = [];

	//Relacionamentos

	public function saida()
	{
		return $this->belongsTo('Saida');
	}

}