<!DOCTYPE html>
<html>
<head>
    <title>Edit Brand</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h2>Edit Brand</h2>

    <form action="/brand/update/{{ $data->id }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Nama Brand</label>
            <input type="text"
                   name="nama_brand"
                   class="form-control"
                   value="{{ $data->nama_brand }}">
        </div>

        <div class="mb-3">
            <label>Negara Asal</label>
            <input type="text"
                   name="negara_asal"
                   class="form-control"
                   value="{{ $data->negara_asal }}">
        </div>

        <button type="submit" class="btn btn-warning">
            Update
        </button>

        <a href="/brand" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>