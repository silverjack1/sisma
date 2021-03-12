<h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= base_url('admin/siswa/tambahsiswa'); ?>" class="btn btn-primary">
            <h6 class="m-0 font-weight-bold">Tambah Mata Pelajaran</h6>
        </a>
    </div>
    <div class="card-body col-md-6">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th>Mata Pelajaran</th>
                        <th style="width: 20%;">Kelas</th>
                        <th style="width: 20%;">Aksi</th>
                    </tr>
                </thead>

                <tbody class="text-center">
                    <?php $i = 1;
                    foreach ($pelajaran as $ajar) : ?>
                        <tr>
                            <th><?= $i; ?></th>
                            <th><?= $ajar['nama_mapel']; ?></th>
                            <th><?= $ajar['level']; ?></th>
                            <th>Aksi</th>
                        </tr>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>