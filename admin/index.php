
  <?php
  error_reporting(0);
  
  include('header.php');
  include('sidemenu.php');

  $page = $_GET['page'];

  // if(!empty($page) || isset($page)){
  //   $myPage = $page.".php";
  //   include("pages/".$myPage);
  // }else{
  //   include('pages/home.php');
  // }
  
  switch ($page) {
    case 'user':
      include('pages/user.php');
      break;
    case 'cadUser':
      include('pages/cadUser.php');
      break; 
    case 'AtUser':
      include('pages/AtUser.php');
      break; 
    default:
      include('pages/home.php');
      break;
  }

  include('footer.php');
  ?>
  
  