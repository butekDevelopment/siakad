<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Laporan Penyewaan</title>
<link rel='shortcut icon' />
<style type="text/css">
#logo {
 width: 300px;
 height: 150px;	
 float:left;
}
#judul {
 margin-left : 205px;
 width:900px;
 height: 150px;	
}

</style>
</head>

<body>
<div id="logo"><img src="<?php echo base_url('assets/img/polije.png');?>" alt="" width="120" height="120" /></div>
<div id="judul">
<br />
<br />
  <font size="+2">KEMENTERIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI
POLITEKNIK NEGERI JEMBER
 </font>
</div>
<hr size="4" color="#000000" />    
   <center> <h2>FORM YUDISIUM
PROGRAM STUDI MANAJEMEN INFORMATIKA
</h2>
	
</center><pre>
 <font  face="verdana" size="4">
    <table border="1">
    <tr>Saya yang bertanda tangan di bawah ini</tr><br>
    Nama                : <?php echo $data_form_yudisium_mahasiswa->NAMA; ?><br>
    NIM                   : <?php echo $data_form_yudisium_mahasiswa->NIM; ?><br>
    Angkatan           : <?php echo $data_form_yudisium_mahasiswa->TAHUN_ANGKATAN; ?><br>
    IP Semester I     : <?php echo $data_form_yudisium_mahasiswa->NILAI_KHS1; ?><br>
    IP Semester II    : <?php echo $data_form_yudisium_mahasiswa->NILAI_KHS2; ?><br>
    IP Semester III   : <?php echo $data_form_yudisium_mahasiswa->NILAI_KHS3; ?><br>
    IP Semester IV    : <?php echo $data_form_yudisium_mahasiswa->NILAI_KHS4; ?><br>
    IP Semester V     : <?php echo $data_form_yudisium_mahasiswa->NILAI_KHS5; ?><br>
    IP Semester VI    : <?php echo $data_form_yudisium_mahasiswa->NILAI_KHS6; ?><br>
    IPK                     : <?php
                              $IPK=($data_form_yudisium_mahasiswa->NILAI_KHS1+$data_form_yudisium_mahasiswa->NILAI_KHS2+$data_form_yudisium_mahasiswa->NILAI_KHS3+$data_form_yudisium_mahasiswa->NILAI_KHS4+$data_form_yudisium_mahasiswa->NILAI_KHS5+$data_form_yudisium_mahasiswa->NILAI_KHS6)/6;
                              echo $IPK; 
                              ?><br>

    Judul Tugas Akhir                : <?php echo $data_form_yudisium_mahasiswa->JUDUL_TA; ?><br>
    Nilai                                   : <?php echo $data_form_yudisium_mahasiswa->NILAI_UJIAN; ?><br>
    Judul Praktek Kerja Lapang  : <?php echo $data_form_yudisium_mahasiswa->JUDUL_LAPORAN_PKL; ?><br>
    Nilai                                   : <?php echo $data_form_yudisium_mahasiswa->NILAI_PKL; ?><br>  
    </table>
              Menyatakan dengan sebenar-benarnya bahwa data Pra Yudisium telah dinyatakan secara jelas dan dapat diperiksa kebenarannya.
    Apabila terdapat kesalahan saya sanggup menerima segala resikonya.<br>
    Demikian pernyataan ini saya buat dengan sebenarnya dan penuh tanggung jawab.<br>
                                                                                                         Jember,<?php echo "  ",date("d/m/Y");?>   <br>
    Mengetahui,<br>
    Ketua Program Studi MIF<br>

    <table width="1000px">
      <tr>
        <td><?php echo "    ",$data_ketua_prodi_mif->NAMA_DOSEN; ?></td>
        <td><?php echo $data_form_yudisium_mahasiswa->NAMA; ?></td>
      </tr>
      <tr>
        <td><?php echo "    ";?>NIP.<?php echo $data_ketua_prodi_mif->NIKNIP; ?> </td>
        <td><?php echo $data_form_yudisium_mahasiswa->NIM; ?></td>
      </tr>
    </table>
                                             
                                                  
</font></pre>
    <center>
    	<input type="submit" name="button" id="button" value="Kembali" onclick="back()" />
		<input type="submit" name="button" id="button" value="Print" onclick="print()" />
   
	</center>
</body>
</html>

