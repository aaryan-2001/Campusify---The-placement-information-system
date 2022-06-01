
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/style.css" rel="stylesheet">

	<title>Notifications</title>
</head>
<body>
<?php
	$con=mysqli_connect("localhost","root","","campusify");
	$qry="select * from placement_tbl where expDate>'".date("Y-m-d")."'";
	
	$run=mysqli_query($con,$qry);
	while ($rows=mysqli_fetch_array($run))
	{
		echo "<div class=\"jobbox\">";
		echo "<h3>".$rows['JobID'].". ".$rows['JobDesc']."</h3>"." <p><font color=red> Last Date for Applying :".$rows['ExpDate']."</font></p>" ;
		echo "<b>Company:</b>".$rows['CompanyName']."<br>";
		echo "<b>Location:</b>".$rows['Location']."<br>";
		echo "<b>Date of Interview:</b>".$rows['InterviewDate']."<br>";
		echo "<b>Stream:</b>".$rows['Stream']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>Salary Package:</b>".$rows['SalPackage']."<br>";
		echo "<b>Qualification:</b>".$rows['Qualification']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <b>Other Requirements:</b>".$rows['OtherReq']."<br>";
	
		echo "</div>";
	}
	
	?>
</body>

</html>
