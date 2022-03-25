<?php include 'koneksi2.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Winnowing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="jquery.min.js" type="text/javascript"></script>
	<script src="awal.js" type="text/javascript"></script>
</head>
<body style="height:1500px">
    <?php include 'includes/navbar.php' ?>
    <div class="container"><br>
        <!-- <h1>Perhitungan Kesamaan Teks dengan Winnowing</h1><br> -->
        <div class="col-md-12">
            <div class="wrapper">
                <div class="row no-gutters">
                    <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                        <div class="contact-wrap w-100 p-md-5 p-4">
                            <h3 class="mb-4 text-center">Halaman Login User</h3>
                            <form method="POST" id="contactForm" name="contactForm" class="contactForm" action="loginuserproses.php">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="label" for="name">Username</label>
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="label" for="subject">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button>
                                            <p class="mb-4">Belum punya akun? <a href="index.php"> Sign Up</a></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                        <div class="info-wrap w-100 p-md-5 p-4"><br><br>
                            <img src="images/login2.png" width="270px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html> 