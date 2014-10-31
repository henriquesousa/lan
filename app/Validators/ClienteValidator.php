<?php

namespace Validators;

class ClienteValidator extends BaseValidator
{
	/**
     * Regras de Validaçao para o Validator.
     *
     * @var array
     */
    protected $rules = 
    [
         'create' => [
            'nome' => ['required', 'min:3'],
            'rg' => ['required'],
            'cpf'    => ['required', 'unique:clientes'],
            'civil' => ['required'],
            'email'    => ['required', 'email', 'unique:clientes'],
            'phone'    => ['required', 'min:13']
        ],

        'update' => [
            'nome' => ['required', 'min:3'],
            'rg' => ['required'],
            'cpf'    => ['required'],
            'civil' => ['required'],
            'email'    => ['required', 'email'],
            'phone'    => ['required', 'min:13'],
            '_token'    => ['required']
        ]

    ];

    
}