<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Main Navigation</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="<?php echo base_url(); ?>acara">
          <i class="fa fa-dashboard"></i> <span>Acara</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <!-- dari acara view dilempar ke namafungsi/parameter di controller  -->
          <li class=""><a href="<?php echo base_url(); ?>acara/kajian/Kajian?jenis=<?php echo 'Kajian' ?>"><i class="fa fa-circle-o"></i> Kajian</a></li>
          <li><a href="<?php echo base_url(); ?>acara/jumatan/Jumatan?jenis=<?php echo 'Jumatan' ?>"><i class="fa fa-circle-o"></i> Jumatan</a></li>
          <li><a href="<?php echo base_url(); ?>acara/haribesarislam/Hari Besar Islam?jenis=<?php echo 'Hari Besar Islam' ?>"><i class="fa fa-circle-o"></i> Hari Besar Islam</a></li>
        </ul>
      </li>

      <li class="">
        <a href="<?php echo base_url(); ?>penceramah">
          <i class="fa fa-user"></i> <span>Penceramah</span>
        </a>
      </li>
      <li class="">
        <a href="<?php echo base_url(); ?>bilal">
          <i class="fa fa-users"></i> <span>Bilal</span>
        </a>
      </li>
      <li class="">
        <a href="<?php echo base_url(); ?>template_pesan">
          <i class="fa fa-edit"></i> <span>Template Pesan</span>
        </a>
      </li>
      <li class="">
        <a href="<?php echo base_url(); ?>pesan">
          <i class="fa fa-edit"></i> <span>Pesan</span>
        </a>
      </li>
      <li class="treeview">
        <a href="<?php echo base_url(); ?>Foto">
          <i class="fa fa-photo"></i> <span>Dokumentasi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <!-- dari acara view dilempar ke namafungsi/parameter di controller  -->
          <li class=""><a href="<?php echo base_url(); ?>foto/kajian/Kajian?jenis=<?php echo 'Kajian' ?>"><i class="fa fa-circle-o"></i> Kajian</a></li>
          <li><a href="<?php echo base_url(); ?>foto/jumatan/Jumatan?jenis=<?php echo 'Jumatan' ?>"><i class="fa fa-circle-o"></i> Jumatan</a></li>
          <li><a href="<?php echo base_url(); ?>foto/haribesarislam/Hari Besar Islam?jenis=<?php echo 'Hari Besar Islam' ?>"><i class="fa fa-circle-o"></i> Hari Besar Islam</a></li>
        </ul>
      </li>
      <li class="">
        <a href="#">
          <i class="fa fa-lock"></i> <span>Ganti Password</span>
        </a>
      </li>
      <li class="">
        <a href="<?php echo base_url('auth/logout'); ?>" onclick="return confirm ('Apakah anda yakin ingin keluar?')">
          <i class="fa fa-sign-out"></i> <span>Logout</span>
        </a>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>