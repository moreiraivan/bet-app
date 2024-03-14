@extends('layouts.app')

@section('content')
    <style>
        .my-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 24px;
            overflow: auto;
            /* Permite que o conteúdo role normalmente */
            position: relative;
            height: auto;
            min-height: 100vh;
            margin-bottom: 120px !important;
            /* Adiciona espaço na parte inferior do conteúdo para o rodapé */
        }



        p {
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }

        .marsala-button {
            background-color: #c85a5a;
            /* Um tom mais claro de marsala */
            color: white;
        }

        .marsala-button:active {
            background-color: #a04a4a;
            /* Um tom mais escuro de marsala para o efeito de clique */
        }

        .signals-div {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            /* Adiciona borda arredondada */
            height: 80%;
        }

        .marsala-input {
            background-color: #c85a5a;
            color: white;
            margin: 5px 0;
        }

        .marsala-input:disabled {
            background-color: #e07575;
        }

        .white-label {
            color: white;
        }
    </style>
    <div class="my-container mb-4">
        <div
            style="display: flex;
                    flex-direction: row;
                    align-items: center;
                    width: 100%;
                    justify-content: space-between;">
            <button onclick="javascript:history.back()"
                style="background: #9a2b4b; border-radius: 8px;
            color: #fff;display: flex;font-size: 14px;
            font-weight: 700;flex-direction: row;align-items: center;
            justify-content: center;padding: 15px;
            text-transform: uppercase;cursor: pointer;border: none;
            box-shadow: 0 5px 10px #00000030, 0 3px 3px #0000003b;
            animation: 1.2s ease-out infinite;"
                class="btn marsala-button">
                <i class="fa-solid fa-arrow-left"></i>
                &nbsp;&nbsp;Voltar
            </button>

        </div>
        <div
            style="background: #A74676;display: flex;flex-direction: column;align-items: center;justify-content: center;padding: 20px;width: 100%;margin: 20px 0;">
            <p style="font-size: 14px;font-weight: 700;text-transform: uppercase;margin: 0;color:white">
                Ativar acesso VIP
            </p>
            <p style="font-size: 12px;text-transform: uppercase;margin: 0;color:white;">Exclusivo para membros do acesso VIP
            </p>
        </div>
        <div style="background: #A74676;width: 100%;padding: 20px;margin: 0 0 20px;">
            <button
                style="background: #9a2b4b; border-radius: 8px;
                                color: #fff;display: flex;font-size: 14px;
                                font-weight: 700;flex-direction: row;align-items: center;
                                justify-content: center;padding: 15px;width: 100%;
                                text-transform: uppercase;cursor: pointer;border: none;
                                box-shadow: 0 5px 10px #00000030, 0 3px 3px #0000003b;
                                animation: 1.2s ease-out infinite;"
                id="register">
                Depósito
            </button>
        </div>
        <div style="background: #A74676;padding: 40px;display: flex;flex-direction: column;align-items: center;">
            <p style="margin: 0 0 14px;font-size: 14px;font-weight: 700;color:white;">
                Escolha um jogo para ativar o Conta VIP:
            </p>
            <div style="display: grid;grid-template-columns: 1fr 1fr;gap: 20px;">
                <img id="fortune-tiger" src="{{ asset('img/fortune-tiger-icon.webp') }}" alt="fortune-tiger"
                    style="width: 100%;border-radius: 29px;cursor: pointer;box-shadow: 0 5px 10px #00000030, 0 3px 3px #0000003b;">
                <img src="{{ asset('img/lucky-piggy.webp') }}" alt="lucky-piggy"
                    style="width: 100%;border-radius: 29px;cursor: pointer;box-shadow: 0 5px 10px #00000030, 0 3px 3px #0000003b;">
                <img src="{{ asset('img/fortune-ox-icon.webp') }}" alt="fortune-ox"
                    style="width: 100%;border-radius: 29px;cursor: pointer;box-shadow: 0 5px 10px #00000030, 0 3px 3px #0000003b;">
                <img src="{{ asset('img/fortune-mouse-icon-locked.webp') }}" alt="fortune-mouse"
                    style="width: 100%;border-radius: 29px;cursor: pointer;box-shadow: 0 5px 10px #00000030, 0 3px 3px #0000003b;">
                <img src="{{ asset('img/fortune-rabbit-icon-locked.webp') }}" alt="fortune-rabbit"
                    style="width: 100%;border-radius: 29px;cursor: pointer;box-shadow: 0 5px 10px #00000030, 0 3px 3px #0000003b;">
                <img src="{{ asset('img/aviator.webp') }}" alt="aviator"
                    style="height:97%; background: white; width: 100%;border-radius: 29px;cursor: pointer;box-shadow: 0 5px 10px #00000030, 0 3px 3px #0000003b;">
                <img src="{{ asset('img/mines-icon.webp') }}" alt="mines-icon"
                    style="width: 100%;border-radius: 29px;cursor: pointer;box-shadow: 0 5px 10px #00000030, 0 3px 3px #0000003b;">
                <img src="{{ asset('img/roulette-lightning-icon.webp') }}" alt="roulette-lightning"
                    style="width: 100%;border-radius: 29px;cursor: pointer;box-shadow: 0 5px 10px #00000030, 0 3px 3px #0000003b;">
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection

@section('scripts')
    <script>
        document.getElementById('register').addEventListener('click', function(event) {
            event.preventDefault();

            // Cria uma nova div com fundo marsala
            var div = document.createElement('div');
            div.style.width = '100%';
            div.style.height = '100%';
            div.style.position = 'fixed';
            div.style.top = '0';
            div.style.left = '0';
            div.style.zIndex = '2000';
            div.style.backgroundColor = '#A74676'; // Cor de fundo Marsala
            div.id = 'marsala-div';

            var iframe = document.createElement('iframe');
            iframe.src = 'https://go.aff.br4-partners.com/acessovip';
            iframe.style.width = '100%';
            iframe.style.height = 'calc(100% - 60px)';
            iframe.style.position = 'fixed';
            iframe.style.top = '60px'; // Adiciona padding-top ao iframe
            iframe.style.left = '0';
            iframe.style.zIndex = '2001';
            iframe.id = 'external-site';

            var closeButton = document.createElement('button');
            closeButton.innerHTML = '<i class="fa-duotone fa-circle-xmark"></i>'; // Adiciona o ícone ao botão
            closeButton.style.position = 'fixed';
            closeButton.style.top = '50px';
            closeButton.style.right = '20px';
            closeButton.style.zIndex = '2002'; // Aumenta o zIndex para sobrepor o iframe
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
            loading.innerHTML =
                '<span style="color: #ffffff; font-size: 2em;">Carregando...</span>'; // Texto de carregamento
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

        function openIframe(event, id) {
            event.preventDefault();

            var div = document.createElement('div');
            div.style.width = '100%';
            div.style.height = '100%';
            div.style.position = 'fixed';
            div.style.marginBottom = '80px';
            div.style.top = '0';
            div.style.left = '0';
            div.style.zIndex = '200';
            div.style.backgroundColor = '#A74676';
            div.id = 'marsala-div';
            div.style.marginBottom = '5%';

            var closeButton = document.createElement('button');
            closeButton.innerHTML = '<i class="fa-duotone fa-circle-xmark"></i>';
            closeButton.style.position = 'fixed';
            closeButton.style.top = '20px';
            closeButton.style.right = '20px';
            closeButton.style.zIndex = '2002';
            closeButton.style.backgroundColor = '#A74676';
            closeButton.style.color = '#ffffff';
            closeButton.style.border = 'none';
            closeButton.id = 'close-button';
            closeButton.style.marginTop = '3%';

            var loading = document.createElement('div');
            loading.style.position = 'fixed';
            loading.style.top = '0';
            loading.style.right = '0';
            loading.style.bottom = '0';
            loading.style.left = '0';
            loading.style.zIndex = '2003';
            loading.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
            loading.style.display = 'flex';
            loading.style.justifyContent = 'center';
            loading.style.alignItems = 'center';
            loading.innerHTML =
                '<span style="color: #ffffff; font-size: 2em;">Carregando...</span>';
            loading.id = 'loading';


            closeButton.addEventListener('click', function() {
                document.body.removeChild(document.getElementById('marsala-div'));
                if (document.getElementById('loading')) {
                    document.body.removeChild(document.getElementById('loading'));
                }
            });


            var signalsDiv = document.createElement('div');
            signalsDiv.id = 'signals-div';
            signalsDiv.style.marginTop = '50px';
            signalsDiv.style.marginBottom = '10px';
            signalsDiv.innerHTML = `
            <div style="padding: 0 10px 0 10px">
                <div class="signals-div">
                    <div class="row">
                    <div class="col-6">
                        <label class="white-label" for="entry"> Entrada</label>
                        <input class="form-control marsala-input form-control-sm" type="text" placeholder="" id="entry" disabled style="height: 15px; font-size: 12px;">
                    </div>
                    <div class="col-6">
                        <label class="white-label" for="leverage"> Alavancagem</label>
                        <input class="form-control marsala-input form-control-sm" type="text" placeholder="" id="leverage" disabled style="height: 15px; font-size: 12px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="white-label" for="leverage"> Confiança </label>
                        <input class="form-control marsala-input form-control-sm" type="text" placeholder="" id="trust" disabled style="height: 15px; font-size: 12px;">
                    </div>
                    <div class="col-6">
                        <label class="white-label" for="valid"> Validade </label>
                        <input class="form-control marsala-input form-control-sm" type="text" placeholder="" id="valid" disabled style="height: 15px; font-size: 12px;">
                    </div>
                </div>
                <div class="row mt-2">
                    <button  class="btn btn-sm btn-lg marsala-button w-100" style="width: 90%" id="activate" onclick="generateSignal()">
                        Ativar acesso Vip
                    </button>
                </div>
                </div>
            </div>
            `;

            // div.appendChild(signalsDiv);
            let src = null;
            switch (id) {
                case 'fortune-tiger':
                    src = 'https://foxplay.bet/';
                    break;
                case 'lucky-piggy':
                    src = 'https://foxplay.bet/';
                    break;
                case 'fortune-ox':
                    src = 'https://foxplay.bet/';
                    break;
                case 'fortune-mouse':
                    return;
                    break;
                case 'fortune-rabbit':
                    return;
                    break;
                case 'aviator':
                    src = 'https://foxplay.bet/';
                    break;
                case 'mines-icon':
                    src = 'https://foxplay.bet/';
                    break;
                case 'roulette-lightning':
                    src = 'https://foxplay.bet/';
                    break;
                default:
                    src = 'https://foxplay.bet/';
            }
            if (!src) return;

            var iframe = document.createElement('iframe');
            iframe.src = src;
            iframe.style.width = '100%';
            iframe.style.height = 'calc(100% - 240px)';
            iframe.style.top = '0';
            iframe.style.left = '0';
            iframe.style.zIndex = '300';
            iframe.id = 'external-site';


            iframe.addEventListener('load', function() {
                var loadingElement = document.getElementById('loading');
                if (loadingElement) {
                    loadingElement.parentNode.removeChild(loadingElement);
                }
            });

            div.appendChild(iframe);
            div.appendChild(loading);
            div.appendChild(closeButton);
            document.body.appendChild(div);
        }

        function generateSignal() {

            var loading = document.createElement('div');
            loading.style.position = 'absolute';
            loading.style.top = '0';
            loading.style.right = '0';
            loading.style.bottom = '0';
            loading.style.left = '0';
            loading.style.backgroundColor = 'rgba(0, 0, 0, 0.5)'; // Semi-transparent background color
            loading.style.display = 'flex';
            loading.style.justifyContent = 'center';
            loading.style.alignItems = 'center';
            loading.innerHTML = '<span style="color: #ffffff; font-size: 2em;">Loading...</span>'; // Loading text
            loading.id = 'loading';


            document.getElementById('entry').value = 'Buscando padrão...';
            document.getElementById('leverage').value = '';
            document.getElementById('trust').value = '';
            document.getElementById('valid').value = '';

            setTimeout(function() {
                document.getElementById('entry').value = 'Padrão encontrado!';
            }, 2000);
            // After a delay, remove the loading element and fill the inputs
            setTimeout(function() {
                // Generate random values
                var entryValue = Math.floor(Math.random() * (35 - 10 + 1)) + 10;
                var leverageValue = Math.floor(Math.random() * (900 - 30 + 1)) + 30;
                var trustValue = Math.floor(Math.random() * (95 - 75 + 1)) + 75;

                // Fill the inputs
                document.getElementById('entry').value = 'Girar ' + entryValue + ' vezes';
                document.getElementById('leverage').value = leverageValue + 'x';
                document.getElementById('trust').value = trustValue + '%';

                // Fill the 'valid' input with the current time plus a random number of minutes between 3 and 6
                var date = new Date();
                var minutesToAdd = Math.floor(Math.random() * (6 - 3 + 1)) + 3;
                date.setMinutes(date.getMinutes() + minutesToAdd);
                document.getElementById('valid').value = date.toLocaleTimeString('pt-BR', {
                    hour: '2-digit',
                    minute: '2-digit'
                });
            }, 4000); // 3 seconds delay
        }

        var images = document.getElementsByTagName('img');
        for (var i = 0; i < images.length; i++) {
            images[i].id = images[i].alt; // Atribui o ID de acordo com o alt
            images[i].addEventListener('click', function(event) {
                openIframe(event, this.id); // Passa o ID como parâmetro
            });
        }
    </script>
@endsection
