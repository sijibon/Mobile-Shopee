<?php 
include ("tamplate/header.php");
?>

    <!-- start #main-site -->
        <main id="main-site">

        <?php 
            // banner area
            include ("tamplate/banner_area.php");
        ?>

          <!-- Top Sale -->
        <?php
            include ("tamplate/top_sale.php");
        ?>
        <!-- !Top Sale -->

        <!-- Special Price -->
            <?php
                include ("tamplate/special_price.php");
            ?>
        <!-- !Special Price -->

        <!-- Banner Ads  -->
            <?php
                include ("tamplate/ads_banner.php");
            ?>
        <!-- !Banner Ads  -->

          <!-- New Phones -->
            <?php
                include ("tamplate/new_phones.php");
            
            ?>
          <!-- !New Phones -->

          <!-- Blogs -->
            <?php
                 include ("tamplate/blog.php");
            ?>
          <!-- !Blogs -->

        </main>
    <!-- !start #main-site -->
<?php
include ("tamplate/footer.php");
?>