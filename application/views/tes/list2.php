<!-- start: Content -->
<div class="panel box-shadow-none content-header">
    <div class="panel-body">
        <div class="col-md-12">
            <h3 class="animated fadeInLeft">Tes Diagnosa Penyakit Kucing</h3>
            <p class="animated fadeInDown">
            </p>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="panel">
        <div class="panel-body">
            <div class="col-md-12 text-center article-v1-title">
                <h2>Silahkan</h2>
            </div>
            <div class="col-md-12  article-v1-body">


                <form method="POST" name="input2">
                    <?php
                    $pilihan = $this->input->post('pilihan');
                    switch ($pilihan) {
                            /* JIKA PILIHAN PERTAMA (1) ADALAH Tidak */
                        case 21:
                    ?>
                            <h2>Apakah Kucing Tidak Mau Makan?</h2>
                            <input type="radio" name="pilihan" value="33">Ya <br>
                            <input type="radio" name="pilihan" value="651">Tidak<br>

                        <?php
                            break;
                            /* Pilihan jika 21=a 33=a 33=a 45=a 65=ab */
                            /* soal 33 */
                        case 33:
                        ?>
                            <h2>Apakah Bulu Kucing Rontok?</h2>
                            <input type="radio" name="pilihan" value="34">Ya <br>
                            <input type="radio" name="pilihan" value="45">Tidak<br>

                        <?php
                            break;
                            /* soal 34 */
                        case 34:
                        ?>
                            <h2> Apakah Kucing Menderita Keropeng? </h2>
                            <input type="radio" name="pilihan" value="45">Ya <br>
                            <input type="radio" name="pilihan" value="46"> Tidak<br>
                        <?php
                            break;

                            /* soal 45 */
                        case 45:
                        ?>
                            <h2>Apakah Kucing Mengalami Penebalan Kulit Telinga, Kaki, dan Hidung?</h2>
                            <input type="radio" name="pilihan" value="46">Ya <br>
                            <input type="radio" name="pilihan" value="55">Tidak<br>

                        <?php
                            break;
                            /* soal 46 */
                        case 46:
                        ?>
                            <h2>Apakah Kucing Mengalami Luka?</h2>
                            <input type="radio" name="pilihan" value="47">Ya <br>
                            <input type="radio" name="pilihan" value="47">Tidak<br>

                        <?php
                            break;

                            /* soal 47 */
                        case 47:
                        ?>
                            <h2>Apakah Kucing Sering Garuk- Garuk?</h2>
                            <input type="radio" name="pilihan" value="75">Ya <br>
                            <input type="radio" name="pilihan" value="48">Tidak<br>

                        <?php
                            break;


                            /* soal 48 */
                        case 48:
                        ?>
                            <h2>Apakah Kucing Mengalami Ruam Kulit Melingkar?</h2>
                            <input type="radio" name="pilihan" value="54">Ya <br>
                            <input type="radio" name="pilihan" value="55"> Tidak<br>
                        <?php
                            break;

                            /* soal 54 */
                        case 54:
                        ?>
                            <h2>Apakah Bulu Terlihat Kusam?</h2>
                            <input type="radio" name="pilihan" value="76">Ya <br>
                            <input type="radio" name="pilihan" value="66">Tidak<br>

                        <?php
                            break;

                            /* soal 55 */
                        case 55:
                        ?>
                            <h2>Apakah Kucing Mengeluarkan Leleran Cairan Dari Telinga?</h2>
                            <input type="radio" name="pilihan" value="56">Ya <br>
                            <input type="radio" name="pilihan" value="56">Tidak<br>

                        <?php
                            break;

                            /* soal 56 */
                        case 56:
                        ?>
                            <h2>Apakah Kucing Terlihat Lemah/Lesu?</h2>
                            <input type="radio" name="pilihan" value="57">Ya <br>
                            <input type="radio" name="pilihan" value="681">Tidak<br>

                        <?php
                            break;
                            /* soal 57 */
                        case 57:
                        ?>
                            <h2>Apakah Kucing Muntah?</h2>
                            <input type="radio" name="pilihan" value="65">Ya <br>
                            <input type="radio" name="pilihan" value="703">Tidak<br>

                        <?php
                            break;
                            /* soal 65 */
                        case 65:
                        ?>
                            <h2>Apakah Kucing Sering Menggoyangkan Kepala?</h2>
                            <input type="radio" name="pilihan" value="66">Ya <br>
                            <input type="radio" name="pilihan" value="53">Tidak<br>

                        <?php
                            break;
                            /* soal 66 */
                        case 66:
                        ?>
                            <h2> Apakah Kucing Mengeluarkan Kotoran Telinga Berwarna Cokelat tua?</h2>
                            <input type="radio" name="pilihan" value="751">Ya <br>
                            <input type="radio" name="pilihan" value="761">Tidak<br>

                        <?php
                            break;
                            /* soal 661 */
                        case 661:
                        ?>
                            <h2>Apakah Telinga Kucing Berbau?</h2>
                            <input type="radio" name="pilihan" value="751">Ya <br>
                            <input type="radio" name="pilihan" value="762"> Tidak<br>
                        <?php
                            break;
                            /* soal 651 */
                        case 651:
                        ?>
                            <h2>Apakah Kotoran Lembek?</h2>
                            <input type="radio" name="pilihan" value="67">Ya <br>
                            <input type="radio" name="pilihan" value="76"> Tidak<br>
                        <?php
                            break;

                            /* soal 67 */
                        case 67:
                        ?>
                            <h2>Apakah Kotoran Bercampur Lendir?</h2>
                            <input type="radio" name="pilihan" value="671">Ya <br>
                            <input type="radio" name="pilihan" value="681">Tidak<br>
                        <?php
                            break;
                            /* soal 671 */
                        case 671:
                        ?>
                            <h2>Apakah Kotoran Berbau?</h2>
                            <input type="radio" name="pilihan" value="761">Ya <br>
                            <input type="radio" name="pilihan" value="781">Tidak<br>

                        <?php
                            break;
                            /* soal 681 */
                        case 681:
                        ?>
                            <h2>Apakah Kotoran Bercampur Darah?</h2>
                            <input type="radio" name="pilihan" value="68">Ya <br>
                            <input type="radio" name="pilihan" value="781">Tidak<br>

                        <?php
                            break;
                            /* soal 68 */
                        case 68:
                        ?>
                            <h2>Apakah Terdapat Cacing Ada Di Kotoran?</h2>
                            <input type="radio" name="pilihan" value="70">Ya <br>
                            <input type="radio" name="pilihan" value="6">Tidak<br>

                        <?php
                            break;

                            /* soal 70 */
                        case 70:
                        ?>
                            <h2>Apakah Gusi Terlihat Tidak Sehat?</h2>
                            <input type="radio" name="pilihan" value="762">Ya <br>
                            <input type="radio" name="pilihan" value="6">Tidak<br>

                        <?php
                            break;
                            /* soal 703 */
                        case 703:
                        ?>
                            <h2>Apakah Bulu Patah?</h2>
                            <input type="radio" name="pilihan" value="69">Ya <br>
                            <input type="radio" name="pilihan" value="69">Tidak<br>

                        <?php
                            break;

                            /* soal 69 */
                        case 69:
                        ?>
                            <h2>Apakah Terlihat Parasit Di Sekitar Punggung?</h2>
                            <input type="radio" name="pilihan" value="693">Ya <br>
                            <input type="radio" name="pilihan" value="762">Tidak<br>

                        <?php
                            break;
                            /* soal 693 */
                        case 693:
                        ?>
                            <h2>Apakah Kucing Gelisah?</h2>
                            <input type="radio" name="pilihan" value="32">Ya <br>
                            <input type="radio" name="pilihan" value="804">Tidak<br>

                        <?php
                            break;

                            /* jawaban case 75 */
                        case 75:
                        ?>
                            <h2>Kucing cenderung menderita penyakit Scabies</h2>
                            <h2>
                                <p align=center>
                                    <font color=000fff>Kriteria penyakit Scabies</font>
                                </p>
                                1. Hindarkan kucing dengan hewan lain untuk mencegah penularan<br>
                                2. gunakan sampo khusus antitungau<br>
                                3. Jaga kebersihan dengan membersihkan juga seluruh barang yang kerap bersentuhan dengan kucing, seperti tempat tidur, kalung, mainan, dan mangkok makanannya<br>
                                4. Segera konsultasikan dengan dokter
                            </h2>

                            <input type="submit" name="pilihan" value="default" class="btn btn-3d btn-info">


                        <?php
                            exit();
                            /* jawaban case 76 */
                        case 76:
                        ?>
                            <h2>Kucing cenderung menderita penyakit Jamur (Dermatophytosis)</h2>
                            <h2>
                                <p align=center>
                                    <font color=000fff>Kriteria penyakit Jamur (Dermatophytosis)</font>
                                </p>
                                1. Jaga kebersihan kandang, dan lingkungannya.<br>
                                2. Gunakan sampo anti jamur untuk kucing.<br> 
                                3. Gunakan krim atau salep anti jamur. Agar semakin optimal bisa digunakan bersama obat anti jamur yang bisa diberikan secara oral oleh kucing.<br> 
                                4. Segera hubungi dokter untuk pengunaan krim/salep dan obat oral.
                            </h2>
                            <input type="submit" class="btn btn-info" name="pilihan" value="default">

                        <?php
                            exit();
                            /* jawaban case 751 */
                        case 751:
                        ?>
                            <h2>Kucing cenderung menderita penyakit Tungau Telinga(Ear Mite)</h2>
                            <h2>
                                <p align=center>
                                    <font color=000fff>Kriteria penyakit Tungau Telinga(Ear Mite)</font>
                                </p>
                                1. Isolasi kucing anda dengan hewan lain agar tidak terjadi penularan.<br>
                                2. Bersihkan tumpukan kotoran dengan membilas telinga dengan sangat lembut.<br>
                                3. Gunakan kapas yang ditetesi dengan baby oil untuk membersihkan telinga dan sisa-sisa kotoran.<br> 
                                4. Gunakan obat pembersih telinga khusus kucing, yang kemudian diteteskan ke dalam lubang telinga kucing.<br> 
                                5. Segera hubungi dokter untuk saran obat yang tepat.
                            </h2>
                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();



                            /* jawaban case 761 */
                        case 761:
                        ?>
                            <h2>Kucing cenderung menderita penyakit Colibacillosis</h2>
                            <h2>
                                <p align=center>
                                    <font color=000fff>Kriteria penyakit Colibacillosis</font>
                                </p>
                                1. Berikan antibiotik seperti diantaranya tetracycline, neomycin dan streptomycin.<br> 
                                2. Selain pemberian antibiotik atau sulfonamide, obat-obatan penunjang lainnya.<br> 
                                3. Berikan juga infus dengan NaCl ﬁsiologis.<br>
                                4. Segera hubungi dokter terdekat.
                            </h2>
                            <input type="submit" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban case 762 */
                        case 762:
                        ?>
                            <h2>Kucing cenderung menderita penyakit Cacingan</h2>
                            <H2>
                                <p align=center>
                                    <font color=000fff>Kriteria penyakit Cacingan</font>
                                </p>
                                1. Hentikan kucing dari berburu dan memakan hewan kecil yang menjadi penyebab cacingan.<br> 
                                2. Jaga kebersihan dengan membersihkan kotak kotoran, karpet dan tempat tidur kucing untuk mencegah terulangnya infeksi.<br> 
                                3. Kotoran kucing harus dibuang secepatnya.<br>
                                4. Berikan obat cacing untuk kucing seperti: Combantrin (pfizer), Vermox, Drontal Cat (bayer), Drontal Plus (bayer).<br>
                                5. Segera konsultasikan dengan dokter.
                            </h2>

                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();


                            /* jawaban case 79 */
                        case 79:
                        ?>
                            <h2>Kucing cenderung menderita penyakit Kutu Bulu</h2>
                            <h2>
                                <p align=center>
                                    <font color=000fff>Kriteria penyakit Kutu Bulu</font>
                                </p>
                                1. Gunakan sisir serit kucing<br>
                                2. Mandikan dengan sampo kutu<br>
                                3. Buat semprotan kutu dari bahan-bahan alami seperti lavender dan teh chamomile.<br> 
                                4. Berikan obat tetes anti kutu: Fipronil, Imidakloprid, Selamctin, Fluralaner.<br> 
                                5. Berikan obat minum antikutu, Berikan obat kutu suntik.<br> 
                                6. Konsultasikan dengan dokter untuk obat yang tepat.
                            </h2>
                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban case 78 */
                        case 78:
                        ?>
                            <h2>Kucing cenderung menderita penyakit Chlamydiosis /Chlamydia</h2>
                            <h2>
                                <p align=center>
                                    <font color=000fff>Kriteria penyakit Chlamydiosis /Chlamydia</font>
                                </p>
                                1. Menjaga kebersihan kandang dan tempat kucing beraktifitas.<br> 
                                2. Lakukan vaksinasi untuk mengurangi keparahan ketika terjadi infeksi Chlamidya.<br>  
                                3. Pemilik juga perlu mencuci tangan setelah membersihkan kotoran mata dan lendir dari kucing yang terinfeksi untuk mencegah penularan ke kucing lainnya.<br> 
                                4. Segera konsultasikan dengan dokter.
                            </h2>
                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban case 78 */
                        case 781:
                        ?>
                            <h2>Kucing cenderung menderita penyakit Urolithiasis</h2>
                            <H2>
                                <p align=center>
                                    <font color=000fff>Kriteria penyakit Urolithiasis</font>
                                </p>
                                1. Terapi yang diberikan adalah terapi cairan<br>
                                2. Terapi injeksi antibiotik oksitetrasiklin (SC)<br>
                                3. Injeksi asam tolfenamat (SC)<br>
                                4. Injeksi diuretik furosemid (IV)<br>
                                5. Penambahan obat herbal kejibeling per oral<br> 
                                6. Pembilasan kantung kemih menggunakan bantuan kateter.<br>
                                7. Segera konsultasikan dengan dokter.
                            </h2>
                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban case 77 */
                        case 77:
                        ?>
                            <h2>Kucing cenderung menderita penyakit Feline Calicivirus</h2>
                            <h2>
                                <p align=center>
                                    <font color=000fff>Kriteria penyakit Feline Calicivirus</font>
                                </p>
                                1. Menjaga cairan tubuh dengan terapo cairan(infus)<br>
                                2. Lakukan humidity airways dengan menggunakan nebulizer<br> 
                                3. Dapat diberikan antibiotic spectrum luas (doxyxyxline, chloramphenicol)<br>
                                4. Segera konsultasikan dengan dokter.
                            </h2>
                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban case 771 */
                        case 771:
                        ?>
                            <h2>Kucing cenderung menderita penyakit Feline Panleukopenia</h2>
                            <H2>
                                <p align=center>
                                    <font color=000fff>Kriteria penyakit Feline Panleukopenia</font>
                                </p>
                                1. Isolasi ketat dari kucing lain diperlukan untuk mencegah penyebaran virus.<br>
                                2. Perawatan berfokus untuk mencegah dehidrasi<br>
                                3. Pemberian nutrisi dan pencegahan infeksi sekunder<br>
                                4. Meskipun tidak membunuh virus, berikan antibiotik.<br>
                                5. Segera konsultasikan dengan dokter.
                            </h2>
                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban case 782 */
                        case 782:
                        ?>
                            <h2>Kucing cenderung menderita penyakit Radang tenggorokan ( feline viral Rhinotracheitis)</h2>
                            <H2>
                                <p align=center>
                                    <font color=000fff>Kriteria penyakit Radang tenggorokan ( feline viral Rhinotracheitis)</font>
                                </p>
                                1. Berikan Makanan Bernutrisi dan Air Minum yang Cukup<br>
                                2. Bersihkan Mata, Tubuh, dan Hidung Kucing<br>
                                3. Hindari Memandikan Kucing<br>
                                4. Biarkan Kucing Mendapatkan Cukup Istirahat Terakhir Jemur Kucing secara berkala.<br>
                                5. Segera konsultasikan dengan dokter.
                            </h2>
                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban case 80 */
                        case 80:
                        ?>
                            <h2>Kucing cenderung menderita penyakit Scabies</h2>
                            <h2>
                                <p align=center>
                                    <font color=000fff>Kriteria Golongan Darah A</font>
                                </p>
                                1. Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
                                2. Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
                                3. Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
                                4. Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis
                            </h2>
                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban case 791 */
                        case 791:
                        ?>
                            <h2>Kucing cenderung menderita penyakit Scabies</h2>
                            <h2>
                                <p align=center>
                                    <font color=000fff>Kriteria Golongan Darah A</font>
                                </p>
                                1. Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
                                2. Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
                                3. Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
                                4. Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis
                            </h2>
                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban case 801 */
                        case 801:
                        ?>
                            <h2>Anda cenderung memiliki tipe golongan darah AB</h2>
                            <H2>
                                <p align=center>
                                    <font color=000fff>Kriteria Golongan Darah AB</font>
                                </p>
                                1. Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
                                2. Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
                                3. Karakter orang ini mudah berubah-ubah tergantung mood.<br>
                                4. Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.
                            </h2>
                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban case 752 */
                        case 752:
                        ?>
                            <h2>Anda cenderung memiliki tipe golongan darah AB</h2>
                            <H2>
                                <p align=center>
                                    <font color=000fff>Kriteria Golongan Darah AB</font>
                                </p>
                                1. Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
                                2. Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
                                3. Karakter orang ini mudah berubah-ubah tergantung mood.<br>
                                4. Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.
                            </h2>
                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban case 753 */
                        case 753:
                        ?>
                            <h2>Anda cenderung memiliki tipe golongan darah AB</h2>
                            <H2>
                                <p align=center>
                                    <font color=000fff>Kriteria Golongan Darah AB</font>
                                </p>
                                1. Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
                                2. Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
                                3. Karakter orang ini mudah berubah-ubah tergantung mood.<br>
                                4. Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.
                            </h2>
                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban case 794 */
                        case 794:
                        ?>
                            <h2>Kucing cenderung menderita penyakit Scabies</h2>
                            <h2>
                                <p align=center>
                                    <font color=000fff>Kriteria Golongan Darah A</font>
                                </p>
                                1. Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
                                2. Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
                                3. Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
                                4. Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis
                            </h2>
                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban case 804 */
                        case 804:
                        ?>
                            <h2>Anda cenderung memiliki tipe golongan darah AB</h2>
                            <H2>
                                <p align=center>
                                    <font color=000fff>Kriteria Golongan Darah AB</font>
                                </p>
                                1. Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
                                2. Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
                                3. Karakter orang ini mudah berubah-ubah tergantung mood.<br>
                                4. Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.
                            </h2>
                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban case 805 */
                        case 805:
                        ?>
                            <h2>Anda cenderung memiliki tipe golongan darah AB</h2>
                            <H2>
                                <p align=center>
                                    <font color=000fff>Kriteria Golongan Darah AB</font>
                                </p>
                                1. Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
                                2. Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
                                3. Karakter orang ini mudah berubah-ubah tergantung mood.<br>
                                4. Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.
                            </h2>
                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban case 795 */
                        case 795:
                        ?>
                            <h2>Anda cenderung memiliki tipe golongan darah A</h2>
                            <h2>
                                <p align=center>
                                    <font color=000fff>Kriteria Golongan Darah A</font>
                                </p>
                                1. Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
                                2. Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
                                3. Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
                                4. Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis
                            </h2>

                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban case 795 */
                        case 7:
                        ?>
                            <h2>Anda cenderung memiliki tipe golongan darah A</h2>
                            <h2>
                                <p align=center>
                                    <font color=000fff>Kriteria Golongan Darah A</font>
                                </p>
                                1. Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
                                2. Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
                                3. Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
                                4. Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis
                            </h2>
                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban case 795 */
                        case 8:
                        ?>
                            <h2>Anda cenderung memiliki tipe golongan darah A</h2>
                            <h2>
                                <p align=center>
                                    <font color=000fff>Kriteria Golongan Darah A</font>
                                </p>
                                1. Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
                                2. Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
                                3. Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
                                4. Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis
                            </h2>
                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();








                            /* JIKA PILIHAN PERTAMA (1) ADALAH YA */
                            /* soal 22 */
                        case 22:
                        ?>
                            <h2>Apakah Kucing Tidak Mau Makan?</h2>
                            <input type="radio" name="pilihan" value="31">Ya <br>
                            <input type="radio" name="pilihan" value="31">Tidak<br>
                        <?php
                            break;
                            /* Soal 32 */
                        case 32:
                        ?>
                            <h2>Apakah Kucing Menderita Anemia?</h2>
                            <input type="radio" name="pilihan" value="79">Ya <br>
                            <input type="radio" name="pilihan" value="44">Tidak<br>
                        <?php
                            break;
                            /* Soal 31 */
                        case 31:
                        ?>
                            <h2>Apakah Kucing Sering Bersin?</h2>
                            <input type="radio" name="pilihan" value="43">Ya <br>
                            <input type="radio" name="pilihan" value="44">Tidak<br>
                        <?php
                            break;
                            /* Soal 43 */
                        case 43:
                        ?>
                            <h2>Apakah Kotoran Kucing Banyak?</h2>
                            <input type="radio" name="pilihan" value="44">Ya <br>
                            <input type="radio" name="pilihan" value="511">Tidak<br>
                        <?php
                            break;
                            /* Soal 44 */
                        case 44:
                        ?>
                            <h2>Apakah Kucing Flu?</h2>
                            <input type="radio" name="pilihan" value="42">Ya <br>
                            <input type="radio" name="pilihan" value="56">Tidak<br>
                        <?php
                            break;
                            /* Soal 42 */
                        case 42:
                        ?>
                            <h2>Apakah Kucing Batuk?</h2>
                            <input type="radio" name="pilihan" value="41">Ya <br>
                            <input type="radio" name="pilihan" value="621">Tidak<br>
                        <?php
                            break;
                            /* Soal 41 */
                        case 41:
                        ?>
                            <h2>Apakah Kucing Kesulitan Bernafas?</h2>
                            <input type="radio" name="pilihan" value="51">Ya <br>
                            <input type="radio" name="pilihan" value="621">Tidak<br>
                        <?php
                            break;
                            /* Soal 51 */
                        case 51:
                        ?>
                            <h2>Apakah Hidung Berwarna Merah?</h2>
                            <input type="radio" name="pilihan" value="511">Ya <br>
                            <input type="radio" name="pilihan" value="62">Tidak<br>
                        <?php
                            break;
                            /* Soal 511 */
                        case 511:
                        ?>
                            <h2> Apakah Mata Bengkak/Merah/Berair?</h2>
                            <input type="radio" name="pilihan" value="52">Ya <br>
                            <input type="radio" name="pilihan" value="622">Tidak<br>
                        <?php
                            break;
                            /* Soal 52 */
                        case 52:
                        ?>
                            <h2>Apakah Kucing Menderita Radang Paru-Paru?</h2>
                            <input type="radio" name="pilihan" value="78">Ya <br>
                            <input type="radio" name="pilihan" value="642">Tidak<br>
                        <?php
                            break;

                            /* Soal 53 */
                        case 53:
                        ?>
                            <h2>Apakah Kucing Bolak-Balik ke Litter Cat ?</h2>
                            <input type="radio" name="pilihan" value="61">Ya <br>
                            <input type="radio" name="pilihan" value="621">Tidak<br>
                        <?php
                            break;


                            /* Soal 61 */
                        case 61:
                        ?>
                            <h2>Apakah Urin Bercampur Darah?</h2>
                            <input type="radio" name="pilihan" value="62">Ya <br>
                            <input type="radio" name="pilihan" value="71">Tidak<br>
                        <?php
                            break;
                            /* Soal 62 */
                        case 62:
                        ?>
                            <h2>Apakah Kucing Terlihat Kesakitan?</h2>
                            <input type="radio" name="pilihan" value="611">Ya <br>
                            <input type="radio" name="pilihan" value="71">Tidak<br>
                        <?php
                            break;
                            /* Soal 611 */
                        case 611:
                        ?>
                            <h2>Apakah Kucing Susah Kencing?</h2>
                            <input type="radio" name="pilihan" value="781">Ya <br>
                            <input type="radio" name="pilihan" value="71">Tidak<br>
                        <?php
                            break;
                            /* Soal 621 */
                        case 621:
                        ?>
                            <h2>Apakah Kucing Demam?</h2>
                            <input type="radio" name="pilihan" value="612">Ya <br>
                            <input type="radio" name="pilihan" value="64">Tidak<br>
                        <?php
                            break;

                            /* Soal 612 */
                        case 612:
                        ?>
                            <h2>Apakah Kotoran Mata Menumpuk?</h2>
                            <input type="radio" name="pilihan" value="622">Ya <br>
                            <input type="radio" name="pilihan" value="64">Tidak<br>
                        <?php
                            break;
                            /* Soal 622 */
                        case 622:
                        ?>
                            <h2>Apakah Kucing Sesak Nafas?</h2>
                            <input type="radio" name="pilihan" value="63">Ya <br>
                            <input type="radio" name="pilihan" value="72">Tidak<br>
                        <?php
                            break;
                            /* Soal 63 */
                        case 63:
                        ?>
                            <h2>Apakah Kucing Sariawan?</h2>
                            <input type="radio" name="pilihan" value="77">Ya <br>
                            <input type="radio" name="pilihan" value="72">Tidak<br>
                        <?php
                            break;
                            /* Soal 631 */
                        case 631:
                        ?>
                            <h2>Apakah Kucing Menderita Selesma?</h2>
                            <input type="radio" name="pilihan" value="632">Ya <br>
                            <input type="radio" name="pilihan" value="72">Tidak<br>
                        <?php
                            break;
                            /* Soal 632 */
                        case 632:
                        ?>
                            <h2>Apakah Kucing Mengalami Hipersalivasi?</h2>
                            <input type="radio" name="pilihan" value="641">Ya <br>
                            <input type="radio" name="pilihan" value="6">Tidak<br>
                        <?php
                            break;
                            /* Soal 641 */
                        case 641:
                        ?>
                            <h2>Apakah Kucing Menderita Sinus?</h2>
                            <input type="radio" name="pilihan" value="642">Ya <br>
                            <input type="radio" name="pilihan" value="6">Tidak<br>
                        <?php
                            break;
                            /* Soal 642 */
                        case 642:
                        ?>
                            <h2>Apakah Terjadi Kerusakan Selaput Lendir Mata?</h2>
                            <input type="radio" name="pilihan" value="782">Ya <br>
                            <input type="radio" name="pilihan" value="72">Tidak<br>
                        <?php
                            break;
                            /* Soal 64 */
                        case 64:
                        ?>
                            <h2>Apakah Kucing Mengalami Diare?</h2>
                            <input type="radio" name="pilihan" value="771">Ya <br>
                            <input type="radio" name="pilihan" value="631">Tidak<br>
                        <?php
                            break;





                            /* jawaban 72 */

                        case 72:
                        ?>
                            <h2>Anda cenderung memiliki tipe golongan darah B</h2></br>
                            <h2>
                                <p align=center>
                                    <font color=red>Kriteria Golongan Darah B</font>
                                </p>
                                1. Mereka memiliki empati, mudah memahami pemikiran orang lain.<br>
                                2. Mereka adalah spesialis di bidang yang digelutinya.<br>
                                3. Jika mengerjakan sesuatu, mereka selalu fokus kepada apa yang tengah dikerjakan.<br>
                                4. Tidak peduli dengan keadaan sekitar, mengharapkan banyak kebebasan<br>
                                5. Memiliki gejolak emosi yang besar, temperamental.
                            </h2>


                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban 71 */

                        case 71:
                        ?>
                            <h2>Anda cenderung memiliki tipe golongan darah B</h2>
                            <h2>
                                <p align=center>
                                    <font color=red>Kriteria Golongan Darah B</font>
                                </p>
                                1. Mereka memiliki empati, mudah memahami pemikiran orang lain.<br>
                                2. Mereka adalah spesialis di bidang yang digelutinya.<br>
                                3. Jika mengerjakan sesuatu, mereka selalu fokus kepada apa yang tengah dikerjakan.<br>
                                4. Tidak peduli dengan keadaan sekitar, mengharapkan banyak kebebasan<br>
                                5. Memiliki gejolak emosi yang besar, temperamental.
                            </h2>

                            <input type="submit" class="btn btn-info" name="pilihan" value="default">
                        <?php
                            exit();
                            /* jawaban 6 */

                        case 6:
                        ?>
                            <h2>Anda cenderung memiliki tipe golongan darah O</h2>

                            <H2>
                                <p align=center>
                                    <font color=000fff>Kriteria Golongan Darah O</font>
                                </p>
                                1.Memiliki jiwa Pemimpin, berani<Br>
                                2.Memiliki karakter yang terbuka, energik dan sosial<Br>
                                3.Orang tipe ini suka menjadi pusat perhatian. Mengatakan apa yang ada dalam pikirannya secara jujur.<br>
                                4.Emosinya bersifat stabil, sederhana sehingga apa yang telah terjadi tidak pernah meninggalkan efek yang lama.
                            </H2>
                            <input type="submit" name="pilihan" value="default">
                        <?php
                            exit();









                        default:
                        ?>
                            <h2>Apakah Kucing Tidak Mau Makan?</h2>
                            <input type="radio" name="pilihan" value="22">Ya <br>
                            <input type="radio" name="pilihan" value="21">Tidak<br>
                    <?php
                            break;
                    }
                    ?>




                    <input type="submit" name="next" value="next" class="btn btn-3d btn-info">
                </form>



            </div>

        </div>
    </div>
</div>

<!-- end: content -->