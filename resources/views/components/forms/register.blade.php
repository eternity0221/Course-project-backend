<div class="row">
    <div class="col"></div>
    <div class="col-5 m-4">
        <form class="container form-control shadow" method="POST" action="{{route('register')}}">
            @csrf
            @method('POST')
            <div class="form-row">
                <div class="form-group md-6 mb-3">
                    <label for="inputEmail4">Имя</label>
                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="inputEmail4" placeholder="Имя">
                    @error("name")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group md-6 mb-3">
                    <label for="inputEmail4">Эл.почта</label>
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail4" placeholder="Эл.почта">
                    @error("email")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group md-6 mb-3">
                <label for="inputAddress">Адрес</label>
                <input name="address" type="text" class="form-control @error('address') is-invalid @enderror" id="inputAddress" placeholder="Адрес">
                @error("address")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group md-6 mb-3">
                <label for="InputPassword1" class="form-label">Пароль</label>
                <input placeholder="Пароль" required name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="InputPassword1" value="{{old('password', '')}}">
                @error("password")
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group md-6 mb-3">
                <label for="InputPasswordConfirmation" class="form-label">Повторите пароль</label>
                <input placeholder="Повторите пароль" required name="password_confirmation" type="password" class="form-control @error('password') is-invalid @enderror" id="InputPasswordConfirmation" value="{{old('password_confirmation', '')}}">
            </div>
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            <a class="btn btn-primary" href="{{route('login')}}">Авторизоваться</a>
        </form>
    </div>
    <div class="col"></div>
</div>


