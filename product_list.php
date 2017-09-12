
<?php 
	include('product.php');
	$p = new Product();
	$products = $p->getAllProducts();
	// var_dump($products);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Product List</title>
	<script src="../phpClass/jquery/jquery.min.js"></script>
    <script src="../phpClass/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../phpClass/css/bootstrap.min.css">	
</head>
<body>
	<div class="container">
		<br>
		<a href="index.php">Registration form</a>	|
  		<a href="search.php">Search a user</a>	
  		<br><br>	
 		<h2>User list</h2>
 		<br>
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<td>No.</td>
					<td>Product ID</td>
					<td>Name</td>
					<td>Description</td>
					<td>Product Type</td>
					<td>Created date</td>
					<td>Modified Date</td>
					<td>Created Ip</td>
					<td>Modified Ip</td>
					<td colspan="2">Action</td>
				</tr>
			</thead>
			<tbody>
			<?php 
			$n = 1;
			foreach ($products as $p) { ?>
				<tr>
					<td><?php echo $n++; ?></td>
					<td><?php echo $p['product_id']; ?></td>
					<td><?php echo $p['product_name']; ?></td>
					<td><?php echo $p['product_desc']; ?></td>
					<td><?php echo $p['product_type'];?></td>
					<td><?php echo $p['product_created_date'];?></td>
					<td><?php echo $p['product_modified_date'];?></td>
					<td><?php echo $p['product_created_ip'];?></td>
					<td><?php echo $p['product_modified_ip'];?></td>
					<td>
						<a class="btn btn-info" href="update_user.php?id=<?php echo $u['user_id']?>">
				          <span class="glyphicon glyphicon-pencil"></span> Update
				        </a>
					</td>
					<td>
						<a class="btn btn-danger" href="delete.php?id=<?php echo $u['user_id']?>" onclick="confirm('Are you sure?'); ">
						<span class="glyphicon glyphicon-trash"></span> Delete
						</a>
					</td>
				</tr>
		<?php	} ?>
			</tbody>		
	</table>
	</div>
</body>
</html>
