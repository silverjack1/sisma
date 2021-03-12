<h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $ubahtahun['id_tahun']; ?>">
                <div class="form-group">
                    <label for="judultahun">Nama Tahun</label>
                    <input type="text" class="form-control" id="judultahun" name="judultahun" value="<?= $ubahtahun['nama']; ?>" aria-describedby="nama tahun">
                    <div class="form-group>
                    <label for=" inputState">Semester</label>
                        <select id="semester" name="semester" class="form-control">
                            <option <?php if ($ubahtahun['semester'] == 'Ganjil') {
                                        echo 'selected';
                                    } ?>>Ganjil</option>
                            <option <?php if ($ubahtahun['semester'] == 'Genap') {
                                        echo 'selected';
                                    } ?>>Genap</option>'


                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputState">Dibagikan kepada orang tua</label>
                        <select id="shared" name="shared" class="form-control">
                            <option <?php if ($ubahtahun['shared'] == 1) {
                                        echo 'selected';
                                    } ?> value="1">Ya</option>
                            <option <?php if ($ubahtahun['shared'] == 0) {
                                        echo 'selected';
                                    } ?> value="0">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=" inputState">Status</label>
                        <select id="status" name="status" class="form-control">
                            <option <?php if ($ubahtahun['status'] == 1) {
                                        echo 'selected';
                                    } ?> value="1">Aktif</option>
                            <option <?php if ($ubahtahun['status'] == 0) {
                                        echo 'selected';
                                    } ?> value="0">Tidak aktif</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
</div>