<?php 
session_start();
include('config/Config.php');
include('core/koneksi.php');

if(!isset($_SESSION['login'])) {
    include('login.php');
}else{
    include('views/admin/index.php');
}
?>