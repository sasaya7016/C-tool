<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ '/css/top.css' }}">

    <title>C-tool</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="top-github">
            <a href="https://github.com/sasaya7016/C-tool">GitHub</a>
        </div>
        <div class="top-new">
            <a href="{{ url('post/create') }}">post</a>
        </div>

        @if (Route::has('login'))
            <div class="top-right">
                @auth
                    <a href="{{ url('/home') }}">Home&nbsp;</a>
                @else
                    <a href="{{ route('login') }}">Login &nbsp;</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register&nbsp;</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Blog  C-tool
            </div>
        </div>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>