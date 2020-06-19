@extends('Layouts.admin')

@section('content')
<form action="{{url('posisi/store')}}" class="bg" method="POST" >
	@csrf

	{{-- Pendidikan Terakhir
	<select name="pendidikan_id"  >
		<option value="">Pilih</option>

		@foreach ($pendidikan as $item)
		<option value="{{$item->id}}" >
			{{$item->pendidikan_terakhir}}
		</option>

		@endforeach
	</select><br> --}}
	Nama Jabatan<input value="{{old('jabatan')}}" type="text" name="jabatan"  required="required"><br>
	Gaji<input value="{{old('gaji')}}" type="text" name="gaji"  required="required"><br>
	<input type="submit" value="Simpan Data">
</form>
@endsection
