
  <?php
  error_reporting(0);
  include('./config/database.php');

  $page = $_GET['page'];

  if(!empty($page) || isset($page)){
    if(file_exists("{$page}.php")){
      include("{$page}.php");
    }else{
      include("404.php");
    }
  }else{
    include("home.php");
  }

  