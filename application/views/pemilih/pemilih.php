<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
  <title>Hello, world!</title>
</head>

<body>
  
  <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand ml-5">Aplikasi Pemilihan Kandidat</a>


      <a href=" <?= base_url('login/logout'); ?> " class="btn btn-danger mr-5">logout</a>


    </nav>

  <div class="container mt-5">
  <div class="alert alert-primary" role="alert">
 <h2><b>Admin</b></h2>
 <hr>
  <p>Selamat Datang Di Aplikasi Pemilihan Ketua Dan Wakil Ketua Osis SMKN 1 Bondowoso</p>
</div>
<p>Pengguna</p>
<div class="card">
  <div class="card-header">
  <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">Tabel Pengguna</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
   
  </div>
  <div class="card-body">
  <a href=" <?= base_url('pemilih/tambah'); ?> " class="btn btn-primary mr-5">tambah</a>
  <br>
  <br>
  <table class="table table-striped">
  <thead>
    <tr>
    <th scope="row">no</th>
      <th>username</th>
      <th>nama</th>
      <th>password</th>
      <th>nisn</th>
      <th>alamat</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1;
    foreach ($pemilih as $dpemilih):
    ?>
   
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?php echo $dpemilih['username'] ?></td>
      <td><?php echo $dpemilih['nama'] ?></td>
      <td><?php echo $dpemilih['password'] ?></td>
      <td><?php echo $dpemilih['nisn'] ?></td>
      <td><?php echo $dpemilih['nama'] ?></td>
    
    </tr>
    
  </tbody>
  <?php endforeach; ?>
</table>
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