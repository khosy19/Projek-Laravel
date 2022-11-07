@extends('layouts.template')
@section('title','Admin')
@section('content')
<br><br><br>
<div class="container">
    <h1>Selamat Datang, {{ $admin }}</h1>
    <h2>Role anda, {{ $role }}</h2>
    @switch($role)
        @case($role=='admin')
            <a href="">halaman admin</a>
            @break
        @case($role=='sekretaris')
            <a href="">halaman sekretaris</a>
            @break
        @default
            <a href="">Anda bukan user</a>
    @endswitch
    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>
        @foreach($datawarga as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data }}</td>
        </tr>
        @endforeach
    </table>
    <br><br><br><br>   
@endsection
