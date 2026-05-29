@extends('layouts.admin')
@section('title', 'Admin | Clientes')

@section('conteudo-principal')
    <main class="content">
      <div class="top">
        <div><h1>Clientes</h1><p class="small">Base de compradores e relacionamento.</p></div>
      </div>

      <section class="grid-3">
        <div class="card"><h3>Clientes na base</h3><div class="value" style="font-size:2rem;font-weight:800">{{ $clientes->count() }}</div><p class="small">Sincronizados via banco de dados</p></div>
        <div class="card"><h3>Novos (últimos 30 dias)</h3><div class="value" style="font-size:2rem;font-weight:800">{{ $clientes->where('created_at', '>=', now()->subDays(30))->count() }}</div><p class="small">Novos leads convertidos</p></div>
        <div class="card"><h3>Taxa de atividade</h3><div class="value" style="font-size:2rem;font-weight:800">100%</div><p class="small">Clientes ativos no sistema</p></div>
      </section>

      <section class="card" style="margin-top:18px">
        <table class="table">
          <thead><tr><th>Cliente</th><th>Email</th><th>Data de cadastro</th><th>Perfil</th></tr></thead>
          <tbody>
            @foreach ($clientes as $cliente)
              <tr>
                <td>{{ $cliente->name }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->created_at ? $cliente->created_at->format('d/m/Y') : now()->format('d/m/Y') }}</td>
                <td>
                  @if($loop->first)
                    <span class="pill success">VIP</span>
                  @elseif($loop->iteration == 2)
                    <span class="pill warning">Recorrente</span>
                  @else
                    <span class="pill success">Ativa</span>
                  @endif
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </section>

    </main>
@endsection
