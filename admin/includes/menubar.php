<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $user['fullname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="header">Agape Kids Choir</li>
      <li class=""><a href="kids.php"><i class="fa fa-dashboard"></i> <span>Agape Kids Choir</span></a></li>
      <li class=""><a href="accounts.php"><i class="fa fa-dashboard"></i> <span>Create Accounts</span></a></li>
      <li class="header">Agape Children's Village</li>
      <li class=""><a href="acv.php"><i class="fa fa-users"></i> <span>ACV</span></a></li>
      <li class=""><a href="acvsecondary.php"><i class="fa fa-file-text"></i></span> <span>Secondary Students</span></a></li>
      <li class=""><a href="acvprimary.php"><i class="fa fa-pencil"></i></span> <span>Primary Pupils</span></a></li>
      <li class=""><a href="acvnursery.php"><i class="fa fa-book"></i></span> <span>Nusery</span></a></li>

      <li class="header">ACCS</li>
      <li class=""><a href="accsb.php"><i class="fa fa-users"></i> <span>ACCS Bukerere</span></a></li>
      <li class=""><a href="accsi.php"><span class="glyphicon glyphicon-lock"></span> <span>ACCS Iganga</span></a></li>

      <li class="header">Agape Institute & University Scholarships</li>
      <li class=""><a href="university.php"><i class="fa fa-file-text"></i> <span>Institute & University</span></a></li>
      <li class=""><a href="finalist.php"><i class="fa fa-file-text"></i> <span>Finalists</span></a></li>
      <li class=""><a href="freshers.php"><i class="fa fa-cog"></i> <span>Freshers</span></a></li>
      <li class=""><a href="others.php"><span>Others</span></a></li>

      <li class="header">Agape Heart 2 Heart</li>
      <li class=""><a href="heart2heartgallery.php"><i class="fa fa-tasks"></i> <span>Agape Heart 2 Heart</span></a></li>
      <li class="header">Agape Women of Worth</li>
      <li class=""><a href="women.php"><i class="fa fa-black-tie"></i> <span>Agape Women of Worth</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php include 'config_modal.php'; ?>