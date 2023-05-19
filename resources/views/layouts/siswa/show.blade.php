@extends('dashboard')
@section('content')
<div class="card">
  <div class="card-header">Siswa Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $siswa->name }}</h5>
        <p class="card-text">kelas : {{ $siswa->kelas }}</p>
        <p class="card-text">sekolah : {{ $siswa->sekolah }}</p>
  </div>
      
    </hr>
  
  </div>
</div>