
<?php
      $id=$row['id'];
      $type=$row['catagory'];
      $tname=$row['Name'];
      $Oprice=$row['old_price'];
      $Nprice=$row['new_price'];
      $Availabel=$row['Available'];
      $image=$row['image'];
     ?>
      
<style>.image-container {
    width: 400px; 
    height: 400px; 
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.image-container img {
            width: 80%;
            height: auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
}
</style>

        <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
        <div class="card">
          <div class="d-flex justify-content-between p-3">
            <p class="lead mb-0">Today's Combo Offer</p>
            <div
              class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
              style="width: 35px; height: 35px;">
              <p class="text-white mb-0 small">x<?php echo " $Availabel"; ?></p>
            </div>
          </div>
          <div class="image-container">
    <img src="..\admin\<?php echo $image; ?>" class="card-img-top" alt="Laptop" />
</div>
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <p class="small"><a href="#!" class="text-muted"><?php echo "$type"; ?></a></p>
              <p class="small text-danger"><s><?php echo "$Oprice"; ?></s></p>
            </div>

            <div class="d-flex justify-content-between mb-3">
              <h5 class="mb-0"><?php echo "$tname "; ?></h5>
              <h5 class="text-dark mb-0"><?php echo "$Nprice"; ?></h5>
            </div>

            <div class="d-flex justify-content-between mb-2">
              <p class="text-muted mb-0">Available: <span class="fw-bold"><?php echo " $Availabel"; ?></span></p>
              <div class="ms-auto text-warning">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div>
                
              <a class="mb-0 btn btn-success" href="add.php?id=<?php echo $id; ?>">
          ADD
        </a> </div>
            </div>
            
          </div>
        </div>
      </div>

      