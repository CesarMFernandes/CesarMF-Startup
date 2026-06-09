<x-layout>
    <x-slot:title>
        Fallback
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
        <h1>Página de Fallback</h1>
        <p>Você não está em um endereço válido</p>
        <a href="/">Voltar para a página principal</a>
    </body>
</x-layout>