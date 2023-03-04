<div id="pesan" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>Kotak Pesan</h4>
      <ul class="collection">
        <?php foreach ($notif as $data ): ?>
              <li class="collection-item avatar">

                <span class="title">Pengirim : <?php echo $data->pengirim; ?> </span>
                <p> <?php echo $data->pesan; ?>
                </p><br>
                <p> <?php echo $data->timestamp; ?> </p>

                <a href="<?php echo base_url()."mahasiswa/C_sidang/delete_notif/".$data->id_notification;?>" class="secondary-content"><i class="material-icons">delete</i></a>
              </li>
        <?php endforeach ?>
    </ul>
    </div>
  </div>