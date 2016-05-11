<?php include("admin/config.php"); ?>

<div class="row">
  <?php

    $sql = "SELECT * FROM EventGallery where status = 1 order by createdDate desc LIMIT 3";

    $result = mysqli_query($iCon, $sql);

    if(mysqli_num_rows($result) > 0) {

    ?>
  <h1 class="h_1">Event gallery</h1>
  <?php }

    while ($row = mysqli_fetch_assoc($result)) {

    ?>
  <div class="col-sm-3 client_page">
      <figure>
        <a > <span> <img
                src="admin/<?php echo $row['imageFileName'] ?>"> </span> </a>
        <figcaption>
          <h1><?php echo $row['name'] ?></h1>
        </figcaption>
      </figure>
    </div>
  <?php } ?>
</div>
