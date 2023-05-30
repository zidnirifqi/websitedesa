<?php
session_start();
include('koneksi.php');
//protect dari mysql injection
$uname = mysqli_real_escape_string($con, $_POST['uname']);
$pass = mysqli_real_escape_string($con, $_POST['pass']);
$query="select * from t_admin where uname='$uname' and pass=md5('$pass')";
$sql= mysqli_query($con, $query);
$cek= mysqli_num_rows($sql);
$row = mysqli_fetch_array($sql);
$_SESSION['level']=$row['level'];
$_SESSION['uname']=$row['uname'];
if ($_SESSION['level']=='admin'){
 header('location:home.php');
//ubah sesuai keinginan
} else if($_SESSION['level']=='staff'){
 header('location:staff.php');
} else{
 session_destroy();

 echo "<script>alert('Username atau Password salah !'); window.location = 'index.php'</script>"; 
}
 ?>
 
