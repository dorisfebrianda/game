<?php
  include "server.php";
  $username = $_REQUEST['username'];
  $email = $_REQUEST['email'];
  $psw = $_REQUEST['psw'];
  $pswrepeat = $_REQUEST['psw-repeat'];
 // $conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
  $mysqli = "INSERT INTO register (username, email, password, confrim_password) VALUES ('$username', '$email', '$psw', '$pswrepeat')";
  $result = mysqli_query($conn, $mysqli);
  header('Location: sukses.php');
  mysqli_close($conn);
?>