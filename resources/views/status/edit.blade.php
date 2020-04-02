@extends('Layouts.admin')

@section('content')
<form action="{{url('status/update',$s->id)}}" class="bg" method="POST">
	@csrf
 Status<input type="text" name="nama_status"  required="required" value="{{$s->nama_status}}"><br>

	<input type="submit" value="Simpan Data">
</form>
@endsection