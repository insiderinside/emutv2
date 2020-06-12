<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard | EMUT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/kiaalap/'); ?>img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/calendar/fullcalendar.print.min.css">
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/editor/select2.css">
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/editor/datetimepicker.css">
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/editor/x-editor-style.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/data-table/bootstrap-editable.css">
    <!-- style CSS
      ============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/modals.css">
    <script src="<?= base_url('assets/kiaalap/'); ?>js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="<?= base_url(); ?>user/dashboard"><img class="main-logo" src="<?= base_url('assets/img/'); ?>head.png" style="width: 180px" height="40px" alt="" /></a>
            <strong><a href="<?= base_url(); ?>user/dashboard"><img src="<?= base_url('assets/kiaalap/'); ?>img/logo/logosn.png" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li>
                        <a class="" href="<?= base_url(); ?>user/dashboard">
                            <span class="educate-icon educate-home icon-wrap"></span>
                            <span class="mini-click-non">Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="<?= base_url(); ?>user/profil" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Profil</span></a>

                    </li>
                    <li>
                        <a class="" href="<?= base_url(); ?>user/siswa" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Daftar Siswa</span></a>

                    </li>
                    <li>
                        <a class="" href="<?= base_url(); ?>user/mutasi" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Riwayat Mutasi</span></a>

                    </li>

                </ul>
            </nav>
        </div>
    </nav>
</div>
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                <a href="<?= base_url(); ?>user/dashboard"><img class="main-logo" src="<?= base_url('assets/img/'); ?>head.png" style="width: 180px" height="40px" alt="" /></a>
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
                                            <li class="nav-item"><a href="<?= base_url(); ?>user/dashboard" class="nav-link">Beranda</a>
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
                                                    <img src="<?= base_url('assets/img/'.$user['foto']); ?>" alt="" />
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
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a href="<?= base_url(); ?>user/dashboard">Beranda</a></li>
                                <li><a href="<?= base_url(); ?>user/profil">Profil</a></li>
                                <li><a href="<?= base_url(); ?>user/siswa">Daftar Siswa</a></li>
                                <li><a href="<?= base_url(); ?>user/mutasi">Riwayat Mutasi</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <br>
    <?php if (!empty($user['verifikasi'])): ?>
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                    <h4>Daftar Mutasi</h4>
                        <div class="add-product">
                            <a href="<?= base_url(); ?>user/mutasi/tambah">Tambah Mutasi</a>
                        </div>
                        <div class="asset-inner">
                            <table id="table" class="table table-hover table-bordered table-hover" 
                                data-toggle="table" 
                                data-height="460" 
                                data-toggle="table" 
                                data-ajax="ajaxRequest"
                                data-pagination="true"
                                data-side-pagination="server" 
                                data-search="true"
                                data-show-export="true"
                                data-key-events="true" 
                                data-cookie="true" 
                                data-cookie-id-table="saveId" 
                                data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="no" data-align="center">No</th>
                                        <th data-field="nama_siswa">Nama Siswa</th>
                                        <th data-field="status" data-align="center">Status</th>
                                        <th data-field="nisn">NISN</th>
                                        <th data-field="asal_sekolah">Asal Sekolah</th>
                                        <th data-field="sekolah_tujuan">Tujuan Sekolah</th>
                                        <th data-field="orangtua">Orang Tua</th>
                                        <th data-field="setting" data-align="center">Setting</th>
                                    </tr>
                                </thead>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="WarningModal" class="modal modal-edu-general Customwidth-popup-WarningModal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
                <div class="modal-body">
                    <span class="educate-icon educate-warning modal-check-pro information-icon-pro"></span>
                    <h2>Warning!</h2>
                    <p>Apakah anda yakin akan menghapus data mutasi ini ?</p>
                </div>
                <div class="modal-footer warning-md">
                    <center>
                    <a data-dismiss="modal" href="#">Cancel</a>
                    <a data-dismiss="modal" id="hapusProses" href="#">Process</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <?php else: ?>
        <div class="admintab-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <div class="alert-title">
                                <h2>Selamat Datang di E-MUT!</h2>
                                <p>Silahkan lengkapi data diri anda!</p>
                            </div>
                            <div class="add-product">
                                <a href="<?= base_url(); ?>user/profil/">Lengkapi Profil</a>
                            </div>
                            <div class="alert alert-info" role="alert">
                                <strong>Info!</strong> Akun anda belum lengkap dan belum terverifikasi. Lengkapi data diri akun anda agar bisa melakukan proses mutasi!. Apabila data diri dan persyaratan sudah dilengkapi silahkan tunggu admin untuk menyelesaikan proses verifikasi pada akun anda!.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tabs End-->
    <?php endif; ?>
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2020. DINAS PENDIDIKAN DAN KEBUDAYAAN KAB.CILACAP</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/sweetalert.min.js"></script>
    <script>
  // your custom ajax request here
    function ajaxRequest(params) {
        var url = '<?= base_url('user/mutasi/data'); ?>'
        $.get(url + '?' + $.param(params.data)).then(function (res) {
        params.success(res)
        })
    }
        var tambah = '<?= $this->session->flashdata('tambah')?>';
        var edit = '<?= $this->session->flashdata('edit')?>';
            if(tambah.length != 0) {
              if(tambah) {
                swal({
                    title: "Sukses!",
                    text: "Data berhasil disimpan!",
                    icon: "success",
                    timer: 3000
                });
              } else {
                swal({
                    title: "Oh No!",
                    text: "Data gagal disimpan!",
                    icon: "error",
                    timer: 3000
                });
              }
            } 

            if(edit.length != 0) {
                if(edit) {
                    swal({
                        title: "Sukses!",
                        text: "Data mutasi berhasil diedit!",
                        icon: "success",
                        timer: 3000
                    });
                } else {
                    swal({
                        title: "Oh No!",
                        text: "Data mutasi gagal diedit!",
                        icon: "error",
                        timer: 3000
                    });
                }
            }

        function HapusData(id) {
            $('#WarningModal').modal('show'); 
            $(document).on('click', '#hapusProses', function(){
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('user/mutasi/hapus/'); ?>" + id,
                    success: function (res) {
                        if(res == 'yes') {
                            swal({
                                title: "Sukses!",
                                text: "Data mutasi berhasil dihapus!",
                                icon: "success",
                                timer: 3000
                            });
                            $('#table').bootstrapTable('refresh')
                        } else {
                            swal({
                                title: "Oh No!",
                                text: "Data mutasi gagal dihapus!",
                                icon: "error",
                                timer: 3000
                            });
                            $('#table').bootstrapTable('refresh')
                        }                              
                    }
                });
            });
        }
    </script>    
    <script src="<?= base_url('assets/kiaalap/'); ?>js/bootstrap.min.js"></script>
    <!-- data table JS
            ============================================ -->
    <script src="<?= base_url('assets/kiaalap/'); ?>js/data-table/bootstrap-table.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/data-table/tableExport.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/data-table/data-table-active.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/data-table/bootstrap-editable.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
        ============================================ -->
    <script src="<?= base_url('assets/kiaalap/'); ?>js/editable/jquery.mockjax.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/editable/mock-active.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/editable/select2.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/editable/moment.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/editable/bootstrap-datetimepicker.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/editable/bootstrap-editable.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/editable/xediable-active.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/wow.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/jquery-price-slider.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/jquery.meanmenu.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/jquery.sticky.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/jquery.scrollUp.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/scrollbar/mCustomScrollbar-active.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/metisMenu/metisMenu.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/metisMenu/metisMenu-active.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/calendar/moment.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/calendar/fullcalendar.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/calendar/fullcalendar-active.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/plugins.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/main.js"></script>
                            
    </body>

</html> 