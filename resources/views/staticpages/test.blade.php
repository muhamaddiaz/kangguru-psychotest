@extends('layouts.app')

@section('title', 'Test')

@section('content')
    <div class="row">
        <div class="col-md-6 bg-purple">
            <div style="height: 100vh; display: flex; justify-content: center; align-items: center;">
                <div class="text-white" style="position: fixed">
                    <h1 class="display-2">The best or nothing</h1>
                    <h1 class="display-4">&nbsp;{{Auth::user()->name}}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="padding: 50px">
            <form action="{{route('proses.test')}}" method="post">
                @csrf
                <label for="dokter">Pilih Dokter</label>
                <select name="id_dokter" class="form-control">
                    @foreach($dokter as $dk) 
                        <option value="{{$dk->id}}">{{$dk->name}}</option>
                    @endforeach
                </select>
                <br>
                @foreach($soal as $s)
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="card-title">{{$s->deskripsi_soal}}</h3>
                            <h4 class="card-subtitle text-muted">{{$s->jenis_soal}}</h4>
                            <br><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><input type="radio" name="jawab{{$s->id_soal}}" value="1" required/> {{$s->A}}</p>
                                    <p><input type="radio" name="jawab{{$s->id_soal}}" value="2" required/> {{$s->B}}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><input type="radio" name="jawab{{$s->id_soal}}" value="3" required/> {{$s->C}}</p>
                                    <p><input type="radio" name="jawab{{$s->id_soal}}" value="4" required/> {{$s->D}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-success">Submit jawaban</button>
            </form>
        </div>
    </div>
@endsection