@extends("components.layout.RootLayout", ['title'=>'Главная'])

@section("main")
    <h1 class="mt-5" data-aos="fade-right" data-aos-duration="1400">Главная</h1>
    <hr>
    <div class="d-flex justify-content-between">
        <p data-aos="fade-right" data-aos-duration="1400">Наш водоканал Сергиев Посад предоставляет жителям города качественные услуги по
            поставке воды и очистке сточных вод уже более 20 лет. Мы заботимся о здоровье наших клиентов и стремимся предоставить им.
            Наши специалисты постоянно работают над улучшением качества воды, следят за состоянием водопроводной сети и водоочистных сооружений.
            Мы используем современные технологии и оборудование, чтобы обеспечить наших абонентов чистой и безопасной питьевой водой.
            В нашем коллективе работают опытные специалисты, которые всегда готовы ответить на ваши вопросы и помочь в решении любых проблем.
            Мы стремимся к прозрачной и открытой коммуникации с нашими клиентами, поэтому предоставляем подробную информацию о наших услугах,
            тарифах и сроках обслуживания.</p>
        <img class="img-fluid mb-5 ms-4 w-50 h-25" data-aos="fade-left" data-aos-duration="1400" src="{{asset('storage/images/img/history-picture-one.png')}}">
    </div>
    <div class="d-flex justify-content-between">
        <img class="img-fluid me-3 w-50 h-25" data-aos="fade-right" data-aos-duration="1400" src="{{asset('storage/images/img/history-picture-two.png')}}">
        <p class="mb-5" data-aos="fade-left" data-aos-duration="1400">Наш водоканал Сергиев Посад предоставляет жителям города качественные услуги по
            поставке воды и очистке сточных вод уже более 20 лет. Мы заботимся о здоровье наших клиентов и стремимся предоставить им.
            Наши специалисты постоянно работают над улучшением качества воды, следят за состоянием водопроводной сети и водоочистных сооружений.
            Мы используем современные технологии и оборудование, чтобы обеспечить наших абонентов чистой и безопасной питьевой водой.
            В нашем коллективе работают опытные специалисты, которые всегда готовы ответить на ваши вопросы и помочь в решении любых проблем.
            Мы стремимся к прозрачной и открытой коммуникации с нашими клиентами, поэтому предоставляем подробную информацию о наших услугах,
            тарифах и сроках обслуживания.</p>
    </div>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('storage/images/img/3.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('storage/images/img/3.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('storage/images/img/3.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    </div>
@endsection
@section("layout")
    @include("components.layout.PageLayout")
@endsection
