@extends("components.layout.RootLayout", ['title'=>'Вход'])

@section("main")
    <h1 style="text-align: center">Логин</h1>
    @include("components.forms.login")
@endsection
@section("layout")
    @include("components.layout.PageLayout")
@endsection
