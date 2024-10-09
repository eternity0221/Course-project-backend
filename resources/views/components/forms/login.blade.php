<div class="row">
    <div class="col"></div>
    <div class="col-5 m-4">
        <form class="container form-control shadow" method="POST" action="{{route('login')}}">
            @csrf
            @method('POST')
            @error('auth')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group mb-3">
                <label for="exampleInputEmail1">Эл.почта</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Эл.почта" required>
            </div>
            <div class="form-group mb-2">
                <label for="exampleInputPassword1">Пароль</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль" required>
            </div>
            <button type="submit" class="btn btn-primary">Войти</button>
            <a type="submit" class="btn btn-primary" href="{{route('register')}}">Зарегистрироваться</a>
        </form>
    </div>
    <div class="col"></div>
</div>


