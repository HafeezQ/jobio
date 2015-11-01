<?php
$display = '';
include('header.php');
include('db.php');

$id = $_GET['id'];

$q = "select * from jobdetails where job_id='$id'";

$result = mysqli_query($dbcon,$q) or die(mysqli_error($dbcon));
$row = mysqli_fetch_array($result);

echo '<table><tr><th>Job Title</th><td>'.$row['job_title'].'</td></tr>';
echo '<tr><th>Job Category</th><td>'.$row['category'].'</td></tr>';
echo '<tr><th>Job Description</th><td>'.$row['description'].'</td></tr>';

$company_id = $row['company_id'];
$q2 = "select * from companydetails where company_id='$company_id'";
$result2 = mysqli_query($dbcon,$q2) or die(mysqli_error($dbcon));
$row2 = mysqli_fetch_array($result2);

echo '<tr><th>Company Details: </th><td><img src="'.$row2['company_logo'].'" style="width:50px;height:50px;">Company Name:'.$row2['company_name'].'<br>Company Details: '.$row2['company_description'].'</td></tr>';

echo '</table>';