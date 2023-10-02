<x-app-layout>
      <title>{{ $post->title }}号室の詳細</title>
        <div class="centered-content">
            <header>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                </ul>
            </nav>
            </header>
            <h1 class="title">
                {{ $post->title }}
            </h1>
            <div class="content">
                <div class="content__post">
                    <p>{{ $post->body }}</p>    
                </div>
            </div>
            <h3 class="price">
               <p>家賃(月々): {{ $post->price }}円</p>
            </h3>
            <div>
                <div class="show-image"><img src="{{ $post->image_url }}" alt="" /></div>
            </div>
            
            <h1>コメント</h1>
            <ul>
                <li>
                    <form method="POST" action="{{route('comments.store', $post)}}">
                        @csrf
                        <input type="text" name="body"> 
                        <button>投稿</button>
                        @error('body')
                        {{$message}}
                        @enderror
                    </form>
                </li>
            </ul>
            <ul>
                @foreach($post->comments()->latest()->get() as $comment)
                <li>
                    {{$comment->body}}
                    <form method="post" action="{{route('comments.destroy', $comment)}}">
                        @method('DELETE')
                        @csrf
                        <button>削除</button>
                    </form>
                </li>
                @endforeach
            </ul>
            
            <div class="edit">
                <a href="/posts/{{ $post->id }}/edit">編集</a>
            </div>
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deletePost({{ $post->id }})">削除</button>
            </form>
            <script>
                function deletePost(id) {
                    'use strict'
                    if (confirm('削除すると復元できません。\n本当に削除しますか?')) { 
                        document.getElementById(`form_${id}`).submit();
                    } 
                }
            </script>
            <d  iv class="footer">
                <a href="/">戻る</a>
            </div>
        </div>
</x-app-layout>