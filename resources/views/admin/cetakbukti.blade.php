<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembayaran</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        width: 80mm;
        /* Sesuaikan dengan lebar kertas struk */
        margin: 0 auto;
        padding: 10px;
        border: 1px solid #ccc;
    }

    .container-struk {
        margin-bottom: 5mm;
    }

    .header {
        text-align: center;
        margin-bottom: 10px;
    }

    .barcode-container {
        text-align: center;
        margin-top: 10px;
    }

    .detail {
        display: flex;
        justify-content: space-between;
        margin-bottom: 3px;
        /* Mengurangi margin bottom */
        font-size: 10px;
        /* Mengubah ukuran font untuk detail */
    }
    </style>
</head>

<body>
    <div class="container-struk bd">
        <div class="header">
            <h4>Struk Pembayaran</h4>
            <p>Malaya Florist</p>
            <!-- SVG barcode goes here -->
            <div class="barcode-container">
                <svg id="barcode"></svg>
            </div>
        </div>
        <div class="detail">
            <span>Tanggal Pemesanan:</span>
            <span>{{ $data->created_at }}</span>
        </div>
        <div class="detail">
            <span>Kode Transaksi:</span>
            <span>{{ $data->id }}</span>
        </div>
        <div class="detail">
            <span>Kode Produk:</span>
            <span>{{ $data->kode_produk }}</span>
        </div>
        <div class="detail" style="margin-bottom: 0;">
            <span>Total Pembayaran:</span>
            <span>{{ $data->harga }}</span>
        </div>
    </div>
</body>

</html>