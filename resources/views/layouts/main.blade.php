<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kangguru | @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/kangguru.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/kangguru.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Kangguru
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="background-image: url('{{asset('images/dybala.jpg')}}'); background-size: cover; background-attachment: fixed">
            <div style="background-color: rgba(255, 255, 255, .9); min-height: 100vh">
                <div class="container pt-4">
                    <div class="row">
                        <div class="col-md-8">
                            @yield('content')
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <object data="{{asset('images/messi.jpg')}}" type="image/png" style='width:100%, object-fit: cover' class="card-img-top">
                                    <img src="{{asset('images/user.svg')}}" style='width:50%' class="card-img-top mt-3"/>
                                </object>
                                <div class="card-body">
                                    <h3 class="card-title">{{Auth::user()->name}}</h3>
                                    <p class="card-text">{{Auth::user()->email}}</p>
                                </div>
                            </div>
                            <div class="list-group mt-4">
                                <a href="{{route('home')}}" class="list-group-item list-group-item-action">Home</a>
                                <a href="{{route('result.main')}}" class="list-group-item list-group-item-action">Result</a>
                            </div> 
                            <br>
                            @if(!Auth::user()->isPsycholog)
                                <p class="txt-purple"> &nbsp;Account setting</p>
                                <div class="list-group mt-4">
                                    <a href="#updateUser" data-toggle="modal" class="list-group-item list-group-item-action">Update Profile</a>
                                    <a href="#upgradeAkun" data-toggle="modal" class="list-group-item list-group-item-action">Upgrade Account</a>
                                </div> 
                                <br>
                                <p class="txt-purple"> &nbsp;Test</p>
                                <div class="list-group mt-4">
                                    <a href="{{route('mulai.test')}}" class="list-group-item list-group-item-action">Begin test</a>
                                </div> 
                            @else 
                                <p class="txt-purple"> &nbsp;Soal</p>
                                <div class="list-group mt-4">
                                    <a href="#buatSoal" data-toggle="modal" class="list-group-item list-group-item-action">Buat Soal</a>
                                </div> 
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div class="modal fade" id="updateUser">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update profile {{Auth::user()->name}}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{route('user.updateUser')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id_user" value="{{Auth::user()->id}}" />
                        <input type="text" name="nama" class="form-control" value="{{Auth::user()->name}}" required/>
                        <br>
                        <input type="text" name="email" class="form-control" value="{{Auth::user()->email}}" required/>
                        <br>
                        <button class="btn btn-success" type="submit">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="buatSoal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Buat Soal</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{route('dokter.buatSoal')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id_dokter" value="{{Auth::user()->id}}" />
                        <br>
                        <input type="text" name="jenis_soal" class="form-control" placeholder="Jenis Soal" required/>
                        <br>
                        <input type="text" name="deskripsi_soal" class="form-control" placeholder="Deskripsi Soal" required/>
                        <br>
                        <input type="text" name="A" class="form-control" placeholder="A" required/>
                        <br>
                        <input type="text" name="B" class="form-control" placeholder="B" required/>
                        <br>
                        <input type="text" name="C" class="form-control" placeholder="C" required/>
                        <br>
                        <input type="text" name="D" class="form-control" placeholder="D" required/>
                        <br>
                        <input type="number" name="kunci_jawaban" class="form-control" min="1" max="4" placeholder="Kunci Jawaban" required/>
                        <br>
                        <button class="btn btn-success" type="submit">Buat Soal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="upgradeAkun">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upgrade Akun</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{route('akun.upgrade')}}" method="POST">
                        @csrf
                        <select name="member" class="form-control">
                            <option value="Bronze">Bronze</option>
                            <option value="Silver">Silver</option>
                            <option value="Gold">Gold</option>
                        </select>
                        <br>
                        <button class="btn btn-success" type="submit">Upgrade akun</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
@if(Auth::user())
    @if(Auth::user()->member == 'Gold')
        <script type="text/javascript">((function(){
            var load=function(){
                var script="https://s.acquire.io/a-2a7e1/init.js?full";
                var x=document.createElement('script');
                x.src=script;x.async=true;
                var sx=document.getElementsByTagName('script')[0];
                sx.parentNode.insertBefore(x, sx);
                /*API_CALL_HERE*/
        };
            if(document.readyState === "complete")
                load();
            else if (window.addEventListener)  // W3C DOM
                window.addEventListener('load',load,false);
            else if (window.attachEvent) { // IE DOM
                window.attachEvent("onload", load);
            }
        })())</script>
        <noscript><a href="https://www.acquire.io?welcome" title="live chat software">Acquire</a></noscript>
        <!-- / Widget Code -->
    @endif
@endif
</html>
