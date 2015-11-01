<?php
include('header.php');
include('db.php');

if(empty($_POST['joblistingsubmit']))
{
header("Location:joblistings.php");
exit;
}

$search = $_POST['search'];

if(empty($search))
$q = "select * from jobdetails order by submission_date";
else
$q = "select * from jobdetails where job_title like '%$search%' or description like '%$search%' or category like '%$search%' order by submission_date";

$result = mysqli_query($dbcon,$q) or die(mysqli_error($dbcon));
if(mysqli_num_rows($result)<=0)
{
	echo "No results found";
	exit;
}

echo '<table width="80%"><th>Job Title</th><th>Submission Date</th>';

while($row=mysqli_fetch_array($result))
{
	echo "<tr><td><a href=viewjobdetails.php?id=".$row['job_id'].">".$row['job_title']."</a></td><td>".$row['submission_date']."</td></tr>";
}

echo '</table>';