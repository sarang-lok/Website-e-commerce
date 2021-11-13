<!doctype html>
<html class="no-js" lang="en">
<?php
	include("partials/connect.php");
    session_start();
	
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
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.png) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">shopping cart</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                        <th class="product-thumbnail">Remove</th>
                                            <th class="product-name">name of products</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-remove">update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
								        $total=0;
								        if (isset($_SESSION['cart'])) {                                        
								        	foreach($_SESSION['cart'] as $key => $value) {                                            
                                            $total=$total+$value['item_price']*$value['quantity']; 
                                
								        ?>
                                        <tr>
                                            <td class="product-thumbnail">
                                            <div class="">
											<form action="cartremove.php" method="POST">
											<button class="btn btn-sm btn-outline-danger" style="color:red" name="remove">Remove</button>
											<input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
											</form>
										</div></td>

                                            <td class="product-name"><a href="#"><?php echo $value['item_name'] ?></a>
                                            </td>
                                            <td class="product-price"><span class="amount">₹ <?php echo $value['item_price'] ?>/-</span></td>

                                            
                                            <td class="product-quantity">
                                            <form action="cartupdate.php" method="POST">    
                                            <input name="quantity" type="number" value="<?php echo $value['quantity'] ?>" /></td>
                                            <td class="product-remove">
                                            <button class="btn btn-sm btn-outline-danger" name="update" style="color:green">Update</button>
											<input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
											</form>
										</td>
                                        </td>
                                        </tr>
                                        <?php }   } ?>                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="buttons-cart--inner">
                                        <div class="buttons-cart">
                                            <a href="shop.php">Continue Shopping</a>
                                        </div>
                                        <form action="cartupdate.php" method="POST">
                                        <div class="buttons-cart checkout--btn" name="checkout">
                                            <a href="checkout.php">checkout</a>
                                            <input type="hidden" name="item_name" value="<?php echo $value['quantity'] ?>">
                                        </div>
                                    </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->
        <!-- End Banner Area -->
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