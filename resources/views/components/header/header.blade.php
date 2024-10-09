<header class="header" data-aos="fade-down" data-aos-duration="1000">
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container">
            <a class="navbar-brand" href="/">Водоканал</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="/">Главная</a>
                    <a class="nav-item nav-link" href="/news">Новости</a>
                    <a class="nav-item nav-link" href="{{ route(Auth::check() ? 'dashboard' : 'register') }}">Личный кабинет</a>
                    @if(Auth::check())
                        <p class="nav-item nav-link">{{ Auth::user()->name }}</p>
                        <a class="nav-item nav-link" href="{{route('logout')}}">Выйти</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>
