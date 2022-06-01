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

    <div class="container">
        <h2 class="heading text-capitalize mb-sm-5 mb-4"> complaint Received </h2>
        <?php
        //$student_id = $_SESSION['student_id'];
        $query1 = "SELECT * FROM complaint where  status = '1'";
        $result1 = mysqli_query($con, $query1);

        ?>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Student Email</th>
                    <th>Student mobile</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result1) == 0) {
                    echo '<tr><td colspan="4">Empty</td></tr>';
                } else {
                    while ($row1 = mysqli_fetch_assoc($result1)) {
                        //get the name of the student to display
                        $email = $row1['email'];
                        $query7 = "SELECT * FROM usertable WHERE email = '$email'";
                        $result7 = mysqli_query($con, $query7);
                        $row7 = mysqli_fetch_assoc($result7);
                        $student_name = $row7['name'];

                        $query8 = "SELECT * FROM complaint";
                        $result8 = mysqli_query($con, $query8);
                        $row8 = mysqli_fetch_assoc($result8);
                        $message = $row8['message'];
                        $mobile = $row8['mobile'];
                        echo "<tr><td>{$student_name}</td><td>{$email}</td><td>{$mobile}</td><td>{$message}</td></tr>\n";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <section class="contact py-5">
        <div class="container">
            <div class="mail_grid_w3l">
                <form action="home-admin.php?page=complaint_sol" method="post">
                    <div class="row">
                        <input  type="submit" value="Solved" name="submitsol">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php
    if (isset($_POST['submitsol'])) {
        $result1 = mysqli_query($con, $query1);

        while ($row1 = mysqli_fetch_assoc($result1)) {

            $email = $row1['email'];
            //$query3 = "UPDATE complaint SET status = '0' WHERE Student_id = '$student_id'";
            $query3 = "DELETE FROM `complaint` WHERE status= '1'";
            $result3 = mysqli_query($con, $query3);
        }
    }

    ?>
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