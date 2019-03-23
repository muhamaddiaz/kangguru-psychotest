@extends('layouts.main')

@section('title', 'result')

@section('content')
    <div class="jumbotron bg-purple text-white">
        <h1 class="display-4">Results</h1>
    </div>
    <ul class="nav nav-pills nav-justified">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#verified">Verified</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#notverified">Not Verified</a>
        </li>
    </ul>
    <div class="tab-content">
        @if(!Auth::user()->isPsycholog)
            <div class="tab-pane fade show active container" id="verified">
                <br>
                @foreach($testverified as $t)
                    <?php 
                        $dokter = DB::select("SELECT * FROM users WHERE id=?", [$t->id_dokter]); 
                        $user = DB::select("SELECT * FROM users WHERE id=?", [$t->id_user]);
                    ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-title" style="font-size: 1.5rem">Score {{$t->nilai}}</div>
                            <div class="card-subtitle text-muted" style="font-size: 1.2rem">User member: {{$user[0]->name}}</div>
                            <div class="card-subtitle text-muted" style="font-size: 1.2rem">Psikolog: {{$dokter[0]->name}}</div>
                            <br>
                            <div class="card-subtitle text-success" style="font-size: 1.2rem">Verified</div>
                        </div>
                        @if(!Auth::user()->isPsycholog)
                            <div class="card-footer">
                                @if(!$t->posted)
                                    <form action="{{route('user.postHasil')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id_post" value="{{$t->id_hasil}}" />
                                        <button type="submit" class="btn btn-info">Posting</button>
                                    </form>
                                @else
                                    <form action="{{route('user.deletePost')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id_post" value="{{$t->id_hasil}}" />
                                        <button type="submit" class="btn btn-info">Hapus posting</button>
                                    </form>
                                @endif
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
            <div class="tab-pane fade container" id="notverified">
                <br>
                @foreach($test as $t)
                    <?php 
                        $dokter = DB::select("SELECT * FROM users WHERE id=?", [$t->id_dokter]); 
                        $user = DB::select("SELECT * FROM users WHERE id=?", [$t->id_user]);
                    ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-title" style="font-size: 1.5rem">Score {{$t->nilai}}</div>
                            <p class="card-subtitle text-muted" style="font-size: 1.2rem">User Member: {{$user[0]->name}}</p>
                            <p class="card-subtitle text-muted" style="font-size: 1.2rem">Psikolog: {{$dokter[0]->name}}</p>
                            <br>
                            <div class="card-subtitle text-danger" style="font-size: 1.2rem">Not Verified</div>
                        </div>
                        @if(Auth::user()->isPsycholog)
                            <div class="card-footer">
                                <form action="{{route('dokter.verifikasi')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id_hasil" value="{{$t->id_hasil}}" />
                                    <button type="submit" class="btn btn-primary">Verifikasi hasil</button>
                                </form>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        @else
            <div class="tab-pane fade show active container" id="verified">
                <br>
                @foreach($dtestverified as $t)
                    <?php 
                        $dokter = DB::select("SELECT * FROM users WHERE id=?", [$t->id_dokter]); 
                        $user = DB::select("SELECT * FROM users WHERE id=?", [$t->id_user]);
                    ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-title" style="font-size: 1.5rem">Score {{$t->nilai}}</div>
                            <div class="card-subtitle text-muted" style="font-size: 1.2rem">User member: {{$user[0]->name}}</div>
                            <div class="card-subtitle text-muted" style="font-size: 1.2rem">Psikolog: {{$dokter[0]->name}}</div>
                            <br>
                            <div class="card-subtitle text-success" style="font-size: 1.2rem">Verified</div>
                        </div>
                        @if(!Auth::user()->isPsycholog)
                            <div class="card-footer">
                                @if(!$t->posted)
                                    <form action="{{route('user.postHasil')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id_post" value="{{$t->id_hasil}}" />
                                        <button type="submit" class="btn btn-info">Posting</button>
                                    </form>
                                @else
                                    <form action="{{route('user.deletePost')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id_post" value="{{$t->id_hasil}}" />
                                        <button type="submit" class="btn btn-info">Hapus posting</button>
                                    </form>
                                @endif
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
            <div class="tab-pane fade container" id="notverified">
                <br>
                @foreach($dtest as $t)
                    <?php 
                        $dokter = DB::select("SELECT * FROM users WHERE id=?", [$t->id_dokter]); 
                        $user = DB::select("SELECT * FROM users WHERE id=?", [$t->id_user]);
                    ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-title" style="font-size: 1.5rem">Score {{$t->nilai}}</div>
                            <p class="card-subtitle text-muted" style="font-size: 1.2rem">User Member: {{$user[0]->name}}</p>
                            <p class="card-subtitle text-muted" style="font-size: 1.2rem">Psikolog: {{$dokter[0]->name}}</p>
                            <br>
                            <div class="card-subtitle text-danger" style="font-size: 1.2rem">Not Verified</div>
                        </div>
                        @if(Auth::user()->isPsycholog)
                            <div class="card-footer">
                                <form action="{{route('dokter.verifikasi')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id_hasil" value="{{$t->id_hasil}}" />
                                    <button type="submit" class="btn btn-primary">Verifikasi hasil</button>
                                </form>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection