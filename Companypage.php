<?php
include('header.php');
$title = "Job Seekers";

$display = '<body>
<div class="Companydetails"> <i>Fields marked with * are compulsory</i>
<form method="post" action="company2.php" enctype="multipart/form-data">
<div class="form-group">
 <label for="Company Name">Company Name *</label>
 <input type="text" class="form-control" id="companyname" name="company_name">
</div>
<div class="form-group">
 <label for="Photo">Logo </label>
 <div class="fileupload fileupload-new" data-provides="fileupload">
  <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
  <div>
    <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="company_logo" /></span>
    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
  </div>
</div>
</div>
<div class="form-group">
<label for="description">Description *</label>
<input type="textarea" class="form-control" id="description" name="company_description">
</div>
<div class="form-group">
<label for="url">url</label>
<input type="text" class="form-control" id="url" name="company_url">
</div>
<div class="form-group">
<label for="T&C">T&C</label>
<input type="textarea" style="height:150px;width:250px;" class="form-control" id="tnc">

<br><input type="submit">
</span>
</div>';

echo $display;

 include('footer.php');?>
</body>