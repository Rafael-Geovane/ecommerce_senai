<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard index showing dynamic metrics
    public function index()
    {
        $totalProdutos = Produto::count();
        $totalClientes = User::count();
        $totalEstoque = Produto::sum('estoque');
        
        // Calcula itens em baixo estoque
        $baixoEstoque = Produto::where('estoque', '<', 10)->count();

        return view('admin.index', compact('totalProdutos', 'totalClientes', 'totalEstoque', 'baixoEstoque'));
    }

    // Lista os produtos no painel de administração
    public function produtos()
    {
        $produtos = Produto::all();
        return view('admin.produtos', compact('produtos'));
    }

    // Salva um novo produto no banco de dados
    public function storeProduto(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'categoria' => 'nullable|string|max:255',
            'preco' => 'required|numeric|min:0',
            'estoque' => 'required|integer|min:0',
            'sku' => 'nullable|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        // Define valores complementares para manter o layout estético da loja
        $randomImages = ['product1.svg', 'product2.svg', 'product3.svg', 'product4.svg'];
        $validated['imagem'] = $randomImages[array_rand($randomImages)];
        
        $validated['tag'] = $request->input('tag', 'Novo');
        $validated['meta_1'] = $request->input('meta_1', 'Padrão');
        $validated['meta_2'] = $request->input('meta_2', 'Garantia');

        Produto::create($validated);

        return redirect()->route('admin.produtos')->with('success', 'Produto cadastrado com sucesso!');
    }

    // Lista os clientes cadastrados (usuarios)
    public function clientes()
    {
        $clientes = User::all();
        return view('admin.clientes', compact('clientes'));
    }
}
