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
    <div class="container mt-3">
        <h1>Hello, World!</h1>
        <div class="card">
            <div class="card-body">
            <h4>Nomor 1</h4>
                <form method="post">
                    Input <input type="text" name="angka">
                    <input type="submit" name="simpan" value="simpan">
                </form>
                <?php
                if (isset($_POST['simpan'])) {
                    $input = $_POST['angka'];
                    $aplikasi[1] = 'gtAkademik';
                    $aplikasi[2] = 'gtFinansi';
                    $aplikasi[3] = 'gtPerizinan';
                    $aplikasi[4] = 'eCampuz';
                    $aplikasi[5] = 'eOviz';

                    // $array = implode(",",$aplikasi);
                    // // print_r($array);
                    // $arrayhasil2 = explode(",", $input);
                    // $arrayhasil = explode(",", $$array);
                    // print_r($arrayhasil);

                    $i = 0;
                    while($i <= count($aplikasi)){
                        echo "Aplikasi : $i <br>";
                        $i++;
                    }

                    echo count($aplikasi);

                    print_r($arrayhasil);
                }
                ?>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <h4>Nomor 4</h4>
                <form method="post">
                    Input <input type="text" name="input">
                    <input type="submit" name="save" value="simpan">
                </form>
                <?php
                if (isset($_POST['save'])) {
                    $num = $_POST['input'];

                    for($i = 1; $i <= $num; $i++) {
                        if($i % 3 == 0 && $i % 5 == 0){
                            echo "Angka $i : FooBar <br>";
                        }
                        else if($i % 5 == 0){
                          echo "Angka $i : Bar <br>";
                        }
                        else{
                          echo "Angka $i : Foo <br>";
                        }
                    }
                }
                ?>
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
