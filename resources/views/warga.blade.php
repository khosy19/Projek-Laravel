@extends('layouts.template')
@section('title','Data Warga')
@section('content')
<br><br><br>
<div class="container">
    <h1>Data Warga</h1>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama Warga</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datawarga as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nik }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->jk }}</td>
                    <td>{{ $data->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </div>
   
        {{-- <ol>
            @foreach ($datawarga as $data)
            <li>
                {{ $data->nama }} || {{ $data->jk }} || {{ $data->alamat }}    
            </li>    

            @endforeach
        </ol> --}}
</div>
@endsection
