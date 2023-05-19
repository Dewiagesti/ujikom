@extends('dashboard')
@section('content')
<div class="card">
  <div class="card-header">Siswa Page</div>
  <div class="card-body">
      
      <form action="{{ url('siswa') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>kelas</label></br>
        <input type="text" name="kelas" id="kelas" class="form-control"></br>
        <label>sekolah</label></br>
        <input type="text" name="sekolah" id="sekolah" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop