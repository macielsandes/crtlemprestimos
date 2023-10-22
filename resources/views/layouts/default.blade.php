<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="IE=edge">

    <!--fontes do Google-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Meu CSS do projeto-->
    <link rel="stylesheet" href="/css/styleapp.css">

    <title>@yield('title') - Controle de Empréstimos</title>
</head>

<body>
    <!--Menu-->
    <header>
        <x-sidebar/>
    </header>  

    <!--Parte do cabeçalho da pagina-->
    <nav class="container">
        <x-section1/>
    </nav>
 
    <!--Conteudo da pagina-->
    <section class="container">
            @yield('content')
    </section>

    <!--Rodapé-->
    <footer>
        <x-footer/>
    </footer>   
</body>

</html>

