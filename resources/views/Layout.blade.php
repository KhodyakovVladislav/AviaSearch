<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body class="bg-dark text-white ">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">ФКН Авиа</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="/">Главная</a>
        <a class="p-2 text-white" href="/Search">Найти билет</a>
        <a class="p-2 text-white" href="/Help">Избранное</a>
        <a class="p-2 text-white" href="/rewiew">Панель администратора</a>
    </nav>
    <a class="btn btn-outline-primary" href="/Enter">Войти</a>
</div>
<div class="container"> @yield('content')</div>
</body>
</html>

