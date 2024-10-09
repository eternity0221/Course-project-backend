@extends("components.layout.RootLayout", ['title'=>'Новости'])

@section("main")
    <a href="{{ route('news.index') }}" class="btn btn-success">Назад</a>
    @include('components.forms.create-update-posts', ['type'=>'update'])
@endsection
@section("layout")
    @include("components.layout.PageLayout")
@endsection
