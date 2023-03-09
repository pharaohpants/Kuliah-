<?php @include "header.php"; ?>
		<link rel="StyleSheet" href="desktop___1.css" />
<?php
function hitung_umur($tanggal_lahir){
	$birthDate = new DateTime($tanggal_lahir);
	$today = new DateTime("today");
	if ($birthDate > $today) { 
	    exit("0 tahun 0 bulan 0 hari");
	}
	$y = $today->diff($birthDate)->y;
	$m = $today->diff($birthDate)->m;
	$d = $today->diff($birthDate)->d;
	return $y." tahun ".$m." bulan ".$d." hari";
}
?>
<div id="page_desktop___1_ek1"  >
	<div id="_bg__desktop___1_ek2"  ></div>
	<img src="skins/n_s_medieval_1.png" id="header1" />
	<div id="selamat_datang_" >
		SELAMAT DATANG

	</div>
	<div id="group_2"  >
		<div id="rectangle_1"  ></div>
		<img src="skins/greg_semkow_sarum_mid_ext_1.png" id="header2" />

		<div id="group_1"  >
			<div id="ellipse_2"  ></div>
			<img src="skins/ad933f89_e233_45b0_b44c_8460ea21313c_1.png" id="profil" />

		</div>
		<div id="hai___saya_rantau_himawan" >
			Hai ! Saya Rantau Himawan
		</div>
		<div id="mahasiswa_informatika_upn__veteran__jawa_timur" >
			Mahasiswa Informatika UPN "Veteran" Jawa Timur
		</div>

	</div>

	<div id="group_4"  >
		<div id="tentang_saya" >
			Tentang saya 
		</div>
		<div id="hai" >
			<span style="font-style:normal; font-weight:normal; text-decoration:NONE; ">Hai! Nama saya Rantau Himawan</span><span style="color:#000000; font-style:normal; font-weight:normal; text-decoration:NONE; "> saya merupakan Mahasiswa  di Universitas UPN Veteran Jawa Timur. Saya merupakan mahasiswa angkatan 2021, Fakultas Ilmu Komputer dan Program Studi Informatika. pada saat ini saya berada pada tingkat semester 4. Saya berumur 21 tahun lahir di kota Sidoarjo Pada Tanggal 29 Mei 2002 dan merupakan anak kedua diantara saudara saya. Saya memiliki ketertarikan/Hobi akan menggambar, desain visual, dan game. Menjadi mahasiswa informatika merupakan hal yang tidak terduga bagi saya, tetapi juga menjadi kebanggaan bagi saya karena bisa bersaing pada era teknologi yang semakin berkembang</span>
		</div>
		<div id="line_1"  ></div>

	</div>

	<div id="group_5"  >
		<div id="laki_laki" >
			Gender : Laki-Laki
		</div>
		<div id="_29_mei_2002" >
		    Tanggal lahir : <?php echo $birthdate;?>
		</div>
		<div id="sidoarjo" >
			Tempat Lahir : Sidoarjo 
		</div>
		<div id="jl__balai_desa_no__3c_rt_13_rw_04__buduran__sidoarjo__jawa_timur" >
			Alamat : JL. Balai Desa No. 3c RT 13 RW 04, Buduran, Sidoarjo, Jawa Timur
		</div>
		<div id="informasi_dasar" >
			Informasi Dasar 
		</div>
		<div id="_21_tahun" >
			Umur : <?php echo hitung_umur("2002-05-29") ;?>
		</div>
		<img src="skins/line_3.png" id="line_3" />

	</div>
	<img src="skins/line_4.png" id="line_4" />

	<div id="group_3"  >
		<img src="skins/vector.png" id="vector" />
		<img src="skins/vector_ek1.png" id="vector_ek1" />

		<div id="telegram_app"  >
			<img src="skins/vector_ek2.png" id="vector_ek2" />

		</div>
		<img src="skins/vector_ek3.png" id="vector_ek3" />

		<div id="google_plus"  >
			<img src="skins/vector_ek4.png" id="vector_ek4" />

		</div>

	</div>

</div>


<?php @include "footer.php"; ?>