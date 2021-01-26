<?php
/**
 * Api end point  to select 10k data
 *  how to run 
 *  php  api_end_point.php 
 *
 *
  */
$con = mysqli_connect("localhost", "drupaluser", "change-with-strong-password", "drupal");
// Check connection
if (mysqli_connect_errno()) 
{
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = "
select *from xmlsitemap limit 10000
";
$res = mysqli_query($con, $sql);
$b  = mysqli_fetch_all($res,MYSQLI_ASSOC);
print $b=  json_encode($b,JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP); 
exit();

/*
while ($row = mysqli_fetch_assoc($res)) 
{
	print_r($row);
}
 */
