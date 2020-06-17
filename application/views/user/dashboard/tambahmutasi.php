<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tambah Mutasi | Emut</title>
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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/responsive.css">
    <link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/modals.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
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
    <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Form Tambah Mutasi</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="<?= base_url(); ?>user/mutasi/simpan" method="post" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick add-professors">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="nama_siswa" type="text" class="form-control" placeholder="Nama Lengkap" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="nis" type="number" class="form-control" placeholder="NIS" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="nisn" type="number" class="form-control" placeholder="NISN" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="jenis_kelamin" class="form-control" required>
																		<option value="none" selected="" disabled="">Jenis Kelamin</option>
																		<option value="Laki - Laki">Laki - Laki</option>
																		<option value="Perempuan">Perempuan</option>
																	</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="tempat_lahir" type="text" class="form-control" placeholder="Tempat Lahir" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="tanggal_lahir" id="finish" type="text" class="form-control" placeholder="Tanggal Lahir">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="nama_orangtua" type="text" class="form-control" placeholder="Nama Orang Tua" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="kelas" type="text" class="form-control" placeholder="Kelas" required>
                                                                </div>
                                                                <div class="form-group res-mg-t-15">
                                                                    <textarea name="alasan" placeholder="Alasan" required></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="asal_sekolah" type="text" class="form-control" placeholder="Asal Sekolah" required>
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                
                                                                <div class="form-group res-mg-t-15">
                                                                    <textarea name="alamat_lengkap" placeholder="Alamat Lengkap" required></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="kelurahan" type="text" class="form-control" placeholder="Desa / Kelurahan" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="kecamatan" type="text" class="form-control" placeholder="Kecamatan" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="kabupaten" type="text" class="form-control" placeholder="Kabupaten / Kota" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="pindah_lanjut" type="text" class="form-control" placeholder="Pindah / Lanjut" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="tujuan_sekolah" type="text" class="form-control" placeholder="Tujuan Sekolah" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="kabupaten_tujuan" type="text" class="form-control" placeholder="Kabupaten Tujuan" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="provinsi_tujuan" type="text" class="form-control" placeholder="Provinsi Tujuan" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="file-upload-inner ts-forms">
                                                                        <div class="input prepend-big-btn">
                                                                            <div class="file-button">
                                                                                Browse
                                                                                <input name="berkas[]" type="file" required onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                                            </div>
                                                                            <input name="berkas[]"" type="text" id="prepend-big-btn" placeholder="Upload Surat Mutasi" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="file-upload-inner ts-forms">
                                                                        <div class="input prepend-big-btn">
                                                                            <div class="file-button">
                                                                                Browse
                                                                                <input name="berkas[]" type="file" required onchange="document.getElementById('prepend-big-btnn').value = this.value;">
                                                                            </div>
                                                                            <input name="berkas[]" type="text" id="prepend-big-btnn" placeholder="Upload Surat Dapodik" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="file-upload-inner ts-forms">
                                                                        <div class="input prepend-big-btn">
                                                                            <div class="file-button">
                                                                                Browse
                                                                                <input name="berkas[]" type="file" required onchange="document.getElementById('prepend-big-btnnn').value = this.value;">
                                                                            </div>
                                                                            <input name="berkas[]" type="text" id="prepend-big-btnnn" placeholder="Upload Akte Dan KK" required>
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
                                                                        <p>Apakah anda yakin akan menambahkan data mutasi ini ?</p>
                                                                    </div>
                                                                    <div class="modal-footer warning-md">
                                                                        <center>
                                                                        <button class="btn btn-custon-four btn-primary" data-dismiss="modal" href="#">Cancel</button>
                                                                        <button class="btn btn-custon-four btn-primary" id="TambahMutasi" type="submit">Process</button>
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </form>
                                                        
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="login-horizental cancel-wp pull-right form-bc-ele">
                                                                    <a href="<?= base_url(); ?>user/dashboard" class="btn btn-white">Batal</a>
                                                                    <button class="btn btn-sm btn-primary login-submit-cs" id="OpenModal" type="submit" onclick="OpenWarning()">Simpan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
<script>
function OpenWarning() {
    $('#WarningModal').modal('show'); 
    $(document).ready(function(){
        $("#TambahMutasi").click(function(){
            $('#WarningModal').modal('hide');
        }); 
    });
}
</script>   
<!-- bootstrap JS
		============================================ -->
<script src="<?= base_url('assets/kiaalap/'); ?>js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?= base_url('assets/kiaalap/'); ?>js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?= base_url('assets/kiaalap/'); ?>js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?= base_url('assets/kiaalap/'); ?>js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?= base_url('assets/kiaalap/'); ?>js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?= base_url('assets/kiaalap/'); ?>js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?= base_url('assets/kiaalap/'); ?>js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?= base_url('assets/kiaalap/'); ?>js/metisMenu/metisMenu.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="<?= base_url('assets/kiaalap/'); ?>js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="<?= base_url('assets/kiaalap/'); ?>js/calendar/moment.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/calendar/fullcalendar.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/calendar/fullcalendar-active.js"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="<?= base_url('assets/kiaalap/'); ?>js/jquery.maskedinput.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/masking-active.js"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="<?= base_url('assets/kiaalap/'); ?>js/datepicker/jquery-ui.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="<?= base_url('assets/kiaalap/'); ?>js/form-validation/jquery.form.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/form-validation/jquery.validate.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/form-validation/form-active.js"></script>
    
    <!-- tab JS
		============================================ -->
    <script src="<?= base_url('assets/kiaalap/'); ?>js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?= base_url('assets/kiaalap/'); ?>js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?= base_url('assets/kiaalap/'); ?>js/main.js"></script>
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
    
