<!DOCTYPE html>
<html>
<head>
	<title>Add Products</title>
    <script src="../nathan/jquery/jquery.min.js"></script>
    <script src="../nathan/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../nathan/css/bootstrap.min.css">	
</head>
<body>
	<br><br>
	<div class="container" style="al">
		<form method= "POST">
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<h3>Register a product</h3>						
				</div>

			</div>
			<div class="form-group">
				<div class="col-md-6">
					<input id="fn" name="p_name" type="text" placeholder="name" class="form-control input-md" required="">
				</div>
			</div>
			<br>
			<div class="form-group">
				<div class="col-md-6">
					<input id="fn" name="p_desc" type="text" placeholder="description" class="form-control input-md" required="">
				</div>
			</div>
		 	<br>
<!-- 		 	<div class="form-group">
		  		<div class="col-md-6">
		  			<input id="fn" name="p_type" type="text" placeholder="type" class="form-control input-md" required="">
		  		</div>
		 	</div> -->	
		 	<br>

	 		<div class="form-group">
				 <div class="col-md-2">
					<select class="form-control" name="p_type" required="">
						<option value="" selected disabled>Product Type</option>
						<option>Food</option>
						<option>School Supplies</option>
						<option>Office Supplies</option>
						<option>Others</option>
					</select>
				</div>
			</div>
		 	<br>
<!-- 			<div class="form-group">
				<div class="col-md-3">
					<input id="fn" name="birthdate" type="date" placeholder="birthdate" class="form-control input-md" required="">
			  </div>
			</div>	
			<br> -->
		  	<div class="form-group"> 
		    	<div class="col-sm-offset-2 col-sm-10">
		    		<input name="register" type="submit" class="btn btn-info btn-lg" value="Register">
		      		<a href="user_list.php" >&lt;&lt;&nbsp;Registered users&nbsp;&gt;&gt;</a>
		    	</div>
		  	</div>
		</form>
	</div>
</body>
</html>

<?php 
	include('product.php');

	$p = new Product();

	//Assigning values
	if(isset($_POST['register'])){
		$p_id = uniqid();
		$p_name = trim($_POST['p_name']);
		$p_desc = trim($_POST['p_desc']);
		$p_type = trim($_POST['p_type']);
		$p_created_date = date('Y-m-d h:i:s');
		$p_modified_date = date('Y-m-d h:i:s');
        $p_created_ip = $_SERVER['REMOTE_ADDR'];
        $p_modified_ip = $_SERVER['REMOTE_ADDR'];

        $p->setProductId($p_id);
        $p->setProductName($p_name);
        $p->setProductDesc($p_desc);
        $p->setProductType($p_type);
        $p->setProductCreatedDate($p_created_date);	
        $p->setProductModifiedDate($p_modified_date);
        $p->setProductCreatedIp($p_created_ip);
        $p->setProductModifiedIp($p_modified_ip);
        
        $id = $p->getProductId();
        $name = $p->getProductName();
        $desc = $p->getProductDesc();
        $type = $p->getProductType();
        $cDate = $p->getProductCreatedDate();
        $mDate = $p->getProductModifiedDate();
        $cIp = $p->getProductCreatedIp();
        $mIp = $p->getProductModifiedIp();

        //display data from object
                echo $p->display();

        //add data to db

		$p->addProduct($id, $name, $desc, $type, $cDate, $mDate, $cIp, $mIp);

		echo "Successfully added!";

	}//end of if

 ?>