<?php

function tb_bb_imt($tinggi_badan,$berat_badan)

{

	$tinggi_badan = $tinggi_badan/100;

	$tinggi_badan = $tinggi_badan * $tinggi_badan;

	$IMT = $berat_badan / $tinggi_badan;

	$IMT = round($IMT,2);

	return $IMT;

}

function status_gizi_imt($IMT)

{

	$result = '';

	if($IMT < 17){$result = 'Kekurangan berat badan tingkat berat (sangat kurus) - Keadaan anda tersebut disebut SANGAT KURUS dengan kekurangan berat badan tingkat berat atau Kurang Energi Kronis (KEK) berat.';}

	if(17 <= $IMT && $IMT <= 18.4){$result = 'Kekurangan berat badan tingkat ringan (kurus) - Keadaan anda tersebut disebut KURUS dengan kekurangan berat badan tingkat ringan atau Kurang Energi Kronis (KEK) ringan.';}

	if(18.5 <= $IMT && $IMT < 25.0){$result = 'Normal (berat badan sehat) - Anda termasuk kategori berat badan Normal.';}

	if(25.1 <= $IMT && $IMT < 27.0 ){$result = '<p> Kelebihan berat badan tingkat ringan (gemuk) </p><p>- Keadaan anda tersebut disebut GEMUK dengan kelebihan berat badan tingkat ringan.</p>';}

	if($IMT > 27.1){$result = '<p>Kelebihan berat badan tingkat berat (Sangat gemuk)</p><p>Keadaan anda tersebut disebut SANGAT GEMUK dengan kelebihan berat badan tingkat berat. </p><p>Penyebab:</p><p>Kelebihan berat badan 

    terjadi bila makanan yang dikonsumsi mengandung energi melebihi kebutuhan tubuh. Kelebihan energi tersebut akan disimpan tubuh sebagai cadangan dalam bentuk lemak sehingga mengakibatkan seseorang menjadi lebih gemuk.

</p><p>Kerugian


1.	Penampilan kurang menarik

2.	Gerakan tidak gesit dan lambat

3.	Merupakan faktor resiko penyakit:

•	Jantung dan pembuluh darah

•	Kencing manis (diabetes mellitus)

•	Tekanan darah tinggi

•	Gangguan sendi dan tulang

•	Gangguan ginjal

•	Gangguan kandungan empedu

•	Kanker

•	Pada wanita dapat mengakibatkan gangguan haid (haid tidak teratur, perdarahan yang tidak teratur), factor penyulit pada persalinan.



Cara Menurunkan Berat Badan Yang Dianjurkan



1.	Diet

•	Makan teratur (2 atau 3 kali sehari) dengan gizi seimbang.

•	Kurangi jumlah makanan terutama sumber energi

•	Kurangi makanan yang berminyak, berlemak atau bersantan karena memberikan energi yang tinggi.

•	Kurangi konsumsi gula dan makanan yang manis, karena makanan tersebut juga menghasilkan energi yang tinggi.

•	Makan banyak sayuran dan buah-buahan karena makan tersebut banyak mengandung serat.

•	Hindari minuman beralkohol karena merupakan sumber kalori dan berpotensi menimbulkan gangguan kesehatan.



2.	Olah raga dan kegiatan fisik

•	Olahraga secara teratur selama ½ - 1 jam minimal 3 kali seminggu.

•	Pilihlah olah raga yang sesuai dengan usia dan kondisi kesehatan.

•	Tingkatkan kegiatan fisik sesuai yang dilakukan sehari-hari.



Cara Menurunkan Berat Badan Yang Tidak Dianjurkan



•	Mengurangi jumlah konsumsi makanan sehari –hari secara drastis sehingga mengakibatkan pusing, lemas, keringat dingin atau gejala lainnya yang membahayakan kesehatan.

•	Menurunkan berat badan secara cepat, lebih dari 2 kg perbulan.

•	Mengandalkan makanan formula saja untuk menurunkan berat badan.

•	Menggunakan obat-obatan atau bahan penurun berat badan tanpa pengawasan tenaga medis. Beberapa obat dan bahan tersebut hanya menurunkan berat badan sementara dengan mengeluarkan cairan tubuh.

</p>';}	

	return $result;

}

?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>PromKeTaPang - Promosi Kebutuhan Kita Akan Pangan</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	<!-- CSS FILES -->

	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">

	<link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-87808455-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-87808455-1');
    </script>

</head>
<body>
	<!--Start Header-->
    <header id="header" class="clearfix">
    <div id="top-bar">
        <div class="container">
            <div class="row">
                <div class="top-info hidden-xs col-sm-7 ">
                    <span><i class="fa fa-phone"></i>Telepon: (0262) 280-1757</span>
                    <span><i class="fa fa-envelope"></i>Email: dkpgarut@promketapang.id</span>
                </div>
                <div class="top-info col-sm-5">
                    <ul class="clearfix">
                        <li><a href="" class="my-tweet"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="" class="my-facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="" class="my-skype"><i class="fa fa-skype"></i></a></li>
                        <li><a href="" class="my-pint"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="" class="my-rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="" class="my-google"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar -->
    <div id="nav-bar" class="clearfix">
        <div class="container">
            <div class="row">
                <!-- Logo / Mobile Menu -->
                <div class="col-sm-2">
                                            <div id="logo">
                        <h1><a href="index.html"><img src="img/logo.png" alt="DKP Kab. Garut - PomKeTaPang" /></a></h1>
                    </div>
                </div>

                <!-- Navigation
                ================================================== -->
                <div class="col-sm-10">
                    <nav id="navigation" class="menu">
                        <ul id="">
                            <li><a href="index.html">Beranda</a>
                            <li><a href="#">Profil</a>
                                <ul>
                                    <li><a href="visi_misi.html">Visi & Misi</a></li>
                                    <li><a href="tujuan_sasaran.html">Tujuan & Sasaran</a></li>
                                    <li><a href="strategi_kebijakan.html">Strategi & Kebijakan</a></li>
                                    <li><a href="struktur.html">Struktur Organisasi</a></li>
                                    <li><a href="#">Tupoksi</a>
                                        <ul>
                                            <li><a href="tup_kadis.html">Kepala Dinas</a></li>
                                            <li><a href="tup_sekretariat.html">Sekretariat</a>
                                                <ul>
                                                    <li><a href="tup_subbagumumkep.html">Subbagian Umum dan Kepegawaian</a></li>
                                                    <li><a href="tup_subbagkeubmd.html">Subbagian Keuangan dan Barang Milik Daerah</a></li>
                                                    <li><a href="tup_subbagpep.html">Subbagian Perencanaan, Evaluasi dan Pelaporan.</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="tup_bidang_kkp.html">Bidang Ketersediaan & Kerawanan Pangan</a></li>
                                            <li><a href="tup_bidang_dcp.html">Bidang Distribusi dan Cadangan Pangan</a></li>
                                             <li><a href="tup_bidang_kpp.html">Bidang Konsumsi dan Penganekaragaman Pangan</a></li>             
                                             <li><a href="tup_bidang_kp.html">Bidang Keamanan Pangan</a></li>
                                             <li><a href="tup_upt.html">Unit Pelaksana Teknis</a></li>         
                                             <li><a href="tup_kjf.html">Kelompok Jabatan Fungsional</a></li>
										</ul>    
                                    </li>                                
                                </ul>
                            </li>

                            <li><a href="#">Program</a>
                                <ul>
                                    <li><a href="#">Peningkatan Ketahanan Pangan </a>
                                    	<ul>
                                        	<li><a href="#">PROMOSI PENGANEKARAGAMAN KONSUMSI PANGAN</a>
                                            	<ul>
                                                	<li><a href="keg_bimtek.html">BIMBINGANTEKNIS KONSUMSI PANGAN BERAGAM BERGIZI
SEIMBANG DAN AMAN (BSA)</a></li>
													<li><a href="keg_lcm.html">LOMBA CIPTA MENU</a></li>
                                                    <li><a href="keg_hps.html">KEGIATAN HARI PANGAN SEDUNIA (HPS)</a></li>
                                                    <li><a href="keg_pameran.html">PAMERAN PANGAN</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">PENGEMBANGAN CADANGAN PANGAN DAERAH</a></li>
                                        	<li><a href="#">PEMANTAUAN &amp; ANALISA HARGA PANGAN POKOK STRAEGIS</a></li>
                                            <li><a href="#">PENGEMBANGAN USAHA PANGAN MASYARAKAT</a></li>
                                            <li><a href="#">PENINGKATAN MUTU DAN KEAMANAN PANGAN</a></li>
                                            <li><a href="#">PEMANTAUAN &amp; PENGAWASAN MUTU &amp; KEAMANAN PANGAN</a></li>
                                            <li><a href="#">PENINGKATAN KERJASAMA INFORMASI KEAMANAN PANGAN</a></li>
                                            <li><a href="#">PENGEMBANGAN DESA MANDIRI PANGAN</a></li>
                                            <li><a href="#">PENGEMBANGAN LUMBUNG PANGAN MASYARAKAT</a></li>
                                            <li><a href="#">PENGEMBANGAN SUMBER DAYA PANGAN</a></li>
                                            <li><a href="#">PENGEMBANGAN DESA MANDIRI PANGAN</a></li>
                                            <li><a href="#">BANK PANGAN</a></li>
                                            <li><a href="#">PEMANFAATAN LAHAN PEKARANGAN</a></li>
                                            <li><a href="#">PENGEMBANGAN PANGAN LOKAL</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="#" id="current" class="border">Aplikasi KeTaPang</a>
                                <ul>
                                             <li><a href="hitung_keb_pangan.html">Hitung Kebutuhan Pangan</a></li>
                                             <li><a href="status_gizi.html">Hitung Status Gizi</a></li>
                                             <li><a href="bpp.html">Bahan Pangan Penukar</a></li> 
                                             <li><a href="contoh_menu.html">Contoh Menu Sehat</a></li>
                                </ul>
                            </li>
                            <li><a href="tentang_pengembang.html">Pengembang</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Nav Bar -->
    </header>
	<!--End Header-->

    

    <!-- start IMT -->

	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->

	<script>

	$(document).ready(function(){

	  $(".BMI").submit(function (e){

		if ($("#tinggi_badan").val() == ""){

		  $("#tinggi_badan").css('box-shadow', '0px 0px 2px red');

		  alert('Please input your height');

		  e.preventDefault(); 

		}

		if ($("#berat_badan").val() == ""){

		  $("#berat_badan").css('box-shadow', '0px 0px 2px red');

		  alert('Please input you weight');

		  e.preventDefault(); 

		}

	  });

	});

	</script>

    

	<!-- Start Conten Service -->

    

    <section class="content service">

            <div class="container">

					<div class="col-md-12 col-lg-12 col-sm-12 ">

                        <div class="dividerHeading">

                            <h4><span> HITUNG STATUS GIZI BERDASARKAN IMT </span></h4>

                            <div class="gDot">&nbsp;</div>

                        </div>

     

     

    

    <!-- end Conten Service -->

    

    

    <p align="center"><span style="font-size:18px">Isi form dibawah ini dengan Tinggi Badan dan Berat Badan</span></p>

	<div align="center" style="padding-center:25%;">

    <div class="gDot">&nbsp;</div>

    <table  border="1"><tr><td>

	<form method="post" class="BMI">

		<table>
			<tr>
				<td>&nbsp;</td><td><label for="tinggi_badan"> Tinggi Badan (cm) &nbsp; &nbsp;</label></td><td>&nbsp;</td>
				<td>&nbsp;</td><td><input type="text" name="tinggi_badan" id="tinggi_badan" value=""></td><td>&nbsp;</td>
			</tr>

			<tr>
				<td>&nbsp;</td><td><label for="berat_badan"> Berat Badan (kg) &nbsp; &nbsp;</label></td><td>&nbsp;</td>
				<td>&nbsp;</td><td><input type="text" name="berat_badan" id="berat_badan" value=""></td><td>&nbsp;</td>	
			</tr>

			<tr>
				<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
				<td>&nbsp;</td>><td align="right"><input type="submit" value="Hitung"></td><td>&nbsp;</td>
			</tr>

		</table>

	</form>

    </td>

    </tr>

    </table>

    <div class="gDot">&nbsp;</div>

	</div>

	<?php

		if (isset($_POST['tinggi_badan'])){

			$tinggi_badan = $_POST['tinggi_badan'];

			$berat_badan = $_POST['berat_badan'];

			$IMT = tb_bb_imt($tinggi_badan,$berat_badan);

			$status_imt = status_gizi_imt($IMT);

		//	echo "<div align='left' style='padding-left:25%; padding-bottom:30px; font-size:20px;'>";

			echo "<div align='left' style='padding-left:25%; padding-bottom:10px; font-size:14px;'>

                    Index Massa Tubuh (IMT) anda adalah : ";

             echo "<div align='left' style='padding-left:5%; font-size:20px; padding-bottom:5px;';><strong>".$IMT;

            echo "</br>";

			echo "</strong></div>";

            echo "</div>";

            echo "<div align='left' style='padding-left:25%; padding-bottom:10px; font-size:14px;'>

                    Kondisi tubuh anda termasuk kategori :  ";

            echo "<div align='left' style='padding-left:5%; font-size:16px; padding-bottom:5px;';>".$status_imt;

            echo "</div>";

		}

	?>

	

	<!-- end imt -->

            </div>

        </div>

    </section>

   	<!--start footer-->

	<!--start footer-->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3 col-lg-3">
					<div class="widget_title">
						<h4><span>Tautan</span></h4>
					</div>
					<div class="widget_content">
						<ul class="links">
							<li><i class="fa fa-caret-right"></i> <a href="http://bkp.pertanian.go.id/">BKP Kementerian Pertanian<span></span></a></li>
							<li><i class="fa fa-caret-right"></i> <a href="http://garutkab.go.id">Website Pemda Garut<span></span></a></li>
							<li><i class="fa fa-caret-right"></i> <a href="http://dkpp.jabarprov.go.id/">Dinas Ketahan Pangan & Peternakan Jawa Barat<span></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3">
					<div class="widget_title">
						<h4><span>Alamat</span></h4>

					</div>
					<div class="widget_content">
						<ul class="contact-details-alt">
							<li><i class="fa fa-map-marker"></i> <p><strong>Alamat</strong>: Jalan Pahlawan No.70 Garut 44151.</p></li>
							<li><i class="fa fa-user"></i> <p><strong>Telepon</strong>: (0262) 280-1757</p></li>
							<li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="#">dkpgarut@promketapang.id</a></p></li>
						</ul>
					</div>
				</div>

				<div class="col-sm-3 col-md-3 col-lg-3">
					<div class="widget_title">
						<h4><span>Lokasi</span></h4>

					</div>
					<div class="widget_content">
    					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.334374795855!2d107.88183021427892!3d-7.202638994800034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68b0f4f1b69355%3A0x1651b995ac5c1030!2sKANTOR+DINAS+KETAHANAN+PANGAN!5e0!3m2!1sid!2sid!4v1533290972633" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>					
                    </div>
                </div>
                   					
                <div class="col-sm-3 col-md-3 col-lg-3">
					<div class="widget_title">
						<h4><span>Statistik</span></h4>
					</div>
                    <div class="widget_content">
                    	<a href="http://www.quick-counter.net/" title="Statistik Kunjungan Website"><img src="http://www.quick-counter.net/aip.php?tp=bo&tz=Asia%2FJakarta" alt="Statistik Hits Halaman" border="0" width="150" height="200" /></a>
                    </div>
                </div>
				
			</div>
		</div>
        </div>
	</footer>
	<!--end footer-->

	<section class="footer_bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<p class="copyright" align="center">&copy; Copyright 2018 Promosi Kebutuhan Kita Akan Pangan (PromKeTaPang) | Dikelola oleh Seksi Promosi Penganekaragaman Konsumsi Pangan <a href="http://promketapang.id/"> Dinas Ketahanan Pangan Kabupaten Garut</a></p>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="footer_social" align="center">
						<ul class="footbot_social">
							<li><a class="fb" href="www.facebook.com/promketapang" data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
							<li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- end footer bottom -->



    

<script type="text/javascript" src="js/vendor/jquery-1.10.2.min.js"></script>

	<script src="js/vendor/bootstrap.js"></script>

	<script src="js/jquery.easing.1.3.js"></script>

	<script src="js/retina-1.1.0.min.js"></script>

	<script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie --> 

	<script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->





    <script src="js/jquery.superfish.js"></script>

	<script src="js/jquery.meanmenu.js"></script>

	

	<script type="text/javascript" src="js/jquery.jcarousel.js"></script>

		

	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>

	<script type="text/javascript" src="js/swipe.js"></script>





	<script src="js/main.js"></script>

	

	<!-- Start Style Switcher -->

	<div class="switcher"></div>

	<!-- End Style Switcher -->

    

</body>

</html>



