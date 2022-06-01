<?php require_once "controllerTpoData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> Tpo Details</title>

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

  <section class="contact py-5">
    <div class="container">
      <div class="mail_grid_w3l">
        <form action="home-admin.php?page=manage_tpo" method="post">
          <div class="row">
            <div class="col-md-9">
              <input type="text" placeholder="Search by Name" name="search_box">
            </div>
            <div class="col-md-3">
              <input type="submit" value="Search" name="search"></input>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php
  if (isset($_POST['search'])) {
    $search_box = $_POST['search_box'];

    $query_search = "SELECT * FROM tpotable WHERE name like '$search_box%'";
    $result_search = mysqli_query($con, $query_search);

  ?>
    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Tpo Name</th>
            <th>Email ID</th>
            <th>Contact Number</th>
            <th>Department</th>
            <th>Role</th>
            <th>File</th>
            <th>Manage</th>
            </tr>
        </thead>
        <tbody>
          <?php
          if (mysqli_num_rows($result_search) == 0) {
            echo '<tr><td colspan="7">No Tpo Exists!!</td></tr>';
          } else {
            while ($row_search = mysqli_fetch_assoc($result_search)) {
              //get the name of the student to display
              $email_id = $row_search['email'];
              $tponame = $row_search['name'];

              $query1 = "SELECT * FROM tpotable WHERE name = '$tponame'";
              $result1 = mysqli_query($con, $query1);
              $row1 = mysqli_fetch_assoc($result1);

              //student name
              $tpo_name = $row_search['name'];

              echo "<tr><td>{$tpo_name}</td><td>{$email_id}</td><td>{$row_search['mobile']}</td><td>{$row_search['dept']}</td><td>{$row_search['class']}</td><td>{$row_search['tpo_college_id']}</td>
              <td> <a href='DeleteTpo.php?rn=$email_id'>Delete</td></tr>\n";
            }
          }
          ?>
        </tbody>
      </table>
    </div>
  <?php
  }
  ?>


  <div class="container">
    <h2 class="heading text-capitalize mb-sm-5 mb-4"> Tpo Details</h2>
    <?php

    $query11 = "SELECT * FROM tpotable";
    $result11 = mysqli_query($con, $query11);

    ?>

    <table class="table table-hover">
      <thead>
        <tr>
          <th>Tpo Name</th>
          <th>Email ID</th>
          <th>Contact Number</th>
          <th>Department</th>
          <th>Role</th>
          <th>File</th>
          <th>Manage</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (mysqli_num_rows($result11) == 0) {
          echo '<tr><td colspan="5">Tpo does not exist</td></tr>';
        } else {
          while ($row_search = mysqli_fetch_assoc($result11)) {
            //get the name of the student to display
            $email_id = $row_search['email'];
            $tponame = $row_search['name'];

            // $query11 = "SELECT * FROM tpotable WHERE name = '$tponame'";
            // $result11 = mysqli_query($con, $query11);
            // $row11 = mysqli_fetch_assoc($result11);

            //student name
            $tpo_name = $row_search['name'];

            echo "<tr><td>{$tpo_name}</td><td>{$email_id}</td><td>{$row_search['mobile']}</td><td>{$row_search['dept']}</td><td>{$row_search['class']}</td><td>{$row_search['tpo_college_id']}</td>
            <td> <a href='DeleteTpo.php?rn=$email_id'>Delete</td></tr>\n";
           
          }
        }
        ?>
      </tbody>
    </table>
  </div>

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
    width: 100%;
    border-radius: 6px;
}
</style>

</html>