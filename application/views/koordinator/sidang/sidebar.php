<div class="sidebar" data-background-color="white" data-active-color="info">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo base_url(); ?>koordinator/Chart_judul" class="simple-text">
                   <strong>Koordinator Panel</strong>
                </a>
            </div>
            <ul class="nav">
                <li>
                    <a href="<?php echo base_url(); ?>koordinator/Chart_judul">
                        <i class="glyphicon glyphicon-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <div class="logo">
                </div>
                <li>
                    <a href="<?php echo base_url(); ?>koordinator/Pengajuan">
                        <i class="glyphicon glyphicon-th-list"></i>
                        <p>Pengajuan Judul TA</p>
                    </a>
                </li>
                <div class="logo">
                </div>
                <li>
                    <a href="<?php echo base_url(); ?>koordinator/Pendaftar_senpro">
                        <i class="glyphicon glyphicon-blackboard"></i>
                        <p>Pendaftar Sempro</p>
                    </a>
                </li>
                <div class="logo">
                </div>
                <li class="active">
                    <a href="<?php echo base_url(); ?>koordinator/Jadwal_sidang">
                        <i class="glyphicon glyphicon-education"></i>
                        <p>Jadwal Sidang</p>
                    </a>
                </li>
                <div class="logo">
                </div>
                <li>
                <p><br></p>
                </li>
                <li class="active-pro">
                    <a href="<?php echo base_url(); ?>karyawan_login/logout">
                        <i class="glyphicon glyphicon-log-out"></i>
                        <p>LogOut</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>