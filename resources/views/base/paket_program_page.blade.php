@include('base/header_page')
@extends('base/script_page')
@section('content')
<div id="pricing" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h4>Program Imam Course</h4>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="tab1">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header">
                                        <form method="POST" action="{{  route('paketProgram.store')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('POST') }}
                                            <input id="murid_id" style="display:none" type="text" class="form-control" name="murid_id"
                                                    required autofocus
                                                    value="{{ Auth::user()->id }}" style="text-transform: capitalize">
                                                    
                                            <input type="number" class="form-control" id="invoice" name="invoice" style="display:none" value="<?php echo (rand(190000000,199999999)) ?>">
                                            <input type="text" class="form-control" id="program" name="program" style="display:none" value="REGULER">
                                            <input type="number" class="form-control" id="harga" name="harga" style="display:none" value="2000">

                                            <h2>PAKET REGULER</h2>
                                            <h3>FREE</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>MATEMATIKA</strong>
                                            <p><i class="fa fa-rocket"></i> <strong>IPA</strong>
                                            <p><i class="fa fa-database"></i> <strong>BAHASA INDONESIA</strong>
                                            <p><i class="fa fa-link"></i> <strong>BAHASA INGGRIS</strong>
                                            <p><i class="fa fa-life-ring"></i> <strong>VIDEO MATERI
                                            </strong>                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranSiswaReg">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">Daftar Sekarang</button>
                                            </a>
                                            <!-- <a href="/pendaftaranSiswaGold" type="submit" class="btn btn-dark btn-radius btn-brd effect-1">Daftar Sekarang</a> -->
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header">
                                        <form method="POST" action="{{ route('paketProgram.store')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                
                                        <input id="murid_id" style="display:none" type="text" class="form-control" name="murid_id"
                                                required autofocus
                                                value="{{ Auth::user()->id }}" style="text-transform: capitalize">
                                        <input type="number" class="form-control" id="invoice" name="invoice" style="display:none" value="<?php echo (rand(190000000,199999999)) ?>">
                                        <input type="text" class="form-control" id="program" name="program" style="display:none" value="PREMIUM">
                                        <input type="number" class="form-control" id="harga" name="harga" style="display:none" value="2000">

                                            <h2>PAKET PREMIUM</h2>
                                            <h3>Rp.75.000,00</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>Untuk Hidup yang Lebih Baik</p>
                                        </div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>MATEMATIKA</strong>
                                            <p><i class="fa fa-rocket"></i> <strong>IPA</strong>
                                            <p><i class="fa fa-database"></i> <strong>BAHASA INDONESIA</strong>
                                            <p><i class="fa fa-link"></i> <strong>BAHASA INGGRIS</strong>
                                            <p><i class="fa fa-life-ring"></i> <strong>SOAL DAN VIDEO MATERI</strong> 
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranSiswaPrem">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">Daftar Sekarang</button>
                                            </a>
                                            <!-- <a href="/pendaftaranSiswaGold" type="submit" class="btn btn-dark btn-radius btn-brd effect-1">Daftar Sekarang</a> -->
                                        </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header">
                                        <form method="POST" action="{{ route('paketProgram.store')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('POST') }}
                                        <input id="murid_id" style="display:none" type="text" class="form-control" name="murid_id"
                                                required autofocus
                                                value="{{ Auth::user()->id }}" style="text-transform: capitalize">
                                        <input type="number" class="form-control" id="invoice" name="invoice" style="display:none" value="<?php echo (rand(190000000,199999999)) ?>">
                                        <input type="text" class="form-control" id="program" name="program" style="display:none" value="GOLD">
                                        <input type="number" class="form-control" id="harga" name="harga" style="display:none" value="2000">

                                            <h2>PAKET GOLD</h2>
                                            <h3>RP.100.000,00</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>MATEMATIKA</strong>
                                            <p><i class="fa fa-rocket"></i> <strong>IPA</strong>
                                            <p><i class="fa fa-database"></i> <strong>BAHASA INDONESIA</strong>
                                            <p><i class="fa fa-link"></i> <strong>BAHASA INGGRIS</strong>
                                            <p><i class="fa fa-life-ring"></i> <strong>SEMINAR, SOAL, DAN VIDEO MATERI</strong>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranSiswaGold">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">Daftar Sekarang</button>
                                            </a>
                                            <!-- <a href="/pendaftaranSiswaGold" type="submit" class="btn btn-dark btn-radius btn-brd effect-1">Daftar Sekarang</a> -->
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
@endsection