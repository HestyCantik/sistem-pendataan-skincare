<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendataan Produk Skincare</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: #fdf2f8;
        }

        .header-card{
            background: linear-gradient(135deg, #ec4899, #f472b6);
            color: white;
            border-radius: 15px;
        }

        .table-container{
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0,0,0,0.1);
        }

        .btn-tambah{
            background: #ec4899;
            color: white;
            border: none;
        }

        .btn-tambah:hover{
            background: #db2777;
            color: white;
        }

        .table th{
            background: #ec4899;
            color: white;
            text-align: center;
        }

        .table td{
            vertical-align: middle;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <div class="header-card p-4 mb-4 text-center shadow">
        <h1>💄Glow Beauty Management System</h1>
        <p class="mb-0">Sistem Pendataan Produk Skincare pada Toko Glow Beauty</p>
         <p class="mb-2">
        Mengelola data produk, brand, supplier, dan pelanggan tetap
    </p>

    <hr style="color:white;">

    <p class="mb-1">
        📍 Alamat : Jl. Mawar No. 10, Makassar
    </p>

    <p class="mb-1">
        📞 Telepon : 0812-3456-7890
    </p>

    <p class="mb-0">
        🕒 Jam Operasional : 08.00 - 21.00 WITA
    </p>
</div>

 

    <div class="mb-3">
    <a href="/produk" class="btn btn-primary">Produk</a>
    <a href="/brand" class="btn btn-success">Brand</a>
    <a href="/supplier" class="btn btn-warning">Supplier</a>
    <a href="/pelanggan" class="btn btn-info">Pelanggan Tetap</a>
</div>
    <div class="row mb-4">

    <div class="col-md-3">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <h5>📦 Produk</h5>
                <h3>{{ count($data) }}</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <h5>🏷️ Brand</h5>
                <h3>{{ $totalBrand }}</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <h5>🚚 Supplier</h5>
                <h3>{{ $totalSupplier }}</h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <h5>👤 Pelanggan Tetap</h5>
                <h3>{{ $totalPelanggan }}</h3>
            </div>
        </div>
    </div>

</div>
    <div class="table-container">

    <input type="text"
               id="cariProduk"
               class="form-control mb-3"
               placeholder="🔍 Cari Produk...">

    
        <a href="/produk/create" class="btn btn-tambah mb-3">
            ➕ Tambah Produk
        </a>

        <table class="table table-bordered table-hover">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Merek</th>
                    <th>Jenis Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Tanggal Masuk</th>
                    <th>Kadaluarsa</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse($data as $index => $item)

                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama_produk }}</td>
                    <td>{{ $item->merek }}</td>
                    <td>{{ $item->jenis_produk }}</td>
                    <td>Rp {{ number_format($item->harga,0,',','.') }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->tanggal_masuk }}</td>
                    <td>{{ $item->tanggal_kadaluarsa }}</td>

                    <td class="text-center">

                        <a href="/produk/edit/{{ $item->id }}"
                           class="btn btn-warning btn-sm">
                            ✏ Edit
                        </a>

                        <form action="/produk/delete/{{ $item->id }}"
                              method="POST"
                              style="display:inline;">
                            @csrf

                            <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus produk ini?')">
                                🗑 Hapus
                            </button>

                        </form>

                    </td>
                </tr>

                @empty

                <tr>
                    <td colspan="7" class="text-center">
                        Data produk belum tersedia
                    </td>
                </tr>

                @endforelse
                  <script>
document.getElementById('cariProduk').addEventListener('keyup', function() {

    let filter = this.value.toLowerCase();

    let rows = document.querySelectorAll('tbody tr');

    rows.forEach(function(row) {

        let text = row.textContent.toLowerCase();

        if(text.includes(filter)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }

    });

});
</script>
            </tbody>

        </table>

    </div>

</div>

</body>
</html>