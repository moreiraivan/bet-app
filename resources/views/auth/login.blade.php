@extends('layouts.app')

@section('content')
    <style>
        .my-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 24px;
            overflow: hidden;
            position: relative;
            height: auto;
        }
        input#email::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #ff234e;
            opacity: 1; /* Firefox */
        }

        input#email:-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: #ff234e;
        }

        input#email::-ms-input-placeholder { /* Microsoft Edge */
            color: #ff234e;
        }
        input#email:focus {
            background: rgba(255, 35, 78, .2);
            color: #ff234e;
        }
    </style>
    <div class="my-container">
        <div style="display: flex;flex-direction: row;align-items: center;width: 100%;height: 24px;">
            <img src="{{asset('img/pg-soft-logo.webp')}}" alt="pg-logo" style="width: 80px">
            <img src="{{asset('img/bandeira-brasil.webp')}}" alt="bandeira-brasil"
                 style="width: 24px;height: 24px;margin-left: 10px;">
        </div>
        <img src="{{asset('img/pg-prize.webp')}}" alt="pg-prize" style="width: 80px">
        <p style="margin: 0;text-align: center;font-weight: 700; font-size: 14px;line-height: 22px;">
            Desbloqueio de Contas
            <br>
            Bônus Nível 5 <i class="fa-sharp fa-solid fa-circle-info" style="fill: gray;"></i>
        </p>
        <div style="display: flex; flex-direction: row; align-items: center; margin: 20px 0 30px;">
            <img src="{{asset('img/fortune-rabbit-icon.webp')}}" alt="fortune-rabbit"
                 style="width: 80px;margin: 0 10px;opacity: .3;">
            <img src="{{asset('img/fortune-mouse-icon.webp')}}" alt="fortune-mouse"
                 style="width: 80px;margin: 0 10px;opacity: .3;">
            <img src="{{asset('img/fortune-tiger-icon.webp')}}" alt="fortune-tiger" style="opacity: 1;width: 100px;">
            <img src="{{asset('img/fortune-ox-icon.webp')}}" alt="fortune-ox"
                 style="width: 80px;margin: 0 10px;opacity: .3;">
            <img src="{{asset('img/fortune-rabbit-icon.webp')}}" alt="fortune-rabbit"
                 style="width: 80px;margin: 0 10px;opacity: .3;">
        </div>
        <div style="display: flex;flex-direction: column;padding: 0 20px;">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row mb-3">
                    <p style="color: #ff234e; font-weight: 700;margin: 0;font-size: 16px;line-height: 24px;">
                        <i class="fa-sharp fa-solid fa-circle-info"></i> Acesse com seu e-mail cadastrado na plataforma
                    </p>

                    <div class="col-md-6">
                        <input id="email" type="email"
                               class="form-control @error('email') is-invalid @enderror" name="email"
                               value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Insira seu e-mail"
                               style="margin: 10px 0 0;border-radius: 4px;border: 1px solid #FF234E;background: rgba(255, 35, 78, .2);padding: 12px 6px 12px 12px;font-size: 16px;color: #ff234e;">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="
            background: #FF234E;
            border-radius: 4px;
            color: #fff;
            display: flex;
            font-size: 16px;
            font-weight: 700;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding: 20px;
            margin: 20px auto;
            width: 100%;
            cursor: pointer;
            border: none;">
                    Ativar acesso VIP
                </button>
                <img src="{{asset('img/operate.png')}}" alt="operate" style="width: 75%; overflow-clip-margin: content-box;overflow: clip;">
            </form>
        </div>
        <div>
            <img src="{{asset('img/pocket-games-logo.webp')}}" alt="pocket-logo" style="bottom: 30px;width: 200px;">
        </div>
    </div>
@endsection
