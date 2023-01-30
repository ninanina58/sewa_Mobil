@extends('layouts.admin')

@section('content')
@extends('layouts.admin')

@section('content')
 <div class="card">
    <div class="card-header">
        form tambah data
    </div>
    <div class="card-body">
        <form action="{{route('cars.update',$car->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_mobil">Nama Mobil</label>
                <input type="text" name="nama_mobil" class="form-control" value="{{old('harga_sewa'),$car->nama_mobil}}">
            </div>
            <div class="form-group">
                <label for="harga_sewa">Harga sewa</label>
                <input type="number" name="harga_sewa" class="form-control" value="{{ old('harga_sewa',$car->harga_sewa)}}">
            </div>
            <div class="form-group">
                <label for="bahan_bakar">Harga Bahan Bakar</label>
                <input type="number" name="bahan_bakar" class="form-control" value="{{ old('bahan_bakar',$car->bahan_bakar)}}">
            </div>
            <div class="form-group">
                <label for="jumlah_kursi">Jumlah Kursi</label>
                <input type="number" name="jumlah_kursi" class="form-control" value="{{ old('jumlah_kursi',$car->jumlah_kursi)}}">
            </div>
            <div class="form-group">
                <label for="transmisi">Transmisi</label>
                <select name="transmisi" id="transmisi" class="form-control">
                    <option value="manual" class="manual">Manual</option>
                    <option value="otomatis" class="otomatis">Otomatis</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" class="tersedia">Tersedia</option>
                    <option value="0" class="tidak tersedia">Tidak tersedia</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="5"></textarea>
            </div>
            
            <div class="form-group">
                <label for="p3k">p3k</label>
                <select name="p3k" id="p3k" class="form-control">
                    <option value="1" class="tersedia">Tersedia</option>
                    <option value="0" class="tidak tersedia">Tidak tersedia</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="audio">audio</label>
                <select name="audio" id="audio" class="form-control">
                    <option value="1" class="tersedia">Tersedia</option>
                    <option value="0" class="tidak tersedia">Tidak tersedia</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="charger">charger</label>
                <select name="charger" id="charger" class="form-control">
                    <option value="1" class="tersedia">Tersedia</option>
                    <option value="0" class="tidak tersedia">Tidak tersedia</option>
                </select>
            </div>

            <div class="form-group">
                <label for="ac">ac</label>
                <select name="ac" id="ac" class="form-control">
                    <option value="1" class="tersedia">Tersedia</option>
                    <option value="0" class="tidak tersedia">Tidak tersedia</option>
                </select>
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" clss="form-control" name="gambar">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            
        </form>
    </div>
 </div>
@endsection
@endsection