<?php
ob_start();

define('DIR_BASE',dirname(dirname(__FILE__)).'/');
define('HEAD', DIR_BASE.'head.php');
define('FOOTER', DIR_BASE.'footer.php');
define('ADMIN_HEAD', DIR_BASE.'admin/admin_head.php');
define('ADMIN_FOOTER', DIR_BASE.'admin/admin_footer.php');
define('ADMIN_NAV', DIR_BASE.'admin/admin_nav.php');
define('ADMIN_SIDEBAR', DIR_BASE.'admin/admin_sidebar.php');
// echo DIR_BASE;

$host = "localhost";
$user = "root";
$password = "";
$db_name = "flickarenadb";

$db = mysqli_connect($host, $user, $password, $db_name);
// if($db){
//   echo "we are connected!!";
// }

function config($key = ''){
  $config = [
    'site_name' => 'Flickarena',
    'site_domain' => 'http://'.$_SERVER['HTTP_HOST'],
    'route' => [
      'home' => '/',
      'posts' => 'posts',
      'login' => '/pages/log_in.php',
      'admin' => '/pages/admin',
      'admin_profile' => '/pages/admin/pages/profile',
      'admin_posts' => '/pages/admin/pages/posts',
      'admin_users' => '/pages/admin/pages/users',
      'admin_messages' => '/pages/admin/pages/messages',
      'logout' => '/pages/admin/pages/logout.php'
    ]
  ];
  return isset($config[$key]) ? $config[$key] : null ;
}
function getRoute( $key ='' ){
  $routes = config('route');
  return isset($routes[$key]) ? $routes[$key] : null ;
}


?>