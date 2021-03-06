@include('base/header_page')
@extends('base/script_page')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Imam Courses</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/ material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
    <div class="container-content">
        <div class="sign-up-content">
        <form method="POST" action="{{ route('pendaftaranSiswa.store')}}" enctype="multipart/form-data">
                @csrf
                <h2 class="form-title">Pendaftaran Les Program Paket PREMIUM</h2>
                <br>
                <div class="alert alert-danger">
                    <strong>Isikan!</strong> Data dengan sebenarnya.
                </div>
                <br>
                <div class="panel-body">
                <input id="murid_id" style="display:none" type="text" class="form-control" name="murid_id"
                            required autofocus
                            value="{{ Auth::user()->id }}" style="text-transform: capitalize">

                    <input id="nama_murid" style="display:none" type="text" class="form-control" name="nama_murid"
                            required autofocus
                            value="{{ Auth::user()->name }}" style="text-transform: capitalize">

                    <input type="text" class="form-control" id="program" name="program" style="display:none" value="PREMIUM">

                    <input type="text" class="form-control" id="status" name="status" style="display:none" value="MENUNGGU">
                    <label for="kelas" >Kelas
                        <select id="kelas" name="kelas" class="form-control" style="float:left">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </label>
                    <label for="mata_pelajaran" style="float:right">Mata Pelajaran
                        <select id="mata_pelajaran" name="mata_pelajaran" class="form-control" style="float:right">
                            <option value="Matematika">Matematika</option>
                            <option value="IPA">IPA</option>
                            <option value="IPS">IPS</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                        </select> 
                    </label>
                </div>
                <br>
                <div class="panel-body" >
                    <label for="hari1">Hari 1
                    <select id="hari1" name="hari1" class="form-control" style="width:195px">
                            <option value="_none">-Pilih Hari-</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jum'at">Jum'at</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select> 
                    </label>
                    <label for="hari2">Hari 2 
                    <select id="hari2" name="hari2" class="form-control" style="width:195px">
                            <option value="_none">-Pilih Hari-</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jum'at">Jum'at</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select> 
                    </label>
                </div>
                <br>
                <div class="panel-body" >Waktu Hari 1
                <select id="waktu_hari1" name="waktu" class="form-control" >
                        <option value="_none">-Pilih Waktu-</option>
                        <option value="15.00">15.00 WIB</option>
                        <option value="16.00">16.00 WIB</option>
                        <option value="17.00">17.00 WIB</option>
                        <option value="18.00">18.00 WIB</option>
                        <option value="19.00">19.00 WIB</option>
                    </select> 
                </div>
                <div class="panel-body" >Waktu Hari 2
                <select id="waktu_hari2" name="waktu" class="form-control">
                        <option value="_none">-Pilih Waktu-</option>
                        <option value="15.00">15.00 WIB</option>
                        <option value="16.00">16.00 WIB</option>
                        <option value="17.00">17.00 WIB</option>
                        <option value="18.00">18.00 WIB</option>
                        <option value="19.00">19.00 WIB</option>
                    </select> 
                </div>
                <br>
                <div class="panel-body">
                    <label id="p"></label>&nbsp;<label id="p1"></label><label id="p2">&nbsp;</label>
                    <label id="p3"></label>&nbsp;<label id="p4"></label>&nbsp;<label id="p5"></label>
                </div>
                <br>
                    <div class="form-group"> 
                        <a href="/dataSiswa">
                            <button type="submit" class="button3" >Daftar</button>
                        </a>
                    </div>
            </form>
        </div>
    </div>

@endsection
@section('day')
    <script>
        $(document).ready(function() {
            $("#hari1").change(function(){
                var nilai = $(this).val();
                $("#p").html("Anda memilih hari "+nilai);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#waktu_hari1").change(function(){
                var nilai1 = $(this).val();
                $("#p1").html("pukul "+nilai1);
            });
        });
    </script>
      <script>
        $(document).ready(function() {
            $("#hari2").change(function(){
                var nilai = $(this).val();
                $("#p2").html(", "+nilai);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#waktu_hari2").change(function(){
                var nilai1 = $(this).val();
                $("#p3").html("pukul "+nilai1);
            });
        });
    </script>
@endsection

