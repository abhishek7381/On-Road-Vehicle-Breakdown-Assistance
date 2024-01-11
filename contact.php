<?php
$title = 'Contact Us';
$activePage = 'contact';
include('includes/head.php');
?>

<!-- contact -->
<div class="container" id="contact">
    <div class="row justify-content-center">
        <h2 class="text-center">Contact us</h2>
        <div class="col-md-8">
            <form>
                <div class="mb-3">
                    <label for="exampleInputname" class="form-label">Name</label>
                    <input type="email" class="form-control" id="exampleInputname" aria-describedby="nameHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputemail" class="form-label">email</label>
                    <input type="email" class="form-control" id="exampleInputemail" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email
                        with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputnumber1" class="form-label"> Contact
                        Number</label>
                    <input type="text" class="form-control" id="exampleInputnumber1">
                </div>
                <button type="submit" class="btn btn-primary mb-4">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>
