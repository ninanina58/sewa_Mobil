@extends('layouts.admin')

@section('content')
 
    <div class="card">
        <div class="card-header d-flex justify-content-between align-item-center">
            <h3>Daftar Mobil</h3>
            <a href="admin/cars/create'" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                         <tr>
                            <th>No</th>
                            <th>Nama Mobil</th>
                            <th>Bahan Bakar</th>
                            <th>Gambar Mobil</th>
                            <th>Harga Mobil</th>
                            <th>Status Mobil</th>
                            <th>Aksi</th>
                         </tr>
                         <tbody>
                            @forelse($cars as $car)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $car->nama_mobil}}</td>
                                <td>{{ $car->bahan_bakar}}</td>
                                <td>
                                    <img src=""{{ Storage::url($car->gambar) }} width="200" alt="">
                                </td>
                                <td>{{ $car->harga_sewa}}</td>
                                <td>{{ $car->status}}</td>
                                    <td>
                                    <a href="/edit/{{$car->id }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="/edit/{{$car->id }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                                
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">Data Kosong</td>
                            </tr>
                            @endforelse
                         </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection