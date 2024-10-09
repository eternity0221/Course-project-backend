@extends("components.layout.RootLayout", ['title'=>'Новости'])

@section("main")
    <a href="{{ route('dashboard') }}" class="btn btn-success">Назад</a>
    @include('components.forms.create-update-posts', ['type'=>'create'])
@endsection
@section("layout")
    @include("components.layout.PageLayout")
@endsection
