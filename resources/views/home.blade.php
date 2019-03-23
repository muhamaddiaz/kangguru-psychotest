@extends('layouts.main')

@section('title', Auth::user()->name)

@section('content')
    <div class="jumbotron bg-purple text-white">
        <h1 class="display-4">Welcome back, {{Auth::user()->name}}</h1>
        @if(!Auth::user()->isPsycholog)
            <p style="font-size: 1.5rem">&nbsp;{{Auth::user()->member}} Member</p>
        @else
            <p style="font-size: 1.5rem"> Psycholog</p>
        @endif
    </div>
    <div class="row">
        @if(!(Auth::user()->isPsycholog))
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{$counttest->testtotal}}</h2>
                        <p class="card-text">Test yang diambil</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{$countverified->verifiedtotal}}</h2>
                        <p class="card-text">Test terverifikasi</p>
                    </div>
                </div>
            </div>
        @else
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{$countsoaldokter->doktersoal}}</h2>
                        <p class="card-text">Soal yang dibuat</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{$countsoal->semua}}</h2>
                        <p class="card-text">Total soal</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <br>
    <h2 class="txt-purple">Beranda</h2>
    <hr>
    @if(Auth::user()->isPsycholog)
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#allsoal">Semua Soal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#mysoal">Soal</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active container" id="allsoal">
                <br>
                <div class="row">
                    @if($allsoal)
                        @foreach($allsoal as $as)
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$as->deskripsi_soal}}</h4>
                                        <h4 class="card-subtitle text-muted">{{$as->jenis_soal}}</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h2>Tidak ada aktivitas</h2>
                    @endif
                </div>
            </div>
            <div class="tab-pane fade container" id="mysoal">
                <br>
                <div class="row">
                    @if($soal)
                        @foreach($soal as $so)
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$so->deskripsi_soal}}</h4>
                                        <h5 class="card-subtitle text-muted">{{$so->jenis_soal}}</h5>
                                        <br>
                                        <form action="{{route('dokter.hapusSoal')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id_hapus" value="{{$so->id_soal}}" />
                                            <button class="btn btn-danger">Hapus soal</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <br>
                        @endforeach
                    @else
                        <h2>Belum menginput soal</h2>
                    @endif
                </div>
            </div>
        </div>
    @else
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#allpost">Around the web</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#mypost">My post</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active container" id="allpost">
                <br>
                <div class="row">
                    @if($hasil)
                        @foreach($hasil as $hs)
                            <div class="col-md-12">
                                <?php 
                                    $dokter = DB::select("SELECT * FROM users WHERE id=?", [$hs->id_dokter]); 
                                    $user = DB::select("SELECT * FROM users WHERE id=?", [$hs->id_user]);
                                ?>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="card-title" style="font-size: 1.5rem">Saya berhasil mendapatkan score {{$hs->nilai}}</div>
                                        <div class="card-subtitle text-muted" style="font-size: 1.2rem">Oleh: {{$user[0]->name}}</div>
                                        <div class="card-subtitle text-muted" style="font-size: 1.2rem">Psikolog: {{$dokter[0]->name}}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h2>Tidak ada aktivitas</h2>
                    @endif
                </div>
            </div>
            <div class="tab-pane fade container" id="mypost">
                <br>
                <div class="row">
                    @if($hasilku)
                        @foreach($hasilku as $hs)
                            <div class="col-md-12">
                                <?php 
                                    $dokter = DB::select("SELECT * FROM users WHERE id=?", [$hs->id_dokter]); 
                                    $user = DB::select("SELECT * FROM users WHERE id=?", [$hs->id_user]);
                                ?>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="card-title" style="font-size: 1.5rem">Saya berhasil mendapatkan score {{$hs->nilai}}</div>
                                        <div class="card-subtitle text-muted" style="font-size: 1.2rem">Oleh: {{$user[0]->name}}</div>
                                        <div class="card-subtitle text-muted" style="font-size: 1.2rem">Psikolog: {{$dokter[0]->name}}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h2>Tidak ada aktivitas</h2>
                    @endif
                </div>
            </div>
        </div>
    @endif
@endsection
