@extends('Layouts.admin')

@section('content')
<h1 style="color:red">Table Status</h1>
<table class="table table-primary"  id="withoutkaryawan">
  <a href="{{url('status/create')}}" class="btn btn-light">Tambah data</a>
 
  <thead>
    <tr>
      <th>Id</th>
      <th>Status</th>
      <th></th>
      
    </tr>
  </thead>
<tbody>
  @foreach($status as $s)

  <tr>
	
  <td>{{$s->id}}</td>
  <td>{{$s->nama_status}}</td>
  <td>	
    <a href="{{url('status/edit/'.$s->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
    
    <form action="{{url('status/destroy/'.$s->id)}}" class="d-inline" method="post">
    @csrf
    @method('delete')
    <button class="btn btn-danger">
      <i class="fa fa-trash"></i>
    </button>
  </form>
    </td>	
    
  </tr>

</tbody>
@endforeach
</table>
@endsection