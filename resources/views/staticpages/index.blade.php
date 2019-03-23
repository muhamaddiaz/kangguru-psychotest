@extends('layouts.master')

@section('title', 'Kangguru')

@section('content')
    <section class="intro" id="home">
        <div class="intro-centered-content txt-purple text-center" style="z-index: -1">
            <img src="{{asset('images/kangaroo.svg')}}" style="width: 200px; height 200px;"/>
            <br><br>
            <h2 class="display-3" style="font-weight: 800">Kangguru Psychotest</h2>
            <p style="font-size: 2rem">Tepat, cepat, akurat</p>
            <form action="{{route('login')}}" method="get">
                <button class="button-intro-custom txt-purple" href="#">
                    Pelajari selengkapnya
                    <div class="button-animation"></div>
                </button>
            </form>
        </div>
    </section>
    <br id="team"><br><br>
    <section class="team">
        <div class="container-fluid text-center">
            <br>
            <h1 class="display-3 txt-purple">Meet our incredible team</h1>
            <br>
            <div class="row txt-purple">
                <br><br>
                <div class="col-md-3">
                    <br>
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{asset('images/farhan.jpg')}}" style="width: 70%" class="rounded-circle"/>
                            <br><br>
                            <h3 class="card-title" style="font-weight: 400">Farhan Fadhlullah</h3>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="col-md-3">
                    <br>
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{asset('images/wulan.jpg')}}" style="width: 70%" class="rounded-circle"/>
                            <br><br>
                            <h3 class="card-title" style="font-weight: 400">Dzul Wulan</h3>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="col-md-3">
                    <br>
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{asset('images/diaz.jpg')}}" style="width: 70%" class="rounded-circle"/>
                            <br><br>
                            <h3 class="card-title" style="font-weight: 400">Matteo Diaz</h3>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="col-md-3">
                    <br>
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{asset('images/gandhi.jpg')}}" style="width: 70%" class="rounded-circle"/>
                            <br><br>
                            <h3 class="card-title" style="font-weight: 400">Gandhi</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br id="flow"><br><br>
    <section class="kangguru-instruction">
        <div class="container">
            <div class="introduction">
                <h1 class="display-3 txt-purple text-center" style="font-weight: 700; margin-bottom: 60px;">Kangguru flow</h1>
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="display-4 txt-purple">Apa itu psychotest ?</h1>
                    </div>
                    <div class="col-md-6">
                        <p style="font-size: 1.2rem">Psikotes merupakan serangkaian tes yang dilakukan oleh 
                            Psikolog (profesional) atas permintaan klien (individu 
                            atau organisasi) untuk memberikan gambaran utuh tentang 
                            aspek-aspek psikologis seseorang sesuai dengan kebutuhan 
                            dan keperluan klien.
                            dan tes tersebut diberikan sebagai alat atau sarana bagi Psikolog
                            untuk dapat memahami secara utuh aspek-aspek psikologis individu 
                            agar dapat memberikan gambaran (profile psikogram) setiap individu 
                            yang mengikuti tes tersebut.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="start-test-desc bg-purple text-center text-white">
            <h2 class="display-4">Apa yang harus anda lakukan ?</h2>
            <p style="font-size: 1.8rem; font-weight: 100">
                anda sudah tidak sabar untuk memulainya ? <br> 
                Eits, tapi tunggu dulu anda belum mengerti alurnya jadi bersabar keep scroll
            </p>
        </div>
        <div class="container">
            <br>
            <h2 class="display-4 txt-purple" style="margin: 40px 0">Oke akan kami beritahu :)</h2>
            <br><br>
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <h3 class="display-4 txt-purple text-center">Daftar</h3>
                </div>
                <div class="col-md-6">
                    <p style="font-size: 1.2rem">
                        Proses pertama yang harus anda lakukan adalah, ya bergabung terlebih dahulu
                        bersama kami, untuk menggunakan setiap fitur yang ada di dalam web ini
                        dan anda akan merasakan manfaatnya.
                    </p>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-6">
                    <p style="font-size: 1.2rem">
                        Lalu setelah anda terdaftar anda dapat melakukan test psychotest
                        dan jawablah setiap pertanyaan dengan dan benar maka dengan itu
                        anda akan mendapatkan hasil test yang sesuai kemampuan anda.
                    </p>
                </div>
                <div class="col-md-6">
                    <br>
                    <h3 class="display-4 txt-purple text-center">
                        Mulai testnya
                    </h3>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <h3 class="display-4 txt-purple text-center">Konsultasi</h3>
                </div>
                <div class="col-md-6">
                    <p style="font-size: 1.2rem">
                        Setelah anda mendapatkan hasil dari test ada sebuah fitur yang hanya
                        dimiliki oleh member yang memegang gold member dengan cara ini maka hasil
                        psychotest yang telah anda lakukan bisa lebih akurat.
                    </p>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-6">
                    <p style="font-size: 1.2rem">
                        Setelah melewati serangkaian proses tadi, dan disini lah akhir dari test
                        yang anda lakukan, anda akan melihat potensi minat dan bakat pada diri anda
                        dan juga anda dapat menentukan langkah anda kedepannya seperti apa.
                    </p>
                </div>
                <div class="col-md-6">
                    <br>
                    <h3 class="display-4 txt-purple text-center">
                        Lihat hasilnya
                    </h3>
                </div>
            </div>
            <br><br><br><br>
            <h3 class="display-4 txt-purple">Bagaimana cukup mudah bukan ?</h3>
            <p class="txt-purple" style="font-size: 1.8rem; font-weight: 200">
                tapi kami bohong, setidaknya anda sudah tahu cara kerjanya :)
            </p>
            <hr>
        </div>
    </section>
    <br id="testi"><br>
    <br>
    <section class="testimoni">
        <div class="container">
            <br>
            <h1 class="display-4 txt-purple">Testimoni</h1>
            <p class="txt-purple mb-5" style="font-size: 1.8rem; font-weight: 200">
                Berikut adalah testimoni beberapa alumni kangguru yang telah sukses.
            </p>
            <br>
        </div>
        <div class="testimoni-1 messi-bg">
            <div class="faded-testi text-white">
                <div class="container">
                    <blockquote style="font-style: italic; font-size: 2rem; font-weight: 200">
                        <span class="quotes">"</span>Kangguru adalah web psychotest terbaik yang pernah saya gunakan,
                        Sehingga saya tidak kesulitan lagi dalam memilih bidang yang sesuai dengan kemampuan saya<span class="quotes">"</span>
                        <footer>- Lionel Messi</footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="testimoni-1 dybala-bg">
            <div class="faded-testi text-white">
                <div class="container">
                    <blockquote style="font-style: italic; font-size: 2rem; font-weight: 200">
                        <span class="quotes">"</span>Dengan mendengarkan setiap arahan yang diberikan oleh para psikolog yang
                        berada di kangguru ini saya dapat menentukan minat dan bakat saya<span class="quotes">"</span>
                        <footer>- Paulo Dybala</footer>
                    </blockquote>
                </div>
            </div>
        </div>
            <!--<div class="row">
                <div class="col-md-6">
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <blockquote style="font-style: italic; font-size: 1.2rem; font-weight: 200">
                                <span class="quotes">"</span>Kangguru adalah web psychotest terbaik yang pernah saya gunakan<span class="quotes">"</span>
                            </blockquote>
                        </div>
                        <div class="card-footer">
                            <img src="{{asset('images/denis.jpg')}}" style="width: 10%; float: left" class="rounded-circle" />
                            <p class="card-text" style="padding-top: 10px;">&nbsp; - Denis Suarez</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-6">
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <blockquote style="font-style: italic; font-size: 1.2rem; font-weight: 200">
                                <span class="quotes">"</span>Kangguru adalah web psychotest terbaik yang pernah saya gunakan<span class="quotes">"</span>
                            </blockquote>
                        </div>
                        <div class="card-footer">
                            <img src="{{asset('images/messi.jpg')}}" style="width: 10%; float: left" class="rounded-circle" />
                            <p class="card-text" style="padding-top: 10px;">&nbsp; - Lionel Messi</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <blockquote style="font-style: italic; font-size: 1.2rem; font-weight: 200">
                                <span class="quotes">"</span>Kangguru adalah web psychotest terbaik yang pernah saya gunakan<span class="quotes">"</span>
                            </blockquote>
                        </div>
                        <div class="card-footer">
                            <img src="{{asset('images/dybala.jpg')}}" style="width: 10%; float: left" class="rounded-circle" />
                            <p class="card-text" style="padding-top: 10px;">&nbsp; - Paulo Dybala</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <blockquote style="font-style: italic; font-size: 1.2rem; font-weight: 200">
                                <span class="quotes">"</span>Kangguru adalah web psychotest terbaik yang pernah saya gunakan<span class="quotes">"</span>
                            </blockquote>
                        </div>
                        <div class="card-footer">
                            <img src="{{asset('images/neymar.jpg')}}" style="width: 10%; float: left" class="rounded-circle" />
                            <p class="card-text" style="padding-top: 10px;">&nbsp; - Neymar Jr</p>
                        </div>
                    </div>
                </div>
            </div>   -->   
    </section>
    <section class="register-footer">
        <div class="register-footer-center">
            <div class="register-container text-center">
                <h1 class="display-3">Bergabunglah bersama kami!</h1>
                <p style="font-size: 1.5rem">Tentukan masa depan anda mulai dari sekarang</p>
                <a class="btn btn-success" href="{{route('login')}}">Masuk Sekarang</a>
                <a class="btn btn-danger" href="{{route('register')}}">Daftar Sekarang</a>
            </div>
        </div>
    </section>
@endsection