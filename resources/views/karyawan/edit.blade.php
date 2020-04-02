@extends('Layouts.admin')

@section('content')
<form action="{{url('karyawan/update',$item->id)}}" class="bg" method="POST" >
	@csrf
	
	{{-- Status Id<input value="{{$item->status_id}}" type="text" name="status_id"  required="required"><br>
	Pendidikan Id<input value="{{$item->pendidikan_id}}" type="text" name="pendidikan_id"  required="required"><br>
	Posisi<input value="{{$item->posisi_id}}" type="text" name="posisi_id"  required="required"><br> --}}
	Nama<input value="{{$item->nama}}" type="text" name="nama"  required="required"><br>
	Alamat<input value="{{$item->alamat}}" type="text" name="alamat"  required="required"><br>
	Umur<input value="{{$item->umur}}" type="text" name="umur"  required="required"><br>
	Jenis Kelamin<input value="{{$item->jenis_kelamin}}" type="text" name="jenis_kelamin"  required="required"><br>
	Email<input value="{{$item->email}}" type="text" name="email"  required="required"><br>
	No Telp<input value="{{$item->no_telp}}" type="text" name="no_telp"  required="required"><br>
	Ttl<input value="{{$item->ttl}}" type="date" name="ttl"  required="required"><br>
	Tgl_masuk<input value="{{$item->tgl_masuk}}" type="date" name="tgl_masuk"  required="required"><br>
	Status
	<select name="status_id"  >
		
		@foreach ($status as $item)
		<option value="{{$item->id}}" >
			{{$item->nama_status}}
		</option>
			
		@endforeach
	</select><br>

	Pendidikan Terakhir
	<select name="pendidikan_id"  >
		@foreach ($pendidikan as $item)
		<option value="{{$item->id}}" >
			{{$item->pendidikan_terakhir}}
		</option>
			
		@endforeach
	</select><br>

	Posisi
	<select name="posisi_id"  >
		@foreach ($posisi as $item)
		<option value="{{$item->id}}" >
			{{$item->jabatan}}
		</option>
			
		@endforeach
	</select><br>
	


	

	<input type="submit" value="Simpan Data">
</form>
@endsection