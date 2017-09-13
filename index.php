<!DOCTYPE html>
<html>
<head>
	<title>Add Products</title>
    <script src="../phpClass/jquery/jquery.min.js"></script>
    <script src="../phpClass/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../phpClass/css/bootstrap.min.css">	
</head>
<body>
	<br><br>
	<div class="container" style="al">
		<form method= "POST">
			<div class="form-group">
				<div class="row">
					<div class="col">
						<h3>Register a product</h3>
					</div>
					<div class="col">
						<a href="product_list.php" >Product Lists</a>	
					</div>
					<div class="col">
						
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6">
					<input id="fn" name="p_name" type="text" placeholder="Product name" class="form-control input-md" required="">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6">
					<input id="fn" name="p_desc" type="text" placeholder="description" class="form-control input-md" required="">
				</div>
			</div>	
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
		  	<div class="form-group"> 
		    	<div class="col-sm-offset-2 col-sm-10">
		    		<input name="register" type="submit" class="btn btn-info btn-md" value="Register">
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
		$p_id = uniqid(rand(1000,1000000));
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