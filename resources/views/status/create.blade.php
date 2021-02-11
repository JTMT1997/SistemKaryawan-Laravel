@extends('Layouts.admin')

@section('content')
<form action="{{url('status/store')}}" class="bg" method="POST" >
	@csrf
	<label>Status</label>
    <input type="text" name="nama_status" id="" class="form-control">
	<input type="submit" value="Simpan Data">
</form>
@endsection
