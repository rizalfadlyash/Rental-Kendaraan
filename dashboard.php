<div class="container-fluid">
    <div class="row text-center">
        <?php foreach ($kendaraan as $knd) : ?>
            <div class="card mr-3" style="width: 16rem;">
                <img src="<?php echo base_url() . '/uploads/' . $knd->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $knd->nama_knd ?></h5>
                    <small><?php echo $knd->keterangan ?></small> <br>
                    <span class="badge badge-pill badge-success mb-3">Rp. <?php echo $knd->harga ?></span>
                    <br>
                    <a href="#" class="btn btn-sm btn-success">Pesan Sekarang</a>
                    <a href="#" class="btn btn-sm btn-primary">Detil</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
