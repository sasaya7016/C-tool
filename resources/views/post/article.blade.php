<div id="top_right">
  <h3><a href="{{ url('post/index') }}">新着記事一覧</a></h3>
  @foreach($posts as $post)
  <ul id="post_list">
    <li class="cf">
      <dl>
        <dt>
          <!-- @if ($post->user->profile_photo)
            <img class="post-profile-icon round-img" src="{{ asset('storage/user_images/' . $post->user->profile_photo) }}"/>
          @else
            <img class="post-profile-icon round-img" src="{{ asset('/images/blank_profile.png') }}"/>
          @endif -->
      
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
  </ul>
  @endforeach
</div>