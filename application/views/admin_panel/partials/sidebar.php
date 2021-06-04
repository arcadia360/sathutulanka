<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="#" class="brand-link">
        <div class="user-panel pb-3 d-flex">
            <!-- <div class="image">
						<img src="<?php echo base_url('resources/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="img-circle elevation-2" style="opacity: .8">
					</div> -->
            <div class="info">
                <span class="brand-text font-weight-light d-block">Sathutu Lanka</span>
                <span class="brand-text font-weight-light d-block" style="font-size: 0.8em;"></span>
                <!-- <span class="brand-text font-weight-light d-block" style="font-size: 0.8em;">System</span> -->
            </div>
        </div>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <div class="user-panel pb-3 mb-3 d-flex">
                            <div class="image">
                                <img src="<?php echo base_url('resources/AdminImages/User-Default.png') ?>" class="img-circle elevation-2" alt="User Image">
                            </div>
                            <div class="info">
                                <span href="#" class="d-block">
                                    <!-- <?= $_SESSION['full_name'] ?> -->
                                    <span class="d-block small">
                                        <!-- <?= $_SESSION['group_name'] ?> -->
                                    </span>
                                </span>
                            </div>
                        </div>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('Customer/addCustomer') ?>" class="nav-link">
                                <i class="fas fa-user-edit"></i>
                                <p>&nbsp;&nbsp;Change Account Details</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link <?php if ($this->uri->segment(1) == "dashboard") {
                                                                                echo 'active';
                                                                            } ?>">
                        <i class="fas fa-tachometer-alt"></i>
                        <p>&nbsp;&nbsp;&nbsp;Dashboard</p>
                    </a>
                </li>

                <li class="nav-item has-treeview <?php if ($this->uri->segment(1) == "User" || $this->uri->segment(2) == "UserGroup" || $this->uri->segment(2) == "MeasureUnit" || $this->uri->segment(2) == "MainCategory" || $this->uri->segment(2) == "SubCategory" || $this->uri->segment(2) == "manageSalesRep") {
                                                        echo 'menu-open';
                                                    } ?>">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user"></i>
                        <p>&nbsp;&nbsp;&nbsp;Members
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/memberlist') ?>" class="nav-link <?php if ($this->uri->segment(1) == "User") {
                                                                                                        echo 'active';
                                                                                                    } ?>">
                                <i class="fas fa-user"></i>
                                <p>&nbsp;&nbsp;&nbsp;Members List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/otpreset') ?>" class="nav-link <?php if ($this->uri->segment(1) == "User") {
                                                                                                        echo 'active';
                                                                                                    } ?>">
                                <i class="fas fa-mobile-alt"></i>
                                <p>&nbsp;&nbsp;&nbsp;OTP Reset</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- <li class="nav-item">
                    <a href="<?php echo base_url('Utilities/manageSalesRep') ?>" class="nav-link <?php if ($this->uri->segment(1) == "SalesRep") {
                                                                                                    } ?>">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                        <p>&nbsp;&nbsp;Sales Rep</p>
                    </a>
                </li> -->


                <li class="nav-item">
                    <a href="<?= base_url('auth/logout') ?>" class="nav-link">
                        <i class="fas fa-power-off"></i>
                        <p>&nbsp;&nbsp;&nbsp;Logout</p>
                    </a>
                </li>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>