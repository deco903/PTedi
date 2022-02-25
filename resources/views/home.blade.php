@extends('layout.master')
@section('content')
selamat datang {{ Auth::user()->name ?? '' }}
<br>
<a href="{{route('create')}}" class="btn btn-primary">Inpu Data Pelamar</a>
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Posisi</th>
      <th scope="col">Nama</th>
      <th scope="col">KTP</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Agama</th>
      <th scope="col">Gol darah</th>
      <th scope="col">Status</th>
      <th scope="col">Alamat KTP</th>
      <th scope="col">Alamat Tinggal</th>
      <th scope="col">Email</th>
      <th scope="col">No telephone</th>
      <th scope="col">No orang terdekat</th>
       <th scope="col">Action</th>
    </tr>
  </thead>
   <tbody>
        @foreach($datas as $data)
        <tr>
          <th>{{$loop->iteration}}</th>
          <td>{{$data->posisi}}</td>
          <td>{{$data->nama}}</td>
          <td>{{$data->ktp}}</td>
          <td>{{$data->tempat_tgl_lahir}}</td>
          <td>{{$data->jenis_kelamin}}</td>
          <td>{{$data->agama}}</td>
          <td>{{$data->gol_darah}}</td>
          <td>{{$data->status}}</td>
          <td>{{$data->alamat_ktp}}</td>
          <td>{{$data->alamat_tinggal}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->no_telp}}</td>
          <td>{{$data->no_orgterdekat}}</td>
          <td>
            <a href="/home/edit/{{$data->id}}" class="btn btn-sm btn-success">Edit</a> ||
            <a href="/delete/{{$data->id}}" class="btn btn-sm btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach()
    </tbody>
</table>
<a href="{{route('logout')}}">Log out</a>
@endsection