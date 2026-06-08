<!DOCTYPE html>
<html>
<head>
    <title>Edit Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h2>👤 Edit Pelanggan</h2>

    <form action="/pelanggan/update/{{ $data->id }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Nama Pelanggan</label>
            <input type="text"
                   name="nama_pelanggan"
                   class="form-control"
                   value="{{ $data->nama_pelanggan }}">
        </div>

        <div class="mb-3">
            <label>No HP</label>
            <input type="text"
                   name="no_hp"
                   class="form-control"
                   value="{{ $data->no_hp }}">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control">{{ $data->alamat }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">
            Update
        </button>

        <a href="/pelanggan" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>