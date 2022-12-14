<?php
    session_start();
  include("get_session.php");
  $permission_allowed = [1];
  include("get_privilege.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Franchising Business | Registration</title>
    <?php
        include("component/head_assets.html");
    ?>
</head>
<body>
<?php
    include("component/navbar-admin.php");
?>
<section data-bs-version="5.1" class="form5 cid-sMJSfJL1v3" id="form5-1a">
    
    
    <div class="container-fluid mt-4 mb-5">
        <div class="mbr-section-head mx-auto col-lg-8">
            <h3 class="mbr-section-title mbr-fonts-style mb-0 display-2">
                <strong>Registration</strong></h3>
            <h4 class="mbr-section-subtitle mbr-fonts-style align-left mb-0 mt-2">
                Fill out this form to register a new franchisee.
            </h4>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="register-form.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    <div class="row">
                        <?php
                            if (isset($_SESSION["g"]) && $_SESSION["g"] == 1) {
                                $_SESSION["g"] = null;
                        ?>
                        <div data-form-alert="" class="alert alert-success col-12">New franchisee successfully registered!</div>
                        <?php 
                            } else if (isset($_SESSION["g"]) && $_SESSION["g"] == 0) {
                                $_SESSION["g"] = null;
                        ?>
                        <div data-form-alert-danger="" class="alert alert-danger col-12">Oops...! An error has occured.</div>
                        <?php 
                            }
                        ?>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md-6 col-sm-12 form-group mb-3" data-for="idnumber">
                            <input type="text" name="idnumber" placeholder="Franchisee ID Number" data-form-field="name" class="form-control" required>
                        </div>
                        <div class="col-md-6 col-sm-12 form-group mb-3" data-for="birthdate">
                            <input type="text" name="birthdate" placeholder="Date of Birth" data-form-field="name" class="form-control" required>
                        </div>
                        <div class="col-md-12 col-sm-12 form-group mb-3" data-for="firstname">
                            <input type="text" name="firstname" placeholder="First Name" data-form-field="name" class="form-control" required>
                        </div>
                        <div class="col-md-12 col-sm-12 form-group mb-3" data-for="middlename">
                            <input type="text" name="middlename" placeholder="Middle Name" data-form-field="name" class="form-control">
                        </div>
                        <div class="col-md-12 col-sm-12 form-group mb-3" data-for="lastname">
                            <input type="text" name="lastname" placeholder="Last Name" data-form-field="name" class="form-control" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn mx-auto">
                            <button type="submit" class="btn display-4 btn-dark">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
    include("component/footer.php");

?>
</section>
<?php
    include("component/footer_assets.html");
?>   
</body>
</html>