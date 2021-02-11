@extends('Layouts.admin')

@section('content')
<form action="{{url('pendidikan/update',$pendidikan->id)}}" class="bg" method="POST">
	@csrf
    <label for="pendidikan terakhir">Pendidikan Terakhir</label>
	<input value="{{$pendidikan->pendidikan_terakhir}}" type="text" name="pendidikan_terakhir"  required="required" class="form-control">
	<input type="submit" value="Simpan Data">
</form>


@endsection
