<!DOCTYPE>
<?php 


include('functions/functions.php'); 

?>

<html>
<head>
	<title>My Online Shop</title> 
	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all" />
</head>
<body>

<div class="main_wrapper">
	

	<div class="header_wrapper">
		<img id="logo" src="images/php_website.png">

	
	</div><!--/header-->
	
	<div class="menubar">
		<ul id="menu">
			<li><a hfre="#">Home</a></li>
			<li><a hfre="#">Products</a></li>
			<li><a hfre="#">My Account</a></li>
			<li><a hfre="#">Sign Up</a></li>
			<li><a hfre="#">Shopping cart</a></li>
			<li><a hfre="#">Contact Us</a></li>

		</ul>
	<div id="form">
		<form method="get" action="results.php" enctype="multipart/form-data">
				<input type"text" name="user_query" placeholder="Search a product"/>
				<input type="submit" name="search" value="Search" />

		</form>

	</div><!--/Form-->

	</div><!--/menu-->

	<div class="content_wrapper">
	
		<div id="sidebar"> 

			<div id="sidebar_title">Categories
			</div><!--/Sidebar Title-->

			<div>
				<ul id="cats">
					
					<?php getCats(); 

					?>

				</ul>

			</div><!--/cats-->

			<div id="sidebar_title">Brands
			</div><!--/Sidebar Title-->

			<div>
				<ul id="cats">
					
					<?php getBrands();

					?>

				</ul>

			</div><!--/cats-->

		</div><!--/sidebar-->
		
		<div id="content_area">this is content area</div><!--/content-->
	
	</div><!--/content wrapper-->
	
	<div id="footer">

		<h4 style="text-align:center; padding-top:30px; ">&copy 2015 by Giachis Design</h4>



	</div><!--/footer-->







</div>

</body>
</html>	

