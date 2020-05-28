<link rel="stylesheet" href="<?= base_url('assets/kiaalap/'); ?>css/modals.css">
<div class="all-content-wrapper">
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
                                data-pagination="true" 
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
                                        <th data-field="asal_sekloah">Asal Sekolah</th>
                                        <th data-field="sekolah_tujuan">Tujuan Sekolah</th>
                                        <th data-field="orangtua">Orang Tua</th>
                                        <th data-field="setting" data-align="center">Setting</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if($mutasi->num_rows() > 0): ?>
                                    <?php $index = 1; ?>
                                    <?php foreach($mutasi->result() as $siswa): ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $index++; ?></td>
                                        <td><?php echo $siswa->nama_siswa; ?></td>
                                        <td style="text-align: center;">
                                    <?php if(!empty($siswa->status_jawaban)) {
                                            if($siswa->status_jawaban == "Disetujui") { ?>
                                                <button class="pd-setting">Disetujui</button>
                                            <?php } else if($siswa->status_jawaban == "Ditolak") { ?>
                                                <button class="ds-setting">Ditolak</button>
                                            <?php } ?>
                                        <?php } else {
                                            if($siswa->status == "Diproses" || $siswa->status == NULL ) { ?>
                                                <button class="ps-setting">Diproses</button>
                                            <?php } ?>
                                    <?php } ?>
                                        </td>
                                        <td><?php echo $siswa->nisn; ?></td>
                                        <td><?php echo $siswa->asal_sekolah; ?></td>
                                        <td><?php echo $siswa->tujuan_sekolah; ?></td>
                                        <td><?php echo $siswa->orangtua; ?></td>
                                        <td style="text-align: center;">
                                            <a href="<?php echo base_url('user/mutasi/edit/' . $siswa->id_mutasi); ?>"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            <button data-toggle="tooltip" onclick="HapusData(<?php echo $siswa->id_mutasi; ?>)" title="Trash" class="pd-setting-ed hapusMutasi"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                        </td>
                                    </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                    <tr class="no-records-found">
                                        <td colspan="8" style="text-align: center;">Data tidak tersedia</td>
                                    </tr>
                                <?php endif; ?>
                                </tbody>
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
                                        
    <script src="<?= base_url('assets/kiaalap/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url('assets/kiaalap/'); ?>js/sweetalert.min.js"></script>
    <script>
        var tambah = '<?php echo $this->session->flashdata('tambah')?>';
        var edit = '<?php echo $this->session->flashdata('tambah')?>';
            if(tambah.length != 0) {
              if(tambah) {
                swal({
                    title: "Sukses!",
                    text: "Data mutasi berhasil disimpan!",
                    icon: "success",
                    timer: 3000
                });
              } else {
                swal({
                    title: "Oh No!",
                    text: "Data mutasi gagal disimpan!",
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
                    url: "<?php echo base_url('user/mutasi/hapus/'); ?>" + id,
                    success: function (res) {
                        if(res == 'yes') {
                            swal({
                                title: "Sukses!",
                                text: "Data mutasi berhasil dihapus!",
                                icon: "success",
                                timer: 3000
                            });
                            location.reload();
                        } else {
                            swal({
                                title: "Oh No!",
                                text: "Data mutasi gagal dihapus!",
                                icon: "error",
                                timer: 3000
                            });
                            location.reload();
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
