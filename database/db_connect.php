<?php
$con=mysqli_connect("localhost","epiz_27617982","7RyfVgOIpth3j","epiz_27617982_blog_admin_db");
 mysqli_set_charset( $con, 'utf8');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 ?>