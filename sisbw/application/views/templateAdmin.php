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
          <a class="openSidebar navbar-brand"><span></span></a>
          <?= getLogo('adminHome'); ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?= base_url('adminUser'); ?>"><span class="glyphicon glyphicon-user"></span> <?= $this->session->userdata('SISBW')['nama']; ?></a></li>
            <li><a href="<?= base_url('auth/logout') ?>"><span class="glyphicon glyphicon-log-out"></span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <ul class="sidebar">
      <?php $level = $this->session->userdata('SISBW')['level']; ?>

        <li class="active"><a href="<?= base_url('adminHome'); ?>"><span class="fi fi-results fi-lg"></span> Informasi</a></li>

        <?php if($level === 'admin' || $level === 'superAdmin') : ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fi fi-home fi-lg"></span> Riwayat <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?= anchor('adminProfile/sejarah','Sejarah'); ?></li>
            <li><?= anchor('adminProfile/kepalaSekolah','Kepala Sekolah'); ?></li>
            <li><?= anchor('adminProfile/visiMisi','Visi Misi'); ?></li>
            <li><?= anchor('adminProfile/struktur','Struktur'); ?></li>
          </ul>
        </li>
        <li><?= anchor('adminJurusan','Jurusan'); ?></li>
        <li><?= anchor('adminFasilitas','Fasilitas'); ?></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Guru dan Staf <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?= anchor('adminGuruStaf/guru','Guru'); ?></li>
            <li><?= anchor('adminGuruStaf/staf','Staf'); ?></li>
          </ul>
        </li>
        <?php endif; ?>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galeri <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?= anchor('adminGaleri/foto','Foto'); ?></li>
            <li><?= anchor('adminGaleri/video','Video'); ?></li>
          </ul>
        </li>
        <li><a href="<?= base_url('adminDownloadFile'); ?>"><span class="fi fi-download fi-lg"></span> File</a></li>

        <?php if($level === 'admin' || $level === 'superAdmin') : ?>
        <li><a href="<?= base_url('adminKontak'); ?>"><span class="fi fi-telephone fi-lg"></span> Kontak</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fi fi-widget fi-lg"></span> Pengaturan <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?= anchor('adminSettings/logoSekolah','Logo Sekolah'); ?></li>
            <li><?= anchor('adminSettings/openingWord','Opening Word'); ?></li>
          </ul>
        </li>
        <?php endif; ?>
    </ul>

    <div class="container" id="hiddenContainerForOpeningWordPage">
      <div class="content">
        <?= $contents; ?>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript">document.addEventListener("DOMContentLoaded",yall());</script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/plugin/ckeditor/ckeditor.js'); ?>"></script>
    <script src="<?= base_url('assets/js/sisbw.js'); ?>"></script>
  </body>
</html>
