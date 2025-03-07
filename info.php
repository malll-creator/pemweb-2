<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .card {
            margin: 20px auto;
            max-width: 600px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #007bff;
        }
        .form-group label {
            font-weight: bold;
            color: #333;
        }
        .form-control, .custom-select {
            border-radius: 4px;
            border: 1px solid #ccc;
            padding: 8px;
            width: 100%;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        .result p {
            margin: 5px 0;
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Pembelian</h5>
            <form method="POST" action="">
                <div class="form-group row">
                    <label for="nama_pembeli" class="col-4 col-form-label">Nama Pembeli</label> 
                    <div class="col-8">
                        <input id="nama_pembeli" name="nama_pembeli" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="produk" class="col-4 col-form-label">Produk</label> 
                    <div class="col-8">
                        <select id="produk" name="produk" class="custom-select">
                            <option value="Laptop">Laptop</option>
                            <option value="Smartphone">Smartphone</option>
                            <option value="Tablet">Tablet</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah Barang</label> 
                    <div class="col-8">
                        <input id="jumlah" name="jumlah" type="number" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-4 col-form-label">Harga per Barang</label> 
                    <div class="col-8">
                        <input id="harga" name="harga" type="number" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        // Ambil data dari form
        $nama_pembeli = $_POST['nama_pembeli'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];
        $harga = $_POST['harga'];

        // Hitung total harga
        $total_harga = $jumlah * $harga;

        // Tampilkan hasil
        echo "<div class='card result'>
                <div class='card-body'>
                    <h5 class='card-title'>Detail Pembelian</h5>
                    <p>Nama Pembeli : $nama_pembeli</p>
                    <p>Produk : $produk</p>
                    <p>Jumlah Barang : $jumlah</p>
                    <p>Harga per Barang : Rp " . number_format($harga, 0, ',', '.') . "</p>
                    <p>Total Harga : Rp " . number_format($total_harga, 0, ',', '.') . "</p>
                </div>
              </div>";
    }
    ?>
</body>
</html>


