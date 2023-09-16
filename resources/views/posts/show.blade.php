<x-app-layout>
      <title>{{ $post->title }}号室の詳細</title>
        <div class="centered-content">
            <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
           {{-- <li><a href="/gallery">Gallery</a></li>
                <li><a href="/price">Price</a></li> --}}
            </ul>
        </nav>
    </header>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h2>本文</h2>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <h3 class="price">
            {{ $post->price }}
        </h3>
        <div>
            {{ $post->image_url }}
         </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        </div>
</x-app-layout>