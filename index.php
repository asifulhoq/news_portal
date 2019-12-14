<!-- Connection -->

<?php
	include ('admin/function.php');
	include ('connection.php');

	$sql = "select news.id as nid,news.headline as title,category.id as cid,category.catname as cname,subcat.id as subcatid,subcat.subcatname as scatname,news.news as newsdetails,news.newsdate as postingdate from news left join category on category.id=news.category_id left join  subcat on  subcat.id=news.subcat_id order by news.id desc";
	
	$query = $conn->query($sql);
	if($query&&$query->num_rows){
		while($row = $query->fetch_assoc()){
			$data[] = $row;
		}
	}

?>

<!-- Header -->

<?php
	include ('header.php');
?>

<!-- Body -->

<body>
	
		<div class="container">
			<div class="body">
				<div class="col">
					<div class="row">
				<div class="col-sm">
						<?php
		if(empty($data)){
			echo "There are currently no articles, please administrator to add articles in the background";
		}else{
			foreach($data as $value){
						?>
			<div class="h1"><img class="card-img-top" src="admin/postimages/<?php echo htmlentities($value['image']);?>">
			<?php echo $value['title']?></div><span style="color:#ccc;font-size:14px;">Category: <?php echo $value['cname']?></span>
			<div class="p">	<?php
		echo $value['newsdetails']
				?></span></div>
				<p class="links"><a href="view_news.php?id=<?php echo $value['nid']?>" class="more">View details</a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;</p>
	<?php
			}
		}
	?>
								</div>
							</div>
						</div>
					</div>

</body>

<!-- Footer -->
	<?php
	include ('footer.php');
	?>