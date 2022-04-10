<?php 
if($_GET['del']) {
  $id = $_GET['del'];
  $delete = mysqli_query($conn, 
  "DELETE FROM `contact` WHERE id_k=$id");

  if($delete) $pesan = "<div class='alert alert-success'>Pesan telah dihapus!</div>";
}
?>



<div class="row col-11 ">
<h1>Contact</h1>
  <div class="main-content position-relative bg-gray-100 max-height-vh-80 h-80">
    <div class="container-fluid py-4 mt-3">
      <div class="row">
        <div class="col-12">
          <div class="card mb-7">
            <div class="card-header pb-0">
              <h6>Authors table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Message</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $q = mysqli_query($conn, "SELECT * FROM contact");
                    $z = mysqli_num_rows($q);
                    if($z > 0) {
                      $i = 0;
                      while($data=mysqli_fetch_array($q)) { $i++?>
                        <tr>
                          <td><?=$i?>.</td>
                          <td><?=$data['nama_k']?></td>
                          <td><?=$data['email']?></td>
                          <td><?=$data['pesan']?></td>
                          <td>
                          <a onclick="del(<?=$data['id_k']?>)" class="btn btn-danger">Delete</a>
                      <?php } // end looping data
                    } // end if
                    else { ?>
                      <tr>
                        <td colspan="4" class="text-center"><i>No Message</i></td>
                      </tr>
                      <?php  } //end else ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  </div>
<script>
  function del(id){
    let conf = confirm('Are You Sure?');
    if(conf){
      location.href = "?lokasi=contact&del=" +id;
    }
  }
</script>