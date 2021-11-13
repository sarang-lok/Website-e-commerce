<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <?php
        include('adminpartials/session.php');
        include('adminpartials/head.php');
   ?>
   <body>
    <?php
   include('adminpartials/aside.php');
    ?>
      <div id="right-panel" class="right-panel">
      <?php
         include('adminpartials/header.php');
      ?>
         <!-- /.content-wrapper -->
         <div class="content pb-0">
            <div class="animated fadeIn">  
            <div class="row">
                  <div class="col-lg-9">
                        <?php
                              include('partials/connect.php');

                              $id=$_GET['pro_id'];
                              $sql="SELECT * from products WHERE id='$id'";
                              $results=$connect->query($sql);

                              $final=$results->fetch_assoc();        
                        ?>

                              <h3> Name : <?php echo $final['name']?> </h3><hr><br>

                              <h3> Price : <?php echo $final['price']?> </h3><hr><br>

                              <h3> Description : <?php echo $final['description']?> </h3><hr><br>

                            <img src="<?php echo $final['picture']?>"
 alt="No File" style="height:300; width:300">
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