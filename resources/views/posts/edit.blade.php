<x-app-layout>
<title> {{ $post->title }}号室の編集画面</title>
<h1 class="title">編集画面</h1> 
<div class="content">
    <form action="/posts/{{ $post->id }}" method="POST"> @csrf
        @method('PUT')
        <div class='content__title'>
            <h2>タイトル</h2>
            <input type='text' name='post[title]' value="{{ $post->title }}"> 
        </div>
        <div class='content__body'> <h2>本文</h2>
            <input type='text' name='post[body]' value="{{ $post->body }}"> 
        </div>
        
        <div class="price"> <h2>賃料</h2>
            <input type='text' name='post[price]' value="{{ $post->price}}">
        </div>
        
        <div class="image">
            <h2>部屋の写真(画像のアップロード)</h2>
            <input type="file" name="image">
        </div>
       
       
        <input type="submit" value="保存"> 
    </form>
</div>

</x-app-layout>