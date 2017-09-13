<!DOCTYPE html>
<html>
<head>
	<title>Search Products</title>
    <script src="../phpClass/jquery/jquery.min.js"></script>
    <script src="../phpClass/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../phpClass/css/bootstrap.min.css">	
</head>
<body>
<style type="text/css">

#search {
    float: right;
    margin-top: 9px;
    width: 250px;
}

.search {
    padding: 5px 0;
    width: 230px;
    height: 30px;
    position: relative;
    left: 1000px;
    float: left;
    line-height: 22px;
}

    .search input {
        position: absolute;
        width: 0px;
        float: left;
        margin-left: 0px;
        -webkit-transition: all 0.7s ease-in-out;
        -moz-transition: all 0.7s ease-in-out;
        -o-transition: all 0.7s ease-in-out;
        transition: all 0.7s ease-in-out;
        height: 30px;
        line-height: 18px;
        padding: 0 2px 0 2px;
        border-radius:1px;
    }

/*        .search:hover input, .search input:focus {
            width: 500px;
            margin-left: 0px;
        }*/

.btn {
    height: 30px;
    position: absolute;
    right: 0;
    top: 5px;
    border-radius:1px;
}

</style>
<div class="container">
	<div class="row">
        <div class="search">
			<input type="text" class="form-control input-sm" maxlength="100" placeholder="Search" />
		 	<button type="submit" class="btn btn-primary btn-sm">Search a Product</button>
		</div>
	</div>
</div>
</body>
</html>