<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;

class WebsiteController extends Controller
{
    // Carrega a página inicial enviando todos os produtos do banco de dados
    public function index()
    {
        $produtos = Produto::all();
        return view('index', compact('produtos'));
    }

    // Carrega a aba de catálogo completo de produtos dinamicamente
    public function catalogo()
    {
        $produtos = Produto::all();
        return view('catalogo', compact('produtos'));
    }

    // Carrega a página de um produto específico com base no ID clicado
    public function produto($id)
    {
        // Busca o produto pelo ID no banco de dados ou retorna 404
        $produto = Produto::findOrFail($id);

        return view('produto', compact('produto'));
    }
}