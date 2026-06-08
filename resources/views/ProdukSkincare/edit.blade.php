<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h2>Edit Produk Skincare</h2>

    <form action="/produk/update/{{ $data->id }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text"
                   name="nama_produk"
                   class="form-control"
                   value="{{ $data->nama_produk }}">
        </div>

        <div class="mb-3">
            <label>Merek</label>
            <input type="text"
                   name="merek"
                   class="form-control"
                   value="{{ $data->merek }}">
        </div>

        <div class="mb-3">
            <label>Jenis Produk</label>
            <input type="text"
                   name="jenis_produk"
                   class="form-control"
                   value="{{ $data->jenis_produk }}">
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number"
                   name="harga"
                   class="form-control"
                   value="{{ $data->harga }}">
        </div>

        <div class="mb-3">
            <label>Stok</label>
            <input type="number"
                   name="stok"
                   class="form-control"
                   value="{{ $data->stok }}">
        </div>

        <button type="submit" class="btn btn-warning">
            Update
        </button>

        <a href="/produk" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>