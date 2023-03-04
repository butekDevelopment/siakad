<?php
            // untuk menampilkan Navigasi Menu Desktop
            ini_set("display_errors",0);
            $user = $_SESSION['codeUser'];
            ?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pendaftaran Tracer Study</title>
	<script>
	$(document).ready(function() {
	$('select').material_select('destroy');
	});
  </script>
	  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.css">
	  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	
  <link href="<?php echo base_url() ?>asset/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>
<body>
	
<section class="courses section">
      <div class="container">
        <div class="row">
      <h3 class="header center">Pendaftaran Yudisium</h3>
           		<?php echo $error;?>
    			<?php echo form_open_multipart('modul5/Yudisium/proses_daftar_yudisium');?>
                <br><br><b>Untuk formulir pendukung dalam pengajuan pendaftaran yudisium, download file dibawah ini :</b><br>
                1. <a href="<?php echo base_url('assets/files/Surat Keterangan Bebas Tanggungan.docx');?>">File Surat Keterangan Bebas Tanggungan</a>
                <br>2. <a href="<?php echo base_url('assets/files/BERITA ACARA UJIAN PKL AGUS BARIZI.docx');?>">File Berita Acara Praktik Kerja Lapang</a>
                <br>3. <a href="<?php echo base_url('assets/files/Bukti Penyerahan Tugas Akhir.docx');?>">File Bukti Penyerahan Tugas Akhir</a>
                <br>4. <a href="<?php echo base_url('assets/files/SURAT PENGANTAR PKL.docx');?>">File Bukti Penyerahan Praktik Kerja Lapang</a><br>
                <hr><b>Isi data yudisium dan upload berkas untuk persyaratan pendaftaran yudisium :</b>
				<table width="1000px">
				<tr>
                    <td>Angkatan</td>
                    <td colspan="3">
                        <?php 
							if($data_yudisium->STATUS_VALIDASI=="TIDAK VALID" || $data_yudisium->STATUS_VALIDASI==""){
								echo "<input type='text' name='Angkatan' value='$data_yudisium->Angkatan'/>";
							}elseif ($data_yudisium->STATUS_VALIDASI=="VALID"){
								echo "<input type='text' name='Angkatan' value='$data_yudisium->Angkatan' readonly/>";
							}else{	
								echo "<input type='text' name='Angkatan'>";  
							}
                        ?>
                    </td>
				</tr>
				<tr>
                    <td>Ip Semester 1</td>
                    <td>
                        <?php 
						
							if($data_yudisium->STATUS_VALIDASI=="TIDAK VALID" || $data_yudisium->STATUS_VALIDASI==""){
								echo "<input type='text' name='t_ip1' value='$data_yudisium->IP_SMT1'/>";
							}elseif ($data_yudisium->STATUS_VALIDASI=="VALID"){
								echo "<input type='text' name='t_ip1' value='$data_yudisium->IP_SMT1' readonly/>";
							}else{	
								echo "<input type='text' name='t_ip1'>";  
							}
                        ?>
                    </td>
				<td>Ip Semester 2</td>
                    <td>
                        <?php 
							if($data_yudisium->STATUS_VALIDASI=="TIDAK VALID" || $data_yudisium->STATUS_VALIDASI==""){
								echo "<input type='text' name='t_ip2' value='$data_yudisium->IP_SMT2'/>";
							}elseif ($data_yudisium->STATUS_VALIDASI=="VALID"){
								echo "<input type='text' name='t_ip2' value='$data_yudisium->IP_SMT2' readonly/>";
							}else{	
								echo "<input type='text' name='t_ip2'>";  
							}
                        ?>
                    </td>
                    <td>Ip Semester 3</td>
                    <td>
                        <?php 
							if($data_yudisium->STATUS_VALIDASI=="TIDAK VALID" || $data_yudisium->STATUS_VALIDASI==""){
								echo "<input type='text' name='t_ip3' value='$data_yudisium->IP_SMT3'/>";
							}elseif ($data_yudisium->STATUS_VALIDASI=="VALID"){
								echo "<input type='text' name='t_ip3' value='$data_yudisium->IP_SMT3' readonly/>";
							}else{	
								echo "<input type='text' name='t_ip3'>";  
							}
                        ?>
                    </td>
					</tr>
					
				<tr>
                    <td>Ip Semester 4</td>
                    <td>
                        <?php 
							if($data_yudisium->STATUS_VALIDASI=="TIDAK VALID" || $data_yudisium->STATUS_VALIDASI==""){
								echo "<input type='text' name='t_ip4' value='$data_yudisium->IP_SMT4'/>";
							}elseif ($data_yudisium->STATUS_VALIDASI=="VALID"){
								echo "<input type='text' name='t_ip4' value='$data_yudisium->IP_SMT4' readonly/>";
							}else{	
								echo "<input type='text' name='t_ip4'>";  
							}
                        ?>
                    </td>
					<td>Ip Semester 5</td>
                    <td>
                        <?php 
							if($data_yudisium->STATUS_VALIDASI=="TIDAK VALID" || $data_yudisium->STATUS_VALIDASI==""){
								echo "<input type='text' name='t_ip5' value='$data_yudisium->IP_SMT5'/>";
							}elseif ($data_yudisium->STATUS_VALIDASI=="VALID"){
								echo "<input type='text' name='t_ip5' value='$data_yudisium->IP_SMT5' readonly/>";
							}else{	
								echo "<input type='text' name='t_ip5'>";  
							}
                        ?>
                    </td>
                    <td>Ip Semester 6</td>
                    <td>
                        <?php 
							if($data_yudisium->STATUS_VALIDASI=="TIDAK VALID" || $data_yudisium->STATUS_VALIDASI==""){
								echo "<input type='text' name='t_ip6' value='$data_yudisium->IP_SMT6'/>";
							}elseif ($data_yudisium->STATUS_VALIDASI=="VALID"){
								echo "<input type='text' name='t_ip6' value='$data_yudisium->IP_SMT6' readonly/>";
							}else{	
								echo "<input type='text' name='t_ip6'>";  
							}
                        ?>
                    </td>
					</tr>
				</table>
                <table border="1" width="1000px">
                    <tr>
                    <td>File Scan KHS SMT 1</td>
                    <td>
                        <?php 
                        if ($data_yudisium->STATUS_KHS1=="MENUNGGU KONFIRMASI" || $data_yudisium->STATUS_KHS1==""){
                            echo "<input type='file' name='file_khs1'>";  
                        }elseif ($data_yudisium->STATUS_KHS1=="TERVERIFIKASI"){
                            echo "<input type='file' name='file_khs1' value='' style='display:none'>";   
                            echo "<input type='file' name='file_khs11' disabled=''>";
                        }?>
                    </td>
                    <td>Status : <br>
                        <?php if($data_yudisium->STATUS_KHS1=="MENUNGGU KONFIRMASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/salah.png')."'>";
                            echo " $data_yudisium->STATUS_KHS1";
                        }elseif ($data_yudisium->STATUS_KHS1=="TERVERIFIKASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/benar.png')."'>";
                            echo " $data_yudisium->STATUS_KHS1";
                        }elseif ($data_yudisium->STATUS_KHS1==""){
                            echo " BELUM MENGUPLOAD";
                        } 
                        ?>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium->FILE_KHS1==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium->FILE_KHS1."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td>File Scan KHS SMT 2</td>
                    <td>
                        <?php if ($data_yudisium->STATUS_KHS2=="MENUNGGU KONFIRMASI" || $data_yudisium->STATUS_KHS2==""){
                            echo "<input type='file' name='file_khs2'>";  
                        }elseif ($data_yudisium->STATUS_KHS2=="TERVERIFIKASI"){
                            echo "<input type='file' name='file_khs2' value='' style='display:none'>";   
                            echo "<input type='file' name='file_khs21' disabled=''>";
                        }?>
                    </td>
                    <td>Status : <br>
                        <?php if($data_yudisium->STATUS_KHS2=="MENUNGGU KONFIRMASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/salah.png')."'>";
                            echo " $data_yudisium->STATUS_KHS2";
                        }elseif ($data_yudisium->STATUS_KHS2=="TERVERIFIKASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/benar.png')."'>";
                            echo " $data_yudisium->STATUS_KHS2";
                        }elseif ($data_yudisium->STATUS_KHS2==""){
                            echo " BELUM MENGUPLOAD";
                        } 
                        ?>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium->FILE_KHS2==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium->FILE_KHS2."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td>File Scan KHS SMT 3</td>
                    <td>
                        <?php if ($data_yudisium->STATUS_KHS3=="MENUNGGU KONFIRMASI" || $data_yudisium->STATUS_KHS3==""){
                            echo "<input type='file' name='file_khs3'>";  
                        }elseif ($data_yudisium->STATUS_KHS3=="TERVERIFIKASI"){
                            echo "<input type='file' name='file_khs3' value='' style='display:none'>";   
                            echo "<input type='file' name='file_khs31' disabled=''>";
                        }?>
                    </td>
                    <td>Status : <br>
                        <?php if($data_yudisium->STATUS_KHS3=="MENUNGGU KONFIRMASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/salah.png')."'>";
                            echo " $data_yudisium->STATUS_KHS3";
                        }elseif ($data_yudisium->STATUS_KHS3=="TERVERIFIKASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/benar.png')."'>";
                            echo " $data_yudisium->STATUS_KHS3";
                        }elseif ($data_yudisium->STATUS_KHS3==""){
                            echo " BELUM MENGUPLOAD";
                        } 
                        ?>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium->FILE_KHS3==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium->FILE_KHS3."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td>File Scan KHS SMT 4</td>
                    <td>
                        <?php if ($data_yudisium->STATUS_KHS4=="MENUNGGU KONFIRMASI" || $data_yudisium->STATUS_KHS4==""){
                            echo "<input type='file' name='file_khs4'>";  
                        }elseif ($data_yudisium->STATUS_KHS4=="TERVERIFIKASI"){
                            echo "<input type='file' name='file_khs4' value='' style='display:none'>";   
                            echo "<input type='file' name='file_khs41' disabled=''>";
                        }?>
                    </td>
                    <td>Status : <br>
                        <?php if($data_yudisium->STATUS_KHS4=="MENUNGGU KONFIRMASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/salah.png')."'>";
                            echo " $data_yudisium->STATUS_KHS4";
                        }elseif ($data_yudisium->STATUS_KHS4=="TERVERIFIKASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/benar.png')."'>";
                            echo " $data_yudisium->STATUS_KHS4";
                        }elseif ($data_yudisium->STATUS_KHS4==""){
                            echo " BELUM MENGUPLOAD";
                        } 
                        ?>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium->FILE_KHS4==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium->FILE_KHS4."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td>File Scan KHS SMT 5</td>
                    <td>
                        <?php if ($data_yudisium->STATUS_KHS5=="MENUNGGU KONFIRMASI" || $data_yudisium->STATUS_KHS5==""){
                            echo "<input type='file' name='file_khs5'>";  
                        }elseif ($data_yudisium->STATUS_KHS5=="TERVERIFIKASI"){
                            echo "<input type='file' name='file_khs5' value='' style='display:none'>";   
                            echo "<input type='file' name='file_khs51' disabled=''>";
                        }?>
                    </td>
                    <td>Status : <br>
                        <?php if($data_yudisium->STATUS_KHS5=="MENUNGGU KONFIRMASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/salah.png')."'>";
                            echo " $data_yudisium->STATUS_KHS5";
                        }elseif ($data_yudisium->STATUS_KHS5=="TERVERIFIKASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/benar.png')."'>";
                            echo " $data_yudisium->STATUS_KHS5";
                        }elseif ($data_yudisium->STATUS_KHS5==""){
                            echo " BELUM MENGUPLOAD";
                        }  
                        ?>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium->FILE_KHS5==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium->FILE_KHS5."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td>File Scan KHS SMT 6</td>
                    <td>
                        <?php if ($data_yudisium->STATUS_KHS6=="MENUNGGU KONFIRMASI" || $data_yudisium->STATUS_KHS6==""){
                            echo "<input type='file' name='file_khs6'>";  
                        }elseif ($data_yudisium->STATUS_KHS6=="TERVERIFIKASI"){
                            echo "<input type='file' name='file_khs6' value='' style='display:none'>";   
                            echo "<input type='file' name='file_khs61' disabled=''>";
                        }?>
                    </td>
                    <td>Status : <br>
                        <?php if($data_yudisium->STATUS_KHS6=="MENUNGGU KONFIRMASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/salah.png')."'>";
                            echo " $data_yudisium->STATUS_KHS6";
                        }elseif ($data_yudisium->STATUS_KHS6=="TERVERIFIKASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/benar.png')."'>";
                            echo " $data_yudisium->STATUS_KHS6";
                        }elseif ($data_yudisium->STATUS_KHS6==""){
                            echo " BELUM MENGUPLOAD";
                        }  
                        ?>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium->FILE_KHS6==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium->FILE_KHS6."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td>Upload Surat Keterangan Bebas Tanggungan</td>
                    <td>
                        <?php if ($data_yudisium->STATUS_SURAT_BEBAS_TANGGUNGAN=="MENUNGGU KONFIRMASI" || $data_yudisium->STATUS_SURAT_BEBAS_TANGGUNGAN==""){
                            echo "<input type='file' name='file_surat_tanggungan'>";  
                        }elseif ($data_yudisium->STATUS_SURAT_BEBAS_TANGGUNGAN=="TERVERIFIKASI"){
                            echo "<input type='file' name='file_surat_tanggungan' value='' style='display:none'>";   
                            echo "<input type='file' name='file_surat_tanggungan1' disabled=''>";
                        }?>
                    </td>
                    <td>Status : <br>
                        <?php if($data_yudisium->STATUS_SURAT_BEBAS_TANGGUNGAN=="MENUNGGU KONFIRMASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/salah.png')."'>";
                            echo " $data_yudisium->STATUS_SURAT_BEBAS_TANGGUNGAN";
                        }elseif ($data_yudisium->STATUS_SURAT_BEBAS_TANGGUNGAN=="TERVERIFIKASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/benar.png')."'>";
                            echo " $data_yudisium->STATUS_SURAT_BEBAS_TANGGUNGAN";
                        }elseif ($data_yudisium->STATUS_SURAT_BEBAS_TANGGUNGAN==""){
                            echo " BELUM MENGUPLOAD";
                        } 
                        ?>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium->FILE_SURAT_BEBAS_TANGGUNGAN==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium->FILE_SURAT_BEBAS_TANGGUNGAN."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td>Upload Bukti Pembayaran SPP Semester Terakhir</td>
                    <td>
                        <?php if ($data_yudisium->STATUS_SPP=="MENUNGGU KONFIRMASI" || $data_yudisium->STATUS_SPP==""){
                            echo "<input type='file' name='file_bukti_spp'>";  
                         }elseif ($data_yudisium->STATUS_SPP=="TERVERIFIKASI"){
                            echo "<input type='file' name='file_bukti_spp' value='' style='display:none'>";   
                            echo "<input type='file' name='file_bukti_spp1' disabled=''>";
                        }?>
                    </td>
                    <td>Status : <br>
                        <?php if($data_yudisium->STATUS_SPP=="MENUNGGU KONFIRMASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/salah.png')."'>";
                            echo " $data_yudisium->STATUS_SPP";
                        }elseif ($data_yudisium->STATUS_SPP=="TERVERIFIKASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/benar.png')."'>";
                            echo " $data_yudisium->STATUS_SPP";
                        }elseif ($data_yudisium->STATUS_SPP==""){
                            echo " BELUM MENGUPLOAD";
                        } 
                        ?>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium->FILE_SPP==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium->FILE_SPP."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td>Upload Berita Acara Ujian Tugas Akhir</td>
                    <td>
                        <?php if ($data_yudisium->STATUS_BERITA_ACARA_TA=="MENUNGGU KONFIRMASI" || $data_yudisium->STATUS_BERITA_ACARA_TA==""){
                            echo "<input type='file' name='file_berita_ta'>";  
                         }elseif ($data_yudisium->STATUS_BERITA_ACARA_TA=="TERVERIFIKASI"){
                            echo "<input type='file' name='file_berita_ta' value='' style='display:none'>";   
                            echo "<input type='file' name='file_berita_ta1' disabled=''>";
                        }?>
                    </td>
                    <td>Status : <br>
                        <?php if($data_yudisium->STATUS_BERITA_ACARA_TA=="MENUNGGU KONFIRMASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/salah.png')."'>";
                            echo " $data_yudisium->STATUS_BERITA_ACARA_TA";
                        }elseif ($data_yudisium->STATUS_BERITA_ACARA_TA=="TERVERIFIKASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/benar.png')."'>";
                            echo " $data_yudisium->STATUS_BERITA_ACARA_TA";
                        }elseif ($data_yudisium->STATUS_BERITA_ACARA_TA==""){
                            echo " BELUM MENGUPLOAD";
                        } 
                        ?>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium->FILE_BERITA_ACARA_TA==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium->FILE_BERITA_ACARA_TA."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td>Upload Berita Acara Ujian PKL</td>
                    <td>
                        <?php if ($data_yudisium->STATUS_BERITA_ACARA_PKL=="MENUNGGU KONFIRMASI" || $data_yudisium->STATUS_BERITA_ACARA_PKL==""){
                            echo "<input type='file' name='file_berita_pkl'>";  
                         }elseif ($data_yudisium->STATUS_BERITA_ACARA_PKL=="TERVERIFIKASI"){
                            echo "<input type='file' name='file_berita_pkl' value='' style='display:none'>";   
                            echo "<input type='file' name='file_berita_pkl1' disabled=''>";
                        }?>
                    </td>
                    <td>Status : <br>
                        <?php if($data_yudisium->STATUS_BERITA_ACARA_PKL=="MENUNGGU KONFIRMASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/salah.png')."'>";
                            echo " $data_yudisium->STATUS_BERITA_ACARA_PKL";
                        }elseif ($data_yudisium->STATUS_BERITA_ACARA_PKL=="TERVERIFIKASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/benar.png')."'>";
                            echo " $data_yudisium->STATUS_BERITA_ACARA_PKL";
                        }elseif ($data_yudisium->STATUS_BERITA_ACARA_PKL==""){
                            echo " BELUM MENGUPLOAD";
                        } 
                        ?>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium->FILE_BERITA_ACARA_PKL==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium->FILE_BERITA_ACARA_PKL."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td>Upload Bukti Penyerahan Laporan Tugas Akhir</td>
                    <td>
                        <?php if ($data_yudisium->STATUS_PENYERAHAN_TA=="MENUNGGU KONFIRMASI" || $data_yudisium->STATUS_PENYERAHAN_TA==""){
                            echo "<input type='file' name='file_penyerahan_ta'>";  
                         }elseif ($data_yudisium->STATUS_PENYERAHAN_TA=="TERVERIFIKASI"){
                            echo "<input type='file' name='file_penyerahan_ta' value='' style='display:none'>";   
                            echo "<input type='file' name='file_penyerahan_ta1' disabled=''>";
                        }?>
                    </td>
                    <td>Status : <br>
                        <?php if($data_yudisium->STATUS_PENYERAHAN_TA=="MENUNGGU KONFIRMASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/salah.png')."'>";
                            echo " $data_yudisium->STATUS_PENYERAHAN_TA";
                        }elseif ($data_yudisium->STATUS_PENYERAHAN_TA=="TERVERIFIKASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/benar.png')."'>";
                            echo " $data_yudisium->STATUS_PENYERAHAN_TA";
                        }elseif ($data_yudisium->STATUS_PENYERAHAN_TA==""){
                            echo " BELUM MENGUPLOAD";
                        } 
                        ?>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium->FILE_PENYERAHAN_TA==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium->FILE_PENYERAHAN_TA."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td>Upload Bukti Penyerahan Laporan PKL</td>
                    <td>
                        <?php if ($data_yudisium->STATUS_PENYERAHAN_PKL=="MENUNGGU KONFIRMASI" || $data_yudisium->STATUS_PENYERAHAN_PKL==""){
                            echo "<input type='file' name='file_penyerahan_pkl'>";  
                         }elseif ($data_yudisium->STATUS_PENYERAHAN_PKL=="TERVERIFIKASI"){
                            echo "<input type='file' name='file_penyerahan_pkl' value='' style='display:none'>";   
                            echo "<input type='file' name='file_penyerahan_pkl1' disabled=''>";
                        }?>
                    </td>
                    <td>Status : <br>
                        <?php if($data_yudisium->STATUS_PENYERAHAN_PKL=="MENUNGGU KONFIRMASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/salah.png')."'>";
                            echo " $data_yudisium->STATUS_PENYERAHAN_PKL";
                        }elseif ($data_yudisium->STATUS_PENYERAHAN_PKL=="TERVERIFIKASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/benar.png')."'>";
                            echo " $data_yudisium->STATUS_PENYERAHAN_PKL";
                        } elseif ($data_yudisium->STATUS_PENYERAHAN_PKL==""){
                            echo " BELUM MENGUPLOAD";
                        } 
                        ?>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium->FILE_PENYERAHAN_PKL==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium->FILE_PENYERAHAN_PKL."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                    <tr>
                    <td>Upload Konsep Daftar Nilai Sementara</td>
                    <td>
                        <?php if ($data_yudisium->STATUS_KONSEP_DAFTAR_NILAI_SEMENTARA=="MENUNGGU KONFIRMASI" || $data_yudisium->STATUS_KONSEP_DAFTAR_NILAI_SEMENTARA==""){
                            echo "<input type='file' name='file_daftar_nilai'>";  
                         }elseif ($data_yudisium->STATUS_KONSEP_DAFTAR_NILAI_SEMENTARA=="TERVERIFIKASI"){
                            echo "<input type='file' name='file_daftar_nilai' value='' style='display:none'>";   
                            echo "<input type='file' name='file_daftar_nilai1' disabled=''>";
                        }?>
                    </td>
                    <td>Status : <br>
                        <?php if($data_yudisium->STATUS_KONSEP_DAFTAR_NILAI_SEMENTARA=="MENUNGGU KONFIRMASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/salah.png')."'>";
                            echo " $data_yudisium->STATUS_KONSEP_DAFTAR_NILAI_SEMENTARA";
                        }elseif ($data_yudisium->STATUS_KONSEP_DAFTAR_NILAI_SEMENTARA=="TERVERIFIKASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/benar.png')."'>";
                            echo " $data_yudisium->STATUS_KONSEP_DAFTAR_NILAI_SEMENTARA";
                        }elseif ($data_yudisium->STATUS_KONSEP_DAFTAR_NILAI_SEMENTARA==""){
                            echo " BELUM MENGUPLOAD";
                        } 
                        ?>
                    </td>
                    <td><b>
                        <?php if(!$data_yudisium->FILE_KONSEP_DAFTAR_NILAI_SEMENTARA==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_yudisium->FILE_KONSEP_DAFTAR_NILAI_SEMENTARA."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                </table>
                
                <?php 
                if($data_yudisium->STATUS_VALIDASI=="TIDAK VALID" || $data_yudisium->STATUS_VALIDASI==""){
                    echo "<br><br>
					<div class='col s4'></div>
					<div class='col s3'></div>
					<div class='col s3'></div>
					<input type='submit' class='btn btn-success' value='Simpan' />";
                }else if($data_yudisium->STATUS_VALIDASI=="VALID"){
					
                    echo "<br><br>
					<center>
					Status pendaftaran yudisium anda telah diterima, silakan lakukan";?><b><a href="<?php echo base_url(); ?>modul5/admin/cetak_pendaftaran_yudisium"> Cetak Form</a></b></center><?php
                };
                ?>
                
            </center>
        </div>
      </div>
</section>
<!-- End Content Section  -->
  <section id="footer" class="section footer">
    <div class="container">
      <div class="row align-center copyright">
        <div class="col-sm-12">
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Amoeba
            -->
            <a href="">Copyright &copy; 2017 DEVteam_Modul5_PSI</a><a href="https://bootstrapmade.com/">     | Bootstrap Themes</a> <a href="https://bootstrapmade.com/">  by BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="<?php echo base_url() ?>asset/js/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/materialize.min.js"></script>
  <script>
  	(function($){
  		$(function(){
    		$('.button-collapse').sideNav();
  		});
	})(jQuery);
  </script>
  <script>
  	$(document).ready(function() {
    	Materialize.updateTextFields();
  	});
  </script>
  
 
</body>
</html>
