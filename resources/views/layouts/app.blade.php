<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Caveat" rel="stylesheet">

  <!-- Styles -->
  @if(app('env') == 'production')
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/css/auth.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/css/top.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/css/blog.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/css/post.css') }}">
  @else
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ '/css/auth.css' }}">
    <link rel="stylesheet" href="{{ '/css/top.css' }}">
    <link rel="stylesheet" href="{{ '/css/blog.css' }}">
    <link rel="stylesheet" href="{{ '/css/post.css' }}">
  @endif
</head>


<body>
  <div id="app">
    <main class="py-4">
      @yield('content')
    </main>
  </div>
</body>
</html>
