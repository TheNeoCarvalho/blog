
  <?php
  error_reporting(0);
  session_start();

  include('../config/database.php');

  if(!$_SESSION['user']){
    header('location: http://localhost/blog/admin/login.php');
  }
  
  include('header.php');
  include('sidemenu.php');

  $page = $_GET['page'];

  if(!empty($page) || isset($page)){
    include('pages/'.$page.'.php');
    exit;
  }else{
    include('pages/home.php');
    exit;
  }

  include('footer.php');
  ?>
  
  