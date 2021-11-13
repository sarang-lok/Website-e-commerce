<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <?php
         include('adminpartials/session.php');
         include('adminpartials/head.php')
   ?>
   <body>
   <?php
         include('adminpartials/aside.php')
         ?>
      <div id="right-panel" class="right-panel">
      <?php
         include('adminpartials/header.php')
         ?>
         <div class="content pb-0">
            <div class="Home">
               <div class="row">
               <div class="col-lg-12">
                    <form role="form" action="cathandler.php" method="post">
                    <div class="card">
                        <div class="card-header"><strong>Categories</strong><small> Form</small></div>
                        <div class="card-body card-block">
                           <div class="form-group"><label for="category" class=" form-control-label">Category</label><input type="text" id="category" placeholder="Enter your Category name" class="form-control" name="name"></div>
                           <button type="submit" class="btn btn-lg btn-info btn-block">Submit</button>
                        </div>
                     </div>
                    </form>
						<?php
								include('partials/connect.php');
								include('partials/function.php');
								if(isset($_GET['type']) && $_GET['type']!=''){
									$type=get_safe_value($connect,$_GET['type']);
									if($type=='status'){
										$operation=get_safe_value($connect,$_GET['operation']);
										$id=get_safe_value($connect,$_GET['id']);
										if($operation=='active'){
											$status='1';
										}else{
											$status='0';
										}
										$update_status="update categories set status='' where id='$id'";
										mysqli_query($connect,$update_status);
									}
								}
								$cat="SELECT * from categories order by name asc";
								$result=mysqli_query($connect,$cat);		
						?>
					<table class="table" style="background-color:#FFFFE0;">
					<thead>
						<tr>
							<th class="serial">#</th>
							<th>ID</th>
							<th>Categories</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						$i=1;
						while($row=mysqli_fetch_assoc($result)){
					?>
					<tr>
						<td class="serial"><?php echo $i;?></td>
						<td><?php echo $row["id"]; ?></td>
						<td><?php echo $row["name"]; ?></td>
						<td><?php 
							if($row['status']==1){
								echo "<a href='?type=status&operation=deactive".$row['id']."'>Active </a>";
							}else{
								echo "<a href='?type=status&operation=active".$row['id']."'> Deactive</a>";
							}	

							?></td>
					</tr>
						<?php } ?>
					</tbody>
					</table>
				  </div>
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