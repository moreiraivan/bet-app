<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <!-- PWA  -->
    <link rel="stylesheet" href="{{ asset('libs/font-awesome-pro-6/css/all.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>

<body>
    <style>
          .fixed-bottom {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
            box-shadow: 0 -4px 8px 0 #A74676, 0 -6px 20px 0 #A74676;
            background-color: #ffffff;
            height: 100px;
            /* Define a altura do rodapé para 100px */
        }

        a>i.icon-color {
            color: #A74676;
            /* Cor do ícone */
            text-decoration: none;
            /* Remove o sublinhado do link */
        }

        .footer {
            position: absolute;
            width: 100%;
            bottom: 0;
        }

        a>small {
            color: #000000;
            /* Cor do texto */
            text-decoration: none;
            /* Remove o sublinhado do link */
            display: block;
            /* Faz o texto aparecer abaixo do ícone */
        }

        .marsala-button {
            background-color: #A74676;
            color: #ffffff;
            transition: background-color 0.3s ease, color 0.3s ease;
            /* Smooth transition */
        }

        .marsala-button:hover {
            background-color: #b34747;
            /* Lighter shade of Marsala */
            color: #ffffff;
        }

        .icon-white {
            color: #ffffff;
        }

        .icon-footer {
            color: #ffffff;
            /* Cor do ícone e do texto */
            background-color: #A74676;
            /* Cor de fundo Marsala */
            border-radius: 50%;
            /* Arredonda o fundo */
            padding: 10px;
            /* Espaçamento interno para criar o fundo arredondado */
        }
    </style>
    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
         if ("serviceWorker" in navigator) {
             navigator.serviceWorker.register("/sw.js").then(
                 (registration) => {
                    console.log('it works');
                 },
                 (error) => {
                    console.log('it not works')
                 },
             );
         } else {
         }
    </script>
    @yield('scripts')

</body>

</html>
