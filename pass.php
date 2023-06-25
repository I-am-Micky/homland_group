<?php 
$password ="HOMLAND_ADMIN001122";

 $pword=password_hash($password, PASSWORD_DEFAULT);
 echo "$pword";

?>