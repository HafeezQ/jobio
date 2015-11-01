<?php
include('header.php');
$display = ' ';
$company_name = $_POST['company_name'];
$company_description = $_POST['company_description'];
$company_url = $_POST['company_url'];
$destination = '';

//validations
if(empty($company_name) or empty($company_description))
{
	
	$display .= "Please fill all the required fields";
	include('template/template.php');
	exit;
}

if(!empty($_FILES['company_logo']))
{
$filename = $_FILES['company_logo']['name'];
$destination = "logouploads/".$company_name.$filename;
$temp = $_FILES['company_logo']['tmp_name'];


if($_FILES['company_logo']['type']!= 'image/jpeg' and $_FILES['company_logo']['type']!='image/png')
{
	
	$display .= $_FILES['company_logo']['type']."- Invalid file format. Please re-upload logo in either JPG or PNG type";
	include('template/template.php');
	exit;
}


//file upload

if(!move_uploaded_file($temp,$destination))
{
	echo "File could not be uploaded";
}
}//end of if

	

//saving values in database
include('db.php');
$q = "insert into companydetails(company_name,company_url,company_description,company_logo) values('$company_name','$company_url','$company_description','$destination')";

mysqli_query($dbcon,$q) or die(mysqli_error($dbcon));

$display .= "Company details saved";

echo $display;

?>