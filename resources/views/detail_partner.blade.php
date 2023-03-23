<?php 

    // $page = '';

?>

<?php 

    // include 'layouts/header.php'
    

?>
<?= $this->extend('templates/general') ?>

<?= $this->section('content') ?>

    <!-- banner -->
	<div class="banner1 mb-2" style="background-image:url('https://images.unsplash.com/photo-1560693225-b8507d6f3aa9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
		<div class="py-lg-5">
            <div class="container pb-sm-4 pt-4">
                <div class="banner-main" style="padding-top: 15%; margin-top: 20px;">
                    <h3 class="fw-bold" style="color: white;">Tentang Agri Bisnis</h3>
                    <ul class="breadcrumb" style="padding-top: 5px;">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="partner.html">Partner</a>
                        </li>
                        <li>
                            Toko Makmur Sejahtera
                        </li>
                    </ul>
                </div>
            </div>
        </div>
	</div>
    <!-- banner -->
    <!-- content -->
    <div class="container">
        <?php

            // foreach ($details_partner as $details){

        ?>
        <div  class="mb-1" style="align-items: center;">
            <h2 style="margin-bottom: 6px;"></h2>
            <h4 class="text-green">Kamis, 17 Maret 2023</h4>
        </div>
        
        <div class="services mb-1 animated wow zoomIn" data-wow-delay=".5s" style="background-image: url(https://images.unsplash.com/photo-1625246333195-78d9c38ad449?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80); border-radius: 5px; filter: brightness(60%);">
            <div class="container services-font">
                
            </div>
        </div>
        <div class="mb-2">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit accusantium facilis animi obcaecati odit aliquid praesentium aperiam voluptates ipsum aspernatur quidem vero soluta est iste quaerat saepe optio, doloribus repudiandae natus sequi provident? Perferendis, minus at a voluptatum autem iure architecto libero vel amet tempora? Molestias ut blanditiis id hic.</p><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto deleniti praesentium molestias numquam quam! Doloremque voluptate impedit minus nesciunt recusandae error cupiditate doloribus maiores architecto tempore! Sit eveniet quaerat esse!</p>
        </div>
        <?php
            //}
        ?>
    </div>
    <!-- end content -->
<!-- footer -->

    <?= $this->endsection() ?>

<?php 

    // include 'layouts/footer.php'

?>