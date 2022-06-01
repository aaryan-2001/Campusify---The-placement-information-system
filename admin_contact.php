<?php require_once "controllerTpoData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Complaint Solution</title>

    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--bootsrap -->

    <!--// Meta tag Keywords -->



</head>

<body>
		<?php

		$query1 = "SELECT * FROM contact";
		$result1 = mysqli_query($con, $query1);

		?>

		<table class="table table-hover">
			<thead>
				<tr>
					<th>Name</th>
                    <th>Email</th>
					<th>Contact Number</th>
					<th>Message</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if (mysqli_num_rows($result1) == 0) {
					echo '<tr><td colspan="4">No Rows Returned</td></tr>';
				} else {
					while ($row_search = mysqli_fetch_assoc($result1)) {
						//get the name of the communicator to display
						$fname = $row_search['name'];
						$result7 = mysqli_query($con, $query1);
						$row7 = mysqli_fetch_assoc($result7);
						$phone = $row7['phone'];
                        $email = $row7['email'];
						$message = $row7['message'];

						echo "<tr><td>{$fname}</td><td>{$email}</td><td>{$phone}</td><td>{$message}</td></tr>";
					}
				}
				?>

			</tbody>
		</table>

</body>
<style>
table {
    margin-top: 10px;
    border-color: #00f1f1;
    border-collapse: collapse;

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
  
input[type="text"],input[type="submit"] {
    width: 100%;
    border: 0.5px solid;
    box-sizing: border-box;
    background: transparent;
    padding: 10px;
    color: #000;
}

input[type="text"]:focus ,input[type="submit"]:focus{
    outline: none;
}
input[type="submit"]:hover{
  background-color: #00BCD4;
    transition-duration: 0.5s;
}
input[type="submit"]{
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

