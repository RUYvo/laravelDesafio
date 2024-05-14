<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = [
            0 => [
                'nome' => 'Cliente 1',
                'email' => 'cliente1@example.com',
                'telefone' => '1111-1111',
                'endereco' => 'Rua A, 123',
            ],
            1 => [
                'nome' => 'Cliente 2',
                'email' => 'cliente2@example.com',
                'telefone' => '2222-2222',
                'endereco' => 'Rua B, 456',
            ],
            2 => [
                'nome' => 'Cliente 3',
                'email' => 'cliente3@example.com',
                'telefone' => '3333-3333',
                'endereco' => 'Rua C, 789',
            ],
            3 => [
                'nome' => 'Cliente 4',
                'email' => 'cliente4@example.com',
                'telefone' => '4444-4444',
                'endereco' => 'Rua D, 101',
            ],
            4 => [
                'nome' => 'Cliente 5',
                'email' => 'cliente5@example.com',
                'telefone' => '5555-5555',
                'endereco' => 'Rua E, 202',
            ],
        ];

        return view('site.clientes', compact('clientes'));
    }
}
