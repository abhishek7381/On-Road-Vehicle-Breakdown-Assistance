<?php
$title = "User Register";
include("includes/head.php");
$error = ''; // var to hold errors
$show_form = true; // the form will show until this is true
if(isLoggedIn()) {
    // already logged in
    echo '<div class="container-fluid justify-content-center">
    <h2 class="text-center">User Register</h2>
    <div class="row ">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6">
        <div class="alert alert-info">
    <strong>Welcome!</strong> You are already logged in.
  </div>
  </div>
<div class="col-lg-3">
</div>
</div>
</div>';
    include("includes/footer.php");
    exit(); // stop the execution here
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // form submitted
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pin = $_POST['pin'];
    $email = $_POST['email'];
    $password = md5($_POST['password']); // encrypt password with md5
    $confirm_password = md5($_POST['confirm_password']);
    if (empty($name) || empty($email) || empty($phone) || empty($address) || empty($pin) || empty($password) || empty($confirm_password)) {
        // some field(s) left blank
        $error = 'All fields are required!';
    } else {
        // continue
        if ($password !== $confirm_password) {
            $error = 'Both passwords should be same!';
        } else {
            $sql = "INSERT INTO users (name, email, phone, password, pin, address) VALUES ('$name','$email','$phone','$password','$pin','$address')";
            if ($conn->query($sql) === TRUE) {
                // register successful
                echo '<div class="container-fluid justify-content-center">
                <h2 class="text-center">User Registration</h2>
                <div class="row ">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-6">
                    <div class="alert alert-success">
                <strong>Congratulations!</strong> Account registered successfully. You can <a href="user-login.php">Login</a> Now.
              </div>
              </div>
            <div class="col-lg-3">
            </div>
        </div>
    </div>';
                $show_form = false; // no need to show form
            } else {
                // something is wrong
                $error = 'Something went wrong! Please try again!'.$conn->error;
            }
        }
    }
}
// form not submitted, show form
if ($show_form == true) {
?>

    <!-- Form -->
    <div class="container-fluid justify-content-center">
        <h2 class="text-center">User Registration</h2>
        <div class="row ">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
                <form method="post" action="user-register.php">
                    <?php
                    if (!empty($error)) {
                        echo '<div class="alert alert-danger">
                <strong>Error!</strong> ' . $error . '
              </div>';
                    }
                    ?>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingFullnameInput" placeholder="Abhisek" name="name">
                        <label for="floatingInput">Full name </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="floatingContactInput" placeholder="8114935410" name="phone">
                        <label for="floatingInput">Contact Number </label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Your address" id="floatingTextarea2" name="address" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Address</label>
                    </div> <br>
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="floatingpincodeInput" placeholder="786464" name="pin">
                        <label for="floatingInput">Pincode </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingEmailInput" placeholder="name@example.com" name="email">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Password</label>
                    </div> <br>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingConfirmPassword" placeholder="ConfirmPassword" name="confirm_password">
                        <label for="floatingConfirmPassword">Confirm Password</label>
                    </div> <br>
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </form>
            </div>
            <div class="col-lg-3">
            </div>
        </div>
    </div>
<?php
}
include("includes/footer.php");
?>
