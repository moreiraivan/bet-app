@extends('layouts.app')

@section('content')
    <style>
       .my-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 24px;
            overflow: auto;
            position: relative;
            height: auto;
            min-height: 100vh;
            margin-bottom: 120px !important;
        }
    </style>
    <div class="my-container">
        <div style="display: flex;
                    flex-direction: row;
                    align-items: center;
                    width: 100%;
                    justify-content: space-between;">
            <div style="display: flex;
                        flex-direction: row;
                        align-items: center;">
                <img src="{{asset('img/pg-prize.webp')}}" alt="" style="width: 60px;">
                <div style="display: flex;flex-direction: column;margin-left: 6px;">
                    <p style="font-size: 16px;margin: 0;"> <b>Bônus Desbloqueado</b> </p>
                    <p style="font-size: 12px;margin: 0;white-space: nowrap;text-overflow: ellipsis;max-width: 160px;overflow: hidden;">
                        Nome: {{Auth::user()->name}}
                        <br>
                        Email: {{Auth::user()->email}}
                    </p>
                </div>
            </div>
            <img src="{{asset('img/nivel-5-achievement.gif')}}" alt="novo-nivel" style="width: 60px">
        </div>
        <div style="background: #A74676;padding: 10px 20px;display: flex;
                    flex-direction: column;border-radius: 8px;position: relative;
                    font-size: 12px;line-height: 18px;margin: 30px 0 20px;">
            <div style="overflow: hidden; color:white;">
                <p style="text-align: right;margin-right: 50px;">
                    <b> Olá </b>, seja bem-vindo(a) <b>aproveite todos os benefícios </b>de ser <b> Nível 5.</b>
                    <img src="{{asset('img/boy-pg-soft.webp')}}" alt="boy-pg" style="width: 100px;position: absolute;right: -20px;top: -10px;">
                </p>
            </div>
        </div>
        <img src="{{asset('img/banner-acess-pro.webp')}}" alt="acesso-pro" style="width: 100%;cursor: pointer;box-shadow: 0 10px 20px #00000030, 0 3px 3px #0000003b;margin-bottom: 20px;">
        <img src="{{asset('img/operate.png')}}" alt="operate" style="width: 75%; overflow-clip-margin: content-box;overflow: clip;">
        <button id="register" style="background: #A74676;border-radius: 8px;color: #fff;display: flex;font-size: 14px;font-weight: 700;flex-direction: row;align-items: center;justify-content: center;padding: 20px;margin: 20px auto 0;width: 100%;text-transform: uppercase;cursor: pointer;border: none;box-shadow: 0 5px 10px #00000030, 0 3px 3px #0000003b;">
            Faça seu cadastro na plataforma
        </button>
    </div>

    @include('components.footer')
@endsection

@section('scripts')
    <script>
        document.getElementById('register').addEventListener('click', function(event) {
            event.preventDefault();
            console.log('it works');
            // Cria uma nova div com fundo marsala
            var div = document.createElement('div');
            div.style.width = '100%';
            div.style.height = '100%';
            div.style.position = 'fixed';
            div.style.top = '0';
            div.style.left = '0';
            div.style.zIndex = '200';
            div.style.backgroundColor = '#A74676';
            div.id = 'marsala-div';
            div.style.marginBottom = '5%';

            var iframe = document.createElement('iframe');
            iframe.src = 'https://go.aff.br4-partners.com/acessovip';
            iframe.style.width = '100%';
            iframe.style.height = 'calc(100% - 100px)';
            iframe.style.position = 'fixed';
            iframe.style.top = '60px';
            iframe.style.left = '0';
            iframe.style.zIndex = '300';
            iframe.id = 'external-site';

            // Cria um novo elemento de título com o texto informativo
            var infoTitle = document.createElement('p');
            infoTitle.textContent = 'Caso já possua uma conta, clique em entrar';
            infoTitle.style.position = 'fixed';
            infoTitle.style.top = '20px';
            infoTitle.style.left = '20px';
            infoTitle.style.zIndex = '2002'; // Aumenta o zIndex para sobrepor o iframe
            infoTitle.style.color = '#ffffff'; // Cor do texto branco
            infoTitle.id = 'info-title';

            var closeButton = document.createElement('button');
            closeButton.innerHTML = '<i class="fa-duotone fa-circle-xmark"></i>'; // Adiciona o ícone ao botão
            closeButton.style.position = 'fixed';
            closeButton.style.top = '20px';
            closeButton.style.right = '20px';
            closeButton.style.zIndex = '200'; // Aumenta o zIndex para sobrepor o iframe
            closeButton.style.backgroundColor = '#A74676'; // Cor de fundo Marsala
            closeButton.style.color = '#ffffff'; // Cor do texto branco
            closeButton.style.border = 'none'; // Remove a borda do botão
            closeButton.id = 'close-button';
            closeButton.style.marginTop = '3%';

            var loading = document.createElement('div');
            loading.style.position = 'fixed';
            loading.style.top = '0';
            loading.style.right = '0';
            loading.style.bottom = '0';
            loading.style.left = '0';
            loading.style.zIndex = '2003'; // Aumenta o zIndex para sobrepor o iframe
            loading.style.backgroundColor = 'rgba(0, 0, 0, 0.5)'; // Cor de fundo semi-transparente
            loading.style.display = 'flex';
            loading.style.justifyContent = 'center';
            loading.style.alignItems = 'center';
            loading.innerHTML = '<span style="color: #ffffff; font-size: 2em;">Carregando...</span>'; // Texto de carregamento
            loading.id = 'loading';

            iframe.addEventListener('load', function() {
                document.body.removeChild(document.getElementById('loading'));
            });

            closeButton.addEventListener('click', function() {
                document.body.removeChild(document.getElementById('marsala-div'));
                if (document.getElementById('loading')) {
                    document.body.removeChild(document.getElementById('loading'));
                }
            });

            // Adiciona o iframe à div
            div.appendChild(iframe);
            // Adiciona o título informativo à div
            div.appendChild(infoTitle);
            // Adiciona o botão de fechar à div
            div.appendChild(closeButton);

            // Adiciona a div ao corpo do documento
            document.body.appendChild(div);
            document.body.appendChild(loading);
        });
    </script>
@endsection
