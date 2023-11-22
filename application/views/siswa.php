<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <title>Hello, world!</title>
</head>

<body>
  <div class="container mt-3">
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand ml-4">Aplikasi Pemilihan</a>
    <a href=" <?= base_url('login/logout'); ?> " class="btn btn-danger ">logout</a>
  </nav>
  <br>
  <div class="alert alert-dark" role="alert">
    
  <h5>USER</h5>
  <hr>
  <h6>Selamat Datang Di Aplikasi Pemilihan Ketua Osis Tahun 2024</h6>
</div>
<p>KANDIDAT</p>
<div class="container">
  <?php foreach ($kandidat as $dkandidat):  ?>
<div class="card-deck">

  <div class="card">
    <img src="<?= base_url('assets/img/')?><?= $dkandidat['image']; ?>" class="card-img-top" alt="width=40">
    <div class="card-body">
      <h5 class="card-title"><?= $dkandidat['nama_ketos'] ?></h5>
      <h5 class="card-title"><?= $dkandidat['nama_waketos'] ?></h5>
     
    </div>
    <button type="button" class="btn btn-primary btn-sm">Small button</button>
    <a href="<?= base_url('hasil/pilih/'); ?><?= $dkandidat['id_kandidat']; ?>" class="btn btn-primary">Pilih Kandidat ini</a>
  </div>

 
</div>
<?php endforeach;?>
</div>

</div>
  </div>
  



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>