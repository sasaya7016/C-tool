@extends('layouts.app')
  @include('nav')

@section('content')


   
<div id="main_wrapper">
	<div class="cf">
    @include('post.pickup') <!-- ピックアップ -->
    @include('post.ranking') <!-- ランキング -->
  </div>

  <div class="cf">
    @include('post.category') <!-- カテゴリー -->
    @include('post.article') <!-- 新着記事 -->
  </div>

</div> <!-- #main_wrapper -->