<?php echo "<a href='".ROOT_URL."index.php' class='logo' id='lg'><span id='lg1'>TJEYA</span> electricals</a>" ?>


<ul class="nav_links">
    <?php
        $sql_qry= "SELECT * FROM `menu` WHERE 1" ;
        $sql_ext_qry = mysqli_query($dbConn,$sql_qry);

        if (mysqli_num_rows($sql_ext_qry)>0) {
            while ($row = mysqli_fetch_assoc($sql_ext_qry)) {
                echo "<li><a href='".ROOT_URL."{$row['menu_link']}.php' >{$row['menu_name']}</a></li>";
            }
        }
        else {
            require "/TjeyaElectricals/dB/dbBackup/navBackup.php";
        }
    ?>
</ul>

<div class="hamburger">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
</div>