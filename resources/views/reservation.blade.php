@extends("layouts.layout")

@section("title", "| Бронирование")

@section("body")
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Бронирование</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="{{ route("index") }}">Главная</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Бронирование</p>
            </div>
        </div>
    </div>

    @include("layouts.errors")
    @include("layouts.success")

    <div class="container-fluid py-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="display-3 text-primary">Скидка 30%</h1>
                                <h1 class="text-white">Для онлайн-бронирования</h1>
                            </div>
                            <p class="text-white">
                                Забронируйте столик заранее через наш сайт и получите скидку 30% на выбранные напитки. Это отличный способ спланировать встречу с друзьями, деловой разговор или уютный вечер в спокойной атмосфере нашей кофейни.
                                Мы подготовим для вас комфортное место, чтобы вы могли наслаждаться свежим кофе, вкусными десертами и приятной обстановкой без ожидания.
                            </p>
                            <ul class="list-inline text-white m-0">
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Быстрое и удобное онлайн-бронирование</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Гарантированный столик</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Скидка 30%</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                            <h1 class="text-white mb-4 mt-5">Забронируйте столик</h1>
                            <form class="mb-5" action="{{ route("reservation.store") }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control bg-transparent border-primary p-4" placeholder="Имя" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone" class="form-control bg-transparent border-primary p-4" placeholder="Номер телефона" required>
                                </div>
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="date" name="date" id="date" class="form-control bg-transparent border-primary p-4 datetimepicker-input" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">                                        
                                        <input type="time" name="time" id="time" class="form-control bg-transparent border-primary p-4 datetimepicker-input" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="guests" id="guests" class="form-control bg-transparent border-primary p-4" min="1" required>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Забронировать</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection