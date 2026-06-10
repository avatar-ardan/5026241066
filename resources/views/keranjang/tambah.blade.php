@extends('template-pegawai')
@section('judul_halaman', 'Data Keranjang')
@section('konten')
    <p>
        <br><a href="/keranjang" class="btn btn-secondary mb-4">Kembali</a>
    </p>
    <div class="card">
        <div class="card-header">
            Form Tambah Data Keranjang Belanja
        </div>

        <div class="card-body">
            <form action="/keranjang/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="kode" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="kode" id="kode" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
                    <div class="col-sm-10">
                        <input type="text" name="jumlah" id="jumlah" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga per Item</label>
                    <div class="col-sm-10">
                        <input type="text" name="harga" id="harga" class="form-control" required>
                    </div>
                </div>


                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
