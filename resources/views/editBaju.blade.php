@extends('template-pegawai')
@section('judul_halaman', 'Edit Data Baju')
@section('konten')

    <br><a href="/baju" class="btn btn-secondary mb-4">Kembali</a>

    @foreach ($baju as $b)
        <div class="card">
            <div class="card-header">
                Form Edit Data Baju
            </div>

            ```
            <div class="card-body">
                <form action="/baju/update" method="post">

                    {{ csrf_field() }}

                    <input type="hidden" name="kodebaju" value="{{ $b->kodebaju }}">

                    <div class="row mb-3">
                        <label for="merkbaju" class="col-sm-2 col-form-label">Merk Baju</label>
                        <div class="col-sm-10">
                            <input type="text" name="merkbaju" id="merkbaju" class="form-control"
                                value="{{ $b->merkbaju }}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="stockbaju" class="col-sm-2 col-form-label">Stock Baju</label>
                        <div class="col-sm-10">
                            <input type="number" name="stockbaju" id="stockbaju" class="form-control"
                                value="{{ $b->stockbaju }}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tersedia" value="Y"
                                    {{ $b->tersedia == 'Y' ? 'checked' : '' }}>

                                <label class="form-check-label">
                                    Ya
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tersedia" value="N"
                                    {{ $b->tersedia == 'N' ? 'checked' : '' }}>

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
            ```

        </div>
    @endforeach

@endsection
