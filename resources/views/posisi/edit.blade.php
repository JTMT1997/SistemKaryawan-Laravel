@extends('Layouts.admin')

@section('content')
<form action="{{url('posisi/update',$posdit->id)}}" class="bg" method="POST">
	@csrf
    <label for="status">Status</label>
    <input type="text" name="jabatan"  required="required" value="{{$posdit->jabatan}}" class="form-control"><br>
    <label for="gaji">Gaji</label>
    <input type="text" name="gaji"  required="required" value="{{$posdit->gaji}}" class="form-control"><br>
	<input type="submit" value="Simpan Data">
</form>
@endsection
