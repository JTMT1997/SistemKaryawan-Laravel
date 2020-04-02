@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                    
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}" method="POST">
                    @csrf
                      <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4 bg-secondary"
                      type="submit">
                        <p style="color: black;">Keluar</p>
                      </button>
                      <a href="{{url('karyawan')}}" class="btn btn-info" >Masuk Ke Data Karyawan</a>
                    </form>
                    {{-- <a class="nav-link active btn btn-info" href="{{url('karyawan')}}" >Masuk Ke Data Karyawan</a> --}}
                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
