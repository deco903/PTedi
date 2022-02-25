@extends('layout.master')
@section('content')
selamat datang {{ Auth::user()->name ?? '' }}
<br>
 <form action="{{route('store')}}" method="POST">
 @csrf
        <fieldset>
        <center><legend>DATA PRIBADI PELAMAR</legend></center>
        <p>
            <label>Posisi Yang dilamar:</label>
            <input type="text" name="posisi" placeholder="posisi yang dilamar"/ required>
        </p>
        <p>
            <label>Nama:</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
           <input type="text" name="nama" placeholder="masukan nama"/ required>
        </p>
         <p>
            <label>No KTP:</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
           <input type="number" name="ktp" placeholder="masukan nama"/ required>
        </p>
        <p>
            <label>Tempat, Tanggal Lahir :</label> &nbsp;
           <input type="text" name="tempat_tgl_lahir" placeholder="masukan tempat/tanggal lahir"/ required>
        </p>
        <p>
           <label>Jenis Kelamin</label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	       <input type="text" name="jenis_kelamin" placeholder="masukan tempat/tanggal lahir"/ required>
	    <p>
	    <p>
           <label>Agama :</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
           <input type="text" name="agama" placeholder="masukan agama"/ required>
        </p>
        <p>
           <label>Golongan darah :</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
           <input type="text" name="gol_darah" placeholder="masukan agama"/ required>
        </p>
        <p>
           <label>Status :</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
           <input type="text" name="status" placeholder="masukan status"/ required>
        </p>
         <p>
           <label>Alamat KTP :</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
           <input type="text" name="alamat_ktp" placeholder="masukan alamat KTP"/ required>
        </p>
        <p>
           <label>Alamat Tinggal :</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
           <input type="text" name="alamat_tinggal" placeholder="masukan alamat tinggal"/ required>
        </p>
        <p>
           <label>Email :</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
           <input type="email" name="email" placeholder="masukan email"/ required>
        </p>
        <p>
           <label>No Telp :</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
           <input type="number" name="no_telp" placeholder="masukan no telp"/ required>
        </p>
         <p>
           <label>Orang terdekat yang dapat dihubungi :</label>
           <input type="text" name="no_orgterdekat" placeholder="masukan no telp"/ required>
        </p>
        <p>
            <input type="submit" name="submit" value="simpan" />
        </p>
        </fieldset>
    </form>
<a href="{{route('logout')}}">Log out</a>
@endsection