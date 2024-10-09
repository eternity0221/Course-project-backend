@extends("components.layout.RootLayout", ['title'=>'Вход'])

@section("main")
    <h1 style="text-align: center">регистрация</h1>
    @include("components.forms.register")
@endsection
@section("layout")
    @include("components.layout.PageLayout")
@endsection
