<x-app-layout>
       <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/price">Price</a></li>
            </ul>
        </nav>
    </header>
    
        <h1>池田ハイツ</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        <div class='postss'>
            <div class='accordion'>
                 @include('posts.accordion')
            </div>
        </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3253.759291362398!2d139.6255651!3d35.3616196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60184397398eeddb%3A0x989b7112129f6d32!2z44CSMjM2LTAwNTMg56We5aWI5bed55yM5qiq5rWc5biC6YeR5rKi5Yy66IO96KaL5Y-w6YCa77yU77yV4oiS77yTIOaxoOeUsOODj-OCpOODhA!5e0!3m2!1sja!2sjp!4v1692869913293!5m2!1sja!2sjp" width="1400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <footer>
      <a href="/posts/form">お問合せフォームはこちら</a>
     {{-- <a>{{ Auth::user()->name }}</a> --}}
      </footer>
        <div class='paginate'></div>
        <script src="{{ asset('js/accordion.js') }}"></script>
</x-app-layout>
