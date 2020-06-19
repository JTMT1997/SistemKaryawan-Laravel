@extends('Layouts.admin')

@section('content')
<form action="{{url('status/store')}}" class="bg" method="POST" >
	@csrf
	Status

    <select name="nama_status" required>
        <option value="">Pilih Status</option>
        <option value="Tetap">Tetap</option>
        <option value="Kontrak" >Kontrak</option>
    </select>






	<input type="submit" value="Simpan Data">
</form>
@endsection
