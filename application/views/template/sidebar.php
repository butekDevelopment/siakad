<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
          <p>Admin</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
            <li><a href="<?php echo site_url('admin/c_versempro'); ?> "><i class="fa fa-table"></i> <span>verifikasi sempro</span></a></li>

			<li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Study Tracer</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>modul5/panelkaryawan"><i class="fa fa-circle-o"></i> Data Studytracer</a></li>
                    <li><a href="<?php echo base_url(); ?>modul5/validasistudytracer"><i class="fa fa-circle-o"></i> Validasi Data Tracer</a></li>
                    <li><a href="<?php echo base_url(); ?>modul5/tracer/data_tracer"><i class="fa fa-circle-o"></i> Validasi Hak Akses</a></li>
                 </ul>
                </a>
            </li>
            <li>
				<a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Yudisium</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>modul5/Yudisium/data_yudisium"><i class="fa fa-circle-o"></i> Yudisium</a></li>
				   <li><a href="<?php echo base_url(); ?>modul5/Yudisium/grafik_data_yudisium"><i class="fa fa-circle-o"></i>Grafik Data Yudisium</a></li>
				   </ul>
                </a>
            </li>

            <li><a href="<?php echo site_url('auth/logout'); ?> "><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
        </ul>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
