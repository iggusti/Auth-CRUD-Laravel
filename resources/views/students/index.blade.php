@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Mahasiswa</div>

                <!-- <div class="card-body">
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> -->

                @auth
                    <div class="container">
                        <div class="row">
                            <div class="col-10">
                                <h1 class="mt-3">Welcome {{ ucfirst(Auth()->user()->name) }}</h1>
                                <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
                            
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            
                                <ul class="list-group">
                            
                                    @foreach( $students as $student )
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $student->nama }}
                                        <a href="/students/{{ $student->id }}" class="badge badge-info">detail</a>
                                    </li>
                                    @endforeach
                            
                                </ul>
                            </div>
                        </div>
                    </div>
                @endauth

            </div>
        </div>
    </div>
</div>
@endsection
