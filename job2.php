<?php
include('header.php');
$job_title = $_POST['job_title'];
$description = $_POST['description'];
$category = $_POST['category'];
//$location
$submission_date = date('Y-m-d');
//$company_id = 

if(empty($job_title) or empty($category))
{
$display = "Please enter all values";
include('template/template.php');
exit;
}

include('db.php');
$q = "insert into jobdetails(job_title,description,submission_date,category) values('$job_title','$description','$submission_date','$category')";

mysqli_query($dbcon,$q) or die(mysqli_error($dbcon));
$display = "Job details successfully posted";

echo $display;