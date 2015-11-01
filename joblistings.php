<?php
include('header.php');


$display = '<form method="post" action="joblistings2.php">
Search a job (leave blank to view all jobs): <input type="text" name="search" placeholder="enter any keywords">
<br><input type="submit" name="joblistingsubmit">
</form>';

echo $display;

