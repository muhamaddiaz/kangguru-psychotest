<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('css/kangguru.css')}}" />
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-localScroll/2.0.0/jquery.localScroll.min.js"></script>
    <script src="{{asset('js/kangguru.js')}}"></script>
</head>
<body data-spy="scroll" data-target=".navbar-custom-item" data-offset="50">
    <navbar class="navbar-custom container-fluid" id="navbar-custom">
        <a class="navbar-custom-brand" href="#">Kangguru</a>
        <ul class="navbar-custom-menu">
            <li class="navbar-custom-item">
                <a href="#home">Home</a>
                <div class="navbar-hover-anim"></div>
            </li>
            <li class="navbar-custom-item">
                <a href="#team">Team</a>
                <div class="navbar-hover-anim"></div>
            </li>
            <li class="navbar-custom-item">
                <a href="#flow">Flow</a>
                <div class="navbar-hover-anim"></div>
            </li>
            <li class="navbar-custom-item">
                <a href="#testi">Testimoni</a>
                <div class="navbar-hover-anim"></div>
            </li>
        </ul>
    </navbar>
    <div class="py-4">
        @yield('content')
    </div>
</body>
</html>