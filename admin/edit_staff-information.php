<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - News Portal</title>
    <meta name="description" content="BKIICT DICT GROUP D Project Work">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<?php

 include("connection.php"); 
 include("function.php");
        
        if(isset($_POST["update"]))
        {
		
		
        
        
            $staffname      = $_POST["staffname"];
            $designation    = $_POST["designation"];
            $staffid        = $_POST["staffid"];
            $staffemail     = $_POST["staffemail"];
            $staffaddress   = $_POST["staffaddress"];
            $staffphone     = $_POST["staffphone"];
            $id             = $_POST['id'];

            
           $sql =  "UPDATE staff set staffname = '$staffname', designation = '$designation', staffid = '$staffid', staffemail = '$staffemail', staffaddress = '$staffaddress', staffphone = '$staffphone' WHERE id='$id'";
           $record = $conn->query($sql);
            if($record) 
            {
                echo "Updated Successfully!";
                //header("Location: member_detail.php?eid=$emp_id");
                echo "<meta http-equiv='refresh' content='1;url=staff-information.php'>";
                exit();
            }
    
            
        }
        
        
        if(isset($_GET['id'])) 
        {
            $id = $_GET['id'];
            
            $sql = "SELECT * FROM staff WHERE id='$id'";
            $result = $conn->query($sql);
            if($row = mysqli_fetch_array($result)) 
            {       
                $id             = $row['id'];
                $staffname      = $row['staffname'];
                $designation    = $row['designation'];
                $staffid        = $row['staffid'];
                $staffemail     = $row['staffemail'];
                $staffaddress   = $row['staffaddress'];
                $staffphone     = $row['staffphone'];
            }
            
            
            //echo $catname.'_'.$catdes;die;
            
        }

?>


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
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="staff-information.php"><i class="fas fa-user"></i><span>Staff Information</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="news-management.php"><i class="fas fa-table"></i><span>News Management</span></a></li>
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
                <div class="row mb-3">
                    <div class="col-lg">
                        <div class="row">
                            <div class="col-12">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <h3 class="text-primary m-0 font-weight-bold">Staff Information</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="col-8">
                                        <form action="edit_staff-information.php" method="POST">
                                            <div class="form-row">
                                                <div class="col-6">
                                                    <div class="form-group"><label for="staffname"><strong>Staff Name</strong></label><input class="form-control" type="text" value="<?php echo $staffname; ?>" placeholder="" name="staffname"></div>
                                                </div>
												</div>
											<div class="form-row">
                                                <div class="col-6">
                                                    <div class="form-group"><label for="last_name"><strong>Staff Designation</strong></label><input class="form-control" type="text" value="<?php echo $designation; ?>" placeholder="" name="designation"></div>
                                                </div>
                                            </div>
											<div class="form-row">
                                                <div class="col-6">
                                                    <div class="form-group"><label for="username"><strong>Staff ID</strong></label><input class="form-control" type="text" value="<?php echo $staffid; ?>" placeholder="" name="staffid"></div>
                                                </div>
											</div>
											<div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label for="email"><strong>Staff Email Address</strong></label><input class="form-control" type="email" value="<?php echo $staffemail; ?>" placeholder="" name="staffemail"></div>
                                                </div>
												</div>
											<div class="form-row">
												<div class="col-md-6">
												<div class="form-group"><label for="address"><strong>Staff Address</strong></label><input class="form-control" type="text" value="<?php echo $staffaddress; ?>" placeholder="" name="staffaddress"></div>
												</div>
											</div>
											<div class="form-row">
												<div class="col-md-6">
												<div class="form-group"><label for="phone"><strong>Staff Phone</strong></label><input class="form-control" type="text" value="<?php echo $staffphone; ?>" placeholder="" name="staffphone"></div>
												</div>
											</div>
                                            <div class="form-group"><button class="btn btn-primary btn-sm" type="save" value="submit" name="update">Update</button></div>
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        </form>   
                                    </div>
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
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>