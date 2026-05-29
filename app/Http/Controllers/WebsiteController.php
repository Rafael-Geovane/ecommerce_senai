<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    // 1. Centralizamos o seu array aqui para que tanto a Home quanto a aba Produto usem a mesma lista
    private function getListaProdutos()
    {
        return [
            [
                'id' => 1,
                'nome' => 'iphone 14',
                'preco' => 29.99,
                'imagem' => 'product1.svg',
                'tag' => 'iOS 17',
                'meta_1' => '128GB',
                'meta_2' => 'Frete grátis',
            ],
            [
                'id' => 2,
                'nome' => 'iphone 14 Pro',
                'preco' => 49.99,
                'imagem' => 'product2.svg',
                'tag' => 'Premium',
                'meta_1' => '256GB',
                'meta_2' => '12x sem juros',
            ],
            [
                'id' => 3,
                'nome' => 'iphone 14 Pro Max',
                'preco' => 59.99,
                'imagem' => 'product3.svg',
                'tag' => 'Destaque',
                'meta_1' => '256GB',
                'meta_2' => 'Bateria 100%',
            ],
            [
                'id' => 4,
                'nome' => 'iphone 15',
                'preco' => 19.99,
                'imagem' => 'product1.svg',
                'tag' => 'Lancamento',
                'meta_1' => '128GB',
                'meta_2' => 'Dynamic Island',
            ],
            [
                'id' => 5,
                'nome' => 'iphone 15 pro Max',
                'preco' => 19.99,
                'imagem' => 'product1.svg',
                'tag' => 'Titanio',
                'meta_1' => '512GB',
                'meta_2' => 'Garantia 1 ano',
            ],
            [
                'id' => 6,
                'nome' => 'iphone 15 Pro',
                'preco' => 29.99,
                'imagem' => 'product2.svg',
                'tag' => 'Mais vendido',
                'meta_1' => '128GB',
                'meta_2' => 'Envio imediato',
            ],
            [
                'id' => 7,
                'nome' => 'iphone 16 Pro Max',
                'preco' => 69.99,
                'imagem' => 'product3.svg',
                'tag' => 'Pre-venda',
                'meta_1' => '1TB',
                'meta_2' => 'Brinde exclusivo',
            ],
             [
                'id' => 8,
                'nome' => 'iphone 17 Pro Max',
                'preco' => 69.99,
                'imagem' => 'product3.svg',
                'tag' => 'Pre-venda',
                'meta_1' => '1TB',
                'meta_2' => 'Brinde exclusivo',
            ],
        ];
    }

    // 2. Carrega a página inicial enviando todos os produtos
    public function index()
    {
        $produtos = $this->getListaProdutos();
        return view('index', compact('produtos'));
    }

    // 3. Carrega a aba de um produto específico com base no ID clicado
    public function produto($id)
    {
        $produtos = $this->getListaProdutos();

        // Filtra a lista e pega apenas o produto correspondente ao ID da URL
        $produto = collect($produtos)->firstWhere('id', $id);

        // Se o ID digitado não existir, retorna erro 404 (página não encontrada)
        if (!$produto) {
            abort(404);
        }

        // Retorna a view 'produto' enviando os dados específicos dele
        return view('produto', compact('produto'));
    }
}