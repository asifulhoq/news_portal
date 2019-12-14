


<?php
	require_once 'connection.php';
	include('header.php');
	
	$id = intval($_GET['id']);
	$sql = "select * from news where id=$id";
	$query = $conn->query($sql);
	if($query && $query->num_rows){
		$row = $query->fetch_assoc();
	}else{
		echo "News does not exist";
		exit;
	}
?>
<body>
<!-- Post -->
	
		<div class="container">
			<div class="row">
	
	<div class="bg-img1 size-a-3 how1 pos-relative">
		
<h3 class="f1-l-2 cl14 p-b-16 txt-center respon2"> <?php echo $row['headline'] ?><span style="color:#ccc;font-size:14px;">　　Date：<!--author--><?php echo $row['newsdate'];?></span></h3>
			<div class="entry">
					<!--Article content is placed here-->
	<p><?php echo $row['news']?></p>
		</div>
	
			
				</div>
			</div>
	</div>
</body>				
<?php 
	include('footer.php');
				?>