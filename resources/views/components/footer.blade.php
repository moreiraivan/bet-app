<div class="fixed-bottom">
    <div class="d-flex mb-3 mt-3">
        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
            <a href="{{route('home')}}">
                <i class="{{ Route::currentRouteNamed('home') ? 'fa-light fa-house icon-footer' : 'fa-light fa-house icon-color' }}" style="font-size: 35px"></i>
            </a>
            <small>Inicio</small>
        </div>
        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
            <a href="{{route('play')}}">
                <i class="{{ Route::currentRouteNamed('play') ? 'fa-light fa-dice icon-footer' : 'fa-light fa-dice icon-color' }}" style="font-size: 35px"></i>
            </a>
                <small>Jogar</small>
        </div>
        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
            <a href="#">
                <i class="fa-solid fa-graduation-cap icon-color" style="font-size: 35px"></i>
            </a>
            <small>Academy</small>
        </div>
        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
            <a href="#">
                <i class="fa-brands fa-telegram icon-color" style="font-size: 35px"></i>
            </a>
            <small>Telegram</small>
        </div>
    </div>
</div>
