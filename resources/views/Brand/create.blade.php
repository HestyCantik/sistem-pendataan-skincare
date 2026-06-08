<!DOCTYPE html>
<html>
<head>
    <title>Tambah Brand</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h2>Tambah Brand</h2>

    <form action="/brand/store" method="POST">

        @csrf

        <div class="mb-3">
            <label>Nama Brand</label>
            <input type="text"
                   name="nama_brand"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Negara Asal</label>
            <input type="text"
                   name="negara_asal"
                   class="form-control">
        </div>

        <button type="submit" class="btn btn-success">
            Simpan
        </button>

        <a href="/brand" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>