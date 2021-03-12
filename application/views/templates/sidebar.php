<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SMS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('admin/'); ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?php if ($this->uri->segment(1) == 'admin') {
                            echo 'active';
                        } ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-calendar-check"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('admin/siswa') ?>">Daftar Siswa</a>
                <a class="collapse-item" href="<?= base_url('admin/pelajaran') ?>">Mata Pelajaran</a>
                <a class="collapse-item" href="<?= base_url('admin/kelas') ?>">Kelas</a>
                <a class="collapse-item" href="<?= base_url('admin/tahunajar') ?>">Tahun Ajaran</a>
                <a class="collapse-item" href="<?= base_url('admin/siswa/pesertadidik') ?>">Peserta Didik</a>

            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item ">
        <a class="nav-link" href="<?= base_url('login/logout') ?>" data-toggle="modal" data-target="#logoutModal">
            <i class=" fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->