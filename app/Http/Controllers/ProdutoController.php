<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = [
            0 => [
                'nome' => 'Produto 1',
                'descricao' => 'Descrição do Produto 1',
                'preco' => 100.00,
            ],
            1 => [
                'nome' => 'Produto 2',
                'descricao' => 'Descrição do Produto 2',
                'preco' => 200.00,
            ],
            2 => [
                'nome' => 'Produto 3',
                'descricao' => 'Descrição do Produto 3',
                'preco' => 150.00,
            ],
            3 => [
                'nome' => 'Produto 4',
                'descricao' => 'Descrição do Produto 4',
                'preco' => 350.00,
            ],
            4 => [
                'nome' => 'Produto 5',
                'descricao' => 'Descrição do Produto 4',
                'preco' => 300.00,
            ],
        ];

        return view('site.produto', compact('produtos'));
    }
}
