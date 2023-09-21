<x-app-layout>
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
        <title>池田ハイツ</title>
        <br>
        <div class='title-size'>
            <h1>池田ハイツ</h1><br>
        </div>
            
       <!-- Slider main container -->
        
        <div class="swiper">
            {{-- スライドショーの作成 --}}
            <div class="swiper-wrapper">
                　<!-- Slides -->
            @include('posts.swiper')
            </div>
        </div><br>
        
        <script src="{{ asset('js/app.js') }}"></script>
        <a>(管理者用)部屋の作成→</a>
        <a href='/posts/create'>create</a><br>
        <a>部屋の詳細はこちら↓</a>
        <div class='posts'>
           @foreach ($posts as $post)
                <div class='post' style="display: inline-block;">
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}
                        <div class="small-image">
                            <div style="position: relative;">
                                <img src="{{ $post->image_url }}" alt="" />
                                <div style="position: absolute; top: 15%; left: 10%; transform: translate(-50%, -50%); background-color: rgba(255, 255, 255, 0.7); padding: 10px;">
                                    {{--いいね機能--}}
                                    @if (Auth::id() != $post->user_id)
                                        @if (Auth::user()->is_favorite($post->id))
                                            {!! Form::open(['route' => ['favorites.unfavorite', $post->id], 'method' => 'delete']) !!}
                                            {!! Form::submit('★', ['class' => 'button btn btn-warning']) !!}
                                            {!! Form::close() !!}
                                        @else
                                            {!! Form::open(['route' => ['favorites.favorite', $post->id]]) !!}
                                            {!! Form::submit('☆', ['class' => 'button btn btn-success']) !!}
                                            {!! Form::close() !!}
                                        @endif
                                    @endif
                                </div>
                            </div>
                           
                        </div>
                    </a>
                </div>
            @endforeach
        </div><br>
        <div class='aposts'>
            <div class='accordion'>
                 @include('posts.accordion')
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3253.759291362398!2d139.6255651!3d35.3616196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60184397398eeddb%3A0x989b7112129f6d32!2z44CSMjM2LTAwNTMg56We5aWI5bed55yM5qiq5rWc5biC6YeR5rKi5Yy66IO96KaL5Y-w6YCa77yU77yV4oiS77yTIOaxoOeUsOODj-OCpOODhA!5e0!3m2!1sja!2sjp!4v1692869913293!5m2!1sja!2sjp" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br><br>
        
        <footer>
            @include('posts.footer')
         {{-- <a>{{ Auth::user()->name }}</a> --}}
        </footer><br>
        <div class='paginate'></div>
    </div>
        
</x-app-layout>
