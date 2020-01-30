<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
<!-- BODY -->
<div class="section-space"></div>
<?php date_default_timezone_set('asia/jakarta'); ?>
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url(); ?>assets/img/logo-gac.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Gemesin Asia Charts</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

     <!-- Bootstrap core CSS     -->
    <link href="<?= base_url(); ?>assets/css/das/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="<?= base_url(); ?>assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= base_url(); ?>assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?= base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">

    <!-- CSS Files -->
  <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/paper-kit.css?v=2.3.0" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/font-awesome-5/css/fontawesome-all.min.css'" rel="stylesheet" />

    <!-- Ajax Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
</head>

  <!-- Ajax Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body class="sections-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top nav-down">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" data-scroll="true" data-id="#headers" href="<?= base_url(); ?>#headers">
          <img src="<?= base_url(); ?>assets/img/logo-gac.jpg" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" data-nav-image="<?= base_url(); ?>assets/img/blurred-image-1.jpg" data-color="orange">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-scroll="true" data-id="#overviews" href="<?= base_url(); ?>#overviews">
              Overview
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-scroll="true" data-id="#fasilitas" href="<?= base_url(); ?>#fasilitas">
              Fasilitas 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-scroll="true" data-id="#programs" href="<?= base_url(); ?>#programs">
              Program 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-scroll="true" data-id="#traiders" href="<?= base_url(); ?>#traiders">
              Traider 
            </a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #fff;color: grey;border: 0px solid;margin-top: 18px">
                Investor
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Pendaftaran</a>
                <a class="dropdown-item" href="#">Konfirmasi Pembayaran</a>
              </div>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>pretest">
              Log-In
            </a>
          </li> -->
          <li class="nav-item">
            <a class="btn btn-round btn-primary" data-scroll="true" data-id="#contact-us" href="<?= base_url(); ?>#contactus">
              <i class="nc-icon nc-send"></i> DAFTAR
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Ajax Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<div class="content">
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
<div class="section section-feature cd-section" id="overviews">
    <div class="features-1">
      <div class="container">
        <div class="row">
         <div class="col-md-12" style="margin-top:70px">
            <table id="example" class="table table-striped table-bordered" style="width:100%;font-size:12px">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Investor Code</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Direct Refferal</th>
                            <th>Jumlah Refferal Investor</th>
                            <th>Info</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $no=1;
                        foreach ($investor as $i) : ?> 
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $i['id']; ?></td>
                            <td><?= $i['nama']; ?></td>
                            <td><?= $i['phone']; ?></td>
                                <?php $status = $this->db->get_where('status_investor', ['id' => $i['status']])->row_array(); ?>
                            <td><?= $status['nama']; ?> </td>
                            <td><?= $i['grade1']; ?></td>
                            <td><?= $i['jumlah_investor']; ?></td>
                            <td>
                            <div class="dropdown">
                                    <a class="btn btn-sm btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        REFERRAL 
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item btn-rose"  data-toggle="modal" data-target="#batalRsv">Investor : <?= $i['jumlah_investor']; ?></a>
                                        <a class="dropdown-item btn-warning" href="#">Ambasador</a>
                                        <a class="dropdown-item btn-success" href="#">Coach</a>
                                        <a class="dropdown-item btn-info" href="#">National Coach</a>
                                        <a class="dropdown-item btn-gold" href="#">International Coach</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                            <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Investor Code</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Direct Refferal</th>
                            <th>Jumlah Refferal Investor</th>
                            <th>Info</th>
                        </tr>
                    </tfoot>
                </table>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-feature cd-section" id="overviews">
    <div class="features-1">
      <div class="container">
        <div class="row">
         <div class="col-md-12" style="margin-top:70px">
            <table id="example" class="table table-striped table-bordered" style="width:100%;font-size:12px">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Investor Code</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Direct Refferal</th>
                            <th>Jumlah Refferal Investor</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $no=1;
                        foreach ($refferal as $rf) : ?> 
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $rf['id']; ?></td>
                            <td><?= $rf['nama']; ?></td>
                            <td><?= $rf['phone']; ?></td>
                                <?php $status = $this->db->get_where('status_investor', ['id' => $rf['status']])->row_array(); ?>
                            <td><?= $status['nama']; ?> </td>
                            <td><?= $rf['grade1']; ?></td>
                            <td><?= $rf['jumlah_investor']; ?></td>
                        </tr>
                            <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Investor Code</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Direct Refferal</th>
                            <th>Jumlah Refferal Investor</th>
                        </tr>
                    </tfoot>
                </table>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal KPI DEPT-->
<!-- Modal -->
<div class="modal fade" id="batalRsv" tabindex="-1" role="dialog" aria-labelledby="batalAktivitasTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                    <div class="card-header card-header-primary text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="material-icons">clear</i>
                        </button>
                        <h4 class="card-title">ALASAN PEMBATALAN</h4>
                    </div>
                </div>
                <form class="form" method="post" action="<?= base_url('lembur/batal_lembur'); ?>">
                    <div class="modal-body">
                        <input type="text" class="form-control disabled" name="id">
                        <textarea rows="2" class="form-control" name="catatan" id="catatan" placeholder="Keterangan Pembatalan Lembur" required></textarea>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-danger">BATALKAN LEMBUR INI!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="footer footer-black  footer-white ">
    <div class="container">
      <div class="row">
        <nav class="footer-nav">
          <ul>
            <li>
              <a href="#" target="_blank">PT Fida Sinergi Asia</a>
            </li>
          </ul>
        </nav>
        <div class="credits ml-auto">
          <span class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="fa fa-heart heart"></i> by Fida Digitalization Team.
          </span>
        </div>
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="<?= base_url(); ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= base_url(); ?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="<?= base_url(); ?>assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--	Plugin for Datetimepicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Vertical nav - dots -->
  <script src="<?= base_url(); ?>assets/demo//vertical-nav.js" type="text/javascript"></script>
  <!--  Photoswipe files -->
  <script src="<?= base_url(); ?>assets/js/plugins/photo_swipe/photoswipe.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/plugins/photo_swipe/photoswipe-ui-default.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/plugins/photo_swipe/init-gallery.js"></script>
  <!--  for Jasny fileupload -->
  <script src="<?= base_url(); ?>assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url(); ?>assets/js/paper-kit.js?v=2.3.0" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!--  Plugin for presentation page - isometric cards  -->
  <script src="<?= base_url(); ?>assets/js/plugins/presentation-page/main.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- DATATABLES -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<!-- DATATABLES -->


</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
        $('[data-toggle="tooltip"]').tooltip(); 
    } );
</script>
