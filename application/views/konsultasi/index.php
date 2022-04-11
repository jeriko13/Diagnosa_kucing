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
            <div class="col-sm-5 bg-white">
                <div class="p-3">
                    <center>
                        <h2>
                            <script type='text/javascript'>
                                //<![CDATA[

                                /*
                                Teks berganti-ganti warna 
                                Featured on JavaScript Kit, visit http://www.javascriptkit.com/script/script2/rainbowtext.shtml
                                */

                                var text = "Selamat Datang!"
                                //Ganti dengan teks anda
                                var speed = 80 //Kecepatan ganti warna

                                if (document.all || document.getElementById) {
                                    document.write('<span id="highlight">' + text + '</span>')
                                    var storetext = document.getElementById ? document.getElementById("highlight") : document.all.highlight
                                } else
                                    document.write(text)
                                var hex = new Array("00", "14", "28", "3C", "50", "64", "78", "8C", "A0", "B4", "C8", "DC", "F0")
                                var r = 1
                                var g = 1
                                var b = 1
                                var seq = 1

                                function changetext() {
                                    rainbow = "#" + hex[r] + hex[g] + hex[b]
                                    storetext.style.color = rainbow
                                }

                                function change() {
                                    if (seq == 6) {
                                        b--
                                        if (b == 0)
                                            seq = 1
                                    }
                                    if (seq == 5) {
                                        r++
                                        if (r == 12)
                                            seq = 6
                                    }
                                    if (seq == 4) {
                                        g--
                                        if (g == 0)
                                            seq = 5
                                    }
                                    if (seq == 3) {
                                        b++
                                        if (b == 12)
                                            seq = 4
                                    }
                                    if (seq == 2) {
                                        r--
                                        if (r == 0)
                                            seq = 3
                                    }
                                    if (seq == 1) {
                                        g++
                                        if (g == 12)
                                            seq = 2
                                    }
                                    changetext()
                                }

                                function starteffect() {
                                    if (document.all || document.getElementById)
                                        flash = setInterval("change()", speed)
                                }
                                starteffect()

                                //]]>
                            </script>
                        </h2>
                    </center>


                    <p class="text-center"><i>Sistem Pakar Diagnosa Penyakit Kucing</i></p>
                    <form class="mt-4" method="POST" action="<?= base_url('konsultasi/add') ?>">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-dark" for="uname">Nama Lengkap</label>
                                    <input class="form-control" id="nama" name="nama" type="text">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-dark" for="pwd">Email</label>
                                    <input class="form-control" id="email" name="email" type="text">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-dark" for="pwd">Jenis Kucing</label>
                                    <select class="form-control" name="jenis">
                                        <option value="">Pilih Kucing</option>
                                        <?php foreach ($jenis as $m) : ?>
                                            <option value="<?= $m['nama'] ?>"><?= $m['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-dark" for="pwd">Nama Kucing</label>
                                    <select class="form-control" name="namakucing">
                                        <option value="">Pilih Kucing</option>
                                        <?php foreach ($namakucing as $s) : ?>
                                            <option value="<?= $s['nama'] ?>"><?= $s['nama'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn btn-block btn-dark">Mulai Konsultasi</button>
                                <hr>
                                Presented by <a href="#" target="_blank" rel="noopener noreferrer">Jeri Riswanto</a>
                            </div>
                        </div>
                    </form>
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