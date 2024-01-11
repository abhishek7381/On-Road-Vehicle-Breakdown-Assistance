<?php
$title = "Mechanic Login";
include("includes/head.php");
$error = ''; // var to hold errors
$show_form = true; // the form will show until this is true
if(isMechanic()) {
    // already logged in
    echo '<div class="container-fluid justify-content-center">
    <h2 class="text-center">Mechanic Login</h2>
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
    // if submitted
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = 'select * from mechanics where email="' . $email . '" AND password="' . $password . '"';
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // login successful
            $_SESSION['mechanic'] = 1;
            $_SESSION['m_id'] = $row['id'];
            $_SESSION['m_name'] = $row['name'];
            $_SESSION['m_phone'] = $row['phone'];
            $_SESSION['m_email'] = $row['email'];
        }
        echo '<div class="container-fluid justify-content-center">
        <h2 class="text-center">Mechanic Login</h2>
        <div class="row ">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
            <div class="alert alert-success">
        <strong>Congratulations!</strong> You are logged in successfully.
      </div>
      </div>
    <div class="col-lg-3">
    </div>
</div>
</div>';
        $show_form = false; // no need to show form
    } else {
        // email or password wrong
        $error = 'Email or Password is wrong!';
    }
}
if ($show_form == true) {
?>
    <!-- Form -->
    <div class="container-fluid justify-content-center">
        <h2 class="text-center Ulogin">Mechanic Login</h2>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <form method="post" action="mechanic-login.php">
                    <?php
                    if (!empty($error)) {
                        echo '<div class="alert alert-danger">
                <strong>Error!</strong> ' . $error . '
              </div>';
                    }
                    ?>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email"/>
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password"/>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <br />
                    <button type="submit" class="btn btn-primary">Login</button> <br />
                    <br />
                    New to ORVBA? <a href="mechanic-register.php" target="_blank">Sign up </a>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
<?php
}
include("includes/footer.php");
?>
