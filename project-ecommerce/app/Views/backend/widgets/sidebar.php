 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=site_url('pelanggan')?>">
    <div class="sidebar-brand-icon mx-auto d-flex align-items-center justify-content-center ">
    <img src="<?=base_url('assets')?>/BootstrapAdmin/img/wp_logo.svg" alt="wp_logo" height="60" >
    </div>
    <!-- <div class="sidebar-brand-text mx-3">WP<sup>ECO</sup></div> -->
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?=base_url('')?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Referensi
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Referensi Data</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu Referensi</h6>
            <a class="collapse-item" href="<?=site_url('pelanggan')?>">Pelanggan</a>
            <a class="collapse-item" href="<?=site_url('provinsi')?>">Provinsi</a>
            <a class="collapse-item" href="<?=site_url('kabko')?>">Kabupaten / Kota</a>
            <a class="collapse-item" href="<?=site_url('kecamatan')?>">Kecamatan</a>
            <a class="collapse-item" href="<?=site_url('kelurahan')?>">Kelurahan</a>
            <a class="collapse-item" href="<?=site_url('alamatpelanggan')?>">Alamat Pelanggan</a>
            <a class="collapse-item" href="<?=site_url('kategoriproduk')?>">Kategori Produk</a>
            <a class="collapse-item" href="<?=site_url('mitra')?>">Mitra</a>
            <a class="collapse-item" href="<?=site_url('produk')?>">produk</a>
        </div>
    </div>
</li>
 

<!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3"
        aria-expanded="true" aria-controls="collapse3">
        <i class="fas fa-fw fa-folder"></i>
        <span>Arsip Digital</span>
    </a>
    <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu tambahan</h6>
            <a class="collapse-item" href="<?=site_url('')?>">tembahan</a> 
        </div>
    </div>
</li> -->
 
</ul>
<!-- End of Sidebar -->
