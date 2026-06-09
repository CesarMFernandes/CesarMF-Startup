<x-layout>
    <x-slot:title>
        Sobre
    </x-slot:title>
    <head>
        <style>
            body{
                text-align: justify;
                display: flex;
                background-image: linear-gradient(#fff, #e3ebf0); 
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
            video{
                border-style: solid;
                border-width: 2px;
                border-color: black;
                border-radius: 5px;
            }
            .conteudo{
                width: 50vw;
                margin: auto
            }
        </style>
    </head>
    <body>
        <div class="conteudo">
            <h1>Bem Vindo ao StartDown</h1> 
            <p>Neste site, você pode colocar ideias de Startup em nosso banco de dados, e outros empreendedores podem vê-las.</p><br>
            <p>O site tem as seguintes funções:</p>
            <ul>
                <li>Migration</li>  
                <li>CRUD completo</li>   
                <li>Listagem de seus Startups e de outros empreendedores</li>
                <li>Postagem de Startups</li>
                <li>Edição de suas Startups</li>
                <li>Deleção de suas Startups</li>
                <li>Registro de conta</li>
                <li>Login</li>
                <li>Logout</li>
                <li>Rota Fallback</li>
            </ul><br>
            <p>Este vídeo mostra o site em funcionamento:</p>
            <video src="{{ asset('assets/videos/startdown.mp4') }}" controls></video><br>

            <a href="https://github.com/CesarMFernandes/CesarMF-Startup">Projeto do Site</a><br>
            <a href="https://github.com/CesarMFernandes/laravelCesarMFPainelSolar">Projeto Extra</a><br>
            <a href="/">Ir ao site principal</a><br><br>

            <hr>
        
            <p>O projeto extra é uma calculadora simples de painel solar para naves espaciais.</p><br>
            <p>O Projeto extra têm as seguintes funções:</p>
            <ul>
                <li>Formulário</li>   
                <li>Rota Fallback</li>
            </ul><br>
            <p>Este vídeo mostra o projeto extra em funcionamento:</p>
            <video src="{{ asset('assets/videos/painelsolar.mp4') }}" controls></video><br>
        </div>
    </body>
</x-layout>