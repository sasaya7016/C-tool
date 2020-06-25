@extends('layouts.app')

@section('content')



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