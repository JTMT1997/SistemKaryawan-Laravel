@extends('Layouts.admin')

@section('content')
<h1 style="color:red">Table Pendidikan</h1>
<table class="table table-primary"  id="withoutkaryawan" >
  <a href="{{url('pendidikan/create')}}" class="btn btn-light"><i class="fa fa-plus" aria-hidden="true"></i></a>
  <thead>
    <tr>
      <th>Id</th>
      <th>Pendidikan Terakhir</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($pendidikan as $grade)
    <tr>
        <td>{{$grade->id}}</td>
        <td>{{$grade->pendidikan_terakhir}}</td>
        <td>
            <a href="{{url('pendidikan/edit/'.$grade->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
