<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h2>Tambah Produk Skincare</h2>

    <form action="/produk/store" method="POST">

        @csrf

        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control">
        </div>

        <div class="mb-3">
            <label>Merek</label>
            <input type="text" name="merek" class="form-control">
        </div>

        <div class="mb-3">
            <label>Jenis Produk</label>
            <input type="text" name="jenis_produk" class="form-control">
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control">
        </div>

        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control">
        </div>\
        
        <div class="mb-3">
            <label>Tanggal Masuk Barang</label>
            <input type="date"
           name="tanggal_masuk"
           class="form-control">
</div>
        <div class="mb-3">
            <label>Tanggal Kadaluarsa</label>
            <input type="date"
           name="tanggal_kadaluarsa"
           class="form-control">
        </div> 
        <button type="submit" class="btn btn-success">
            Simpan
        </button>

        <a href="/produk" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>