<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Admin | Dashboard')</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style_admin.css') }}" />
  <script defer src="{{ asset('assets/js/script.js') }}"></script>
</head>
<body>
  <div class="wrapper">
    <aside class="sidebar">
      <div class="logo"><span class="logo-badge">A</span><span>NovaShop Admin</span></div>
      <nav class="menu">
        <a class="{{ request()->routeIs('admin.index') ? 'active' : '' }}" href="{{ route('admin.index') }}">Dashboard</a>
        <a class="{{ request()->routeIs('admin.produtos') ? 'active' : '' }}" href="{{ route('admin.produtos') }}">Produtos</a>
        <a class="{{ request()->routeIs('admin.pedidos') ? 'active' : '' }}" href="{{ route('admin.pedidos') }}">Pedidos</a>
        <a class="{{ request()->routeIs('admin.clientes') ? 'active' : '' }}" href="{{ route('admin.clientes') }}">Clientes</a>
        <a class="{{ request()->routeIs('admin.configuracoes') ? 'active' : '' }}" href="{{ route('admin.configuracoes') }}">Configuracoes</a>
      </nav>
    </aside>

    @yield('conteudo-principal')
  </div>
</body>
</html>
