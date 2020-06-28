
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
    if(file_exists("pages/{$page}.php")){
      include("pages/{$page}.php");
    }else{
      include("pages/404.php");
    }
  }else{
    include("pages/home.php");
  }

  include('footer.php');
  ?>
  
  