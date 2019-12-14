<?php
	include('connection.php');
	include('admin/function.php');
?>


<?php 
        if($_GET['catid']!=''){
		$_SESSION['catid']=intval($_GET['catid']);
							}
  
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        //$total_pages_sql = "SELECT COUNT(*) FROM tblposts";
       // $result = mysqli_query($con,$total_pages_sql);
       // $total_rows = mysqli_fetch_array($result)[0];
       // $total_pages = ceil($total_rows / $no_of_records_per_page);       
	
		$total_pages_sql = "SELECT COUNT(*) FROM news";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


//$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId='".$_SESSION['catid']."' and tblposts.Is_Active=1 order by tblposts.id desc LIMIT $offset, $no_of_records_per_page");

$sql = "select news.id as nid,news.headline as title,category.catname as categoryname,subcat.subcatname as subcategory,news.news as newsdetails,news.newsdate as postingdate from news left join category on category.id=news.category_id left join  subcat on  subcat.subcatname=news.subcat_id";

$rowcount=mysqli_num_rows($sql);
if($rowcount==0)
{
echo "No record found";
}
else {
while ($row=mysqli_fetch_array($sql)) {


?>



<body>
	<div class="bg-img1 size-a-3 how1 pos-relative">
                            <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
           
              <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-info">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo htmlentities($row['postingdate']);?>
           
            </div>
          </div>
<?php } ?>


									  
	<?php
	}
	include('footer.php');
									   
				?>












