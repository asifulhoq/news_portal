<?php 
include('connection.php');
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News Portal | Home Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
   <?php include('header.php');?>

	


    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 10%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
<?php
 $query=mysqli_query($conn,"select from newsnews(headline, news, newsdate, staff_name_id, category_id, subcat_id)");
while ($row=mysqli_fetch_array($query)) {
?>
<h1><?php echo htmlentities($row['category_id']);?> News</h1>
          <div class="card mb-4">
      
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['headline']);?></h2>
				<p class="card-description"><?php echo htmlentities($row['news']);?></p>
              
            </div>
          </div>
<?php } ?>
       

      

     

        </div>

        <!-- Sidebar Widgets Column -->
      </div>
      <!-- /.row -->
<!---Comment Section --->

 <div class="row" style="margin-top: -8%">
   <div class="col-md-8">
<div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form name="Comment" method="post">
      <?php /*?><input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" /><?php */?>
 <div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Enter your fullname" required>
</div>

 <div class="form-group">
 <input type="email" name="email" class="form-control" placeholder="Enter your Valid email" required>
 </div>


                <div class="form-group">
                  <textarea class="form-control" name="comment" rows="3" placeholder="Comment" required></textarea>
                </div>
                <button type="submit" class="btn btn-info" name="submit">Submit</button>
              </form>
            </div>
          </div>

  <!---Comment Display Section --->





        </div>
      </div>
    </div>

  
      <?php 
include('footer.php');
?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
