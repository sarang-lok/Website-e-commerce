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
                     <form role="form" action="proupdatehandler.php" method="post" enctype="multipart/form-data">
                     <?php
                        $newid=$_GET['up_id'];

                        include('partials/connect.php');

                        $sql="Select * from products WHERE id='$newid'";

                        $results=$connect->query($sql);     

                        $final=$results->fetch_assoc();             
                     ?>
                        <div class="card-header"><strong>Product</strong><small> Form</small></div>
                        <div class="card-body card-block">
                        <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Product Name" value="<?php echo $final['name'] ?>" name="name">
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" placeholder="Price" value="<?php echo $final['price'] ?>" name="price">
                </div>
                <div class="form-group">
                  <label for="picture">File input</label>
                  <input type="file" id="picture" value="<?php echo $final['picture'] ?>"name="file">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea id="description" class="form-control" rows="10" placeholder="Enter Description" value="<?php echo $final['description'] ?>"name="description"></textarea>
                </div>
                <div class="form-group">
                  <label for="price">Stock</label>
                  <input type="text" class="form-control" id="stock" placeholder="Stock" value="<?php echo $final['stock'] ?>" name="stock">
                </div>
                <div class="form-group">
                  <label for="category">Category</label>
                  <select id="category" name="category">
                    <?php
                    $cat="SELECT * from categories";
                    $results=mysqli_query($connect,$cat);
                    while($row=mysqli_fetch_assoc($results)){
                    echo "<option value=".$row['id'].">".$row['name']."</option>";
                  }
                    ?>
                  </select>
              </div>
              <input type="hidden" value="<?php echo $final['id'] ?>" name="form_id">
              <button type="submit" class="btn btn-lg btn-info btn-block" name="update" >Update
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