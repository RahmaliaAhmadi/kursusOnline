<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelJadwal;
use Auth;
use App\ModelSiswa;
use App\ModelTutor;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = ModelJadwal::where('murid_id', '=', Auth::user()->id)->get();
        return view('murid.murid', compact('data'));
    }

    public function tutor()
    {
        // $data = ModelJadwal::
        
        // where('status', 'MENUNGGU')->orWhere('status', 'DIPILIH TUTOR')->get();
        $data = ModelTutor::where('id', '=', Auth::user()->id)->first();
        $jadwal = ModelJadwal::whereIn('kelas',
        [$data->kelas1, $data->kelas2, $data->kelas3, $data->kelas4, $data->kelas5, $data->kelas6])->get();
        // dd($data);

        return view('tutor.tutor', compact('jadwal'));
    }

    public function admin()
    {
        $data = ModelJadwal::all();
        return view('dashboard_admin.list_pendaftaran_siswa', compact('data'));
    }

    public function adminTutor()
    {
        $data = ModelJadwal::all();
        return view('dashboard_admin.list_pendaftaran_tutor', compact('data'));
    }

    public function jadwalTutor()
    {
        $data = ModelJadwal::where('status', 'AKTIF')->get();
        return view('tutor.jadwal', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelJadwal();
        $data->murid_id = $request->murid_id;
        $data->nama_murid = $request->nama_murid;
        $data->program = $request->program;
        $data->status = $request->status;
        $data->kelas = $request->kelas;
        $data->mata_pelajaran = $request->mata_pelajaran;
        $data->hari1 = $request->hari1;
        $data->hari2 = $request->hari2;
        $data->hari3 = $request->hari3;
        $data->waktu_hari1 = $request->waktu_hari1;
        $data->waktu_hari2 = $request->waktu_hari2;
        $data->waktu_hari3 = $request->waktu_hari3;
        $data->save();
        return redirect('dataSiswa')->withMessage('Kamu Berhasil Daftar Les');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     
        $data = ModelJadwal::where('id',$id)->first();
        $data->tutor_id = $request->tutor_id;
        $data->nama_tutor = $request->nama_tutor;
        $data->status = $request->status;
        $data->save();
        if(Auth::user()->role == 'tutor'){
        return redirect('tutor')->withMessage('Berhasil Konfirmasi');
        } else {
            return redirect('list_pendaftaranTutor')->withMessage('Berhasil Konfirmasi');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
