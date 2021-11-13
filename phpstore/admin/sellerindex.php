   <!doctype html>
   <html class="no-js" lang="">
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <?php
            include('adminpartials/sellersession.php');
            include('adminpartials/head.php');
      ?>
      <body>
      <?php
            include('adminpartials/saside.php')
            ?>
         <div id="right-panel" class="right-panel">
         <?php
            include('adminpartials/sheader.php')
            ?>
            <div class="content pb-0">
               <div class="Home">
                  <div class="row">
                     <div class="col-xl-12">
                     <a href="sproducts.php">
            <button style="color: green">Add Products</button>
          </a>
          <hr><hr>
        </div>
         <div class="col-sm-9">
         <a href="orders.php">
            <button style="color: green">See all Orders</button>
          </a>
          <hr>
                     </div>
                  </div>
               </div>
         </div>
            <div class="clearfix"></div>
            <!-- /.content-wrapper -->
            <?php
            include('adminpartials/footer.php')
            ?>
         </div>
         <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
         <script src="assets/js/popper.min.js" type="text/javascript"></script>
         <script src="assets/js/plugins.js" type="text/javascript"></script>
         <script src="assets/js/main.js" type="text/javascript"></script>
      </body>
   </html>