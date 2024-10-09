@extends("components.layout.RootLayout", ['title'=>'Новости'])

@section("main")
    <h1 class="mb-5" data-aos="fade-right" data-aos-duration="1400">Новости</h1>

    <form class="d-flex mb-4" role="search" action="{{route('news.index')}}">
        <input class="form-control me-2" name="search" type="search" placeholder="Найти пост..." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Поиск</button>
    </form>

    @if(isset($_GET['search']))
        @if(count($posts)>0)
            <h2>Результаты поиска по запросу <?= $_GET['search'] ?></h2>
            <p class="lead">Всего найдено {{ count($posts) }} постов</p>
        @else
            <h2>По запросу: <?= $_GET['search'] ?> ничего не найдено</h2>
            <a href="{{ route('news.index') }}" class="btn btn-outline-primary">Отобразить все посты</a>
        @endif
    @endif

    <div class="row">
        @foreach($posts as $post)
            <div class="col-6">
                <div class="card mb-4 shadow">
                    <div class="card-header"><h2>{{ $post->short_title }}</h2></div>
                    <div class="card-body">
                        <div class="card-img mb-1" style="height: 30vh; background-image: url({{ $post->img }}); background-size: cover"></div>
                        <div class="card-author mb-2">Автор: {{ $post->name }}</div>
                        <a href="/news/{{ $post->post_id }}" class="btn btn-outline-primary">Посмотреть пост</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if(!isset($_GET['search']))
        {{ $posts->links('pagination::bootstrap-5') }}
    @endif

@endsection
@section("layout")
    @include("components.layout.PageLayout")
@endsection
