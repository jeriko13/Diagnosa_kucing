<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>files/assets/images/favicon.png">
    <title><?= $title ?></title>
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>files/dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url(<?= base_url() ?>files/assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="col-sm-10 bg-white">
                <div class="p-3">
                    <h2 class="mt-3 text-center">Hasil</h2>
                    <p class="text-center"><i>Hasil Diagnosa Penyakit Kucing Dengan Metode Forward Chaining</i></p>
                    <div class="row">
                        <table border="1" class="table table-bordered">
                            <tr>
                                <td width="30%">Nama Lengkap</td>
                                <td><?= $hasil['nama'] ?></td>
                            </tr>
                            <tr>
                                <td width="30%">Email</td>
                                <td><?= $hasil['email'] ?></td>
                            </tr>
                            <tr>
                                <td width="30%">Kucing</td>
                                <td><?= $hasil['jenis'] . ' ' . $hasil['namakucing']  ?></td>
                            </tr>
                            <tr>
                                <td width="30%">Gejala</td>

                                <td><?php foreach ($gejala as $g) : ?><?= $g['gejala'] ?><br><?php endforeach; ?></td>

                            </tr>
                            <tr>
                                <td width="30%">Penyakit</td>
                                <td><?= $hasil['penyakit'] ?></td>
                            </tr>
                            <tr>
                                <td width="30%">Solusi</td>
                                <td><?= $hasil['solusi'] ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="text-center">
                        <a href="<?= base_url('konsultasi') ?>" class="btn btn-primary">Ok!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?= base_url() ?>files/assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url() ?>files/assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="<?= base_url() ?>files/assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>