<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Web Sekolah">
    <meta name="author" content="Reza Sariful Fikkri">
    <link rel="icon" href="<?= base_url('assets/img/favicon.ico'); ?>">

    <title>SISBW</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/css/sisbw.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/plugin/foundation-icons/foundation-icons.css'); ?>">

    <script src="<?= base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/yall.min.js'); ?>"></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?= getLogo('home'); ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Riwayat <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?= anchor('profile/sejarahSekolah','Sejarah'); ?></li>
                <li><?= anchor('profile/kepalaSekolah','Kepala Sekolah'); ?></li>
                <li><?= anchor('profile/visiMisi','Visi Misi'); ?></li>
                <li><?= anchor('profile/struktur','Struktur'); ?></li>
              </ul>
            </li>
            <li><?= anchor('kejuruan','Kejuruan'); ?></li>
            <li><?= anchor('fasilitas','Fasilitas'); ?></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Guru & Karyawan <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?= anchor('guruStaf/tenagaPendidik','Guru/Tenaga Pendidik'); ?></li>
                <li><?= anchor('guruStaf/stafKaryawan','Staf/Karyawan'); ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galeri <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?= anchor('galeri/foto','Foto'); ?></li>
                <li><?= anchor('galeri/video','Video'); ?></li>
              </ul>
            </li>
            <li><?= anchor('downloadFile','Unduhan'); ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <?= $contents; ?>
    
    <footer class="footer">
      <div class="container">
	        <div class="col-md-3 social">
              <p class="text-muted">Kontak</p>

              <ul>
                <li><span class="fi fi-social-facebook"></span> <?= get_kontak_for_footer()->facebook??''; ?></li>
                <li><span class="fi fi-mail"></span> <?= get_kontak_for_footer()->email??''; ?></li>
                <li><span class="glyphicon glyphicon-phone-alt"></span> <?= get_kontak_for_footer()->no_telp??''; ?></li>
                <li><span class="glyphicon glyphicon-envelope"></span> <?= get_kontak_for_footer()->email??''; ?></li>
              </ul>
	        </div>
	        <div class="col-md-2 col-md-offset-7">
	        	<p class="text-muted right"><?= anchor('home/privacyPolicy','Kebijakan Pribadi') ?></p>
            <p class="text-muted right">&copy; Copyright 2019</p>
	        </div>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript">document.addEventListener("DOMContentLoaded",yall());</script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/sisbw.js'); ?>"></script>
  </body>
</html>
