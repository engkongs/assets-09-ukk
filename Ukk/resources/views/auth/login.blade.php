@extends('layouts.main')

@section('contents')
    <div class="container-fluid d-flex  align-items-center "
        style="height:1300px; background-repeat:no-repeat;background-image: url('{{ asset('image 1.png') }}');">
        <div class="container d-flex  justify-content-center">
            <div class="">
                <div class="card " style="width: 30rem; margin-bottom: 500px;">
                    <div class="">
                        <h1 class="d-flex justify-content-center fw-bold  ">Selamat Datang !</h1>
                        <div class="card-body">
                            <div class="mb-3">
                                <input type="text" class="form-control border rounded-pill p-3  "
                                    id="exampleFormControlInput1" placeholder="Username">
                            </div>
                            <div class="mb-3">
                                <input type="password" id="inputPassword6" class="form-control border  rounded-pill  p-3"
                                    aria-describedby="passwordHelpInline" placeholder="Password">
                            </div>
                            <div class="justify-content-center mb-3">
                                <div class="btn btn-dark d-flex justify-content-center rounded-pill p-3 ">Masuk !</div>
                            </div>
                            <div class="justify-content-center mb-3 ">
                                <a href="{{ url('/') }}"
                                    class="btn btn-dark d-flex justify-content-center rounded-pill p-3">Back Back</a>
                            </div>
                            <div class="text-center mt-5 text-lg mb-3">
                                <a href="{{ url('register') }}"> Belum punya akun?
                                </a>
                                <p>Tunggu apa lagi langsung daftar saja</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
