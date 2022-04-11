<body>
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
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="<?= base_url() ?>files/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />

                                <!-- Light Logo icon -->
                                <img src="<?= base_url() ?>files/assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="<?= base_url() ?>files/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="<?= base_url() ?>files/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left m-auto">
                        <center>
                            <h2>
                                <script type='text/javascript'>
                                    //<![CDATA[

                                    /*
                                    Teks berganti-ganti warna 
                                    Featured on JavaScript Kit, visit http://www.javascriptkit.com/script/script2/rainbowtext.shtml
                                    */

                                    var text = "SISTEM PAKAR DIAGNOSA PENYAKIT KUCING!"
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

                    </ul>
                </div>
            </nav>
        </header>

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->