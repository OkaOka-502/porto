<?php  $b = mysqli_query($conn, "SELECT * FROM about"); ?>

<div class="row mt-2">
    <div class="col-7 d-flex align-items-center">
        <h3 class="mb-1">About Me</h3>
    </div>
    <?php foreach($b as $about):?>
    <div class="col-md-4 text-end">
        <a id="ubah" data-bs-toggle="modal" data-bs-target="#ubahModal" data-id="<?= $about['id_b'];?>"  data-column1="<?= $about['column1'];?>" data-column2="<?= $about['column2'];?>" >
    <i class="fas fa-user-edit text-secondary text-sm"  title="Edit Profile"> Edit</i>
        </a>
    </div>
 
    <div class="card text-center">
        <div class="card-body">
            <h6 class="card-title"><?= $about['column1'];?></h6>
            <p class="card-text"><?= $about['column2'];?></p>
        </div>
    <?php endforeach;?>   
    </div>
</div>

<div class="modal fade" id="ubahModal" tabindex="-1" aria-labelledby="ubahModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ubahModalLabel">Edit About</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
            <input type="hidden" name="id_p" id="id_p">
          <div class="mb-3">
            <label for="column1" class="col-form-label">Column 1:</label>
            <textarea class="form-control" id="column1" name="column1"></textarea>
          </div>
          <div class="mb-3">
            <label for="column2" class="col-form-label">Column 2:</label>
            <textarea class="form-control" id="column2" name="column2"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="ubah" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).on("click", "#ubah", function(){
        let id = ($this).data('id');
        let column1 = ($this).data('column1');
        let column2 = ($this).data('column2');

    $(".modal-body #id_b").val(id);
    $(".modal-body #column1").val(column1);
    $(".modal-body #column2").val(column2);
    });
</script>