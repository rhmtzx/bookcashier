@extends('layout.main')

@section('content')

<div class="page-content-wrapper">
    <div class="justify-content-center">
      <div class="row-2">
        <div class="col-12 col-lg-12">
            <div class="card-body">
                <div class="container">
                    <div class="row" > 
                	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Data Petugas</div>
                        <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="fadeIn animated bx bx-customize"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Data Petugas</li>
                            </ol>
                        </nav>
                    	</div>
                	</div>
						<div class="card">
                            <div class="card-body">
                                <div>
                                    <h4><em>DATA SELURUH PETUGAS</em></h4>
                                    <hr>
                                    <a href="/register" class="btn btn-primary mb-10">Tambah Akun Petugas +</a>
                                    <br></br>
                                    <div class="row" > 
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered mb-0" id="datatable">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Id User</th>
                                                        <th scope="col">Role</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Alamat</th>
                                                        <th scope="col">No Telepon</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                    $no = 1;
                                                    @endphp
                                                    @foreach ($data as $row)
                                                    <tr>
                                                        <th scope="row">{{ $no++ }}</th>
                                                        <td>{{ $row->id}}</td>
                                                        <td>{{ $row->role}}</td>
                                                        <td>{{ $row->email}}</td>
                                                        <td>{{ $row->name}}</td>
                                                        <td>{{ $row->alamat}}</td>
                                                        <td>{{ $row->telepon}}</td>
                                                        <td>
                                                            <a href="/deletepetugas/{{ $row->id }}" class="btn btn-danger"><i class="fadeIn animated bx bx-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
                </div>
</div>

@endsection

