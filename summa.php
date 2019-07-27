<?php
 $connect = mysqli_connect('localhost','root','','schoolwebsite');
$id = (isset($_GET['regno']) ? $_GET['regno'] : 0);
echo $id;
?>