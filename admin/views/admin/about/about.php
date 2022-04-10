    <!--
    =========================================================
    * Soft UI Dashboard - v1.0.5
    =========================================================

    * Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
    * Copyright 2022 Creative Tim (https://www.creative-tim.com)
    * Licensed under MIT (https://www.creative-tim.com/license)
    * Coded by Creative Tim

    =========================================================

    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
        <!-- End Navbar -->
        <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
            <div class="card h-100">
                <d class="card-header pb-0 p-3">
                <div class="row col-12">
                <?php $a = mysqli_query($conn, "SELECT * FROM user");
 ?>


<?php foreach($a as $user):?>
        <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                    <h3 class="mb-0">User</h3>
                    </div>
                    <div class="col-md-4 text-end">
                    <a href="?lokasi=editu">
                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                    </a>
                    </div>
                </div>
                </div>
                <div class="card-body p-3">
                <hr class="horizontal gray-light my-4">
                <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><img class="rounded-circle" src="<?= baseurl;?>/asset/img/<?= $user['foto'];?>" alt="" width="180px" height="200"></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Nama:</strong> &nbsp; <?= $user['nama']?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Jabatan:</strong> &nbsp; <?=$user['jabatan']?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Perusahaan:</strong> &nbsp; <?=$user['perusahaan']?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; Indonesian</li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        </div>
<?php endforeach;?>
                
                    
<?php  $b = mysqli_query($conn, "SELECT * FROM about"); ?>

<div class="row mt-2">
    <div class="col-md-8 d-flex align-items-center">
        <h3 class="mb-1">About Me</h3>
    </div>
    <div class="col-md-4 text-end">
        <a href="?lokasi=editb">
    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
        </a>
    </div>
    <?php foreach($b as $about):?>
    <div class="card text-center">
        <div class="card-body">
            <h6 class="card-title"><?= $about['column1'];?></h6>
            <p class="card-text"><?= $about['column2'];?></p>
        </div>
    <?php endforeach;?>   
    </div>
</div>