@extends('layouts.admin')
@section('title', 'Admin | Produtos')

@section('conteudo-principal')
    <main class="content">
      @if(session('success'))
        <div class="notice" style="display:block">{{ session('success') }}</div>
      @else
        <div class="notice">Conectado ao Banco de Dados SQLite. Os dados abaixo são reais.</div>
      @endif

      <div class="top">
        <div><h1>Gestao de produtos</h1><p class="small">Cadastre itens, altere preco e acompanhe estoque.</p></div>
      </div>

      <section class="grid-main">
        <div class="card">
          <h3>Catalogo</h3>
          <table class="table">
            <thead><tr><th>Produto</th><th>Categoria</th><th>Preco</th><th>Estoque</th></tr></thead>
            <tbody>
              @foreach ($produtos as $produto)
                <tr>
                  <td>{{ $produto->nome }}</td>
                  <td>{{ $produto->categoria ?? 'Tech' }}</td>
                  <td data-price="{{ $produto->preco }}"></td>
                  <td>{{ $produto->estoque }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <div class="card">
          <h3>Cadastrar ou editar</h3>
          <form class="list" action="{{ route('admin.produtos.store') }}" method="POST">
            @csrf
            <input type="text" name="nome" placeholder="Nome do produto" required />
            <select name="categoria">
              <option value="Tech">Tech</option>
              <option value="Moda">Moda</option>
              <option value="Acessórios">Acessórios</option>
              <option value="Lifestyle">Lifestyle</option>
            </select>
            <div class="grid-3">
              <input type="text" name="preco" placeholder="Preço (Ex: 49.99)" required />
              <input type="number" name="estoque" placeholder="Estoque" required />
              <input type="text" name="sku" placeholder="SKU" />
            </div>
            <textarea name="descricao" placeholder="Descrição do produto"></textarea>
            <button class="btn btn-primary" type="submit">Salvar produto</button>
          </form>
        </div>
      </section>
    </main>

@endsection
