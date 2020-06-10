<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ '/css/top.css' }}">
        <link rel="stylesheet" href="{{ '/css/blog.css' }}">

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
                <a href="{{ url('post/index') }}">POST</a>
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
                    C-tool  Blog
                </div>
            </div>
        </div>


        <div id="main_wrapper">
		<div class="cf">
			<div id="top_pickup">
				<p id="pickup_thumb">
					<img src="/images/blog/pc.jpeg" alt="ピックアップ画像">
					<span id="pickup_tag">PHP/Laravel</span>
				</p>
				<dl>
					<dt><a href="#">LaravelでBlogアプリ作ってます！！</a></dt>
					<dd>2020.06.01</dd>
				</dl>
			</div>

			<div id="top_ranking">
				<h2>おすすめブログ&リンク先</h2>
				<ul>
					<li>
						<dl>
							<dt>
								<img src="/images/blog/php.png" alt="おすすめ画像01">
								<span class="ranking_number">1</span>
							</dt>
							<dd>
								<h3><a href="#">LaravelでBlogアプリ作ってます！！</a></h3>
                                <span class="ranking_tag webdesign">PHP/Laravel</span>
                                <p>このページC-toolのことです。</p>
							</dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt>
								<img src="/images/blog/varenta-top.jpg" alt="おすすめ画像02">
								<span class="ranking_number">2</span>
							</dt>
							<dd>
								<h3><a href="#">Ruby on Railsで美容院風HP作成中</a></h3>
                                <span class="ranking_tag wordpress">Ruby/Ruby on Rails</span>
                                <p><a href="https://varenta.herokuapp.com/">https://varenta.herokuapp.com/</a></p>
                                
							</dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt>
								<img src="/images/blog/portfolio.jpg" alt="おすすめ画像01">
								<span class="ranking_number">3</span>
							</dt>
							<dd>
								<h3><a href="#">管理者のPortfolioサイト作成しました！</a></h3>
                                <span class="ranking_tag webmarketing">GitHub-page</span>
                                <p><a href=" https://sasaya7016.github.io/portfolio/"> https://sasaya7016.github.io/portfolio/</a></p>
							</dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt>
								<img src="/images/blog/hashliteral.jpg" alt="おすすめ画像01">
								<span class="ranking_number">4</span>
							</dt>
							<dd>
								<h3><a href="#">フリマアプリ「Hash-Literal」</a></h3>
                                <span class="ranking_tag webdesign">Ruby on rails /アジャイル開発</span>
                                <p><a href="http://www.hash-literal.com">http://www.hash-literal.com</a></p>
                                
							</dd>
						</dl>
					</li>
				</ul>
			</div>
		</div>

		<div class="cf">
			<div id="top_left">
				<div id="top_category">
					<h3>CATEGORY(作成中)</h3>
					<ul>
						<li><a href="#">就活</a></li>
						<li><a href="#">プログラミング学習</a></li>
						<li><a href="#">アプリ開発</a></li>
						<li><a href="#">プライベート</a></li>
						<li><a href="#">おすすめ書籍</a></li>
					</ul>
				</div>
				<div id="top_ad">
                    <img src="#" alt="">
                    <p>管理者:ナオピー</p>
				</div>
			</div>
			<div id="top_right">
        <h3><a href="{{ url('post/index') }}">新着記事一覧</a></h3>
        @foreach($posts as $post)
				<ul id="post_list">
					<li class="cf">
						<dl>
							<dt>
								<img src="/images/blog/pc.jpeg" alt="新着記事1の画像">
								<span class="new_category_tag">{{$post->category}}</span>
							</dt>
							<dd>
								<h4><a href="#">{{$post->title}}</a></h4>
								<span class="new_date">{{$post->post_date}}</span>
								<span class="new_tag">{{$post->keyword1}} , {{$post->keyword2}}</span>
								<p>{{ $post->content }}<a href="{{ url('post/show', ['id' =>$post->id]) }}">...続きを読む</a></p>
							</dd>
						</dl>
          </li>

          <li class="cf">
						<dl>
							<dt>
								<img src="/images/blog/php.png" alt="新着記事1の画像">
								<span class="new_category_tag     ">プログラミング学習</span>
							</dt>
							<dd>
								<h4><a href="#">PHP勉強はじめました！！</a></h4>
								<span class="new_date">2020年5月25日</span>
								<span class="new_tag">PHP,Laravel</span>
								<p>勉強しはじめました<a href="#">...続きを読む</a></p>
							</dd>
						</dl>
					</li>

					<li class="cf">
						<dl>
							<dt>
								<img src="/images/blog/portfolio.jpg" alt="新着記事1の画像">
								<span class="new_category_tag     ">就活</span>
							</dt>
							<dd>
								<h4><a href="#">管理者のPortfolioサイト作成しました！</a></h4>
								<span class="new_date">2020年5月24日</span>
								<span class="new_tag">GitHub</span>
								<p>Laravelを使用してBLOGアプリを作成中です。<a href="#">...続きを読む</a></p>
							</dd>
						</dl>
					</li>

					<li class="cf">
						<dl>
							<dt>
								<img src="/images/blog/varenta.jpg" alt="新着記事1の画像">
								<span class="new_category_tag     ">アプリ開発</span>
							</dt>
							<dd>
								<h4><a href="#">Ruby on Railsで美容院風HP作成中</a></h4>
								<span class="new_date">2020年5月20日</span>
								<span class="new_tag">Ruby,Ruby on Rails</span>
								<p>作成中です<a href="#">...続きを読む</a></p>
							</dd>
						</dl>
					</li>

					<li class="cf">
						<dl>
							<dt>
								<img src="/images/blog/hashliteral.jpg" alt="新着記事1の画像">
								<span class="new_category_tag     ">プログラミング学習</span>
							</dt>
							<dd>
								<h4><a href="#">フリマアプリ「Hash-Literal」</a></h4>
								<span class="new_date">2020年4月27日</span>
								<span class="new_tag">Ruby on Rails,アジャイル開発</span>
								<p>スクールにて、６人グループで作成したアプリです。<a href="#">...続きを読む</a></p>
							</dd>
						</dl>
					</li>
          




        </ul>
        @endforeach
			</div>
		</div>
	</div><!-- #main_wrapper -->


	<footer>
		<div id="footer_inner" class="cf">
		</div>
	</footer>


    </body>
</html>
