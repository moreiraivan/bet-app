<div class="fixed-bottom mt3">
    <div class="d-flex mb-3 mt-3">
        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
            <a href="{{ route('home') }}">
                <i class="{{ Route::currentRouteNamed('home') ? 'fa-light fa-house icon-footer' : 'fa-light fa-house icon-color' }}"
                    style="font-size: 35px"></i>
                    <small>Inicio</small>
            </a>
            
        </div>
        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
            <a href="{{ route('play') }}">
                <i class="{{ Route::currentRouteNamed('play') ? 'fa-light fa-dice icon-footer' : 'fa-light fa-dice icon-color' }}"
                    style="font-size: 35px"></i>
                <small>Jogar</small>
            </a>
        </div>
        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
            <a href="#">
                <i class="fa-solid fa-graduation-cap icon-color" style="font-size: 35px"></i>
                <small>Academy</small>
            </a>
        </div>
        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
            <a href="#">
                <i class="fa-brands fa-telegram icon-color" style="font-size: 35px"></i>
                <small>Telegram</small>
            </a>
        </div>
    </div>
</div>