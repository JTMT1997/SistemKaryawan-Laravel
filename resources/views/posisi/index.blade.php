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
            <th></th>
		</tr>
	</thead>
    <tbody>
        @foreach($posisi as $jenjang)
        <tr>
            <td>{{$jenjang->id}}</td>
            <td>{{$jenjang->jabatan}}</td>
            <td>{{$jenjang->gaji}}</td>
            <td><a href="{{url('posisi/edit/'.$jenjang->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
