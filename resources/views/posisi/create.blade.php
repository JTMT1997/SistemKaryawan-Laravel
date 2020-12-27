@extends('Layouts.admin')

@section('content')
<form action="{{url('posisi/store')}}" class="bg" method="POST" >
    @csrf
    <label for="nama jabatan">Nama Jabatan</label>
    <input value="{{old('jabatan')}}" type="text" name="jabatan"  required="required" class="form-control">
    <label for="gaji">Gaji</label>
    <input value="{{old('gaji')}}" type="text" name="gaji"  required="required" class="form-control">
	<input type="submit" value="Simpan Data">
</form>
@endsection
