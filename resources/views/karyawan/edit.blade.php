@extends('Layouts.admin')

@section('content')
<form action="{{url('karyawan/update',$item->id)}}" class="bg" method="POST" >
	@csrf
    <label for="nama">Nama</label>
    <input value="{{$item->nama}}" type="text" name="nama"  required="required" class="form-control">
    <label for="alamat">Alamat</label>
	<input value="{{$item->alamat}}" type="text" name="alamat"  required="required" class="form-control">
    <label for="umur" >Umur</label>
    <input value="{{$item->umur}}" type="text" name="umur"  required="required" class="form-control" onkeypress="return hanyaAngka(event)">
    <label for="jenis kelamin"> Jenis Kelamin</label>
    <select name="jenis_kelamin" required class="form-control">
        <option value="">Pilih Status</option>
        <option value="LAKI_LAKI">Laki-Laki</option>
        <option value="PEREMPUAN" >Perempuan</option>
    </select>
    <label for="email">Email</label>
    <input value="{{$item->email}}" type="text" name="email"  required="required" class="form-control">
    <label for="no telp">No Telp</label>
    <input value="{{$item->no_telp}}" type="text" name="no_telp"  required="required" class="form-control" onkeypress="return hanyaAngka(event)">
    <label for="ttl">Ttl</label>
    <input value="{{$item->ttl}}" type="date" name="ttl"  required="required" class="form-control">
	<label for="status">Status</label>
	<select name="status_id" class="form-control">
		<option value="">Siilahkan Pilih:</option>
		@foreach ($status as $item)
		<option value="{{$item->id}}" >
			{{$item->nama_status}}
		</option>
		@endforeach
    </select>
    <label for="pendidikan terakhir">Pendidikan Terakhir</label>
	<select name="pendidikan_id" class="form-control">
		<option value="">Siilahkan Pilih:</option>
		@foreach ($pendidikan as $item)
		<option value="{{$item->id}}" >
			{{$item->pendidikan_terakhir}}
		</option>
		@endforeach
    </select>
    <label for="posisi">Posisi</label>
	<select name="posisi_id"  class="form-control">
		<option value="">Siilahkan Pilih:</option>
		@foreach ($posisi as $item)
		<option value="{{$item->id}}" >
			{{$item->jabatan}}
		</option>
		@endforeach
	</select>
    <label for="tgl masuk">Tgl masuk</label>
    <input value="{{old('tgl_masuk')}}" type="date" name="tgl_masuk"  required="required" class="form-control">
	<input type="submit" value="Simpan Data">
</form>
@endsection
<script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
      return true;
    }
</script>
