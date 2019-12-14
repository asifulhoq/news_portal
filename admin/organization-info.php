<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Organization Information - News Portal</title>
    <meta name="description" content="BKIICT DICT GROUP D Project Work">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>


<?php

 include("connection.php"); 
 include("function.php");   
        if(isset($_POST["save"]))
        {
        
            $name  = $_POST["name"];
            $address    = $_POST["address"];
            $website    = $_POST["website"];
            $email    = $_POST["email"];
            $manager    = $_POST["manager"];
            $phone    = $_POST["phone"];
			
            


            $result= $conn->query( "INSERT INTO orginfo(name, address, website, email, manager, phone) VALUES ('$name','$address','$website','$email','$manager','$phone')");
                        
            if($result)
            {
               // echo $output = "Successfully Inserted";
            }
            else
            {
                echo $output = "Not Inserted !!";
            }
            
        }



        if(isset($_GET['id'])) 
        {
        
            $id = $_GET['id'];
            
            $sql = "DELETE FROM orginfo WHERE id='$id'";
            $conn->query($sql);
            header("Location: organization-info.php");
        }

?>

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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="news-management.php"><i class="fas fa-table"></i><span>News Management</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="organization-info.php"><i class="fas fa-exclamation-circle"></i><span>Organization Info</span></a></li>
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
                                        <h3 class="text-primary m-0 font-weight-bold">Newspaper Information</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="col-md-8">
                                        <form action="organization-info.php" method="POST">
                                            <div class="form-row">
                                                <div class="col-6">
                                                    <div class="form-group"><label for="staffname"><strong>Newspaper Name</strong></label><input class="form-control" type="text" placeholder="" name="name"></div>
                                                </div>
												</div>
											<div class="form-row">
												<div class="col-md-6">
												<div class="form-group"><label for="address"><strong>Newspaper Address</strong></label><input class="form-control" type="text" placeholder="" name="address"></div>
												</div>
											</div>
											<div class="form-row">
                                                <div class="col-6">
                                                    <div class="form-group"><label for="website"><strong>Newspaper Website</strong></label><input class="form-control" type="text" placeholder="" name="website"></div>
                                                </div>
											</div>
											<div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label for="email"><strong>Newspaper Email</strong></label><input class="form-control" type="email" placeholder="" name="email"></div>
                                                </div>
											</div>
											<div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label for="name"><strong>Newspaper Contact Person</strong></label><input class="form-control" type="person" placeholder="" name="manager"></div>
                                                </div>
											</div>
											<div class="form-row">
												<div class="col-md-6">
												<div class="form-group"><label for="phone"><strong>Newspaper Contact Phone</strong></label><input class="form-control" type="text" placeholder="" name="phone"></div>
												</div>
											</div>
                                            <div class="form-group"><button class="btn btn-primary btn-md-inline" type="save" value="submit" name="save">Save Settings</button></div>
                                        </form>
                                        <div style=' font-family: Times New Roman", Times, serif; '>
                                        <?php
        
                                            $sql = "SELECT * FROM orginfo";
                                            $rec = $conn->query($sql);
                                            echo "<div class='card-body'>";
                                            echo "<div class='row'>";
                                                    
                                            echo "<table border='2' cellpadding='8' cellspacing='' bordercolor='#d1d3e2'>";
                                            echo "<tr>
                                                    <th>ID</th>
                                                    <th>Newspaper Name</th>
                                                    <th>Newspaper Address</th>
                                                    <th>Newspaper Website</th>
                                                    <th>Newspaper Email</th>
                                                    <th>Newspaper Contact Person</th>
                                                    <th>Newspaper Contact Phone</th>
                                                    <th>Action</th>
                                                </tr>";
                                                 while($row = mysqli_fetch_array($rec))
                                                {
                                                    $id = $row['id'];
                                                    $name = $row['name'];
                                                    $address = $row['address'];
                                                    $website = $row['website'];
                                                    $email = $row['email'];
                                                    $manager = $row['manager'];
                                                    $phone = $row['phone'];
                                                        
                                                echo "<tr>
                                                        <td>$id</td>
                                                        <td>$name</td>
                                                        <td>$address</td>
                                                        <td>$website</td>
                                                        <td>$email</td>
                                                        <td>$manager</td>
                                                        <td>$phone</td>
                                                        <td>
                                                            <a href='edit_organization-info.php?id=$id' class='button1'>Edit</a> | 
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