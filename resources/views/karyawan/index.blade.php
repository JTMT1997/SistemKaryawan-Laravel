@extends('Layouts.admin')

@section('content')
<h1 style="color:red">Table Karyawan</h1>
<table class="display table table-light" id="myTable">
  <a href="karyawan/create" class="btn btn-light">Tambah data</a>
  
  <thead>
    <tr>
      <th>
        
      </th>
      <th>Id</th>
      <th>Nama</th>
      <th>Umur</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
      <th>Email</th>
      <th>Nomor Telepon</th>
      <th>Tanggal Lahir</th>
      <th>Tanggal Masuk</th>
     
      
      
    </tr>
  </thead>
  {{-- <tbody>
    @foreach($karyawan as $k)
    <tr>
      <td>{{$k->id}}</td>
      <td>{{$k->nama}}</td>
      <td>{{$k->umur}}</td>
      <td>{{$k->jenis_kelamin}}
      <td>{{$k->alamat}}</td>
      <td>{{$k->email}}</td>
      <td>{{$k->no_telp}}</td>
      <td>{{$k->ttl}}</td>
      <td>{{$k->tgl_masuk}}</td>
      <td>
        <a href="{{url('karyawan/edit/'.$k->id)}}" class="btn btn-info"> 
          <i class="fa fa-pencil-alt">Edit</i>
        </a>  
        <form action="{{url('karyawan/destroy/'.$k->id)}}" class="d-inline" method="post">
          @csrf
          @method('delete')
          <button class="btn btn-danger">
            <i class="fa fa-trash"></i>
          </button>
        </form> 
      </td>
    </tr>
    @endforeach
  </tbody> --}}
      
</table>

@endsection

@push('ttable')
<style>
  td.details-control {
  background: url('https://datatables.net/examples/resources/details_open.png') no-repeat center center;
  cursor: pointer;
}
tr.shown td.details-control {
  background: url('https://datatables.net/examples/resources/details_close.png') no-repeat center center;
}
</style>

  
@endpush
@push('table')
<script>
  function format ( d ) {
      // `d` is the original data object for the row
      return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
          '<th>Pendidikan Terakhir</th>'+
          '<td>'+d.backpend.pendidikan_terakhir+'</td>'+
        '</tr>'+
        '<tr>'+
          '<th>Status Karyawan</th>'+
          '<td>'+d.tostatus.nama_status+'</td>'+
        '</tr>'+
        '<tr>'+
          '<th>Gaji Karyawan</th>'+
          '<td>'+d.tojabatan.gaji+'</td>'+
        '</tr>'+
        '<tr>'+
          '<th>Posisi Karyawan</th>'+
          '<td>'+d.tojabatan.jabatan+'</td>'+
        '</tr>'+
                
                
        '<tr>'+
          `<td>
                            <a href="http://127.0.0.1:8000/karyawan/edit/${d.id}" class="btn btn-info"> 
                              
              <i class="fas fa-edit"></i>
                            </a>  
                            <form action="http://127.0.0.1:8000/karyawan/destroy/${d.id}" class="d-inline" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                            </form> 
                        </td>`
        '</tr>'+
        // '<tr>'+
        // 	'<td>Status:</td>'+
        // 	'<td>'+d.extn+'</td>'+
        // '</tr>'+
        
        
      '</table>';
    }
    
    $(document).ready(function() {
      var table = $('#myTable').DataTable( {
        "data": @json($karyawan, JSON_PRETTY_PRINT),
        "columns": [
          {
            "className":      'details-control',
            "orderable":      false,
            "data":           null,
            "defaultContent": ''
          },
          { "data": "id" },
          { "data": "nama" },
          { "data": "umur" },
          { "data": "jenis_kelamin" },
          { "data": "alamat" },
          { "data": "email" },
          { "data": "no_telp" },
          { "data": "ttl" },
          { "data": "tgl_masuk"}
          
          
          
        ],
        "order": [[1, 'asc']]
      } );
      
      // Add event listener for opening and closing details
      $('#myTable tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
    
        if ( row.child.isShown() ) {
          // This row is already open - close it
          row.child.hide();
          tr.removeClass('shown');
        }
        else {
          // Open this row
          row.child( format(row.data()) ).show();
          tr.addClass('shown');
        }
      } );
    } );
</script>

@endpush