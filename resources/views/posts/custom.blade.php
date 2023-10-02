<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <style>
        /* ページ全体の背景色を白に設定 */
        body {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <!-- 他のメニューアイテムを追加 -->
            </ul>
        </nav>
    </header>
    <main>
        <div class="content">
            @yield('content') <!-- この部分は個々のページでコンテンツを挿入するためのセクション -->
        </div>
    </main>
    <footer>
        <!-- フッターのコンテンツ -->
    </footer>
</body>
</html>