<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h2>👤 Tambah Pelanggan</h2>

    <form action="/pelanggan/store" method="POST">

        @csrf

        <div class="mb-3">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control">
        </div>

        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">
            Simpan
        </button>

        <a href="/pelanggan" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>