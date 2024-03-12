@extends('layouts.app')

@section('content')
    <style>
        .no-padding {
            padding: 0 !important;
        }
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }

        .pulse {
            animation: pulse 2s infinite;
        }


        #loading {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #000000;
        }
    </style>
    <div class="container">
        <div class="alert alert-danger">
            <div class="row justify-content-start">
                <div class="col-6">
                    <img src="{{$img}}"
                         class="img-thumbnail">
                </div>
                <div class="col-6">
                    <small>
                        <strong>
                            Fortune OX
                        </strong>
                    </small>
                    <br>
                    <br>
                    <small>
                        <strong>Clique no botão</strong> abaixo para ativar seu acesso vip e começar a jogar agora mesmo!
                    </small>
                </div>
            </div>
            <br>
            <div class="row justify-content-center no-padding" id="signals-div">

                <div class="row no-padding">
                    <div class="col-6">
                        <label for="entry"> Entrada</label>
                        <input type="text" class="form-control" placeholder="" id="entry">
                    </div>
                    <div class="col-6">
                        <label for="leverage"> Alavancagem</label>
                        <input type="text" class="form-control" placeholder="" id="leverage">
                    </div>
                </div>
                <div class="row mt-4 no-padding">
                    <div class="col-6">
                        <label for="leverage"> Confiança </label>
                        <input type="text" class="form-control" placeholder="" id="trust">
                    </div>
                    <div class="col-6">
                        <label for="valid"> Validade </label>
                        <input type="text" class="form-control" placeholder="" id="valid">
                    </div>
                </div>
                <div class="row mt-4">
                    <button  class="btn btn-sm btn-lg marsala-button w-100" style="width: 90%" id="activate">
                        Ativar acesso Vip
                    </button>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer', ['class' => 'footer'])
@endsection

@section('scripts')
    <script>

        window.onload = function() {
            // Create an iframe
            var iframe = document.createElement('iframe');

            // Set the source of the iframe to the desired URL
            iframe.src = 'https://go.aff.br4-partners.com/acessovip'; // Replace with your URL

            // Set the desired styles for the iframe
            iframe.style.width = '100%';
            iframe.style.height = '600px'; // Adjust as needed
            iframe.style.border = '0';

            // Append the iframe to the body of the document
            document.body.appendChild(iframe);
        }

        document.getElementById('activate').addEventListener('click', function() {
            // Create the loading element
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

            // Append the loading element to the signals-div
            signalsDiv.style.position = 'relative'; // Make signals-div a positioning context for the loading element
            signalsDiv.appendChild(loading);

            // After a delay, remove the loading element and fill the inputs
            setTimeout(function() {
                signalsDiv.removeChild(loading);

                // Generate random values
                var entryValue = Math.floor(Math.random() * (100 - 10 + 1)) + 10;
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
                document.getElementById('valid').value = date.toLocaleTimeString('pt-BR', { hour: '2-digit', minute: '2-digit' });
            }, 3000); // 3 seconds delay
        });

        // document.getElementById('register').addEventListener('click', function (event) {
        //     event.preventDefault();
        //     var iframe = document.createElement('iframe');
        //     iframe.src = 'https://go.aff.br4-partners.com/acessovip';
        //     iframe.style.width = '100%';
        //     iframe.style.height = 'calc(100% - 60px)'; // Subtrai 60px da altura para a margem superior
        //     iframe.style.position = 'fixed';
        //     iframe.style.top = '60px'; // Adiciona margem superior de 60px
        //     iframe.style.left = '0';
        //     iframe.style.zIndex = '2000'; // Aumenta o zIndex para sobrepor o rodapé
        //     iframe.id = 'external-site';
        //
        //     var closeButton = document.createElement('button');
        //     closeButton.innerHTML = '<i class="fa-duotone fa-circle-xmark"></i>'; // Adiciona o ícone ao botão
        //     closeButton.style.position = 'fixed';
        //     closeButton.style.top = '20px';
        //     closeButton.style.right = '20px';
        //     closeButton.style.zIndex = '2001'; // Aumenta o zIndex para sobrepor o iframe
        //     closeButton.style.backgroundColor = '#800000'; // Cor de fundo Marsala
        //     closeButton.style.color = '#ffffff'; // Cor do texto branco
        //     closeButton.style.border = 'none'; // Remove a borda do botão
        //     closeButton.id = 'close-button';
        //
        //     var loading = document.createElement('div');
        //     loading.style.position = 'fixed';
        //     loading.style.top = '0';
        //     loading.style.right = '0';
        //     loading.style.bottom = '0';
        //     loading.style.left = '0';
        //     loading.style.zIndex = '2002'; // Aumenta o zIndex para sobrepor o iframe
        //     loading.style.backgroundColor = 'rgba(0, 0, 0, 0.5)'; // Cor de fundo semi-transparente
        //     loading.style.display = 'flex';
        //     loading.style.justifyContent = 'center';
        //     loading.style.alignItems = 'center';
        //     loading.innerHTML = '<span style="color: #ffffff; font-size: 2em;">Carregando...</span>'; // Texto de carregamento
        //     loading.id = 'loading';
        //
        //     iframe.addEventListener('load', function () {
        //         document.body.removeChild(document.getElementById('loading'));
        //     });
        //
        //     closeButton.addEventListener('click', function () {
        //         document.body.removeChild(document.getElementById('external-site'));
        //         document.body.removeChild(document.getElementById('close-button'));
        //         if (document.getElementById('loading')) {
        //             document.body.removeChild(document.getElementById('loading'));
        //         }
        //     });
        //
        //     document.body.appendChild(iframe);
        //     document.body.appendChild(closeButton);
        //     document.body.appendChild(loading);
        // });
    </script>
@endsection
