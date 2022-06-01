<html>  
<body>  
<form method = "post" action="saveAppJob.php">   
<table align="center" border="1" width="70%">

	<th colspan="2"> Apply for a Job</th>
	
	<tr>
	<td><div class="labl">Job: </div></td>
	<td>	
	<?php
	$con=mysqli_connect("localhost","root","","campusify");
	$qry="select JobID, JobDesc from placement_tbl where expDate>'".date("Y-m-d")."'";
	
	$run=mysqli_query($con,$qry);
	echo '<select name="jid">';
	
	while ($rows=mysqli_fetch_array($run))
	{
		
		echo "<option value=".$rows['JobID'].">".$rows['JobID']."		".$rows['JobDesc']."</option>";
		
	}
	?>
				  
	</td>
	</tr>
	<th colspan="2" style="background-color:#0055CC;" > <input type = "submit" name = "submit" value="Save Details" style="font-size:16px;font-weight:bold; padding:5px;color: #0055CC; text-shadow: 2px 2px 4px orange;" >	</th>
</table> 
  
</form>     
</body>   
<style>
    table {
        margin-top: 10px;
        border-color: #00f1f1;
        border-collapse: collapse;
        width:70%;
        align-items: center;
    }

    tr {
        height: 40px;
    }

    th {
        background-color: lightsteelblue;
        text-align: center;
        padding: 10px;

    }

    td {
        background-color: lightgoldenrodyellow;
        text-align: center;
    }

    input[type="text"],
    input[type="submit"] {
        width: 100%;
        border: 0.5px solid;
        box-sizing: border-box;
        background: transparent;
        padding: 10px;
        color: #000;
    }

    input[type="text"]:focus,
    input[type="submit"]:focus {
        outline: none;
    }

    input[type="submit"]:hover {
        background-color: #00BCD4;
        transition-duration: 0.5s;
    }

    input[type="submit"] {
        background: #fc3955;
        color: #ffffff;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: none;
        padding: 12px 60px;
        cursor: pointer;
        width: 20%;
        border-radius: 6px;
    }
</style>
</html>

