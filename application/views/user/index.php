<<div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Beranda</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Informasi</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Panduan Penggunaan</a>
                                                </li>

                                                <li class="nav-item"><a href="#" class="nav-link">Bantuan</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="img/product/pro4.jpg" alt="" />
                                                        <span class="admin-name"><?= $user['nama']; ?></span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                        </li>
                                                        <li><a href="<?= base_url('user/dashboard/logout'); ?>"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Cari..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Beranda</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
            <?php if($this->session->flashdata('tambah')): ?>
                        <?php if($this->session->flashdata('tambah') == TRUE): ?>
                            <div class="alert alert-success">Berhasil menambahkan mutasi baru</div>
                        <?php elseif($this->session->flashdata('tambah') == FALSE): ?>
                            <div class="alert alert-danger">Gagal menambahkan mutasi baru</div>
                        <?php endif; ?>
                    <?php endif; ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Daftar Mutasi</h4>
                        <div class="add-product">
                            <a href="<?= base_url(); ?>user/mutasi/tambah">Tambah Mutasi</a>
                        </div>
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa.</th>
                                    <th>Status</th>
                                    <th>NISN</th>
                                    <th>Asal Sekolah</th>
                                    <th>Tujuan Sekolah</th>
                                    <th>Orang Tua</th>
                                    <th>Setting</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Jamet</td>
                                    <td>
                                        <button class="pd-setting">Disetujui</button>
                                    </td>
                                    <td>14045</td>
                                    <td>SMP N 7 Cilacap</td>
                                    <td>BUDUT</td>
                                    <td>Kuproy</td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </td>
                                </tr>

                            </table>
                        </div>
                        <div class="custom-pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?= base_url('assets/kiaalap/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
		============================================ -->
<script src="<?= base_url('assets/kiaalap/'); ?>js/bootstrap.min.js"></script>