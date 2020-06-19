@extends('Layouts.admin')

@section('content')
<form action="{{url('pendidikan/store')}}" class="bg" method="POST" >
	@csrf


	Pendidikan Terakhir<input value="{{old('pendidikan_terakhir')}}" type="text" name="pendidikan_terakhir"  required="required"><br>

	<input type="submit" value="Simpan Data">
</form>
@endsection
