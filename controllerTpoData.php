
<?php 
session_start();
require "connection.php";
$email = "";
$name = "";
$errors = array();

//if user signup button
if(isset($_POST['signup-tpo'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
	$mobile = mysqli_real_escape_string($con, $_POST['mobile_no']);
	$dept = mysqli_real_escape_string($con, $_POST['department']);
	$class = mysqli_real_escape_string($con, $_POST['class']);
	

    $fn = $_FILES['tpo_college_id']['name'];
    $tmp = $_FILES['tpo_college_id']['tmp_name'];
    $uploads_dir = 'C:/xampp/htdocs/campusify/TPO_details';
    move_uploaded_file($tmp, $uploads_dir . '/' . $fn);
  
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  //Email validation pattern\
  
    $email_check = "SELECT * FROM tpotable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        echo "<script>alert('Email that you have entered is already exist!')</script>";
    }
    
    elseif (!preg_match ("/^([a-zA-Z' ]+)$/", $name) ) {  
        echo "<script>alert('Only alphabets and whitespace are allowed In Name.')</script>"; 
    }
    elseif(!preg_match ($pattern, $email) ){  
        echo"<script>alert('Email is not valid')</script>"; 
    }
    elseif (!preg_match ("/^[0-9]*$/", $mobile) ){ 
        echo "<script>alert('Phone no. must be numeric.')</script>";
    } 
    elseif (strlen($mobile) != 10) {  
        echo"<script>alert('Mobile must have 10 digits.')</script>";  
    }
   
    elseif (!preg_match ("/^([a-zA-Z' ]+)$/", $dept) ) {  
        echo "<script>alert('Only alphabets and whitespace are allowed In  Department Name.')</script>"; 
    }
    else if($password !== $cpassword){
        echo "<script>alert('Confirm password not matched!')</script>";
    }
    else if(count($errors) ==0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO tpotable (name, email, password, code, status, mobile, dept,  tpo_college_id, class)
                        values('$name', '$email', '$encpass', '$code', '$status', '$mobile', '$dept', '$fn' ,'$class')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            $subject = "Email Verification Code";
            $message = "Your verification code is $code";
            $sender = "From: campusify2022@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: tpo-otp.php');
                exit();
            }else{
                echo "<script>alert('Failed while sending the code!')</script>";
            }
        }else{
            echo "<script>alert('Internal Error occurred!!!')</script>";
        }
    }

}
    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM tpotable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE tpotable SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                 header('location: login-tpo.php');
                exit();
            }else{
                echo "<script>alert('Internal Error occurred!!!')</script>";
            }
        }else{
            echo "<script>alert('You have Entered Incorrect code!!!')</script>";
        }
    }

    //if user click login button
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $check_email = "SELECT * FROM tpotable WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $status = $fetch['status'];
                if($status == 'verified'){
                    if($email=='campusify2022@gmail.com' or $email=='campusify2022@gmail.com ' ){
                        header('location: home-admin.php');
                    }
                    else{
                        header('location: home-tpo.php');
                    }
               
                    
                }else{
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: tpo-otp.php');
                }
            }else{
                echo "<script>alert('Incorrect email or password!')</script>";
            }
        }else{
           echo "<script>alert('It look like you're not yet a member! Click on the bottom link to signup.')</script>";
        }
    }

//if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM tpotable WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE tpotable SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: campusify2022@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code-tpo.php');
                    exit();
                }else{
                    echo "<script>alert('Failed while sending the code!')</script>";
                }
            }else{
                echo "<script>alert('Internal Error occurred!!!')</script>";
            }
        }else{
            echo "<script>alert('Check your Email address!!!')</script>";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM tpotable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password-tpo.php');
            exit();
        }else{
            echo "<script>alert('You have Entered Incorrect code!!!')</script>";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE tpotable SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
				echo "<script>alert('Your Password has Changed Successfully');window.location='login-tpo.php'</script>";
                     // header('Location: login-user.php');
            }else{
                echo "<script>alert('Internal Error occurred!!!')</script>";
            }
        }
    }



?>