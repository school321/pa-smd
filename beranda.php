<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="icon" href="img/logo_pa.png" type="image/x-icon">
    <title>Pengadilan Agama Sumedang</title>
</head>
<body>
    <nav>


    <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            ?>



        <div class="logo">
            <h3>nextar</h3>
        </div>
        <div class="menu">
            <div class="item">
                <a href="#beranda" class="active">Beranda</a>   
                <a href="#profil">Profil</a>    
                <a href="#berita">Berita</a>    
                <a href="#kontak">Kontak</a></div>
            </div>
        </div>
        <div class="akun">
            <h6 id="c">Hallo! <a href="edit.php" id="a"><?php echo $res_Uname ?></a></h6>
            <h6><a href="php/logout.php" id="b">Keluar</a></h6>
        </div>
        <div class="toggle">
            <img src="img/x.png" alt="" id="x">
            <img src="img/y.png" alt="" id="y">
        </div>
    </nav>

    <!-- Beranda -->
    <section class="beranda section" id="beranda">
        <div class="col-a">
            <h1>Pengadilan Agama <br> <span class="b">Sumedang</span></h1>
            <p>	
            Jln. Statistik No. 35, RT. 01 RW. 11 Kel. Situ <br>
            Kec. Sumedang Utara Kab. Sumedang 40232</p>
            <a href="#kontak"><input type="button" value="Kontak Kami" id="btn"></a>
        </div>
        <div class="col-b">
            <img src="img/logo_pa.png" alt="">
        </div>
    </section>

    <!-- Profil -->
    <section class="profil section" id="profil">
        <div class="selengkapnya">
            <div class="img">
                <img src="img/close.png" class="close" alt="">
            </div>
            <div class="teks">
                <p>Penyebaran Agama Islam didaerah Sumedang dimulai sejak Kerajaan Sumedang Larang diperintah oleh Pangeran Kusumadinata atau Pangeran Santri (1530) beliaulah yang telah berjasa menyebarkan Agama Islam di Sumedang dan dari sejak itu Agama Islam telah menjadi Agama diseluruh kekuasaan Kerajaan Sumedang Larang, demikian pula hukum yang berlaku adalah sebagian besar menerapkan Hukum Islam yang dilaksanakan oleh lembaga Pengadilan Kerajaan yang dipimpin oleh seorang Qodi/Penghulu Kerajaan kekuasaannya meliputi Hukum Perdata maupun Hukum Pidana, akan tetapi putusannya harus mendapat persetujuan Penguasa Kerajaan. <br> <br>

                    Setelah Belanda manjajah Indonesia, pihak Belanda mengakui Kesultanan-kesultanan di Wilayah Indonesia sebagian besar memberlakukan Hukum Agama Islam dalam memberlakukan Hukum di Wilayahnya, oleh karena itu dikeluarkanlah Stbl 1882 No. 152 yang berlaku untuk daerah pulau Jawa-Madura, telah diatur existensi Badan Peradilan Agama Islam dengan sebutan Raad Agama yang dipimpin oleh Hakim Belanda dengan dibantu oleh Qodi/Penghulu. <br> <br>

                    Setelah Indonesia memproklamirkan kemerdekaannya pada tanggal 17 Agustus 1945 dan membentuk Undang-undang Dasar 1945 maka berdasarkan pasal II aturan peralihan dari Undang-undang Dasar 1945 menyatakan bahwa segala lembaga yang sudah ada sebelum UUD 1945 masih tetap berlaku sepanjang tidak bertentangan dengan Undang-Undang dasar 1945. Oleh karena itu Lembaga Peradilan Agama masih tetap berlaku, akan tetapi Pengadilan Agama yang dipegang oleh Departemen Van Yustitutie diserahkan kepada Kementrian Agama, sedangkan landasan Peraturan tetap yaitu Stbl. 1882 Nomor 152. jo.Stbl.1937 No.610. <br> <br>

                    Setelah berlakunya Undang-undang No.1 tahun 1974 tentang Perkawinan, maka Peranan Pengadilan Agama telah diberikan tugas dengan memberikan pelayanan hukum dalam bidang perkawinan dan segala akibatnya serta wewenang lain yang ditetapkan Undang-undang kepada penduduk yang beragama Islam seluruh Wilayah Indinesia dan sebagai realisasi sebagai   kedudukan  dan  wewenang Pengadilan Agama dalam melaksanakan Undang-undang Nomor 1 Tahun 1974 maka dikeluarkan Peraturan pelaksanaannya yaitu Peraturan Pemerintah Nomor 9 Tahun 1975 dan petunjuk teknis dikeluarkan Peraturan Menteri Agama Nomor 3 Tahun 1975 dan petunjuk operasional dengan Instruksi Dirjen Bimas Islam Nomor : D/INS/117/1975 <br> <br>

                    Pengadilan Agama Sumedang semenjak Pemerintahan Kabupaten Sumedang berdiri keberadaan Pengadilan Agama sumedang telah berdiri walaupun keberadaan Gedung Pengadilan Agama tersebut berada pada serambi Mesjid Agung Sumedang setelah itu pada tahun 1978 mendapat DIP  dari Departemen Agama RI  dan dibangunlah gedung  di Komplek Masjid Agung Nomor 3 Sumedang yang berdiri diatas tanah wakaf dari BKM Masjid Agung Sumedang seluas 100 m2 yang dibangun melalui Anggaran DIP Departemen Agama tahun 1978/1979 dan pada tahun 1982/1983 telah mendapat perluasan gedung kantor yang dibangun di Jln. Sebelas April No. 56 Sumedang, akan tetapi pemerintah kabupaten Sumedang telah melakukan renovasi dan perluasan sarana Masjid Agung maka Pengadilan Agama dan Departemen Agama yang letaknya disamping masjid Agung terkena untuk perluasan halaman dan harus dibongkar atau dipindahkan sesuai  dengan surat Bupati  Kabupaten  Sumedang tanggal 26 September 2002 Nomor 641.6/2009/Kesra yang terletak di samping sebelah utara  Masjid Agung harus segera dibongkar dan harus segera pindah dari lokasi tersebut.Bahwa  pada tahun 1998/1999 Pengadilan Agama telah mendapat DIP dari Departemen Agama RI  dan telah dibangun Gedung Balai Sidang Pengadilan Agama Sumedang yang berdiri diatas tanah Pemberian dari Pemerintah Kabupaten Sumedang dengan hak guna pakai  seluas 2650 M2 yang terletak di Jalan Statistik No. 35  Lingkungan Pangaduan Heubeul Kelurahan Situ Kecamatan Sumedang Utara Kabupaten Sumedang bertingkat dengan Dana DIP tahun Anggaran 1998/1999 tanggal 31 Maret 1998 Nomor 029/XXV/3/-/1998 dengan Revisi Anggaran 21 Juli 1998 No: S-1463/WA.07/bd.03/1998 dengan biaya sebesar 211.930.000,- yang pembangunannya dilaksanakan oleh CV. IVAN yang beralamat di Jalan Pangeran Geusan Ulun No. 60 Sumedang dengan luas  400 M2 ( bertingkat ) dan pada tahun 2003 dan 2004.</p>
            </div>
        </div>
        <div class="col-a">
            <p><b>|</b> Profil</p>
            <h3>Sejarah <span>Pengadilan</span> <br> <span id="bc">Agama Sumedang</span></h3>
            <p>Penyebaran Agama Islam didaerah Sumedang dimulai sejak Kerajaan Sumedang Larang diperintah oleh Pangeran Kusumadinata atau Pangeran Santri (1530) beliaulah yang telah berjasa menyebarkan Agama Islam di Sumedang dan dari sejak itu Agama Islam telah menjadi Agama diseluruh kekuasaan Kerajaan Sumedang Larang, demikian pula hukum yang berlaku adalah sebagian besar menerapkan Hukum Islam yang dilaksanakan oleh lembaga Pengadilan Kerajaan yang dipimpin oleh seorang Qodi/Penghulu Kerajaan kekuasaannya meliputi Hukum Perdata maupun Hukum Pidana, akan tetapi putusannya harus mendapat persetujuan Penguasa Kerajaan. <br> <br>

                Setelah Belanda manjajah Indonesia, pihak Belanda mengakui Kesultanan-kesultanan di Wilayah Indonesia sebagian besar memberlakukan Hukum Agama Islam dalam memberlakukan Hukum di Wilayahnya, oleh karena itu dikeluarkanlah Stbl 1882 No. 152 yang berlaku untuk daerah pulau Jawa-Madura, telah diatur existensi Badan Peradilan Agama Islam dengan sebutan Raad Agama yang dipimpin oleh Hakim Belanda dengan dibantu oleh Qodi/Penghulu.</p>
                <input type="button" class="more" value="Baca Selengkapnya">
        </div>
        <div class="col-b">
            <img src="img/sejarah.jpg" alt="">
        </div>
    </section>
    <section class="profil-2">
        <div class="col-1">
            <p class="abc"><b>|</b> Visi Kami</p>
            <h1>Terwujudnya Pengadilan <br> 
                Agama Sumedang <br>
                yang Agung</h1>
        </div>
        <div class="col-2">
            <p class="abc"><b>|</b> Misi Kami</p>
            <p><span>1</span> Menjaga Kemandirian Pengadilan Agama Sumedang</p>
            <p><span>2</span> Memberikan Pelayanan Hukum yang Berkeadilan kepada Pencari Keadilan</p>
            <p><span>3</span> Meningkatkan Kualitas Aparatur Pengadilan Agama Sumedang</p>
            <p><span>4</span> Meningkatkan Kredibilitas dan Transparansi Pengadilan Agama Sumedang</p>
        </div>
    </section>

    <!-- Berita -->
    <section class="berita section" id="berita">
        <h1>Berita Terkini</h1>
        <p class="ava">Berikut ini merupakan beberapa berita <br> yang mungkin kalian suka seputar pengadilan agama sumedang</p>
        <div class="berita-content">
            <div class="content">
                <div class="img">
                    <img src="img/bayawak3.jpeg" alt="">
                </div>
                <div class="teks">
                    <span>Berita</span>
                    <a href=""><h3>Lorem ipsum dolor sit amet consectetur adipisicing</h3></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel officia dolorum ratione provident sunt.</p>
                </div>
            </div>
            <div class="content">
                <div class="img">
                    <img src="img/bayawak.jpeg" alt="">
                </div>
                <div class="teks">
                    <span>Berita</span>
                    <a href=""><h3>Lorem ipsum dolor sit amet consectetur adipisicing</h3></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel officia dolorum ratione provident sunt.</p>
                </div>
            </div>
            <div class="content">
                <div class="img">
                    <img src="img/bayawak2 (2).jpeg" alt="">
                </div>
                <div class="teks">
                    <span>Berita</span>
                    <a href=""><h3>Lorem ipsum dolor sit amet consectetur adipisicing</h3></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel officia dolorum ratione provident sunt.</p>
                </div>
            </div>
            
        </div>
        
    </section>

    <!-- Kontak -->
    <section class="kontak section" id="kontak">
        <div class="isi">
            <h1>Informasi Kontak</h1>
            <h5>PENGADILAN AGAMA SUMEDANG</h5>
            <br>
            <h5>Alamat</h5>
            <p> Jln. Statistik No. 35, RT. 01 RW. 11 Kel. Situ <br>
                Kec. Sumedang Utara Kab. Sumedang40232</p>
            <br>
            <h5>Telpon</h5>
            <p>(0261) 201275</p>
            <br>
            <h5>Email</h5>
            <a href="pengadilanagamasumedang@gmail.com"><p>pengadilanagamasumedang@gmail.com</p></a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <h3>Pengadilan Agama Sumedang</h3>
        <p class="p">Jln. Statistik No. 35, RT. 01 RW. 11 Kel. Situ <br>
            Kec. Sumedang Utara Kab. Sumedang40232</p>
        <div class="btm">
            <p>copyright&copy; 2023 | <a href="#beranda">Pengadilan Agama Sumedang</a></p>
        </div>
    </footer>



    <script src="style/script2.js"></script>

</body>
</html>