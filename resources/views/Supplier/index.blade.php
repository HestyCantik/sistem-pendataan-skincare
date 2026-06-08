<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Supplier</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#fdf2f8;
            font-family: Arial, sans-serif;
        }

        .header-card{
            background: linear-gradient(135deg,#ec4899,#f472b6);
            color:white;
            border-radius:15px;
        }

        .table-container{
            background:white;
            padding:20px;
            border-radius:15px;
            box-shadow:0 4px 15px rgba(0,0,0,0.1);
        }

        .btn-tambah{
            background:#ec4899;
            color:white;
            border:none;
        }

        .btn-tambah:hover{
            background:#db2777;
            color:white;
        }

        .menu-btn{
            background:#ec4899;
            color:white;
            border:none;
        }

        .menu-btn:hover{
            background:#db2777;
            color:white;
        }

        .table th{
            background:#ec4899;
            color:white;
            text-align:center;
        }

        .footer{
            margin-top:30px;
            text-align:center;
            color:gray;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <div class="header-card p-4 mb-4 text-center shadow">
        <h1>🚚 Sistem Pendataan Supplier</h1>
        <p class="mb-0">Kelola data supplier dengan mudah</p>
    </div>

    <div class="mb-3">
        <a href="/produk" class="btn menu-btn">💄 Produk</a>
        <a href="/brand" class="btn menu-btn">🏷️ Brand</a>
        <a href="/supplier" class="btn menu-btn">🚚 Supplier</a>
        <a href="/pelanggan" class="btn menu-btn">👤 Pelanggan</a>
    </div>

    <div class="table-container">

        <input type="text"
               id="cariSupplier"
               class="form-control mb-3"
               placeholder="🔍 Cari Supplier...">

        <a href="/supplier/create" class="btn btn-tambah mb-3">
            ➕ Tambah Supplier
        </a>

        <table class="table table-bordered table-hover">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Supplier</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>

            <tbody>

            @forelse($data as $index => $item)

                <tr>
                    <td>{{ $index + 1 }}</td>

                    <td>{{ $item->nama_supplier }}</td>

                    <td>{{ $item->no_hp }}</td>

                    <td>{{ $item->alamat }}</td>

                    <td class="text-center">

                        <a href="/supplier/edit/{{ $item->id }}"
                           class="btn btn-warning btn-sm">
                            ✏ Edit
                        </a>

                        <form action="/supplier/delete/{{ $item->id }}"
                              method="POST"
                              style="display:inline;">
                            @csrf

                            <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')">
                                🗑 Hapus
                            </button>

                        </form>

                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="5" class="text-center">
                        Data Supplier Belum Tersedia
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <div class="footer">
        © 2026 Sistem Pendataan Produk Skincare | Dibuat oleh Novi Erni
    </div>

</div>

<script>
document.getElementById('cariSupplier').addEventListener('keyup', function() {

    let filter = this.value.toLowerCase();

    let rows = document.querySelectorAll('tbody tr');

    rows.forEach(row => {

        let text = row.textContent.toLowerCase();

        row.style.display = text.includes(filter) ? '' : 'none';

    });

});
</script>

</body>
</html>