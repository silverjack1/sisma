<h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= base_url('admin/siswa/tambahsiswa'); ?>" class="btn btn-primary">
            <h6 class="m-0 font-weight-bold">Tambah siswa</h6>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th style="width: 2%;">No</th>
                        <th style="width: 5%;">NIS</th>
                        <th style="width: 13%;">NISN</th>
                        <th>Nama Siswa</th>
                        <th style="width: 10%;">Tanggal Lahir</th>
                        <th style="width: 10%;">Agama</th>
                        <th style="width: 10%;">Jenis Kelamin</th>
                        <th style="width: 15%;">Aksi</th>
                    </tr>
                </thead>

                <tbody class="text-center">
                    <?php $i = 1;
                    foreach ($siswa as $sis) : ?>
                        <tr>
                            <th style="width: 2%;"><?= $i; ?></th>
                            <th style="width: 5%;"><?= $sis['nis']; ?></th>
                            <th style="width: 13%;"><?= $sis['nisn']; ?></th>
                            <th class="text-left"><?= strtoupper($sis['nama']); ?></th>
                            <th style="width: 14%;"><?= $sis['tanggal_lahir']; ?></th>
                            <th style="width: 10%;"><?= $sis['agama']; ?></th>
                            <th style="width: 8%;"><?= $sis['jenis_kelamin']; ?></th>
                            <th style="width: 13%;">Aksi</th>
                        </tr>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>