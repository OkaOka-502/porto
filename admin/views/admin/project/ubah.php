    <?php
    if (isset($_POST['simpan'])) {
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['ket'];
    $foto = $_FILES['foto'];
    $namaFoto = $_FILES['foto']['name'];
    $link = $_POST['link'];
    $folder = '../public/assets/img/';
    $folder = $folder . basename($namaFoto);

    if(empty($namaFoto)) {
        $q = mysqli_query($conn, 
        "update project set Nama_p='$nama', Ket='$keterangan'
        where Id_p=$id"
        );
        $message = "<div class='alert alert-success'>Project berhasil diubah!</div>";
    } else {
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $folder)) {
        $q = mysqli_query($conn, 
        "update project set Nama_p='$nama', Ket='$keterangan', Foto='$namaFoto', Link='$link'
        where Id_p=$id"
        );
        $message = "<div class='alert alert-success'>Project berhasil diubah!</div>";
        }
    }
    }


    $id = $_GET['id'];
    $getData = mysqli_query($conn, "select * from project where id_p=$id");
    $data = mysqli_fetch_assoc($getData);
    ?>

    <div class="row">
    <div class="col-md-6">
        <h1>
        Ubah Project <?=$data['nama_p']?>
        <a href="?lokasi=project" class="btn btn-danger">Back</a>
        </h1>
        <?=@$message?>
        <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>NAMA</label>
            <input type="text" name="nama" class="form-control" value="<?=$data['nama_p']?>" required>
        </div>
        <div class="form-group">
            <label>UPLOAD FOTO</label>
            <img src="../public/asset/img/<?=$data['foto']?>" width="300px">
            <input type="file" name="foto" class="form-control">
        </div>
        <div class="form-group">
            <label for="">LINK PROJECT</label>
            <input type="text" name="link" class="form-control">
        </div>
        <div class="form-group">
            <label>KETERANGAN</label>
            <textarea name="ket" cols="30" rows="3" class="form-control" required><?=$data['ket']?></textarea>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    </div>