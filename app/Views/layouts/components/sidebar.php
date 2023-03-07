<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Pengaduan Masyarakat <sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Menu
</div>

<?php
if(session('level')=='admin'){
    ?>

    <li class="nav-item">
        <a class="nav-link" href="/petugas">
            <i class="fas fa-fw fa-light fa-user"></i>
            <span>Petugas</span>
        </a>
    </li>
    <?php
}
?>
<?php
if(session('level')!="masyarakat"){
    ?>
    <li class="nav-item">
        <a class="nav-link" href="/masyarakat">
            <i class="fas fa-fw fa-light-user fa-users"></i>
            <span>Masyarakat</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/tanggapan">
            <i class="fas fa-fw fa-list"></i>
            <span>Tanggapan</span>
        </a>
    </li>

    <?php
}
?>
<?php
//if(session('nik')!=null){
    ?>
    <li class="nav-item">
        <a class="nav-link" href="/pengaduan">
            <i class="fas fa-fw fa-regular fa-comment"></i>
            <span>Pengaduan</span>
        </a>
    </li>

    
    <?php
//}
?>
<?php if(!empty(session()->get('logged_in'))) : ?>
    <li class="nav-item">
        <a href="/logout" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
            <span>Log Out</span> 
        </a>
    </li>
    <?php endif ?>

    
 


<!-- Divider -->
<hr class="sidebar-divider">

</ul>
<!-- End of Sidebar -->
