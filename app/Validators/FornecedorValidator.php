<?php

namespace Validators;

class FornecedorValidator extends BaseValidator
{
	/**
     * Regras de Validaçao para o Validator.
     *
     * @var array
     */
    protected $rules = [

        'create' => [
            'nome' => ['required', 'min:3', 'unique:fornecedores'],
            'razao' => ['required', 'min:6', 'unique:fornecedores'],
            'cpf_cnpj' => ['required'],
            'phone' => ['required', 'min:10', 'max:11'],
            'endereco' => ['required'],
            'email'    => ['required', 'email', 'unique:fornecedores']
        ],

        'update' => [
            'nome' => ['required', 'min:6', 'unique:fornecedores'],
            'razao' => ['required', 'min:6', 'unique:fornecedores'],
            'cpf_cnpj' => ['required'],
            'phone' => ['required', 'min:10', 'max:11'],
            'endereco' => ['required'],
            'email'    => ['required', 'email', 'unique:fornecedores']
        ]

    ];

    /**
     * Anexar um padrão sanitizer para esta
     * instancia de validação.
     */
    public function __construct()
    {
        parent::__construct();

        $this->attachSanitizer(new UsersSanitizer);
    }
}