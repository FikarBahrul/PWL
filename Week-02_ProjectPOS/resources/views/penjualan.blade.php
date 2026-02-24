<html>
    <body>
        <h1 align="center">Halaman Penjualan</h1>
        <img src="{{ asset('img/penjualan.png') }}" alt="POS Penjualan Image" style="display: block; margin: 0 auto; width: 50%; height: auto;">
        <form action="/penjualan" method="POST">
            <?php echo csrf_field(); ?>
            <label>Harga Produk :</label>
            <input type="number" name="harga"><br><br>

            <label>Kuantitas :</label>
            <input type="number" name="qty"><br><br>

            <button type="submit">Hitung</button>
        </form>

        <?php if(isset($total)): ?>
        <hr>
        <h2>Hasil Penjualan</h2>
        <p>Harga  : Rp <?php echo $harga; ?></p>
        <p>Jumlah Barang    : <?php echo $qty; ?></p>
        <p>Total  : Rp <?php echo $total; ?></p>
        <?php endif; ?>
        
        <div align="center">
            <a href="/">← Kembali ke Home</a>
        </div>
    </body>
</html>