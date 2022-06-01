<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Complaints</title>

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
<style>
    body {
        background-color: rgb(248, 224, 197);
    }

    label {
        padding-top: 20px;
    }

    input[type="text"],
    input[type="submit"],
    input[type="tel"] {
        width: 100%;
        align-self: center;
        justify-content: center;
        border: 0.5px solid;
        box-sizing: border-box;
        background: transparent;

        padding: 10px;
        color: #000;
    }

    input[type="text"]:focus,
    input[type="submit"]:focus,
    input[type="tel"]:focus {
        outline: none;
    }

    input[type="submit"]:hover {
        background-color: #00BCD4;
        transition-duration: 0.5s;
    }

    input[type="submit"] {
        background: #fc3955;
        color: #ffffff;
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: none;
        padding: 12px 60px;
        cursor: pointer;
        width: 20%;
        border-radius: 6px;
    }

    .buttons {
        padding: 20px;
    }
</style>

<body>
<?php

$student_id = $_SESSION['email'];

$query1 = "SELECT * FROM usertable WHERE email = '$student_id'";
$result1 = mysqli_query($con, $query1);
$row1 = mysqli_fetch_assoc($result1);
$roll = $row1['email'];
$name = $row1['name'];

?>



    <h1 class="page-header">Have Query? </h1>

    <form action="Queries_success.php" method="POST">
    <div class='buttons'>
        <label>Email:</label>
        <input type="text" name="email" placeholder="Email" value="<?php echo $_SESSION['email']; ?>" required="" disabled="disabled">
        <label>Name:</label>
        <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>" required="" disabled="disabled">
        <label>Mobile:</label>
        <input type="tel" name="mobile" placeholder="Phone no." required="">
        <label>Message:</label>
        <input type="text" name="message" placeholder="Type Your Message Here...." required="">
        <div class="buttons" align="center">
            <input type="submit" name="submitcomp" value="Raise a Query">
        </div>
    </div>
    </form>
</body>

</html>