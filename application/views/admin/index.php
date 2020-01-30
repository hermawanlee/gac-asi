<div class="content">
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
  <div class="section section-feature cd-section" id="overviews">
    <div class="features-1">
      <div class="container">
        <div class="row">
          <div class="col-md-10 ml-auto mr-auto text-center text-dark">
            <div class="container-fluid btn-primary">
              <h3 class="title card-header" style="font-weight: 600;color:#fff">ADMIN DASHBOARD</h3>
            </div>
            <div style="margin-top: 100px">
              <div class="row">
                <div class="col-md-12">
                  <h4 style="font-weight: 600;margin-bottom: 10px">Member Stat</h4>            
                </div>
                
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header btn-primary" style="font-weight: 600;color:#fff">INVESTOR</div>
                    <div class="card-body">
                      <?php 
                          $today = date('d');
                          $bulan = date('m');
                          $tahun = date('Y');
                          $this->db->where('year(tgl_daftar)',$tahun);
                          $this->db->where('month(tgl_daftar)',$bulan);
                          $this->db->where('status', '1');
                          $investor_cus = $this->db->get('investor');
                      ?>
                      <?= $investor_cus->num_rows(); ?>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header btn-primary" style="font-weight: 600;color:#fff">AMBASSADOR</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header btn-primary" style="font-weight: 600;color:#fff">COACH</div>
                    <div class="card-body">
                    <?php 
                          $today = date('d');
                          $bulan = date('m');
                          $tahun = date('Y');
                          $this->db->where('year(tgl_daftar)',$tahun);
                          $this->db->where('month(tgl_daftar)',$bulan);
                          $this->db->where('status', '3');
                          $t_coach = $this->db->get('investor');
                      ?>
                      <?= $t_coach->num_rows(); ?>
                    </div>
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header btn-primary" style="font-weight: 600;color:#fff">COACH NAT</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header btn-primary" style="font-weight: 600;color:#fff">COACH INT</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>
                </div>

                <!-- FINANCE -->
                <div class="col-md-12">
                  <h4 style="font-weight: 600;margin-bottom: 10px">Finance All Stat</h4>
                </div>          
                
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-success" style="font-weight: 600;color:#fff">Income</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-success" style="font-weight: 600;color:#fff">Pay Bonus</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-success" style="font-weight: 600;color:#fff">Profit</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-success" style="font-weight: 600;color:#fff">Percentage</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <!-- FINANCE -->
                <div class="col-md-12">
                  <h4 style="font-weight: 600;margin-bottom: 10px">Finance Today Stat</h4>
                </div>          
                
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-warning" style="font-weight: 600;color:#fff">Income</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-warning" style="font-weight: 600;color:#fff">Pay Bonus</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-warning" style="font-weight: 600;color:#fff">Profit</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-warning" style="font-weight: 600;color:#fff">Percentage</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <!-- Statistic -->
                <div class="col-md-12">
                  <h4 style="font-weight: 600;margin-bottom: 10px">Statistic</h4>
                </div>          
                
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-danger" style="font-weight: 600;color:#fff">Posting Today</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-danger" style="font-weight: 600;color:#fff">Posting Today</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-danger" style="font-weight: 600;color:#fff">Auto Upgrade</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header btn-danger" style="font-weight: 600;color:#fff">New Coach</div>
                    <div class="card-body">
                    00
                    </div>
                  </div>    
                </div>

                <!-- MENU -->
                <div class="col-md-12">
                  <h4 style="font-weight: 600;margin-bottom: 10px">Menu</h4>
                </div> 

                <div class="col-md-3">
                  <a href="<?= base_url('admin/daftar/')?>">
                    <div class="card">
                      <div class="card-body">
                        <i class=" 	fa fa-plus "style="font-size:36px;color:red"></i>
                        <p style="font-weight: 600;font-size: 12px">ADD INVESTOR</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="<?= base_url('admin/daftarCoach/')?>">
                    <div class="card">
                      <div class="card-body">
                        <i class=" 	fa fa-plus "style="font-size:36px;color:green"></i>
                        <p style="font-weight: 600;font-size: 12px">ADD COACH</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="<?= base_url('admin/daftarInvestor/')?>">
                    <div class="card">
                      <div class="card-body">
                         <i class="fa fa-group"style="font-size:36px;color:blue"></i>
                        <p style="font-weight: 600;font-size: 12px">TOTAL COACH</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="">
                    <div class="card">
                      <div class="card-body">
                        <i class="fa fa-address-card"style="font-size:36px" ></i>
                        <p style="font-weight: 600;font-size: 12px">MEMBER BONUS</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-wallet fa-5x"></i>
                        <p style="font-weight: 600;font-size: 12px">COMPANY PROFIT</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-user-check fa-5x"></i>
                        <p style="font-weight: 600;font-size: 12px">ACTIVE MEMBER</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-business-time fa-5x"></i>
                        <p style="font-weight: 600;font-size: 12px">TOTAL MEMBER BNS</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-code-branch fa-5x"></i>
                        <p style="font-weight: 600;font-size: 12px">CHANGE TREE</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                <a href="<?= base_url('admin/viewInvestor/')?>">
                    <div class="card">
                      <div class="card-body">
                      <i class="fa fa-group"style="font-size:36px;color:blue"></i>
                        <p style="font-weight: 600;font-size: 12px">CHANGE INVESTOR</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-archive fa-5x"></i>
                        <p style="font-weight: 600;font-size: 12px">RECAPT BONUS</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-exchange-alt fa-5x"></i>
                        <p style="font-weight: 600;font-size: 12px">TRANSFER PIN</p>
                      </div>
                    </div>
                  </a>    
                </div>

                <div class="col-md-3">
                  <a href="">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-comments-dollar fa-5x"></i>
                        <p style="font-weight: 600;font-size: 12px">LIFETIME ACHIEVEMENT</p>
                      </div>
                    </div>
                  </a>    
                </div>

                
                <div class="col-md-3">
                  <a href="">
                    <div class="card">
                      <div class="card-body">
                        <i class="fas fa-comments-dollar fa-5x"></i>
                        <p style="font-weight: 600;font-size: 12px">LIFETIME ACHIEVEMENT</p>
                      </div>
                    </div>
                  </a>    
                </div>


              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
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

</html>