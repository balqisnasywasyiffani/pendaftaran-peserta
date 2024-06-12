<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content=device-width, initial-scale=1>
        <title>Formulir Pendaftaran Peserta Pelantikan Bantara| Ambalan Mohanas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <style>
        </style>
    <body>
        <div class="container">
        <header class="mt-4">
            <h3 class="fw-bold">Formulir <span style="color:blue">Pendaftaran Peserta Pelantikan Bantara</span></h3>
        </header>

        <form action="proses-pendaftaran.php" method="POST" name="daftar" class="p-3">
            <fieldset>
                <p>
                    <label for="nama" class="form-label">Nama: </label>
                    <input type="text" class="form-control" name="nama" placeholder="nama lengkap" required />
                </p>
                <p>
                    <label for="alamat" class="form-label">Alamat: </label>
                    <textarea name="alamat" class="form-control" required></textarea>
                </p>
                <p>
                    <label for="jenis_kelamin" class="me-2">Jenis Kelamin : </label>
                    <label class="form-check-label"><input type="radio" class="form-check-input" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                    <label class="form-check-label"><input type="radio" class="form-check-input" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                </p>
                <p>
                    <label for="agama" class="form-label">Agama: </label>
                    <select name="agama" class="form-select">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katholik</option>
                        <option>Buddha</option>
                        <option>Hindu</option>
                        <option>Konghucu</option>
                    </select>
                </p>
                <p>
                    <label for="pangkalan" class="form-label">Pangkalan : </label>
                    <input type="text" class="form-control" required name="pangkalan_asal" placeholder="pangkalan_asal" />
                </p>
                <center>
                    <input type="submit" class="btn btn-danger" required value="Daftar" name="daftar" style="width: 50%;" />
                <a href="index.php" class="btn btn-danger">Kembali <i class="bi bi-right"></i></a>
            </fieldset>
        </form>

        </div>
        <script src="" intergrity=""><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </body>
</html>