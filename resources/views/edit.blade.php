@extends('layout.master')
@section('content')
selamat datang {{ Auth::user()->name ?? '' }}
   <form action="{{route('update')}}" method="POST">
 @csrf
        <fieldset>
        <center><legend>EDIT DATA PRIBADI PELAMAR</legend></center>
        <input type="hidden" name="id" value="{{$data->id}}">
        <p>
            <label>Posisi Yang dilamar:</label>
            <input type="text" name="posisi" value="{{$data->posisi}}"/ required>
        </p>
        <p>
            <label>Nama:</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
           <input type="text" name="nama" value="{{$data->nama}}"/ required>
        </p>
         <p>
            <label>No KTP:</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
           <input type="number" name="ktp" value="{{$data->ktp}}"/ required>
        </p>
        <p>
            <label>Tempat, Tanggal Lahir :</label> &nbsp;
           <input type="text" name="tempat_tgl_lahir" value="{{$data->tempat_tgl_lahir}}"/ required>
        </p>
        <p>
           <label>Jenis Kelamin</label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
         <input type="text" name="jenis_kelamin" value="{{$data->jenis_kelamin}}"/ required>
      <p>
      <p>
           <label>Agama :</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
           <input type="text" name="agama" value="{{$data->agama}}"/ required>
        </p>
        <p>
           <label>Golongan darah :</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
           <input type="text" name="gol_darah" value="{{$data->gol_darah}}"/ required>
        </p>
        <p>
           <label>Status :</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
           <input type="text" name="status" value="{{$data->status}}"/ required>
        </p>
         <p>
           <label>Alamat KTP :</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
           <input type="text" name="alamat_ktp" value="{{$data->alamat_ktp}}"/ required>
        </p>
        <p>
           <label>Alamat Tinggal :</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
           <input type="text" name="alamat_tinggal" value="{{$data->alamat_tinggal}}"/ required>
        </p>
        <p>
           <label>Email :</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
           <input type="email" name="email" value="{{$data->email}}"/ required>
        </p>
        <p>
           <label>No Telp :</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
           <input type="number" name="no_telp" value="{{$data->no_telp}}"/ required>
        </p>
         <p>
           <label>Orang terdekat yang dapat dihubungi :</label>
           <input type="text" name="no_orgterdekat" value="{{$data->no_orgterdekat}}"/ required>
        </p>
        <p>
            <input type="submit" name="submit" value="update" />
        </p>
        </fieldset>
    </form>
<a href="{{route('logout')}}">Log out</a>
@endsection