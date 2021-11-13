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
       <!-- End Search Popap -->
            <!-- Start Cart Panel -->
            
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
        <?php
            include('partials/slider.php');
        ?> 
        <!-- Start Category Area  (I remove category area)-->
        
        <!-- Start Product Area -->
        <section class="ftr__product__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Best Seller</h2>
                            <p>But I must explain to you how all this mistaken idea</p>
                        </div>
                    </div>
                </div>
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
                                        <img src="<?php echo $final['picture'] ?>" alt="Product Photo" style="min-height:300px; max-height:300px" ></a>
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
                                        <li class="old__prize"><?php echo $final['price'] ?></li>
                                      <!--  <li>$25.9</li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- End Single Category -->
                    </div>
                    <!-- Load more -->
			            <div style="text-align:center;">
				            <a href="shop.php">
				            <h1 style="color:black;">Load More</h1>
				        </a>
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
	
	 <script type="text/javascript">
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"2c1cb2b4ca735dc1c8778876e6dea74b9","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>

</body>

</html>