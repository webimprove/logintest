<?php
$username="u462945266_sree";
$password="9963447141";
$database="u462945266_db";
$url = "mysql.neq3.com";
 
$category = $_POST['Category'];
$website = $_POST['Website'];
$title  = $_POST['CouponTitle'];
$description = $_POST['CouponDescription'];
$code = $_POST['CouponCode'];
$affiliatelink = $_POST['AffiliateLink'];
$affiliateimage = $_POST['AffiliateImage'];
 
 
mysql_connect($url,$username,$password);
 
@mysql_select_db($database) or die( "Unable to select database");
 
$query = "INSERT INTO Coupons(Category,Website,CouponTitle,CouponDescription,CouponCode,AffiliateLink,AffiliateImage) VALUES ('$category','$website','$title','$description','$code', '$affiliatelink', '$affiliateimage')";
 
mysql_query($query);
 
mysql_close();
echo "You successfully added your Coupon"; 
?>