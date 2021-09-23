<?php 
    $curntPg='abt';
    include "includes/header.php";
?>
    <section class="container">
        <section class="nvSctn abt">
            <nav id="nv">
                <?php include "includes/navigation.php";?>
            </nav>
        </section>
        <!--<div class="cover"></div>-->
        <section class="contentArea">
            <?php //$name=$_SERVER['SERVER_NAME'];echo $name;?>
            <?php include "includes/contentAreaAbt.php";?>
        </section>
<?php include "includes/footer.php";?>