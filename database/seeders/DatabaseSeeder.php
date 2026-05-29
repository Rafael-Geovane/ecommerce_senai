<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Produto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Criar usuários (clientes) de teste
        $usuarios = [
            [
                'name' => 'Mariana Alves',
                'email' => 'mariana@email.com',
                'password' => Hash::make('senha123'),
                'created_at' => now()->subDays(60),
            ],
            [
                'name' => 'Lucas Silva',
                'email' => 'lucas@email.com',
                'password' => Hash::make('senha123'),
                'created_at' => now()->subDays(45),
            ],
            [
                'name' => 'Rafaela Costa',
                'email' => 'rafaela@email.com',
                'password' => Hash::make('senha123'),
                'created_at' => now()->subDays(30),
            ],
            [
                'name' => 'Pedro Lima',
                'email' => 'pedro@email.com',
                'password' => Hash::make('senha123'),
                'created_at' => now()->subDays(15),
            ],
        ];

        foreach ($usuarios as $u) {
            User::updateOrCreate(['email' => $u['email']], $u);
        }

        // 2. Criar produtos padrão
        $produtos = [
            [
                'nome' => 'iphone 14',
                'preco' => 29.99,
                'imagem' => 'product1.svg',
                'tag' => 'iOS 17',
                'meta_1' => '128GB',
                'meta_2' => 'Frete grátis',
                'categoria' => 'Tech',
                'estoque' => 120,
                'sku' => 'IPHONE-14-128',
                'descricao' => 'Design elegante, tela de alta resolução e processador extremamente rápido. Excelente custo-benefício.',
            ],
            [
                'nome' => 'iphone 14 Pro',
                'preco' => 49.99,
                'imagem' => 'product2.svg',
                'tag' => 'Premium',
                'meta_1' => '256GB',
                'meta_2' => '12x sem juros',
                'categoria' => 'Tech',
                'estoque' => 54,
                'sku' => 'IPHONE-14P-256',
                'descricao' => 'A câmera de 48 megapixels e a tela Dynamic Island tornam este smartphone a escolha ideal para profissionais.',
            ],
            [
                'nome' => 'iphone 14 Pro Max',
                'preco' => 59.99,
                'imagem' => 'product3.svg',
                'tag' => 'Destaque',
                'meta_1' => '256GB',
                'meta_2' => 'Bateria 100%',
                'categoria' => 'Tech',
                'estoque' => 32,
                'sku' => 'IPHONE-14PM-256',
                'descricao' => 'Bateria gigante e a maior tela da linha, o iPhone 14 Pro Max entrega o máximo de potência e autonomia.',
            ],
            [
                'nome' => 'iphone 15',
                'preco' => 19.99,
                'imagem' => 'product1.svg',
                'tag' => 'Lancamento',
                'meta_1' => '128GB',
                'meta_2' => 'Dynamic Island',
                'categoria' => 'Tech',
                'estoque' => 87,
                'sku' => 'IPHONE-15-128',
                'descricao' => 'A nova geração do clássico. Agora com tela Dynamic Island e conexões universais USB-C.',
            ],
            [
                'nome' => 'iphone 15 pro Max',
                'preco' => 19.99,
                'imagem' => 'product1.svg',
                'tag' => 'Titanio',
                'meta_1' => '512GB',
                'meta_2' => 'Garantia 1 ano',
                'categoria' => 'Tech',
                'estoque' => 15,
                'sku' => 'IPHONE-15PM-512',
                'descricao' => 'O topo de linha com corpo em titânio aeroespacial. Mais leve e incrivelmente mais resistente.',
            ],
            [
                'nome' => 'iphone 15 Pro',
                'preco' => 29.99,
                'imagem' => 'product2.svg',
                'tag' => 'Mais vendido',
                'meta_1' => '128GB',
                'meta_2' => 'Envio imediato',
                'categoria' => 'Tech',
                'estoque' => 45,
                'sku' => 'IPHONE-15P-128',
                'descricao' => 'Processador A17 Pro avançado para jogos e fotos cinematográficas.',
            ],
            [
                'nome' => 'iphone 16 Pro Max',
                'preco' => 69.99,
                'imagem' => 'product3.svg',
                'tag' => 'Pre-venda',
                'meta_1' => '1TB',
                'meta_2' => 'Brinde exclusivo',
                'categoria' => 'Tech',
                'estoque' => 5,
                'sku' => 'IPHONE-16PM-1T',
                'descricao' => 'A nova joia da tecnologia. Adquira antes de todo mundo e ganhe brindes exclusivos na pré-venda.',
            ],
            [
                'nome' => 'iphone 17 Pro Max',
                'preco' => 69.99,
                'imagem' => 'product3.svg',
                'tag' => 'Pre-venda',
                'meta_1' => '1TB',
                'meta_2' => 'Brinde exclusivo',
                'categoria' => 'Tech',
                'estoque' => 2,
                'sku' => 'IPHONE-17PM-1T',
                'descricao' => 'Visualizado no futuro. Reserve o iPhone do próximo ano com exclusividade absoluta.',
            ],
        ];

        foreach ($produtos as $p) {
            Produto::updateOrCreate(['nome' => $p['nome']], $p);
        }
    }
}

