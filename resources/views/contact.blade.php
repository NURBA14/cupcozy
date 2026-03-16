@extends("layouts.layout")

@section("title", "| Контакты")

@section("body")
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Контакты</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="{{ route("index") }}">Главная</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Контакты</p>
            </div>
        </div>
    </div>
    
    @include("layouts.errors")
    @include("layouts.success")

    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Наши контакты</h4>
                <h1 class="display-4">Не стесняйтесь обращаться</h1>
            </div>
            <div class="row px-3 pb-2">
                <div class="col-sm-6 text-center mb-3">
                    <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Адрес</h4>
                    <p>Улица Ыкылас Дукенулы, 29а</p>
                </div>
                <div class="col-sm-6 text-center mb-3">
                    <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Номер телефона</h4>
                    <p>+7 707 627 6839</p>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-6 pb-5">
                    <iframe style="width: 100%; height: 495px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1409.6262903101765!2d71.43249119223132!3d51.181237806701674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x424580d106ebb4fd%3A0x969f5242522f5a90!2sTuran-Astana%20University%20(TAU)!5e0!3m2!1sru!2skz!4v1773624471271!5m2!1sru!2skz"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-md-6 pb-5">
                        <h5 class="mb-4">Отправить сообщение</h5>
                        <form action="{{ route("contact.store") }}" method="POST">
                            @csrf
                            <div class="control-group mb-3">
                                <input type="text" class="form-control bg-transparent p-4" name="name" placeholder="Имя" />
                            </div>
                            <div class="control-group mb-3">
                                <input type="text" class="form-control bg-transparent p-4" name="phone" placeholder="Номер телефона" />
                            </div>
                            <div class="control-group mb-3">
                                <textarea class="form-control bg-transparent py-3 px-4" rows="5" name="message" placeholder="Сообщение"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
@endsection