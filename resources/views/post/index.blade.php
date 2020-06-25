@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">投稿一覧</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="GET" action="{{ route('post.create') }}">
                    <button type="submit" class="btn btn-primary">
                        新規登録
                    </button>
                    </form>

                    <form method="GET" action="{{ url('post/index')}}" class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" name="search" type="search" placeholder="検索する" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索する</button>
                    </form>

                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">タイトル</th>
                        <th scope="col">投稿日</th>
                        <th scope="col">キーワード1</th>
                        <th scope="col">キーワード2</th>
                        <th scope="col">詳細</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                        <th>{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->post_date}}</td>
                        <td>{{$post->keyword1}}</td>
                        <td>{{$post->keyword2}}</td>
                        <td><a href="{{ url('post/show', ['id' =>$post->id]) }}">詳細をみる</a></td>

                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
