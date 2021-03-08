<?php 
include "db1.php";

if(!$pdo) {
    echo "PHP & MySQL Connection: Error! " . mysqli_connect_errno() . ' - ' . mysqli_connect_error();
    exit;
} else {
    echo 

$sql ="CREATE TABLE post_site (
  id int(11) NOT NULL,
  title text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  text text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  time text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

$sql1 = "
CREATE TABLE users (
  id int(11) NOT NULL,
  username text NOT NULL,
  email text NOT NULL,
  password text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";
    $query = mysqli_query($pdo , $sql1);
    $query = mysqli_query($pdo, $sql);
    if(!$query){
        echo "Creating Table tblname: Error! " . mysqli_error($pdo);
    } else{
        echo "دیتابیس مورد نظر ایجاد شد"?> 
    <a href="../index.php"> برو به خانه </a>  <?php
       
     
    }
}
//پایان اتصال
mysqli_close($pdo);
?>

