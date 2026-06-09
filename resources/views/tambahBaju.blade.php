@extends('template-pegawai')
@section('judul_halaman', 'Tambah Data Baju')
@section('konten')

    <p>
        <br><a href="/baju" class="btn btn-secondary mb-4">Kembali</a>
    </p>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Baju
        </div>

        <div class="card-body">
            <form action="/baju/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="merkbaju" class="col-sm-2 col-form-label">Merk Baju</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkbaju" id="merkbaju" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stockbaju" class="col-sm-2 col-form-label">Stock Baju</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockbaju" id="stockbaju" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tersedia" value="Y" checked>

                            <label class="form-check-label">
                                Ya
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tersedia" value="N">

                            <label class="form-check-label">
                                Tidak
                            </label>
                        </div>
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
