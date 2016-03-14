<!--<h1>Our services</h1>
<ul>
    <li><a href="businessServices.php#service_1">Marine IT Solutions</a></li>
    <li><a href="businessServices.php#service_2">Marine Software Solutions</a></li>
    <li><a href="businessServices.php#service_3">KPO services</a></li>
    <li><a href="businessServices.php#service_4">Miscellaneous</a></li>
</ul>-->

<h1>business services</h1>
<ul>
    <?php
    $catSql = "SELECT id, name FROM Category where status = 1 order by displayOrder";
    $catRowNum = 1;
    $catResult = mysqli_query($iCon, $catSql);
    while ($catRow = mysqli_fetch_assoc($catResult)) {
        ?>
        <li <?php if ($catRowNum == 1) { ?>class="active"<?php } ?>><a href="businessServices.php#service_<?php echo $catRow['id'] ?>"><?php echo $catRow['name'] ?></a></li>
        <?php $catRowNum ++; } ?>
</ul>