<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ '/css/top.css' }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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

<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                     {{ session('status') }}
                </div>
            @endif
            <h2>ブログ記事投稿・編集</h2>

            <form method="POST" action="{{route('post.store')}}">
                @csrf
                <div class="form-group">
                    <label>日付</label>
                    <input class="form-control" name="post_date" size="20" value="" placeholder="日付を入力して下さい。">
                </div>
                <div class="form-group">
                    <label>タイトル</label>
                    <input class="form-control" name="title" value="" placeholder="タイトルを入力して下さい。">
                </div>

                <div class="form-group">
                    <label>キーワード1</label>
                    <input class="form-control" name="keyword1" value="" placeholder="keyword1">
                </div>

                <div class="form-group">
                    <label>キーワード2</label>
                    <input class="form-control" name="keyword2" value="" placeholder="keyword2">
                </div>
                
                <div class="form-group">
                    <label>画像</label>
                    <input class="form-control" type="file" name="image" value="">
                </div>

                <div class="form-group">
                    <label>本文</label>
                    <textarea class="form-control" rows="15" name="content" placeholder="本文を入力してください。"></textarea>
                </div>
   
                <input type="submit" class="btn btn-primary btn-sm" value="送信">
                {{--CSRFトークンが生成される--}}
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>

</body>
</html>