@extends('Layouts.admin')

@section('content')
<form action="{{url('posisi/update',$posdit->id)}}" class="bg" method="POST">
	@csrf

	<label for="pendidikan">Pendidikan</label>
	{{-- <select name="pendidikan_id"  >
		<option value="">Pilih</option>
		@foreach ($pendidikan as $item)
		<option value="{{$item->id}}" >
			{{$item->pendidikan_terakhir}}
		</option>

		@endforeach
	</select><br> --}}
 Status<input type="text" name="jabatan"  required="required" value="{{$posdit->jabatan}}"><br>
 Gaji<input type="text" name="gaji"  required="required" value="{{$posdit->gaji}}"><br>


	<input type="submit" value="Simpan Data">
</form>
@endsection
