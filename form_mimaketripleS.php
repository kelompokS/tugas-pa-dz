<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_pembeli = $_POST['nama_pembeli'];
    $nama_barang = $_POST['nama_barang'];
    $harga = (int) $_POST['harga'];
    $jumlah = (int) $_POST['jumlah'];
    $total = $harga * $jumlah;
    $tanggal = date("d/m/Y H:i:s");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mimake Mart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            padding: 20px;
            display: flex;
            gap: 20px;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
            width: 300px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        button {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background: #ff6f00;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            background: #e65c00;
        }
        .struk {
            background: white;
            padding: 10px;
            font-family: 'Courier New', monospace;
            width: 8cm;
            border: 1px dashed #333;
        }
        .struk h3 {
            text-align: center;
            margin: 0;
        }
        .center {
            text-align: center;
        }
        .line {
            border-top: 1px dashed #333;
            margin: 5px 0;
        }
        .row {
            display: flex;
            justify-content: space-between;
        }
        .total {
            font-weight: bold;
        }
        @media print {
            body {
                margin: 0;
                padding: 0;
            }
            form { display: none; }
            .struk {
                border: none;
                box-shadow: none;
                margin: auto;
            }
            .btn-cetak { display: none; }
        }
        .btn-cetak {
            margin-top: 10px;
            width: 100%;
            padding: 8px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }
        .btn-cetak:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<form method="POST">
    <h2 style="text-align:center;">🛒SaSaSy</h2>
    <label>Nama Pembeli</label>
    <input type="text" name="nama_pembeli" required>

    <label>Nama Barang</label>
    <input type="text" name="nama_barang" required>

    <label>Harga Satuan (Rp)</label>
    <input type="number" name="harga" required>

    <label>Jumlah</label>
    <input type="number" name="jumlah" required>

    <button type="submit">Buat Struk</button>
</form>

<?php if (!empty($nama_pembeli)): ?>
<div>
    <div class="struk" id="strukArea">
        <h3>SaSaSy</h3>
        <div class="center"><?= $tanggal; ?></div>
        <div class="line"></div>
        <div>Pembeli : <?= htmlspecialchars($nama_pembeli); ?></div>
        <div class="line"></div>
        <div class="row">
            <span><?= htmlspecialchars($nama_barang) . " x" . $jumlah; ?></span>
            <span>@Rp<?= number_format($harga, 0, ',', '.'); ?></span>
        </div>
        <div class="line"></div>
        <div class="row total">
            <span>Total</span>
            <span>Rp<?= number_format($total, 0, ',', '.'); ?></span>
        </div>
        <div class="line"></div>
        <div class="center">~ Terima Kasih ~</div>
        <div class="center">Sudah Berbelanja</div>
    </div>
    <button class="btn-cetak" onclick="window.print()">🖨 Cetak Struk</button>
</div>
<?php endif; ?>

</body>
</html>
