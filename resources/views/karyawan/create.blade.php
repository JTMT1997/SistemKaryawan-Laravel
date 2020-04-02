@extends('Layouts.admin')

@section('content')
<form action="{{url('karyawan/store')}}" class="bg" method="POST" >
	@csrf
	
	
	
	Nama<input value="{{old('nama')}}" type="text" name="nama"  required="required"><br>
	Alamat<input value="{{old('alamat')}}" type="text" name="alamat"  required="required"><br>
	Umur<input value="{{old('umur')}}" type="text" name="umur"  required="required"><br>
	Jenis Kelamin<input value="{{old('jenis_kelamin')}}" type="text" name="jenis_kelamin"  required="required"><br>
	Email<input value="{{old('email')}}" type="text" name="email"  required="required"><br>
	No Telp<input value="{{old('no_telp')}}" type="text" name="no_telp"  required="required"><br>
	Ttl<input value="{{old('ttl')}}" type="date" name="ttl"  required="required"><br>
	Status
	<select name="status_id"  >
		<option value="">Siilahkan Pilih:</option>
		@foreach ($status as $item)
		<option value="{{$item->id}}" >
			{{$item->nama_status}}
		</option>
			
		@endforeach
	</select><br>

	Pendidikan Terakhir
	<select name="pendidikan_id"  >
		<option value="">Siilahkan Pilih:</option>
		@foreach ($pendidikan as $item)
		<option value="{{$item->id}}" >
			{{$item->pendidikan_terakhir}}
		</option>
			
		@endforeach
	</select><br>

	Posisi
	<select name="posisi_id"  >
		<option value="">Siilahkan Pilih:</option>
		@foreach ($posisi as $item)
		<option value="{{$item->id}}" >
			{{$item->jabatan}}
		</option>
			
		@endforeach
	</select><br>
	Tgl_masuk<input value="{{old('tgl_masuk')}}" type="date" name="tgl_masuk"  required="required"><br>

	

	<input type="submit" value="Simpan Data">
</form>
@endsection