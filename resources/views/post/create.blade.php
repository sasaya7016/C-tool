@extends('layouts.app')
  @include('nav')

@section('content')




<div class="container cont-p">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                     {{ session('status') }}
                </div>
            @endif
            <h2>ブログ記事投稿・編集</h2>

            <form method="POST" enctype="multipart/form-data" action="{{route('post.store')}}">
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
                    <label>カテゴリー</label>
                    <input class="form-control" name="category" value="" placeholder="カテゴリーを入力して下さい。">
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
                    <label>本文</label>
                    <textarea class="form-control" rows="15" name="content"  placeholder="本文を入力してください。"></textarea>
                </div>
   
                <input type="submit" class="btn btn-primary btn-sm" value="送信">
                {{--CSRFトークンが生成される--}}
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
