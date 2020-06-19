@extends('Layouts.admin')

@section('content')
<h1 style="color:red">Table Posisi</h1>
<table class="table table-primary"  id="withoutkaryawan">
	<a href="posisi/create" class="btn btn-light"><i class="fa fa-plus" aria-hidden="true"></i></a>


	<thead>
		<tr>
			<th>ID</th>
			<th>Jabatan</th>
			<th>Gaji</th>
			{{-- <th>Pendidikan Id</th> --}}
			<th></th>


		</tr>
	</thead>
<tbody>
  @foreach($posisi as $p)

  <tr>

  <td>{{$p->id}}</td>
  <td>{{$p->jabatan}}</td>
  <td>{{$p->gaji}}</td>
  {{-- <td>{{$p->pospend->pendidikan_terakhir}}</td> --}}


  <td>
	<a href="{{url('posisi/edit/'.$p->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>




  </tr>


</tbody>
@endforeach
</table>
@endsection
