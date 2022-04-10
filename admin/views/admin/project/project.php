<?php
error_reporting(0);
if ($_GET['id']) {
    $id = $_GET['id'];
    $k = mysqli_query($conn, "DELETE FROM project where id_p=$id");
}
?>
<?php 
$p = mysqli_query($conn, "SELECT * FROM project");
?>

<div class="container-fluid px-2 px-md-4">
        <div class="card card-body min-height-400 border-radius-xl mt-4">
        <div class="col-12 mt-4">
        <div class="mb-5 ps-3">
            <h6 class="mb-1">Projects
            <a href="?lokasi=tambah" style="margin-left: 50rem; margin-top: 7px;" class="btn btn-success btn-sm ">Insert</a>
            </h6>
        </div>
        <div class="row">
            <?php foreach($p as $proj): ?>
            <div class="col-md-4">
            <div class="card text-center" style="width: 18rem;">
                <img src="<?= baseurl;?>/asset/img/<?= $proj['foto'];?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><?= $proj['nama_p'];?></h5>
                <p><?= $proj['ket'];?></p>
                <a  href="<?= $proj['link'];?>">Lihat Disini</a>
                <div class="row">
                <a href="?lokasi=project&id=<?= $proj['id_p'] ?>" class="btn btn-danger col-5">Delete</a>
                <a  href="?lokasi=ubah&id=<?=$proj['id_p']?>" class="btn btn-info col-5">Edit</a>
                </div>
                </div>
            </div>
            
            </div>
            <?php endforeach;?>
        </div>
        </div>
        </div>
</div>
