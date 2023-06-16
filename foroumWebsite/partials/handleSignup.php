<?php 
$showError="false";
if($_SERVER['REQUEST_METHOD']=="POST"){
    require '_dbconnect.php';
    $email=$_POST['signupEmail'];
    $password=$_POST['signupPassword'];
    $confirmPassword=$_POST['confirmPassword'];
    $existsql="SELECT * FROM `users` WHERE `email`='$email'";
    $result=mysqli_query($conn,$existsql);
    if($result){
        echo "true";
    }
    else{
        echo "false";
    }
    $numRows=mysqli_num_rows($result);
    if($numRows>0){
        $showError="Email already in use";
    }
    else{
        if($password=$confirmPassword){
            $hash=password_hash($password,PASSWORD_DEFAULT);
            $sql="INSERT INTO `users`(`email`,`password`) VALUES ('$email','$hash')";
            $result=mysqli_query($conn,$sql);
            if($result){
                $showAlert=true;
                header("location:/foroumWebsite/index.php?signupsuccess=true");
                exit();
            }
            else{
                $showAlert=false;
            }
        }
        else{
            $showError="Passwords donot match";
        }
    }
    // header("location:/foroumWebsite/index.php?signupsuccess=false&error=$showError");
}
?>