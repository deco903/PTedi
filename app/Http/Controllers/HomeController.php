<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PelamarModel;

class HomeController extends Controller
{
    public function index()
    {
        $datas = PelamarModel::all();
    	return view('home', compact('datas'));
    }

    public function create()
    {
    	return view('create');
    }

    public function store(Request $request)
    {

         $request->validate([
            'posisi' => 'required',
            'nama' => 'required',
            'ktp' => 'required|numeric',
            'tempat_tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'gol_darah' => 'required',
            'status' => 'required',
            'alamat_ktp' => 'required',
            'alamat_tinggal' => 'required',
            'email' => 'required',
            'no_telp' => 'required|numeric',
            'no_orgterdekat' => 'required',

        ]);


    	$posisi = $request->posisi;
        $nama = $request->nama;
        $ktp = $request->ktp;
        $tempat_tgl_lahir = $request->tempat_tgl_lahir;
        $jenis_kelamin = $request->jenis_kelamin;
        $agama = $request->agama;
        $gol_darah = $request->gol_darah;
        $status = $request->status;
        $alamat_ktp = $request->alamat_ktp;
        $alamat_tinggal = $request->alamat_tinggal;
        $email = $request->email;
        $no_telp = $request->no_telp;
        $no_orgterdekat = $request->no_orgterdekat;

        $input = new PelamarModel();
        $input->posisi = $posisi;
        $input->nama = $nama;
        $input->ktp = $ktp;
        $input->tempat_tgl_lahir = $tempat_tgl_lahir;
        $input->jenis_kelamin = $jenis_kelamin;
        $input->agama = $agama;
        $input->gol_darah = $gol_darah;
        $input->status = $status;
        $input->alamat_ktp = $alamat_ktp;
        $input->alamat_tinggal = $alamat_tinggal;
        $input->email = $email;
        $input->no_telp = $no_telp;
        $input->no_orgterdekat = $no_orgterdekat;
        $input->save();

        return redirect()->route('home');
        
    }

    public function edit($id)
    {
        $data = PelamarModel::find($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request)
    {
        $data = PelamarModel::find($request->id);

        $categori_data = [
            'posisi' => $request->posisi,
            'nama' => $request->nama,
            'ktp' => $request->ktp,
            'tempat_tgl_lahir' => $request->tempat_tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'gol_darah' => $request->gol_darah,
            'status' => $request->status,
            'alamat_ktp' => $request->alamat_ktp,
            'alamat_tinggal' => $request->alamat_tinggal,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'no_orgterdekat' => $request->no_orgterdekat,
            
           
        ];

        $data->update($categori_data);

        return redirect()->route('home');
    }

    public function delete($id)
    {
        $data = PelamarModel::find($id);
        $data->delete();
        return redirect()->route('home');
    }

}
