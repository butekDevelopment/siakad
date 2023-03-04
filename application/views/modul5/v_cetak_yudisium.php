<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cetak Form Yudisium</title>
<link rel='shortcut icon' />
<style type="text/css">
#logo {
 width: 250px;
 height: 150px;	
 float:left;
 margin: 20px;
}
#judul {
 margin-left : 165px;
 width:900px;
 height: 150px;	
}

</style>
</head>

<body>
<table width=500px align=center>
<tr>
<td>
	<div id="logo"><img src="<?php echo base_url('asset/img/logo.png');?>" alt="" width="120" height="120" /></div>
	<div id="judul">
	<br />
	<br />
	  <font size="+2">KEMENTERIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI
	POLITEKNIK NEGERI JEMBER
	 </font>
	</div>
	
</center><pre>
 <font  face="verdana" size="4">
    <table border="0">
			
			<hr size="4" color="#000000" />    
		   <center> <h4>FORM YUDISIUM
PROGRAM STUDI MANAJEMEN INFORMATIKA
		</h4>
    <tr> <td>   Saya yang bertanda tangan di bawah ini</td></tr>
	<tr><td>
        Nama               </td><td>: <?php echo $data_form_yudisium_mahasiswa->nama_mahasiswa; ?></td></tr>
    <tr><td>
	NIM                </td><td>: <?php echo $data_form_yudisium_mahasiswa->NIM; ?><br></td></tr>
	<tr><td>
	Angkatan           </td><td>: <?php echo $data_form_yudisium_mahasiswa->Angkatan; ?><br></td></tr>
    <tr><td>
	IP Semester I       </td><td>: <?php echo $data_form_yudisium_mahasiswa->IP_SMT1; ?><br></td></tr>
    <tr><td>
	IP Semester II      </td><td>: <?php echo $data_form_yudisium_mahasiswa->IP_SMT2; ?><br></td></tr>
    <tr><td>
	IP Semester III     </td><td>: <?php echo $data_form_yudisium_mahasiswa->IP_SMT3; ?><br></td></tr>
    <tr><td>
	IP Semester IV      </td><td>: <?php echo $data_form_yudisium_mahasiswa->IP_SMT4; ?><br></td></tr>
    <tr><td>
	IP Semester V       </td><td>: <?php echo $data_form_yudisium_mahasiswa->IP_SMT5; ?><br></td></tr>
    <tr><td>
	IP Semester VI      </td><td>: <?php echo $data_form_yudisium_mahasiswa->IP_SMT6; ?><br></td></tr>
    <tr><td>
	IPK                 </td><td>: <?php echo $data_form_yudisium_mahasiswa->IP_SMT1+$data_form_yudisium_mahasiswa->IP_SMT2+$data_form_yudisium_mahasiswa->IP_SMT3+$data_form_yudisium_mahasiswa->IP_SMT4+$data_form_yudisium_mahasiswa->IP_SMT5+$data_form_yudisium_mahasiswa->IP_SMT6; ?></td></tr>
	<tr><td>
        Judul Tugas Akhir  </td><td><br>: <?php echo $data_form_yudisium_mahasiswa->judul_TA; ?><br><br></td></tr>
    </table>
              Menyatakan dengan sebenar-benarnya bahwa data Pra Yudisium telah dinyatakan secara jelas dan dapat diperiksa kebenarannya.
    Apabila terdapat kesalahan saya sanggup menerima segala resikonya.<br>
    Demikian pernyataan ini saya buat dengan sebenarnya dan penuh tanggung jawab.<br>
                                                                                                         
    Mengetahui,													    Jember,<?php echo "  ",date("d-m-Y");?>   <br>
    Ketua Program Studi MIF<br>

    <table width="1000px">
      <tr>
        <td>   Dwi Putro Sarwo Setyohadi, S.Kom, M.Kom</td>
        <td>   <?php echo $data_form_yudisium_mahasiswa->nama_mahasiswa; ?></td>
      </tr>
      <tr>
        <td>   NIP.19800517 200812 1 002 </td>
        <td>   <?php echo $data_form_yudisium_mahasiswa->NIM; ?></td>
      </tr>
    </table>
                                             
                                                  
</font></pre>
    <center>
		<input type="submit" name="button" id="button" value="Print" onclick="print()" />
   
	</center>
</td>
</tr>
</table>


</body>
</html>

