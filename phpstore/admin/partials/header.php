<header id="htc__header" class="htc__header__area header--one" style="background-color:#5cd65c;">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                                
                            </div>
                            <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <li class="drop"><a href="index.php">Home</a></li>
                                        <li class="drop"><a href="#">Category</a>
                                            <ul class="dropdown mega_dropdown">
											<?php
												session_start();
												$cat="SELECT * from categories";
												$results=mysqli_query($connect,$cat);
												while($row=mysqli_fetch_assoc($results)){
												echo '<a class="dropdown-item" href=" category_id='.$row['id'].'">'.$row['name']."</a>";
												} 
											?>
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="shop.php">Shop</a>
                                        </li>
                                        <li class="drop"><a href="#">MY ORDERS</a>
                                            <ul class="dropdown">
                                                <li><a href="checkout.php">checkout</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">contact</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li class="drop"><a href="#"><i class="icon-user icons"></i></a>
                                            <ul class="dropdown">
                                                <li>
                                                <?php
													
													//include('handler/customersession.php');
						                            if (!empty($_SESSION['email'])) {?>
													<li><a href="customerprofile.php">Customer Profile</a></li>
                                                    <li><a href="handler/customerlogout.php">LOGOUT</a></li>
						                            <?php }else{ ?>
                                                        <a href="customerforms.php">Customer Login/Register</a>
						                            </a>
					                            <?php } ?>   
                                                
                                            </li>
                                                <li><a href="sellerform.php">Seller Login/Register</a></li>
                                                <li><a href="adminlogin.php">Admin Login/Register</a></li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </nav>

                                <div class="mobile-menu clearfix visible-xs visible-sm">
                                    <nav id="mobile_dropdown">
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="#">CATEGORY</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">MY ORDERS</a>
                                                <ul>
                                                <li><a href="checkout.php">checkout</a></li>
                                                
                                                </ul>
                                            </li>
                                            <li><a href="contact.php">contact</a></li>
                                        </ul>
                                    </nav>
                                </div>  
                            </div>
                            <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                                <div class="header__right">
                                    <div class="htc__shopping__cart">
                                        <a class="cart__menu" href="cart.php" onclick="location.href='cart.php'"><i class="icon-handbag icons"></i></a>
                                        <?php
						                    if (!empty($_SESSION['cart'])) {
							                $qty=count($_SESSION['cart']);?>
                                        <a href="cart.php"><span class="htc__qua"><?php echo $qty ?><i class="fas fa-wifi-1"></i></span></a>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     