<!-- <?php 
$succesfullSignup=false;
$showError=false;
if($_SERVER['REQUEST_METHOD']=="POST"){
    require 'partials/_dbconnect.php';
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];
    if($password==$confirmPassword){
        $hash=password_hash($password,PASSWORD_DEFAULT);
        $sql="INSERT INTO `users`(`sno`,`email`,`password`,`date`) VALUES (NULL,'$email','$hash',current_timestamp())";
        $result=mysqli_query($conn,$sql);
        if($result){
            $succesfullSignup=true;
        }
        else{
            $showError="Failed to signup!!";
        }
    }
    else{
        $showError="Passwords donot match";
    }
}
?> -->

<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="signupModalLabel">Signup To Your Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <form action="index.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>