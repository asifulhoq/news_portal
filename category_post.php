<?php 
include_once('connection.php');
        if(isset($_GET['cid'])){
		$_SESSION['cid']=intval($_GET['cid']);
							}
$sql = "select news.id as nid,news.headline as title,category.id as cid,category.catname as cname,subcat.id as subcatid,subcat.subcatname as scatname,news.news as newsdetails,news.newsdate as postingdate from news left join category on category.id=news.category_id left join  subcat on  subcat.id=news.subcat_id order by news.id desc";

$result=mysqli_query($conn,"select news.id as nid,news.headline as title,category.id as cid,category.catname as cname,subcat.id as subcatid,subcat.subcatname as scatname,news.news as newsdetails,news.newsdate as postingdate from news left join category on category.id=news.category_id left join  subcat on  subcat.id=news.subcat_id order by news.id desc");

?>