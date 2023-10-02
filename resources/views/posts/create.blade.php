<x-app-layout>
 <title>部屋情報の作成</title>
 <div class="centered-content">
        <h1>部屋情報の作成画面</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="部屋番号"/>
            </div>
            <div class="body">
                <h2>本文</h2>
                <textarea name="post[body]" placeholder="補足情報を入れてください。"></textarea>
            </div>
            <div class="price">
                <h2>賃料</h2>
                <input type="text" name="post[price]" placeholder="家賃を入れてください。"/>
            </div><br>
            <div class="image">
                <h2>部屋の写真(画像のアップロード)</h2>
            <input type="file" name="image">
            </div>
            <input type="submit" value="保存"/>
        </form><br>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </div>
  </x-app-layout>