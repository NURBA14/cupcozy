@extends("layouts.layout")

@section("title", "| Меню")

@section("body")
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Меню</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="{{ route("index") }}">Главная</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Меню</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Меню & Цены</h4>
                <h1 class="display-4">Меню</h1>
            </div>
            <div class="row">
                {{-- Горячий кофе --}}
                <div class="col-lg-6">
                    <h1 class="mb-5">Горячий кофе</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset("img/menu-1.jpg") }}" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Эспрессо - 1290₸</h4>
                            <p class="m-0">
                                Классический крепкий кофе с насыщенным вкусом и плотной кремовой пенкой.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset("img/menu-4.jfif") }}" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Американо - 1390₸</h4>
                            <p class="m-0">
                                Мягкий черный кофе на основе эспрессо с добавлением горячей воды.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset("img/menu-2.jpg") }}" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Капучино - 1790₸</h4>
                            <p class="m-0">
                                Эспрессо с горячим молоком и нежной молочной пенкой.    
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset("img/menu-3.jpg") }}" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Латте - 1890₸</h4>
                            <p class="m-0">
                                Мягкий кофе с большим количеством молока и легкой пеной.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- Холодный кофе --}}
                <div class="col-lg-6">
                    <h1 class="mb-5">Холодный кофе</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset("img/menu-5.jpg") }}" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Айс Американо — 1490₸</h4>
                            <p class="m-0">
                                Освежающий холодный кофе со льдом, идеально подходит для жаркого дня.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset("img/menu-6.png") }}" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Айс Латте — 1890₸</h4>
                            <p class="m-0">
                                Холодный кофе с молоком и льдом, мягкий и освежающий вкус.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset("img/menu-7.jpeg") }}" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Фраппе — 1990₸</h4>
                            <p class="m-0">
                                Взбитый холодный кофе со льдом и нежной кремовой текстурой.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset("img/menu-8.webp") }}" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Мокко Айс — 2090₸</h4>
                            <p class="m-0">
                                Холодный кофе с шоколадом и молоком, сладкий и насыщенный вкус.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- Фастфуд --}}
                <div class="col-lg-6">
                    <h1 class="mb-5">Фастфуд</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset("img/menu-9.jfif") }}" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Сэндвич с курицей — 1890₸</h4>
                            <p class="m-0">
                                Сэндвич с сочной курицей, свежими овощами и соусом в мягком хлебе.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset("img/menu-10.jpg") }}" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Сэндвич с ветчиной и сыром — 1790₸</h4>
                            <p class="m-0">
                                Классический сэндвич с ветчиной, сыром, овощами и соусом.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset("img/menu-11.webp") }}" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Круассан с лососем — 1990₸</h4>
                            <p class="m-0">
                                Круассан с лососем и свежими овощами.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset("img/menu-12.jpg") }}" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Салат Цезарь — 1990₸</h4>
                            <p class="m-0">
                                Свежий салат с курицей, листьями салата, сухариками и соусом цезарь.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- Выпечка --}}
                <div class="col-lg-6">
                    <h1 class="mb-5">Выпечка</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset("img/menu-16.jpeg") }}" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Круассан — 990₸</h4>
                            <p class="m-0">
                                Слоёная выпечка с нежной текстурой и хрустящей корочкой.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset("img/menu-13.webp") }}" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Чизкейк — 1790₸</h4>
                            <p class="m-0">
                                Нежный десерт на основе сливочного сыра с песочной основой.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset("img/menu-14.webp") }}" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Шоколадный маффин — 790₸</h4>
                            <p class="m-0">
                                Мягкий кекс с насыщенным вкусом шоколада и влажной текстурой.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset("img/menu-15.jpg") }}" alt="">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Ягодный тарт — 1590₸</h4>
                            <p class="m-0">
                                Лёгкий десерт с песочной основой, кремом и свежими ягодами.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection