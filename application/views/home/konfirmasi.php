<div class="jumbotron text-center">
    <h2>Konfirmasi Pembelian</h2>
</div>
<div class="container">
    <form action="" method="post">
        <div class="form-group"><?= $message; ?></div>

        <div class="form-group">
            <label for="kode_pesan">Kode Pembelian</label>
            <input type="text" class="form-control" name="kode_pesan" required autofocus>
        </div>
        <div class="form-group">
            <label for="identitas">No. Identitas</label>
            <input type="text" class="form-control" name="identitas" required>
        </div>
        <div class="form-group">
            <label for="bukti">Bukti Pembayaran</label>
            <input type="file" class="form-control" name="bukti" required>
        </div>
        <input type="submit" class="btn btn-success" name="konfirmasi" value="Konfirmasi">
    </form>
</div>
<br>