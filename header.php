<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome-5.0.8/css/fontawesome-all.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">

						<a href="about.php" class="left-topbar-item">
							About
						</a>

						<a href="contact.php" class="left-topbar-item">
							Contact
						</a>

						<a href="signup.php" class="left-topbar-item">
							Sign up
						</a>

						<a href="login.php" class="left-topbar-item">
							Admin Login
						</a>
					</div>

					<div class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="#">
							<span class="fab fa-pinterest-p"></span>
						</a>

						<a href="#">
							<span class="fab fa-vimeo-v"></span>
						</a>

						<a href="#">
							<span class="fab fa-youtube"></span>
						</a>
					</div>
				</div>
			</div>
			
			<!-- logo -->
			
			<div class="wrap-logo container">
				
				<!-- Logo desktop -->		
				
				<div class="logo">
					<a href="index.php"><img src="images/icons/logo-01.png" alt="LOGO"></a>
				</div>	

			</div>	
			
			<!-- Main Nav  -->
			<div class="wrap-main-nav">
				<div class="main-nav">
					<!-- Menu desktop -->
					<nav class="menu-desktop">
						<a class="logo-stick" href="index.php">
							<img src="images/icons/logo-01.png" alt="LOGO">
						</a>
						<ul class="main-menu">	
							
							
												<?php	
												
												
												
						/*$sub_cat = array();
						$sql = "SELECT category.id as cid,category.catname as cname from category";
						$result = $conn->query($sql);
						$i = 0;
						while($row = mysqli_fetch_array($result)) 
						{
							$i++;
							$sub_cat[$i][$row['cid']] = $row['cname'];
							$sub_cat_id[$i][$row['cid']] = $row['subcatname'];
						}*/


						$sql2 = "SELECT id,catname FROM category";			
						$result2 = $conn->query($sql2);

						while($row2 = mysqli_fetch_array($result2)) 
						{
						$catid = $row2['id'];
							echo "<li><a href='news-category.php?catid=$catid'>".$row2['catname']."</a>";
							$catid = $row2['id'];


							/*$j = 0;
							foreach($sub_cat as $val)
							{
								$j++;

								if(isset($val[$catid]))
								{

									//$subcat_id = $sub_cat_id[$j][$catid];
									echo "<ul>

										</ul>";
								}
							}*/
							echo "</li>";	
						}


					?>
						</ul>
					</nav>
				</div>
			</div>	
		</div>
	</header>
