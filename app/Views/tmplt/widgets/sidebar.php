  <!-- Sidebar -->
  <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion"  id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
    <div class="sidebar-brand-icon ">
    <img src="<?=base_url('assets/img/logomotorcuy.png')?>" width="80" height="80"  alt=""></img>
    </div>
    <div class="sidebar-brand-text mx-3 text-light">Reservasi Bengkel</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?=base_url('dashboard')?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Admin
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-database"></i>
        <span>Bengkel</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data test bengkel:</h6>
            <a class="collapse-item" href="<?=site_url('datauser')?>">Data User</a>
            <a class="collapse-item" href="<?=site_url('datapendaftar')?>">Data Pendaftar</a>
            <a class="collapse-item" href="<?=site_url('registhsv')?>">Regist Homeservice</a>
            <a class="collapse-item" href="<?=site_url('datareservasi')?>">Data Reservasi</a>
            <a class="collapse-item" href="<?=site_url('layanan')?>">Layanan</a>
            <a class="collapse-item" href="<?=site_url('harga')?>">Harga</a>
            <a class="collapse-item" href="<?=site_url('reservhs')?>">Reservasi Homeservice</a>
         
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-chalkboard"></i>
        <span></span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Dikelola Guru:</h6>
            <a class="collapse-item" href="<?=site_url('mapel')?>">Mata Pelajaran</a>
            <a class="collapse-item" href="<?=site_url('pendidikanguru')?>">Pendidikan Guru</a>
            <a class="collapse-item" href="<?=site_url('kelas')?>">Kelas Guru Mengajar</a>
            <a class="collapse-item" href="<?=site_url('penilaian')?>">Penilaian Siswa</a>
            <a class="collapse-item" href="<?=site_url('kehadiransiswa')?>">Jadwal Kehadiran Siswa</a>
     

        </div>
    </div>
</li>
<!-- Divider -->
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
    
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-graduation-cap"></i>
        <span></span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pengelolaan Data Siswa:</h6>
            <a class="collapse-item" href="<?=site_url('pegawai/siswa')?>">Data Siswa</a>
            <a class="collapse-item" href="<?=site_url('pegawai/kelassiswa')?>">Kelas Siswa</a>

            <div class="collapse-divider"></div>
        </div>
    </div>
</li>


<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?=site_url('pegawai/jadwal')?>">
        <i class="fas fa-fw fa-bell"></i>
        <span></span></a>
</li>

<!-- Nav Item - Tables -->


<li class="nav-item">
    <a class="nav-link" href="<?=site_url('pegawai/rincianpenilaian')?>">
        <i class="fas fa-fw fa-table"></i>
        <span></span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>



</ul>
<!-- End of Sidebar -->