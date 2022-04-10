<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_b'];
$c1 = $_GET['column1'];
$c2 = $_GET['column2'];

//query update
$query = "UPDATE about SET column1='$c1' , column2='$c2' WHERE id_b='$id' ";

if (mysqli_query($query)) {
# credirect ke page index
header("location:pagemhs.php"); 
}else{
    echo "ERROR, data gagal diupdate". mysqli_error();
}

//mysql_close($host);
?>
