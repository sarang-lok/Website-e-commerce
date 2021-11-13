<!doctype html>
<html class="no-js" lang="en">
<?php
	include("partials/connect.php");
    include('partials/head.php');
?><body>
   
    <!-- Body main wrapper start -->
    <div class="wrapper">


        <!-- Start Header Style -->
        <?php
            include('partials/header.php');
        ?>   
  <!-- End Cart Panel -->
        </div>
		<div style="text-align:center;">
		    <a>
		    <h1 style="color:black;">All Products</h1>
		    </a>
		</div>
		<?php
            include('partials/slider.php');
        ?>
        <br>
        <!-- End Offset Wrapper -->

        <!-- Start Category Area  (I remove category area)-->
        
        <!-- Start Product Area -->
        <section class="ftr__product__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="product__wrap clearfix">
                        <!-- Start Single Category -->
                            <?php 
				            
				            $sql="Select * from products";
				            $results=$connect->query($sql);
				            while ($final=$results->fetch_assoc()) { ?>
                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                    <a href="product-details.php?details_id=<?php echo $final['id']?>">
                                        <img src="<?php echo $final['picture'] ?>" alt="Product Photo" style="min-height:300px; max-height:300px"></a>
                                </div>
                                <div class="fr__hover__info">
                                    <ul class="product__action">
                                        <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                        <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="fr__product__inner">
                                    <h4><a href="product-details.php"><?php echo $final['name'] ?></a></h4>
                                    <ul class="fr__pro__prize">
                                        <li class="old__prize">₹<?php echo $final['price'] ?>/-</li>
                                      <!--  <li>$25.9</li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- End Single Category -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Area -->


        <?php
            include('partials/footer.php');
        ?>
    </div>
     <!-- jquery latest version -->
     <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>