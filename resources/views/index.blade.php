@extends("layouts.layout")

@section("title", "| Главная")

@section("body")
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset("img/carousel-1.jpg") }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Мы служили</h2>
                        <h1 class="display-1 text-white m-0">Cup & Cozy</h1>
                        <h2 class="text-white m-0">С 2010 ГОДА</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset("img/carousel-2.jpg") }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Мы Служили</h2>
                        <h1 class="display-1 text-white m-0">Cup & Cozy</h1>
                        <h2 class="text-white m-0">С 2010 ГОДА</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

    @include("layouts.us_story")
    
    <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
        <div class="container py-5">
            <h1 class="display-3 text-primary mt-3">Скидка 50%</h1>
            <h1 class="text-white mb-3">Специальное предложение по воскресеньям</h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3">Каждую неделю</h4>
        </div>
    </div>
    
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Наши услуги</h4>
                <h1 class="display-4">Свежие и органические зёрна</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{ asset("img/service-1.jpg") }}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-truck service-icon"></i>Быстрая доставка</h4>
                            <p class="m-0">
                                Мы быстро доставляем свежий кофе и десерты прямо к вашей двери. Ваш заказ готовится сразу после оформления, чтобы вы получили его горячим и ароматным.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{ asset("img/service-2.jpg") }}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-coffee service-icon"></i>Свежие зёрна</h4>
                            <p class="m-0">
                                Мы используем только свежие кофейные зёрна высокого качества. Каждая партия тщательно отбирается, чтобы сохранить насыщенный вкус и аромат настоящего кофе.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{ asset("img/service-3.jpg") }}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-award service-icon"></i>Высокое качество</h4>
                            <p class="m-0">
                                Наши бариста готовят кофе по проверенным рецептам и стандартам. Мы следим за каждым этапом приготовления, чтобы каждая чашка была идеальной.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{ asset("img/service-4.jpg") }}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-table service-icon"></i>Бронирование</h4>
                            <p class="m-0">
                                Вы можете заранее забронировать столик онлайн. Это удобно, если вы планируете встречу, свидание или просто хотите спокойно провести время в кофейне.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection