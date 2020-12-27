@extends('Layouts.admin')

@section('content')
<form action="{{url('status/store')}}" class="bg" method="POST" >
	@csrf
	Status
    <select name="nama_status" required>
        <option value="">Pilih Status</option>
        <option value="Tetap">1. Tetap</option>
        <option value="Kontrak" >2. Kontrak</option>
        <option value="Probation" >3. Probation</option>
    </select>
	<input type="submit" value="Simpan Data">
</form>
@endsection
