<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Free HTML5 Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="<?php echo base_url(''); ?>assets/charisma-master/charisma-master/bs-css" href="<?php echo base_url(''); ?>assets/charisma-master/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?php echo base_url(''); ?>assets/charisma-master/css/charisma-app.css" rel="stylesheet">
    <link href="<?php echo base_url(''); ?>assets/charisma-master/bower_components/fullcalendar/dist/fullcalendar.css" rel='stylesheet'>
    <link href="<?php echo base_url(''); ?>assets/charisma-master/bower_components/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media='print'>
    <link href="<?php echo base_url(''); ?>assets/charisma-master/bower_components/chosen/chosen.min.css" rel="stylesheet">
    <link href="<?php echo base_url(''); ?>assets/charisma-master/bower_components/colorbox/example3/colorbox.css" rel="stylesheet">
    <link href="<?php echo base_url(''); ?>assets/charisma-master/bower_components/responsive-tables/responsive-tables.css" rel="stylesheet">
    <link href="<?php echo base_url(''); ?>assets/charisma-master/bower_components/bootstrap-tour/build/css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="<?php echo base_url(''); ?>assets/charisma-master/css/jquery.noty.css" rel="stylesheet">
    <link href="<?php echo base_url(''); ?>assets/charisma-master/css/noty_theme_default.css" rel="stylesheet">
    <link href="<?php echo base_url(''); ?>assets/charisma-master/css/elfinder.min.css" rel="stylesheet">
    <link href="<?php echo base_url(''); ?>assets/charisma-master/css/elfinder.theme.css" rel="stylesheet">
    <link href="<?php echo base_url(''); ?>assets/charisma-master/css/jquery.iphone.toggle.css" rel="stylesheet">
    <link href="<?php echo base_url(''); ?>assets/charisma-master/charisma-master/css/uploadify.css" rel="stylesheet">
    <link href="<?php echo base_url(''); ?>assets/charisma-master/css/animate.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?php echo base_url(''); ?>assets/charisma-master/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="<?php echo base_url(''); ?>assets/charisma-master/shortcut icon" href="<?php echo base_url(''); ?>assets/charisma-master/img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="assets/charisma-master/index.html"> <img src="<?php echo base_url(''); ?>assets/charisma-master/img/logo bsi.png" width="267" height="291" class="hidden-sm"/>
                <span>UBSI</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                  <li><a href="#"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Dropdown <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li>
                    <form class="navbar-search pull-left">
                        <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                               type="text">
                    </form>
                </li>
            </ul>

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        
                        <li><a class="ajax-link">
                            <?php echo form_open('anggota'); ?>
           <?php echo form_submit( 'submit', 'Daftar Anggota' , 'class = "btn btn-primary"'); ?>
           <?php echo form_close(); ?></a><span></span></li>
                        <li><a class="ajax-link"> <?php echo form_open('pinjam'); ?>
                             <?php echo form_submit( 'submit', 'Daftar Pinjam' , 'class = "btn btn-primary"');?>
                              <?php echo form_close(); ?><span></span></a>
                        </li>
                        <li><a class="ajax-link">
                            <?php echo form_open('buku'); ?>
           <?php echo form_submit( 'submit', 'Daftar Buku' , 'class = "btn btn-primary"'); ?>
           <?php echo form_close(); ?></a><span></span></li>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>


<div id="header">
    <div id="nav">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Selamat Datang</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>

                <div id="header pull-right">
    <div id="nav">
        <div class="box-inner pull-right">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Silahkan Masuk</h2>
                <br>
                 </br><?php echo form_open('login/proses'); ?>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="email address" required="required" autofocus="autofocus">
                <label for="email">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <div class="text-center">
           <?php echo form_submit( 'submit', 'Login' , 'class = "btn btn-primary"'); ?>
           <?php echo form_close(); ?>
           <?php echo $this->session->flashdata('messege');?>
            <a class="d-block small mt-3" href="login/register">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
              
                    </div>
                </div>
            </div>
        </div>
    </div>

     
 


            <div class="box-content row">
                <div class="col-lg-7 col-md-12">
                    <h1>PERPUSTAKAAN <br> UNIVERSITAS <br> BINA SARANA INFORMATIKA <br>
                        <small>free, premium quality.</small>
                    </h1>
<img src="<?php echo base_url(''); ?>assets/charisma-master/img/logo bsi.png" width="167" height="191" class="hidden-sm"/>
<style>
.blink {
  animation: blink-animation 1s steps(5, start) infinite;
  -webkit-animation: blink-animation 1s steps(5, start) infinite;
}
@keyframes blink-animation {
  to {
    visibility: hidden;
  }
}
@-webkit-keyframes blink-animation {
  to {
    visibility: hidden;
  }
}
</style>
<span class="blink"><h1>Mari Budayakan Membaca</h1></span>
</div>
</div>
<div class="box-content row">
                <div class="col-lg-7 col-md-12">
            
<h1> <marquee behavior="alternate"> Peran Perpustakaan</marquee></h1>

Perpustakaan merupakan upaya untuk memelihara dan meningkattkan efisiensi dan efektifitas proses belajar-mengajar. Perpustakaan yang terorganisir secara baik dan sisitematis, secara langsung atau pun tidak langsung dapat memberikan kemudahan bagi proses belajar mengajar di sekolah tempat perpustakaan tersebut berada. Hal ini, trekait dengan kemajuan bidang pendidikan dan dengan adanya perbaikan metode belajar-mengajar yang dirasakan tidak bisa dipisahkan dari masalah penyediaan fasilitas dan sarana pendidikan.

<h1><marquee direction="up" scrollamount="2" align="center" behavior="alternate" width="90%"><marquee direction="right" behavior="alternate" behavior="alternate"><blink> Tujuan Perpustakaan</blink></marquee></marquee></h1>

Tujuan perpustakaan adalah untuk membantu masyarakat dalam segala umur dengan memberikan kesempatan dengan dorongan melelui jasa pelayanan perpustakaan agar mereka: </blink>
<li>a. Dapat mendidik dirinya sendiri secara berkesimbungan; </li>
<li>b. Dapat tanggap dalam kemajuan pada berbagai lapangan ilmu pengetahuan, kehidupan sosial dan politik;</li>
<li>c. Dapat memelihara kemerdekaan berfikir yang konstruktif untuk menjadi anggota keluarga dan masyarakat yang lebih baik;</li>
<li>d. Dapat mengembangkan kemampuan berfikir kreatif, membina rohani dan dapat menggunakan kemempuannya untuk dapat menghargai hasil seni dan budaya manusia;</li> 
<li>e. Dapat meningkatkan tarap kehidupan seharihari dan lapangan pekerjaannya;</li> 
<li>f. Dapat menjadi warga negara yang baik dan dapat berpartisipasi secara aktif dalam pembangunan nasional dan dalam membina saling pengertian antar bangsa;</li>
<li>g. Dapat menggunakan waktu senggang dengan baik yang bermanfaat bagi kehidupan pribadi dan sosial.
</li>.
            </div>

                </div>
</div>
</div>
</div>
</div>

 </body>
 <script src="<?php echo base_url(''); ?>assets/charisma-master/js/jquery-2.2.4.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(''); ?>assets/charisma-master/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(''); ?>assets/charisma-master/js/jquery.bootstrap.js" type="text/javascript"></script>

  <!--  Plugin for the Wizard -->
  <script src="<?php echo base_url(''); ?>assets/charisma-master/js/material-bootstrap-wizard.js"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
  <script src="<?php echo base_url(''); ?>assets/charisma-master/js/jquery.validate.min.js"></script>

</html>
