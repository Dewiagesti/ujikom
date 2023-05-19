@extends('dashboard')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('siswa/' .$siswa->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$siswa->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$siswa->name}}" class="form-control"></br>
        <label>kelas</label></br>
        <input type="text" name="kelas" id="kelas" value="{{$siswa->kelas}}" class="form-control"></br>
        <label>sekolah</label></br>
        <input type="text" name="sekolah" id="sekolah" value="{{$siswa->sekolah}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop