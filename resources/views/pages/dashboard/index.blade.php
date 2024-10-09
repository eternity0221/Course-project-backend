@extends("components.layout.RootLayout", ['title'=>'Личный кабинет'])

@section("main")
    <h1 class="mb-5" style="text-align: center">Приборная панель</h1>
    <div class="card mb-3 shadow" style="max-width: 75%; margin-left: auto; margin-right: auto">
        <div class="row g-0">
{{--            <div class="col-md-4">--}}
{{--                <img style="width: 100%; max-height: 400px; object-fit: cover" src="{{Auth::user()->image}}" class="img img-fluid rounded-start" alt="...">--}}
{{--            </div>--}}
            <div class="col-md-12">
                <div class="card-body">
                    <div class="inputs">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Роль</span>
                            <input disabled type="text" class="form-control" placeholder="Role" aria-label="Role" value="{{Auth::user()->role}}" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Имя</span>
                            <input disabled type="text" class="form-control" placeholder="Name" aria-label="Role" value="{{Auth::user()->name}}" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Почта</span>
                            <input disabled type="text" class="form-control" placeholder="Email" aria-label="Email" value="{{Auth::user()->email}}" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Дата создания аккаунта</span>
                            <input disabled type="text" class="form-control" placeholder="Data" aria-label="Email" value="{{Auth::user()->created_at}}" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="buttons mb-2">
                        <a href="/dashboard/update" class="btn btn-primary flex-grow-1">Редактировать</a>
                        <button type="button" class="btn btn-danger flex-grow-1" data-bs-toggle="modal" data-bs-target="#exampleModal">Удалить</button>
                    </div>
                    @if(Auth::user()->role=='admin')
                        <a href="{{ route('news.create') }}" class="btn btn-success flex-grow-1">Создать пост</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section("layout")
    @include("components.layout.PageLayout")
@endsection
