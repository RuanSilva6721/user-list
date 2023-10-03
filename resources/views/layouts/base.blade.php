<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portal do Ministério Público do Estado do Pará para receber Notícia de Ilícitos Eleitorais">

    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

    <link rel="canonical" href="{{ env('APP_URL') }}"/>

    <!-- Tailwind CSS (via CDN) -->
    <link href="https://cdn.tailwindcss.com/2.2.19/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('style')

    <title>{{ env('APP_NAME') }}</title>
</head>
<body class="bg-gray-100"> <!-- Adicione a classe de fundo do Tailwind aqui -->

<header>
@include('layouts.header')
</header>

<main class="container mx-auto px-4"> <!-- Adicione classes de largura e espaçamento do Tailwind aqui -->
    @yield('content')
</main>

<footer>

        @include('layouts.footer')

</footer>

</body>

</html>
