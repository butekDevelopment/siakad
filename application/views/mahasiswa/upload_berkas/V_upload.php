      <br><br>
      <h3 class="header center">UPLOAD BERKAS TA</h3>

      <div class="row center">
        <h6 class="header col s12 light">Form ini digunakan untuk mengupload berkas revisi TA sebagai syarat untuk Yudisium & Wisuda</h6>
      </div>
      <br><br>

    </div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="input-field col s12">
        <label class="active" for="Judul">Judul :  </label>
          <input id="Judul" type="text" class="validate" value="<?php 
            foreach ($mahasiswa->result() as $m) {
              echo $m->judul_TA;
            }
        ?>" disabled>
        </div>
      </div>

      <?php echo form_open("mahasiswa/C_berkas/proses_upload_berkas", array('enctype'=>'multipart/form-data')); ?>
      <table class="bordered highlight">
        <tbody>
          <tr>
            <td>1. File scan Berita Acara</td>
            <td>
              <?php 
              if(empty($detail_bks->beritaAcaraTA)) {
                  echo "<input type='file' name='file1' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file1' value='' style='display:none'>";
                  echo "<input type='file' name='file1' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->beritaAcaraTA)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>2. File Sampul</td>
            <td>
              <?php 
              if(empty($detail_bks->sampul)) {
                  echo "<input type='file' name='file2' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file2' value='' style='display:none'>";
                  echo "<input type='file' name='file2' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->sampul)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>3. File scan Pengesahan TA</td>
            <td>
              <?php 
              if(empty($detail_bks->pengesahanTA)) {
                  echo "<input type='file' name='file3' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file3' value='' style='display:none'>";
                  echo "<input type='file' name='file3' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->pengesahanTA)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>4. File Persembahan</td>
            <td>
              <?php 
              if(empty($detail_bks->persembahan)) {
                  echo "<input type='file' name='file4' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file4' value='' style='display:none'>";
                  echo "<input type='file' name='file4' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->persembahan)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>5. File Motto</td>
            <td>
              <?php 
              if(empty($detail_bks->motto)) {
                  echo "<input type='file' name='file5' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file5' value='' style='display:none'>";
                  echo "<input type='file' name='file5' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->motto)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>6. File scan Pernyataan TA</td>
            <td>
              <?php 
              if(empty($detail_bks->pernyataanTA)) {
                  echo "<input type='file' name='file6' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file6' value='' style='display:none'>";
                  echo "<input type='file' name='file6' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->pernyataanTA)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>7. File Abstrak</td>
            <td>
              <?php 
              if(empty($detail_bks->abstrak)) {
                  echo "<input type='file' name='file7' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file7' value='' style='display:none'>";
                  echo "<input type='file' name='file7' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->abstrak)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>8. File Ringkasan</td>
            <td>
              <?php 
              if(empty($detail_bks->ringkasan)) {
                  echo "<input type='file' name='file8' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file8' value='' style='display:none'>";
                  echo "<input type='file' name='file8' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->ringkasan)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>9. File Prakata</td>
            <td>
              <?php 
              if(empty($detail_bks->prakata)) {
                  echo "<input type='file' name='file9' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file9' value='' style='display:none'>";
                  echo "<input type='file' name='file9' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->prakata)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>10. File Daftar Isi</td>
            <td>
              <?php 
              if(empty($detail_bks->daftarIsi)) {
                  echo "<input type='file' name='file10' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file10' value='' style='display:none'>";
                  echo "<input type='file' name='file10' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->daftarIsi)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>11. File Daftar Tabel</td>
            <td>
              <?php 
              if(empty($detail_bks->daftarTabel)) {
                  echo "<input type='file' name='file11' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file11' value='' style='display:none'>";
                  echo "<input type='file' name='file11' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->daftarTabel)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>12. File Daftar Gambar</td>
            <td>
              <?php 
              if(empty($detail_bks->daftarGambar)) {
                  echo "<input type='file' name='file12' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file12' value='' style='display:none'>";
                  echo "<input type='file' name='file12' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->daftarGambar)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>13. File Daftar Lampiran</td>
            <td>
              <?php 
              if(empty($detail_bks->daftarLampiran)) {
                  echo "<input type='file' name='file13' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file13' value='' style='display:none'>";
                  echo "<input type='file' name='file13' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->daftarLampiran)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>14. File Bab 1</td>
            <td>
              <?php 
              if(empty($detail_bks->bab1)) {
                  echo "<input type='file' name='file14' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file14' value='' style='display:none'>";
                  echo "<input type='file' name='file14' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->bab1)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>15. File Bab 2</td>
            <td>
              <?php 
              if(empty($detail_bks->bab2)) {
                  echo "<input type='file' name='file15' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file15' value='' style='display:none'>";
                  echo "<input type='file' name='file15' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->bab2)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>16. File Bab 3</td>
            <td>
              <?php 
              if(empty($detail_bks->bab3)) {
                  echo "<input type='file' name='file16' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file16' value='' style='display:none'>";
                  echo "<input type='file' name='file16' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->bab3)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>17. File Bab 4</td>
            <td>
              <?php 
              if(empty($detail_bks->bab4)) {
                  echo "<input type='file' name='file17' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file17' value='' style='display:none'>";
                  echo "<input type='file' name='file17' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->bab4)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>18. File Bab 5</td>
            <td>
              <?php 
              if(empty($detail_bks->bab5)) {
                  echo "<input type='file' name='file18' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file18' value='' style='display:none'>";
                  echo "<input type='file' name='file18' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->bab5)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>19. File Daftar Pustaka</td>
            <td>
              <?php 
              if(empty($detail_bks->daftarPustaka)) {
                  echo "<input type='file' name='file19' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file19' value='' style='display:none'>";
                  echo "<input type='file' name='file19' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->daftarPustaka)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
          <tr>
            <td>20. File Lampiran</td>
            <td>
              <?php 
              if(empty($detail_bks->lampiran)) {
                  echo "<input type='file' name='file20' class='waves-effect waves-light blue darken-1 btn'>";  
              }else {
                  echo "<input type='file' name='file20' value='' style='display:none'>";
                  echo "<input type='file' name='file20' class='waves-effect waves-light blue darken-1 btn' disabled=''>";
              }
              ?>
            </td>
            <td>
              <?php
              if(empty($detail_bks->lampiran)) {
                  echo "<i class='material-icons'>check_box_outline_blank</i>";
              }else {
                  echo "<i class='material-icons' style='color: #26a69a;'>check_box</i>";
              } 
              ?>
            </td>
          </tr>
        </tbody>
      </table>
      <br><br>

      <div class="row">
      	<div class="col s3">*File berupa PDF</div>
      	<div class="col s3"></div>
      	<div class="col s3"></div>
      	<div class="col s3">
          <?php 
            if (!empty($detail_bks->beritaAcaraTA) && !empty($detail_bks->sampul) && !empty($detail_bks->pengesahanTA) && !empty($detail_bks->persembahan) && !empty($detail_bks->motto) && !empty($detail_bks->pernyataanTA) && !empty($detail_bks->abstrak) && !empty($detail_bks->ringkasan) && !empty($detail_bks->prakata) && !empty($detail_bks->daftarIsi) && !empty($detail_bks->daftarTabel) && !empty($detail_bks->daftarGambar) && !empty($detail_bks->daftarLampiran) && !empty($detail_bks->bab1) && !empty($detail_bks->bab2) && !empty($detail_bks->bab3) && !empty($detail_bks->bab4) && !empty($detail_bks->bab5) && !empty($detail_bks->daftarPustaka) && !empty($detail_bks->lampiran)) {
                echo "<input type='submit' value='menunggu konfirm' class='btn btn-success' disabled=''>";
            }
            else {
                echo "<input type='submit' value='upload berkas' class='btn btn-success'>";
            }
          ?>
        </div>
      </div>
      <?php echo form_close() ?>

    </div>
    <br><br>