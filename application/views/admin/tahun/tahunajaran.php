     <!-- Page Heading -->
     <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <a href="<?= base_url('admin/tahunajar/tambahtahun'); ?>" class="btn btn-primary">
                 <h6 class="m-0 font-weight-bold">Tambah tahun</h6>
             </a>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead class="text-center">
                         <tr>
                             <th style="width: 5%;">No</th>
                             <th>Tahun ajaran</th>
                             <th>Semester</th>
                             <th style="width: 20%;">Bagikan ke orang tua</th>
                             <th style="width: 15%;">Status</th>
                             <th style="width: 15%;">Aksi</th>
                         </tr>
                     </thead>

                     <tbody class="text-center">
                         <?php $i = 1;
                            foreach ($tahunajaran as $tahun) : ?>
                             <tr>
                                 <td><?= $i; ?></td>
                                 <td class="text-left"><?= $tahun['nama']; ?></td>
                                 <td><?= $tahun['semester']; ?></td>
                                 <td><?php if ($tahun['shared'] == 1) {
                                            echo '<span class="badge badge-success">Ya</span>';
                                        } else {
                                            echo '<span class="badge badge-danger">Tidak</span>';
                                        } ?></td>
                                 <td><?php if ($tahun['status'] == 1) {
                                            echo '<span class="badge badge-success">Aktif</span>';
                                        } else {
                                            echo '<span class="badge badge-danger">Tidak aktif</span>';
                                        } ?></td>
                                 <td>
                                     <a href="tahunajar/hapustahun/<?= $tahun['id_tahun']; ?>" onclick="confirmation(event)"><span class="badge badge-danger"><i class="fas fa-trash"></i></span></a>
                                     <a href="tahunajar/ubahtahun/<?= $tahun['id_tahun']; ?>"><span class=" badge badge-success"><i class="fas fa-edit"></i></span></a>
                                 </td>
                             </tr>
                         <?php $i++;
                            endforeach; ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>

     <script>
         function confirmation(ev) {
             ev.preventDefault();
             var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
             console.log(urlToRedirect); // verify if this is the right URL
             swal({
                     title: "Are you sure you want to tag this booking as confirmed",
                     text: "You will not be able to revert this!",
                     icon: "warning",
                     buttons: true,
                     dangerMode: true,
                 })
                 .then((willDelete) => {
                     if (willDelete) {
                         // redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
                         window.location.href = urlToRedirect;
                     } else {
                         swal("You booking hasn't been confirmed.");
                     }
                 });
         }
     </script>