<?php
$id = $row['id'];
$type = $row['catagory'];
$tname = $row['Name'];
$Oprice = $row['old_price'];
$Nprice = $row['new_price'];
$Availabel = $row['Available'];
$image = $row['image'];
?>



<div class="col-md-6 col-lg-4 mb-4 mb-md-0">
  <div class="card">
    <div class="d-flex justify-content-between p-3">
      <p class="lead mb-0">Today's Combo Offer</p>
      <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
        style="width: 35px; height: 35px;">
        <p class="text-white mb-0 small">x
          <?php echo " $Availabel"; ?>
        </p>
      </div>
    </div>
    <img src="<?php echo $image; ?>" class="card-img-top" alt="Laptop"  />
    <div class="card-body mt-4">
      <div class="d-flex justify-content-between">
        <p class="small"><a href="#!" class="text-muted">
            <?php echo "$type"; ?>
          </a></p>
        <p class="small text-danger"><s>
            <?php echo "$Oprice"; ?>
          </s></p>
      </div>

      <div class="d-flex justify-content-between mb-3">
        <h5 class="mb-0">
          <?php echo "$tname "; ?>
        </h5>
        <h5 class="text-dark mb-0">
          <?php echo "$Nprice"; ?>
        </h5>
      </div>

      <div class="d-flex justify-content-between mb-2">
        <p class="text-muted mb-0">Available: <span class="fw-bold">
            <?php echo " $Availabel"; ?>
          </span></p>
      
        <div class="ms-auto text-warning">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <div class="d-flex justify-content-between mb-3">
        <a class="mb-0 btn btn-danger" href="adItemDelete.php?id=<?php echo $id; ?>">
          Deleted
        </a>
        <a href="adItemUpdated.php?id=<?php echo $id;?>" class="text-dark mb-0 btn btn-warning ml-2">
          Updated
        </a>
      </div>
      </div>
    </div>
  </div>
</div>