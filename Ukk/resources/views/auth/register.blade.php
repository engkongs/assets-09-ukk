@extends('layouts.mainregister')

@section('contents')
    <div class="container-fluid d-flex  align-items-center "
        style="height:1000px; background-repeat:no-repeat;background-image: url('{{ asset('River-of-Books-scaled-e1683319031281.jpg') }}');">
        <div class="container d-flex  justify-content-center">
            <div class="">
                <div class="card" style="width: 30rem;">
                    <div class="">
                        <h1 class="d-flex justify-content-center  fw-bold ">Belum Punya Akun ?</h1>
                        <div class="d-flex justify-content-center">
                            <h3 class=" fw-semibold ">Langsung Saja Daftar</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <input type="text" class="form-control border rounded-pill p-3"
                                    placeholder="Nama Lengkap">
                                <div class="mt-3  mb-3">
                                    <input type="email" class="form-control border rounded-pill p-3" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <input type="password" id="inputPassword6"
                                        class="form-control border  rounded-pill  p-3" aria-describedby="passwordHelpInline"
                                        placeholder="Password">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control border rounded-pill p-3 "
                                        id="exampleFormControlInput1" placeholder="Username">
                                </div>
                                <div class="mb-3">
                                    <input type="number" class="form-control border rounded-pill p-3 "
                                        placeholder="Nomor Telepon">
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control border rounded-pill  " id="exampleFormControlTextarea1" placeholder="Alamat"></textarea>
                                </div>
                                <div class="mb-3">
                                    <a href="{{ url('login') }}"
                                        class="btn btn-dark  d-flex justify-content-center rounded-pill p-3 ">Masuk !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
