<?php include("admin/config.php"); ?>

<div class="row">
  <?php

    $sql = "SELECT id, SUBSTRING(title, 1, 25) name, SUBSTRING(description, 1, 150) descr, DAY(createdDate) dy, SUBSTRING(MONTHNAME(createdDate), 1, 3) mname FROM News where status = 1 order by createdDate desc LIMIT 3";

    $result = mysqli_query($iCon, $sql);

    if(mysqli_num_rows($result) > 0) {

    ?>
  <h1 class="h_1">Our latest news</h1>
  <?php }

    while ($row = mysqli_fetch_assoc($result)) {

    ?>
  <article class="col-sm-4">
    <div class="new_date"><b><?php echo $row['dy']?></b> <span><?php echo $row['mname']?></span> </div>
    <div class="new_panel">
      <h2 class="h_2"><?php echo $row['name']?></h2>
      <span></span>
      <p> <?php echo $row['descr']?> </p>
      <a class="link_1" href="newsAll.php#news_<?php echo $row['id']?>"> <i class="fa fa-angle-double-right"></i> Read More</a> </div>
  </article>
  <?php } ?>
</div>
