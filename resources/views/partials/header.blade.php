<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 text-white">Главная</a></li>
                <li><a href="/authors" class="nav-link px-2 text-white">Авторы</a></li>
                <li><a href="/articles" class="nav-link px-2 text-white">Статьи</a></li>
                <li><a href="/categories" class="nav-link px-2 text-white">Категории</a></li>
            </ul>
            @if(Request::segment(1) == "authors")
                @yield("authorSearch")
            @elseif(Request::segment(1) == "categories")
                @yield("categorySearch")
            @elseif(Request::segment(1) == "articles")
                @yield("articleSearch")
            @elseif(Route::get('/'))
                @yield("globalSearch")
            @endif
        </div>
    </div>
</header>
