
<?php include('header.php'); 

$display ='<body>
<div class="JobDetails">
<form action="job2.php" method="post">
<div class="form-group">
<label for="JobTitle">Job Title</label>
<input type="text" id="jobtitle" name="job_title" class="form-control">
</div>
<div class="form-group">
<label for="Category">Category</label>
<select id="category" name="category" class="form-control">
<option value=""></option>
<option value="Marketing">Marketing</option>
<option value="IT">IT</option>
</select>
</div>
<div class="form-group">
<label for="Description">Job Description</label>
<textarea id="description" name="description" class="form-control"></textarea>
</div>
<input type="submit">';

echo $display;
include('footer.php'); ?>
