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
                  <div class="col-lg-12">
                     <div class="card">
                     <form role="form" action="producthandler.php" method="post" enctype="multipart/form-data">
                        <div class="card-header"><strong>Product</strong><small> Form</small></div>
                        <div class="card-body card-block">
                        <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Product Name" name="name">
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" placeholder="Price" name="price">
                </div>
                <div class="form-group">
                  <label for="picture">File input</label>
                  <input type="file" id="picture" name="file">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea id="description" class="form-control" rows="10" placeholder="Enter Description" name="description"></textarea>
                </div>
                <div class="form-group">
                  <label for="price">Stock</label>
                  <input type="text" class="form-control" id="stock" placeholder="Stock" name="stock">
                </div>
                <div class="form-group">
                  <label for="category">Category</label>
                  <select id="category" name="category">
                    <?php
                    include('partials/connect.php');
                    $cat="SELECT * from categories";
                    $results=mysqli_query($connect,$cat);
                    while($row=mysqli_fetch_assoc($results)){
                    echo "<option value=".$row['id'].">".$row['name']."</option>";
                  }
                    ?>
                  </select>
              </div>
              <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                           <span id="payment-button-amount">Submit</span>
                           </button>
                        </div>  
                     </div>
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