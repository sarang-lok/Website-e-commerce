<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <?php
        include('adminpartials/sellersession.php');
        include('adminpartials/head.php');
   ?>
   <body>
    <?php
   include('adminpartials/saside.php');
    ?>
      <div id="right-panel" class="right-panel">
      <?php
         include('adminpartials/sheader.php');
      ?>
         <!-- /.content-wrapper -->
         <div class="content pb-0">
            <div class="animated fadeIn">  
            <div class="row">
                  <div class="col-lg-9">
                  <a href="sproducts.php">
                    <button style="color:green">Add New</button>
                  </a><hr>
               <?php
                include('partials/connect.php');

                $sql="Select * from products";;
                $results=$connect->query($sql);
                while($final=$results->fetch_assoc()){ ?>

                  <a href="proshow.php?pro_id=<?php echo $final['id']?>">
                  <h3><?php echo $final['id'] ?>: <?php echo $final['name']?></h3><br>
                
                </a>
                 
                <a href="proupdate.php?up_id=<?php echo $final['id'] ?>">
                  <button>Update</button>
                </a>  
                
                <a href="prodelete.php?del_id=<?php echo $final['id'] ?>">
                  <button style="color:red">Delete</button>
                </a><hr>

         <?php } 
          ?>     
                  
                
                
                
                
                
                </div>







                  <div class="col-lg-3">
                     
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         
         <?php
            include('adminpartials/footer.php');
         ?> 
      </div>
      
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>