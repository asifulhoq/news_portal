<?php


function getCategoryList()
{

	include("connection.php");
	
	
	$sql = "SELECT * FROM `category`";
	$category = $conn->query($sql);
	$category_array = array();
	
	while($row = mysqli_fetch_array($category))
	{
		$category_id = $row['id'];
		$catname = $row['catname'];
		
		//print_r($catname);
		
		$category_array[$category_id] = $catname;
	}
	
	return $category_array; 
}


function getSubCat()
{

	include("connection.php");
	
	
	$sql = "SELECT * FROM `subcat`";
	$subcat = $conn->query($sql);
	$subcat_array = array();
	
	while($row = mysqli_fetch_array($subcat))
	{
		$subcat_id = $row['id'];
		$subcatname = $row['subcatname'];
		
		//print_r($catname);
		
		$subcat_array[$subcat_id] = $subcatname;
	}
	
	return $subcat_array; 
}



function getStaffList()
{

	include("connection.php");
	
	
	$sql = "SELECT * FROM `staff`";
	$staff = $conn->query($sql);	
	$staff_array = array();
	
	while($row = mysqli_fetch_array($staff))
	{
		$staffname = $row['staffname'];
		$staffid = $row['id'];
		
		//print_r($staffname);
		
		$staff_array[$staffid] = $staffname;
	}
	
	return $staff_array;
}
	









?>