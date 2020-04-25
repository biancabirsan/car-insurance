<?php
session_start();
unset($_SESSION['make']);
unset($_SESSION['model']);
unset($_SESSION['price']);
unset($_SESSION['engine']);
unset($_SESSION['size']);
unset($_SESSION['area']);
unset($_SESSION['garage']);
unset($_SESSION['age']);
unset($_SESSION['claim']);

header("location:index2.php");
exit();

?>
