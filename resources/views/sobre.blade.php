<x-layout>
    <x-slot:title>
        Sobre
    </x-slot:title>
    <head>
        <style>
            body{
                text-align: justify;

            }
            body h1{
                font-weight: bold;
                font-size: 30pt;
            }
            p{
                font-weight: bold;

            }
            a{
                all:revert;
            }
        </style>
    </head>
    <body>
        <h1>Bem Vindo ao StartDown</h1> 
        <p>Neste site, você pode colocar ideias de Startup em nosso banco de dados, e outros empreendedores podem vê-las.</p><br>
        <p>O site tem as seguintes funções:</p>
        <ul>
            <li>CRUD completo</li>
            <ul>
                <li>Listagem de seus Startups e de outros empreendedores</li>
                <li>Postagem de Startups</li>
                <li>Edição de suas Startups</li>
                <li>Deleção de suas Startups</li>
                <li>Registro de conta</li>
                <li>Login</li>
                <li>Logout</li>
            </ul>
        </ul><br>
        <p>Este vídeo mostra o site em funcionamento:</p>
        <video src="{{ asset('assets/videos/startdown.mp4') }}" controls></video><br>

        <a>Projeto do Site</a><br>
        <a href="https://github.com/CesarMFernandes/laravelCesarMFPainelSolar">Projeto Extra</p>
        <a href="/">Ir ao site principal</p>
    </body>
</x-layout>