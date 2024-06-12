
<?php if(isset($_GET['status'])): ?>
    <?php
    if($_GET['status'] == 'sukses' ) {
      echo "<div class='alert alert-success d-flex align-items-center' role='alert' id='message'>
  <svg class='bi flex-shrink-0 me-2' role'img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
  <div>
    An example success alert with an icon
  </div>
</div>
";
    } else {
      echo "Pendaftaran Gagal";
    }
    ?>
<?php endif; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Peserta Pelantikan Bantara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <center>
        <section class="header mt-4 mb-5">
          <p>
        <img src="smk2.png" class="object-fit-contain border rounded" style="width: 25%;">
          </p>
            <h3 class=" fw-bold">PENDAFTARAN PESERTA PELANTIKAN BANTARA</h3>
              <h3 class=" fw-bold"><span style="color: blue">Ambalan Moch. Hatta dan Nyi Ageng Serang</span></h3>
            <p class="fw-semibold"><span style="color: brown">Selamat Datang </span> | Ambalan Mohanas</p>
       <p class="menu">
            <h5 class="mb-4">Silahkan Pilih Menu :</h5> 
              <a href="form-daftar.php"><button type="button" class="btn btn-danger">Pendaftaran</button></a>
            <a href="list-siswa.php"><button type="button" class="btn btn-danger">Calon Peserta</button></a>
          </p>
        </section>

        </center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      const message = document.getElementById('message');
      
    </script>
  </body>
</html> 