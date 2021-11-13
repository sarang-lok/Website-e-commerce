<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <?php
       // include('handler/customersession.php');
	   include('partials/connect.php');
		if(isset($_POST["submit"])){
		$name= mysqli_real_escape_string($connect,$_POST['name']);
		$mobile=mysqli_real_escape_string($connect,$_POST['mobile']);
		$address= mysqli_real_escape_string($connect,$_POST['address']);
		$pin= mysqli_real_escape_string($connect,$_POST['pin']);
		$password= mysqli_real_escape_string($connect,$_POST['password']);
		$cpassword= mysqli_real_escape_string($connect,$_POST['cpassword']);
		
		if ($password==$password2) {
	$sql="UPDATE customers SET name='$name', mobile='$mobile', address='$address', pin='$pin', password='$password' WHERE username='{$_SESSION["email"]}'";
	$connect->query($sql);
	echo "<script> alert('You are registered');
			</script>";
}else{  
	echo "<script> alert('Password did not match');
			window.location.href='../customerforms.php';
			</script>";
}
		}
		
		//include('adminpartials/profilesession.php');
        include('partials/head.php');
		//include('partials/userprofilehead.php')
   ?>
   <body>
      <div id="right-panel" class="right-panel">
      <?php
         include('partials/header.php');
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
         
                <div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
							</div>
							<div class="col-xs-12">
								<form action="" method="post" enctype="multipart/form-data">
								<?php
										$prof= "SELECT * from customers WHERE username='{$_SESSION["email"]}'";
										$result=mysqli_query($connect,$prof);
										if (mysqli_num_rows($result)>0){
										while ($row = mysqli_fetch_assoc($result)){
								?>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="name" placeholder="Full Name*"  value="<?php echo $row['name']; ?>" style="width:100%">
										</div>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="email" name="email" placeholder="Your Email*" value="<?php echo $row['username']; ?>" disabled style="width:100%">
										</div>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="mobile" name="mobile" placeholder="Your Mobile*" value="<?php echo $row['mobile']; ?>" style="width:100%">
										</div>
									</div>
                                    <div class="single-contact-form">
										<div class="contact-box name">
											<input type="address" name="address" placeholder="Your Address*" value="<?php echo $row['address']; ?>" style="width:100%">
										</div>
									</div>
                                    <div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="pin" placeholder="Your pin*" value="<?php echo $row['pin']; ?>" style="width:100%">
										</div>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="password" name="password" placeholder="Your Password*" value="<?php echo $row['password']; ?>" style="width:100%">
										</div>
									</div>
                                    <div class="single-contact-form">
										<div class="contact-box name">
											<input type="password" name="cpassword" placeholder="Conform Password*" value="<?php echo $row['password']; ?>" style="width:100%">
										</div>
									</div>
									
									<div class="contact-btn">
										<button class="btn" type="submit" name="submit">Update Profiles</button>
									</div>
									 <?php
											}
										}
									?>
								</form>
								<div class="form-output">
									<p class="form-messege"></p>
								</div>
							</div>
						</div> 
                
				</div>
			
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
         
        
      </div>
       <?php
           // include('partials/footer.php');
         ?> 
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>