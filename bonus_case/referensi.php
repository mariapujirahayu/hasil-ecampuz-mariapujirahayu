<?php include 'koneksi.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
      <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>
        <div class="logout">
            <a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
        </div>
        <div class="isiform">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
                        <div class="mb-3 row">
                            <label for="cariinstansi" class="col-sm-2 col-form-label">Instansi</label>
                            <div class="col-sm-10">
                                <?php
                                    $kata_kunci="";
                                    if (isset($_POST['kata_kunci'])) {
                                        $kata_kunci=$_POST['kata_kunci'];
                                    }
                                ?>
                                <input type="text" class="form-control" id="kata_kunci" name="kata_kunci" value="<?php echo $kata_kunci;?>">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="buttonadd">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="instansi" class="form-label">Instansi</label>
                            <input type="text" class="form-control" id="instansi" required  name="instansi" value="hh">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" required  rows="3"></textarea>
                        </div>
                        <div class="buttnsave text-center">
                            <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                    <?php
                        if (isset($_POST['save'])) {
                            $koneksi->query("INSERT INTO referensi(aksi, instansi, deskripsi) VALUES('$_POST[aksi]','$_POST[instansi]','$_POST[deskripsi]')");
                            echo "<div class='alert alert-info'>Data Tersimpan</div>";
                            echo "<meta http-equiv='refresh' content='1;url=referensi.php'>";
                        }
                        ?>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
                </div>
            </div>
            </div>
        </div>
        <div class="isitable">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Instansi</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php $ambil = $koneksi->query("SELECT * FROM referensi ORDER BY id_referensi ASC");
                            
                            // $data_pegawai = $koneksi->query("select * from siswa limit $halaman_awal, $batas");
                                if (isset($_POST['kata_kunci'])) {
                                    $kata_kunci=trim($_POST['kata_kunci']);
                                    $ambil = $koneksi->query("SELECT * FROM referensi WHERE instansi LIKE '%".$kata_kunci."%' OR deskripsi LIKE '%".$kata_kunci."%' ORDER BY id_referensi ASC"); 
                                }else {
                                    $ambil = $koneksi->query("SELECT * FROM referensi ORDER BY id_referensi ASC "); 
                                } 
                            ?>
                            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                            <tr>
                                <th scope="row"><?php echo $nomor; ?></th>
                                <td><?php echo $pecah['instansi']; ?></td>
                                <td><?php echo $pecah['deskripsi']; ?></td>
                                <td>
                                    <a href="ubahreferensi.php?id=<?php echo $pecah["id_referensi"] ?>"><button type="button" class="btn btn-success">Edit</button></a>
                                    <a href="hapusreferensi.php?id=<?php echo $pecah["id_referensi"] ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
