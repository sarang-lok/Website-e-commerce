<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <?php
        include('adminpartials/sellersession.php');
		if(isset($_POST["submit"])){
		$name= mysqli_real_escape_string($connect,$_POST['name']);
		$nursery_name= mysqli_real_escape_string($connect,$_POST['nursery_name']);
		$mobile=mysqli_real_escape_string($connect,$_POST['mobile']);
		$address= mysqli_real_escape_string($connect,$_POST['address']);
		$pin= mysqli_real_escape_string($connect,$_POST['pin']);
		$password= mysqli_real_escape_string($connect,$_POST['password']);
		$cpassword= mysqli_real_escape_string($connect,$_POST['cpassword']);
		
		if($password === $cpassword){
			//$target="../uploads/seller_documents/";
			//$file_path=$target.basename($_FILES["document"]["name"]);
			$file_name=$_FILES["document"]["name"];
			$file_tmp_name=$_FILES["document"]["tmp_name"];
			$file_size=$_FILES["document"]["size"];
			$file_new_name = rand() . $file_name;
			//$file_store="../uploads/seller_documents/".$file_name;
			
				
			
			if ($file_size > 5242880) {
            echo "<script>alert('Document is very big. Maximum document uploading size is 5MB.');</script>";
            } else {
            $sql = "UPDATE sellers SET name='$name', nursery_name='$nursery_name', mobile='$mobile', address='$address', pin='$pin', documents='$file_new_name', password='$password' WHERE username='{$_SESSION["email"]}'";
            $result = mysqli_query($connect, $sql);
            if ($result) {
                echo "<script>alert('Profile Updated successfully.');</script>";
               move_uploaded_file($file_tmp_name, "../uploads/seller_documents/" . $file_new_name); 
            } else {
                echo "<script>alert('Profile can not Updated.');</script>";
                echo  $connect->error;
            }
        }
			
		} else {
			echo "<script>alert('Password not matched. Please try again.');</script>";
		}
		
	}
		//include('adminpartials/profilesession.php');
        include('adminpartials/head.php');
		//include('partials/userprofilehead.php')
   ?>
   <body>
    <?php
   include('adminpartials/saside.php');
    ?>
      <div id="right-panel" class="right-panel">
      <?php
         include('adminpartials/sheader.php');
      ?>
		<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
	 <!--
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
		-->
	
		
        <div class="col-md-8 border-left border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
				<div class="wrapper">
		<form action="" method="post" enctype="multipart/form-data">
         <?php
			$prof= "SELECT * from sellers WHERE username='{$_SESSION["email"]}'";
			$result=mysqli_query($connect,$prof);
			if (mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)){
		 ?>
                <div class="row mt-3">
				    <div class="col-md-12"><label class="labels">Full Name</label><input type="text" class="form-control" placeholder="full name" name="name" value="<?php echo $row['name']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Nursery Name</label><input type="text" class="form-control" placeholder="enter nursery name" name="nursery_name" value="<?php echo $row['nursery_name']; ?>"></div>
					<div class="col-md-12"><label class="labels">Nursery Document (note:- Accepted only .pdf and Word file (.docx))</label><input name="document" type="file" accept=".doc,.docx, application/pdf, application/msword"></div>
					<div class="col-md-12"><label class="labels">Nursery Document View</label><p><a style="color:blue;" href="../uploads/seller_documents/<?php echo $row['documents']; ?>"  >View Your Uploded Document</a></p></div>
					<div class="col-md-12"><label class="labels">Email ID</label><input type="email" class="form-control" placeholder="enter email id" name="email" value="<?php echo $row['username']; ?>" disabled></div>
					<div class="col-md-12"><label class="labels">Mobile Number</label><input type="mobile" class="form-control" placeholder="enter phone number" name="mobile" value="<?php echo $row['mobile']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="address" class="form-control" placeholder="enter address" name="address" value="<?php echo $row['address']; ?>" ></div>
                    <div class="col-md-12"><label class="labels">Pin code</label><input type="text" class="form-control" placeholder="enter pin code" name="pin" value="<?php echo $row['pin']; ?>" ></div>
					<div class="col-md-12"><label class="labels">Password</label><input type="password" class="form-control" placeholder="enter pin code" name="password" value="<?php echo $row['password']; ?>"></div>
					<div class="col-md-12"><label class="labels">Conform Password</label><input type="password" class="form-control" placeholder="enter password" name="cpassword" value="<?php echo $row['password']; ?>"></div>
					<div class="col-md-12"><label class="labels">The time of day when the account was opened</label><input type="text" class="form-control" name="created_at" value="<?php echo $row['created_at']; ?>" disabled></div>
					<div class="mt-5 text-center"><button class="btn" type="submit" name="submit">Update Profile</button></div>
                </div>
			 <?php
				}
			}
		?>
     </form> 
			</div>
            </div>
       </div>	
		<!--  
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div> -->
    </div>
</div>
         
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