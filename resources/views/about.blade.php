@extends("layouts.layout")

@section("title", "| О нас")

@section("body")
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">О нас</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="{{ route("index") }}">Главная</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">О нас</p>
            </div>
        </div>
    </div>

    @include("layouts.us_story")

    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Наши особенности</h4>
                <h1 class="display-4">Почему выбирают нас?</h1>
            </div>
            <div class="row no-gutters text-center">
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item h-100 p-4">
                        <i class="fas fa-seedling text-primary fa-3x mb-3"></i>
                        <h4 class="mb-3">Свежие ингредиенты</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item h-100 p-4">
                        <i class="fas fa-user-tie text-primary fa-3x mb-3"></i>
                        <h4 class="mb-3">Эксклюзивные шеф-повара</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item h-100 p-4">
                        <i class="fas fa-shipping-fast text-primary fa-3x mb-3"></i>
                        <h4 class="mb-3">Быстрое обслуживание</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item h-100 p-4">
                        <i class="fas fa-smile text-primary fa-3x mb-3"></i>
                        <h4 class="mb-3">Дружеская атмосфера</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item h-100 p-4">
                        <i class="fas fa-clock text-primary fa-3x mb-3"></i>
                        <h4 class="mb-3">Открыт 24/7 часов</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-item h-100 p-4">
                        <i class="fas fa-wifi text-primary fa-3x mb-3"></i>
                        <h4 class="mb-3">Бесплатный WIFI</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include("layouts.reviews")
@endsection