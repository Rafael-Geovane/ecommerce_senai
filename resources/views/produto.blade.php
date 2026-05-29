@extends('layouts.app')
@section('title', $produto['nome'] . ' | NovaShop')

@section('conteudo-principal')
  <main class="page-hero">
    <div class="container page-panel product-grid">
      
      <div class="card">
        <img src="{{ asset('assets/img/' . $produto['imagem']) }}" alt="{{ $produto['nome'] }}">
      </div>
      
      <div>
        <span class="tag">{{ $produto['tag'] }}</span>
        <h1>{{ ucwords($produto['nome']) }}</h1>
        
        <p>Experiência premium com alto desempenho, conjunto de câmeras de última geração e design sofisticado. O smartphone ideal para o seu dia a dia.</p>
        
        <div class="price" data-price="{{ $produto['preco'] }}" data-unit-price="{{ $produto['preco'] }}">
          R$ {{ number_format($produto['preco'], 2, ',', '.') }}
        </div>
        
        <p class="small">Parcelamento em até 12x sem juros. {{ $produto['meta_2'] }}.</p>

        <div class="list">
          <label>Cor
            <select>
              <option>Preto Espacial</option>
              <option>Prateado</option>
              <option>Titânio Natural</option>
            </select>
          </label>
          
          <label>Armazenamento
            <select>
              <option>{{ $produto['meta_1'] }} (Padrão)</option>
              <option>256 GB</option>
              <option>512 GB</option>
            </select>
          </label>
          
          <label>Quantidade<input id="qty" type="number" min="1" value="1" /></label>
        </div>

        <div class="cta-row">
          <a class="btn btn-primary" href="/carrinho">Adicionar ao carrinho</a>
          <a class="btn btn-light" href="/checkout">Comprar agora</a>
        </div>

        <div class="summary" style="margin-top:22px;position:static">
          <div class="summary-row">
            <strong>Total estimado</strong>
            <strong data-product-total>R$ {{ number_format($produto['preco'], 2, ',', '.') }}</strong>
          </div>
          <div class="summary-row"><span>Disponibilidade</span><span class="badge">Em estoque</span></div>
          <div class="summary-row"><span>SKU</span><span>NS-IPHONE-00{{ $produto['id'] }}</span></div>
        </div>
      </div>
    </div>
  </main>
@endsection