<h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= base_url('admin/siswa/tambahkelas'); ?>" class="btn btn-primary">
            <h6 class="m-0 font-weight-bold">Tambah Kelas</h6>
        </a>
    </div>
    <div class="card-body col-md-8">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 20%;">Kelas</th>
                        <th>Wali kelas</th>
                        <th style="width: 15%;">Aksi</th>
                    </tr>
                </thead>

                <tbody class="text-center">
                    <?php $i = 1;
                    foreach ($kelas as $k) : ?>
                        <tr>
                            <th style="width: 5%;"><?= $i; ?></th>
                            <th style="width: 20%;"><?= $k['kelas']; ?></th>
                            <th class="text-left"><?= $k['wali_kelas']; ?></th>
                            <th style="width: 25%;">
                                <a href="#" class="badge badge-primary"><i class="fas fa-lg fa-user-edit"></i></a>
                                <a href="#" class="badge badge-danger"><i class="fas fa-lg fa-user-minus"></i></a>
                            </th>
                        </tr>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>