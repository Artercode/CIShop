<!-- checkout success -->
<main role="main" class="container">
    <?php $this->load->view('layouts/_alert'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Checkout Berhasil
                </div>
                <div class="card-body">
                    <h5>Nomer Order: <?= $content->invoice ?></h5>
                    <p>Terima kasih, sudah berbelanja.</p>
                    <p>Silahkan lakukan pembayaran untuk bisa kami proses selanjutnya dengan cara:</p>
                    <ol>
                        <li>Lakukan pembayaran pada rekening <strong>BCA 3209123123</strong> a/n PT.CIShop</li>
                        <li>Sertakan keterangan dengan nomer order: <strong><?= $content->invoice ?></strong></li>
                        <li>Total pembayaran: <strong>Rp<?= number_format($content->total, 0, ',', '.') ?>,-</strong></li>
                    </ol>
                    <p>Jika sudah, silahkan kirimkan bukti transfer di halaman konformasi atau bisa <a href="#">klik disini</a>!</p>
                    <a href="<?= base_url('/') ?>" class="btn btn-primary"><i class="fas fa-angle-left"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- akhir checkout success -->