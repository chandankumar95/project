<?php
session_start();
session_unset();
session_destroy();
 
 
  echo "<script>alert('logout successfully');
   window.location='index.php'</script>";


?>