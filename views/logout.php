<?php 

session_start();
session_unset();
session_destroy();

echo "
<script>
  alert('Anda Telah Logout');
  window.location.href = '../index.php'; 
</script>";

?>