@extends('template-pegawai')
@section('judul_halaman', 'Data Baju')
@section('konten')


<p>
    <br><a href="/baju/tambah" class="btn btn-primary">Tambah Baju Baru</a>
</p>

<p>Cari Data Baju :</p>

<form action="/baju/cari" method="GET">
    <input type="text" name="cari" placeholder="Cari Merk Baju .." class="form-control mb-3">
    <input type="submit" value="CARI" class="btn btn-success">
</form>

<br/>

<table class="table table-striped table-hover">
    <tr>
        <th>Kode Baju</th>
        <th>Merk Baju</th>
        <th>Stock Baju</th>
        <th>Tersedia</th>
        <th>Opsi</th>
    </tr>

    @foreach ($baju as $b)
    <tr>
        <td>{{ $b->kodebaju }}</td>
        <td>{{ $b->merkbaju }}</td>
        <td>{{ $b->stockbaju }}</td>
        <td>{{ $b->tersedia }}</td>
        <td>
            <a href="/baju/edit/{{ $b->kodebaju }}" class="btn btn-warning">Edit</a>
            |
            <a href="/baju/hapus/{{ $b->kodebaju }}" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    @endforeach

</table>

{{ $baju->links() }}
```

@endsection
