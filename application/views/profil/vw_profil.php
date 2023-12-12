<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?=$judul?></h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profil/') . $user['gambar']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['nama']?></h5>
                    <p class="card-title"><?= $user['jk']?></p>
                    <p class="card-title"><?= $user['alamat']?></p>
                    <p class="card-title"><?= $user['email']?></p>
                    <!-- <p class="card-title"><small class="text-muted">Anggota Sejak <?= date('d F Y', $user['date_created']); ?></small></p> -->
                </div>
            </div>
        </div>
    </div>
</div>