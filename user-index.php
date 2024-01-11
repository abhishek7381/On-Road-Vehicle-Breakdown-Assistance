<?php
$title = "User";
include("includes/head.php");
echo '<div class="container-fluid justify-content-center">
<h2 class="text-center">Mechanic Register</h2>
<div class="row ">
    <div class="col-lg-3">
    </div>
    <div class="col-lg-6">';
if(isLoggedIn()) {
    // logged in as mechanic
    echo '<div class="alert alert-success">
    <strong>Welcome '.$_SESSION['name'].'!</strong> You are currently logged in.
  </div>';
} else {
    // not logged in
    echo '<div class="alert alert-info">
    <strong>Welcome Guest!</strong> You are currently not logged in.
  </div>';
}
echo '</div>
<div class="col-lg-3">
</div>
</div>
</div>';
include("includes/footer.php");
?>
