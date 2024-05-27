<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>admin">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3">Admin Arisan App</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if ($this->uri->segment(1) == "admin") {
                                    echo "active";
                                } ?>">
                <a class="nav-link" href="<?php echo base_url() ?>admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Master
            </div>

            <li class="nav-item <?php if ($this->uri->segment(1) == "listarisan") {
                                    echo "active";
                                } ?><?php if ($this->uri->segment(1) == "tambaharisan") {
                                        echo "active";
                                    } ?> <?php if ($this->uri->segment(1) == "editarisan") {
                                                echo "active";
                                            } ?>">
                <a class="nav-link " href="<?php echo base_url() ?>listarisan">
                    <i class="fas fa-dice"></i>
                    <span>Data Arisan</span></a>


            <li class="nav-item <?php if ($this->uri->segment(1) == "listuser") {
                                    echo "active";
                                } ?>">
                <a class="nav-link " href="<?php echo base_url() ?>listuser">
                    <i class="fas fa-users"></i>
                    <span>User</span></a>
            </li>

            <li class="nav-item <?php if ($this->uri->segment(1) == "listperiode") {
                                    echo "active";
                                } ?>">
                <a class="nav-link " href="<?php echo base_url() ?>listperiode">
                    <i class="fas fa-boxes"></i>
                    <span>Periode</span></a>
            </li>

            <li class="nav-item <?php if ($this->uri->segment(1) == "notifikasi") {
                                    echo "active";
                                } ?>">
                <a class="nav-link " href="<?php echo base_url() ?>kirimnotifikasi">
                    <i class="fas fa-bell"></i>
                    <span>Notifikasi</span></a>
            </li>


            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Profile
            </div>
            <li class="nav-item <?php if ($this->uri->segment(1) == "profile-admin") {
                                    echo "active";
                                } ?> <?php if ($this->uri->segment(2) == "edit") {
                                            echo "active";
                                        } ?> <?php if ($this->uri->segment(1) == "ubahpassword-admin") {
                                                    echo "active";
                                                } ?>">
                <a class="nav-link" href="<?php echo base_url() ?>profile-admin">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profile</span></a>
            </li>



            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout') ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>