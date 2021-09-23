<?php 
    $curntPg='cntctUs';
    include "includes/header.php";
?>
    <section class="container">
        <section class="nvSctn cntct">
            <nav id="nv">
                <?php include "includes/navigation.php";?>
            </nav>
        </section>
        <!--<div class="cover"></div>-->
        <section class="contentArea">
            <?php //$name=$_SERVER['SERVER_NAME'];echo $name;?>
            <?php include "includes/contentAreaCntctUs.php"?>
        </section>
        <section class="blank" id="bln">
        </section>
<?php include "includes/footer.php";?>