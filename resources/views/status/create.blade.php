@extends('Layouts.admin')

@section('content')
<form action="{{url('status/store')}}" class="bg" method="POST" >
	@csrf
	
	
	Status<input value="{{old('nama_status')}}" type="text" name="nama_status"  required="required"><br>

	

	
	

	<input type="submit" value="Simpan Data">
</form>
@endsection