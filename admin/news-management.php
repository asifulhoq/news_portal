<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>News Management</title>
    <meta name="description" content="BKIICT DICT GROUP D Project Work">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
	<link rel="stylesheet" href="Simple-Html-WYSIWYG-Editor-Plugin-with-jQuery-Cazary/themes/flat/style.css">
	
	
	<link rel="stylesheet" href="css/jquery-ui.css">
	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/jquery-ui.js"></script>
	
	
	
	
	

</head>
<?php

 include("connection.php");
 include("function.php");
        
        if(isset($_POST["save"]))
        {
		
			$headline  		= $_POST["headline"];
            $news    		= $_POST["news"];
			$newsdate  		= $_POST["newsdate"];
			$staff_name_id  = $_POST["staff_name_id"];
			$category_id  	= $_POST["category_id"];
			$subcat_id  	= $_POST["subcat_id"];
			$image			= $_POST["image"];

            $result= $conn->query( "INSERT INTO news(headline, news, newsdate, staff_name_id, category_id, subcat_id, image) VALUES ('$headline','$news','$newsdate','$staff_name_id','$category_id','$subcat_id','$image')");
                        
            if($result)
            {
               //echo $output = "Successfully Inserted";
            }
            else
            {
                echo $output = "Not Inserted !!";
            }
              

			  
            
			//echo "$image";
			//echo "$imgnewfile";
    		
    		$staff_array = getStaffList();
    		$category_array = getCategoryList();
    		$subcat_array = getSubCat();
    		
    		
    		$reporter = array();
    		$sql1 = "SELECT * FROM staff";
    		$rec1= $conn->query($sql1);
    		while($row1 = mysqli_fetch_array($rec1))
    		{
    			$reporter[$row1['id']] = $row1['staffname'];
    		}
    		
    		
    		$category = array();
    		$sql2 = "SELECT * FROM  category";
    		$rec2= $conn->query($sql2);
    		while($row2 = mysqli_fetch_array($rec2))
    		{
    			$category[$row2['id']] = $row2['catname'];
    		}
    		
    		
    		$sub_category = array();
    		$sql3 = "SELECT * FROM  subcat";
    		$rec3= $conn->query($sql3);
    		while($row3 = mysqli_fetch_array($rec3))
    		{
    			$sub_category[$row3['id']] = $row3['subcatname'];
    		}
		
		      

            if(isset($_GET['id'])) 
            
            {
            
                $id = $_GET['id'];
                
                $sql = "DELETE FROM news WHERE id='$id'";
                $conn->query($sql);
                //header("Location: news-management.php");
            }  
		}

?>



<script>

	$( function() 
	{
    	$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
	
  	} );
	
	
	

  
  </script>

<style>

    .button1 {
              background-color: #4CAF50; /* Green */
              border: none;
              color: white;
              padding: 3px 6px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 13px;
              margin: 2px 2px;
              cursor: pointer;
              border-radius: 4px;
            }
    
    .button2 {
              background-color: #f44336; /* Red */ 
              border: none;
              color: white;
              padding: 3px 6px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 13px;
              margin: 2px 2px;
              cursor: pointer;
              border-radius: 4px;
            }

</style>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-newspaper"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>News Portal</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="staff-information.php"><i class="fas fa-user"></i><span>Staff Information</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="news-management.php"><i class="fas fa-table"></i><span>News Management</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="organization-info.php"><i class="fas fa-exclamation-circle"></i><span>Organization Info</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="category.php"><i class="fas fa-bell"></i><span>News Category</span></a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="sub-category.php"><i class="fas fa-angle-up"></i><span>Subcategory</span></a></li>
					<li class="nav-item" role="presentation"><a class="nav-link" href="../index.php"><i class="fas fa-sign-out-alt"></i><span>Sign Out</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                             <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </div>
                     </form>
                 </div>
            </nav>
           <div class="container-fluid">
                <div class="card shadow mb-5">
                    <div class="card-header py-3">
                        <h3 class="text-primary m-0 font-weight-bold">News Casting</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <form action="news-management.php" method="POST">
								<div class="form-row">
                                    <div class="col-6">
                                    <div class="form-group">
									<label for="image"><strong>Upload Image</strong></label>
									</div>
                                    </div>
                                    <div class="form-group">
									<input type='file' name='image' id='image'>
									</div>
								</div>								
								<div class="form-row">
                                    <div class="col-6">
                                    <div class="form-group">
									<label for="newsdate"><strong>News Date</strong></label>
									</div>
                                    </div>
                                    <div class="form-group">
									<input type='text' name='newsdate' id='datepicker' class="form-control" placeholder='Enter From Date' required autocomplete='off' style='width:145px; text-align:center;'>
									</div>
								</div>
								<div class="form-row">
								<div class="col-md-6">
								<div class="form-group">
									<label for="StaffList"><strong>Reporter Name</strong></label>
									</div>
									</div>

									<div class="form-group">

									<select class="form-control" name="staff_name_id">
									<?php
													foreach($staff_array as $key=>$value) {
													echo "<option value='$key'>$value</option>";
													}
													?> </option>
													
									</select>
									</div>
								</div>
								<div class="form-row">
								<div class="col-md-6">
								<div class="form-group">
									<label for="catname"><strong>Category Name</strong></label>
									</div>
									</div>
                                    <div class="form-group"><select class="form-control"name="category_id">
									<?php
													foreach($category_array as $key=>$value) {
													echo "<option value='$key'>$value</option>";
													}
													?> </option>
										</select>
									</div>
								</div>
								<div class="form-row">
								<div class="col-md-6">
								<div class="form-group">
									<label for="SubCatList" name="SubCatList"><strong>Sub Category Name</strong></label>
									</div>
									</div>
                                    <div class="form-group"><select class="form-control"name="subcat_id">
											<?php
													foreach($subcat_array as $key=>$value) {
													echo "<option value='$key'>$value</option>";
													}
													?> </option>
										</select>
									</div>
								</div>
								<div class="form-row">
								<div class="col-md-6">
								<div class="form-group">
									<label for="headline"><strong>News Headline</strong></label>
									</div>
									</div>
                                    <div class="form-group"><input class="form-control" type="text" name="headline">
									</div>
								</div>
								<div class="form-row">
								<div class="col-md-6">
								<div class="form-group">
									<label for="news"><strong>Description</strong></label>
									</div>
									</div>
                                    <div class="form-group"><textarea class="form-control" rows="4" id="id_cazary_full" name="news"></textarea>
									</div>
								</div>
								<div class="form-group"><button class="btn btn-primary btn-sm" type="save" value="submit" name="save">Post</button></div>
								
                                </form>
                                <div style=' font-family: Times New Roman", Times, serif; '>
                                <?php
        
                                    $sql = "SELECT * FROM news";
                                    $rec = $conn->query($sql);
                                    echo "<div class='card-body'>";
                                    echo "<div class='row'>";
                                            
                                    echo "<table border='2' cellpadding='8' cellspacing='' bordercolor='#d1d3e2'>";
                                    echo "<tr>
                                            <th>ID</th>
                                            <th>News Date</th>
                                            <th>Reporter Name</th>
                                            <th>Category Name</th>
                                            <th>Sub Category Name</th>
                                            <th>News Headline</th>
                                            <th>Action</th>
                                        </tr>";
                                         while($row = mysqli_fetch_array($rec))
                                        {
                                            $id = $row['id'];
                                            $newsdate = $row['newsdate'];
                                            $staff_name_id = $row['staff_name_id'];
                                            $category_id = $row['category_id'];
                                            $subcat_id = $row['subcat_id'];
                                            $headline = $row['headline'];
                                                
                                        echo "<tr>
                                                <td>$id</td>
                                                <td>$newsdate</td>
                                                <td>$reporter[$staff_name_id]</td>
                                                <td>$category[$category_id]</td>
                                                <td>$sub_category[$subcat_id]</td>
                                                <td>$headline</td>
                                                <td>
                                                    <a href='edit_news-management.php?id=$id' class='button1'>Edit</a> | 
                                                    <a href='$_SERVER[SCRIPT_NAME]?id=$id' class='button2' onClick=\"return confirm('Are you sure?')\">Delete</a>
                                                </td>
                                              </tr>";
                                         }
                                    echo "</table>";
                                            
                                    echo "</div>";
                                    echo "</div>";
                                            
                                 ?>
                            </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © News Portal 2019</span></div>
            </div>
        </footer>
    </div>
	<a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>