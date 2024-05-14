<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores =[
            0 => [
                'nome' => 'Fornecedor 1',
                'status'=> 'N',
                'cnpj'=> '0',
                'ddd'=> '11', //São Paulo
                'telefone'=> '0000-0000',
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status'=> 'S',
                'cnpj'=> null,
                'ddd'=> '85', //Fortaleza
                'telefone'=> '1111-1111',
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status'=> 'N',
                'cnpj'=> '1',
                'ddd'=> '21', //Rio de Janeiro
                'telefone'=> '2222-2222',
            ],
            3 => [
                'nome' => 'Fornecedor 4',
                'status'=> 'S',
                'cnpj'=> '2',
                'ddd'=> '31', //Minas Gerais
                'telefone'=> '3333-3333',
            ],
            4 => [
                'nome' => 'Fornecedor 5',
                'status'=> 'S',
                'cnpj'=> '3',
                'ddd'=> '71', //Bahia
                'telefone'=> '4444-4444',
            ]
        ];
        return view('site.fornecedores', compact('fornecedores'));
    }
}
