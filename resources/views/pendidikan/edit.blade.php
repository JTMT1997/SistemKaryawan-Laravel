@extends('Layouts.admin')

@section('content')
<form action="{{url('pendidikan/update',$p->id)}}" class="bg" method="POST">
	@csrf
 {{-- Data Karyawan Id<input type="text" name="datakaryawan_id"  required="required" value="{{$p->datakaryawan_id}}"><br>
 Posisi Id<input type="text" name="posisi_id"  required="required" value="{{$p->posisi_id}}"><br>
 Status Id<input type="text" name="status_id"  required="required" value="{{$p->status_id}}"><br>
 Pendidikan terakhir<input type="text" name="pendidikan_terakhir"  required="required" value="{{$p->pendidikan_terakhir}}"><br> --}}
	


 <form action="{{url('pendidikan/store')}}" class="bg" method="POST" >
	@csrf
	Pendidikan terakhir<input type="text" name="pendidikan_terakhir"  required="required" value="{{$p->pendidikan_terakhir}}"><br>
    
	  
	<input type="submit" value="Simpan Data">
</form>
               
                 
@endsection