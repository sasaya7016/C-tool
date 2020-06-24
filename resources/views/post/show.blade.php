<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ '/css/top.css' }}">
    <link rel="stylesheet" href="{{ '/css/blog.css' }}">
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
        <a href="{{ url('post/index') }}">post</a>
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
            <a href="{{ url('/') }}">Blog  C-tool<a>
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
            <div class="card">
                <div class="card-header">ブログ記事投稿・編集</div>
                <div class="card-body">

                    <form method="GET" action="{{ url('post/edit', ['id' =>$post->id]) }}">
                        @csrf
                        <div class="form-group">
                            <label>日付</label>
                            {{ $post->post_date }}
                    
                        </div>
                        <div class="form-group">
                            <label>タイトル</label>
                            {{ $post->title }}
                        
                        </div>

                        <div class="form-group">
                            <label>カテゴリー</label>
                            {{ $post->category }}
                        
                        </div>

                        <div class="form-group">
                            <label>キーワード1</label>
                            {{ $post->keyword1 }}
                    
                        </div>

                        <div class="form-group">
                            <label>キーワード2</label>
                            {{ $post->keyword2 }}
                    
                        </div>
                        
                        <div class="form-group">
                            <label>画像</label>
                            {{ $post->image }}
            
                        </div>

                        <div class="form-group">
                            <label>本文</label>
                            {{ $post->content }}
                        </div>
        
                        <input type="submit" class="btn btn-primary btn-sm" value="編集">
                        {{--CSRFトークンが生成される--}}
                        {{ csrf_field() }}

                    </form>

                    <form method="POST" action="{{ url('post/destroy', ['id' =>$post->id]) }}" id="delete_{{ $post->id}}">
                        @csrf
                        <a href="#" class="btn btn-danger" data-id="{{ $post->id }}" onclick="deletePost(this);" >削除</a>
                        <a href="{{ url('post/index') }}">戻る</a>
                    </form>
                </div>
             </div>
        </div>
    </div>
</div>

<script>
/*削除アラート */
function deletePost(e) {
    'use strict';
    if (confirm('削除してもよろしいですか？')) {
    document.getElementById('delete_' + e.dataset.id).submit();
    }
}
</script>

</body>
</html>