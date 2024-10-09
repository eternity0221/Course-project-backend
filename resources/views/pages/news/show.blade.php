@extends("components.layout.RootLayout", ['title'=>'Новости'])

@section("main")

    <div class="row mb-5">
            <div class="card news-card__show shadow">
                <div class="card-header"><h2>{{ $post->short_title }}</h2></div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="card-author news-created_at mb-2">Пост создан: {{ $post->created_at }}</div>
                        <div class="card-author">Автор: {{ $user->name }}</div>
                    </div>
                    <div class="card-img card-img__max mb-2" style="background-image: url({{ '/'.$post->img }}); height: 500px; background-size: cover;"></div>
                    <div class="card-author news-descr mb-5">Статья: {{ $post->descr }}</div>
                    <a href="{{ route('news.index') }}" class="btn btn-outline-primary">На главную</a>
                    @if(Auth::user()->role=='admin')
                        <a href="/news/{{ $post->post_id }}/edit" class="btn btn-outline-success">Редактировать</a>
                        <form action="{{route('news.destroy', ['news'=>$post->post_id])}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger">DELETE</button>
                        </form>
                    @endif

                </div>
            </div>
    </div>

@endsection
@section("layout")
    @include("components.layout.PageLayout")
@endsection
