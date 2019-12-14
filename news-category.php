<?php
	include('connection.php');
	include('admin/function.php');
include('header.php');

$cat_id = $_GET['catid'];
//echo $cat_id.'___'.'Shajjad';



	//Search data in reverse chronological order
	$sql = "select news.id as nid,news.headline as title,category.id as cid,category.catname as cname,subcat.id as subcatid,subcat.subcatname as scatname,news.news as newsdetails,news.newsdate as postingdate 
	from news 
	left join category on category.id=news.category_id 
	left join  subcat on  subcat.id=news.subcat_id
	where news.category_id = $cat_id 
	order by news.id desc";
	
	//echo $sql;
	
	$query = $conn->query($sql);
	if($query&&$query->num_rows){
		while($row = $query->fetch_assoc()){
		    //Store all data in an array
			$data[] = $row;
		}
	}
	
	
	//print_r($data);


?>




<body>


<?php
		
			foreach($data as $value){

			
				?>
		<div class="post">
			<h1 class="title"><?php echo $value['title']?><span style="color:#ccc;font-size:14px;"> 　Category：<!--category--><?php echo $value['cname']?></span><span style="color:#ccc;font-size:14px;"> 　Date：<!--category--><?php echo $value['postingdate']?></span></h1>
			<div class="entry">
				<?php echo $value['newsdetails']?>
			</div><br>
<div>
			<p class="links"><a href="view_news.php?id=<?php echo $value['nid']?>" class="more">View details</a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;</p></div>
		</div>
	<?php
			}
		

			
		
	?>

</body>

  
      <?php 
include('footer.php');
?>
