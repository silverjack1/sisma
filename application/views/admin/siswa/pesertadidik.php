<h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= base_url('admin/siswa/tambahkelas'); ?>" class="btn btn-primary">
            <h6 class="m-0 font-weight-bold">Tambah Kelas</h6>
        </a>
    </div>
    <div class="card col-md-6 border-0">
        <div class="card-body">
            <form method="POST" action="">
                <input name="tahun" type="text" class="form-control" value="<?= $tahun['nama']; ?>" hidden>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <select class="form-control" id="kelas" name="kelas">
                        <option value="">--Pilih Kelas--</option>
                        <?php foreach ($kelas as $kl) : ?>
                            <option value="<?= $kl['id_kelas']; ?>"><?= $kl['kelas']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" id="but">Lihat</button>
            </form>

        </div>
    </div>
</div>

<?php if ($this->input->post('kelas', true) == null) : ?>

<?php else : ?>
    <div class="card shadow mb-4">
        <div id="pesdik" class="card-body">
            <h2>Data Siswa Kelas 5</h2>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th style="width: 2%;">No</th>
                            <th style="width: 5%;">NIS</th>
                            <th style="width: 13%;">NISN</th>
                            <th>Nama Siswa</th>

                            <th style="width: 15%;">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        <?php $i = 1;
                        foreach ($pesdik as $siswa) : ?>
                            <tr>
                                <th style="width: 2%;"><?= $i; ?></th>
                                <th style="width: 5%;"><?= $siswa['nis']; ?></th>
                                <th style="width: 13%;"><?= $siswa['nisn']; ?></th>
                                <th class="text-left"><?= $siswa['nama']; ?></th>

                                <th style="width: 15%;">Aksi</th>
                            </tr>
                        <?php $i++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php endif; ?>

<script>
    $(document).ready(function() {
        $("#but").click(function() {
            $("#pesdik").toggle(1000);
        });
    });
</script>