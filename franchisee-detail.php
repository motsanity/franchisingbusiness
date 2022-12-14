<?php
    session_start();
    include("get_session.php"); 
  $permission_allowed = [1, 2, 3];
  $page_exception = true;
  
  include("get_privilege.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Franchising Business | Franchisee Detail</title>
    <?php
        include("component/head_assets.html");
    ?>
</head>
<body>
<?php
if ($_SESSION["p"] != 1)
    include("component/navbar-franchisee.php");
else
     include("component/navbar-admin.php");
?>
<section data-bs-version="5.1" class="form5 cid-sMJSfJL1v3 bg-light px-5 col-sm-12" id="form5-1b">
    <div class="container-fluid mt-4 mb-5 col-sm-12">
        <div class="mbr-section-head mx-auto col-lg-8">
            <h3 class="mbr-section-title mbr-fonts-style mb-0 display-2">
                <strong>Franchisee Account Details</strong></h3>
            <h4 class="mbr-section-subtitle mbr-fonts-style align-left mb-0 mt-2">
                View full account details in this page.
            </h4>
        </div>
        <div class="row justify-content-center mt-4 col-sm-12">
            <div class="col-lg-8 col-sm-12 align-left mbr-form" data-form-type="formoid">
                <?php 
                    if ($_SESSION["p"] != 1 || ($_SESSION["p"] == 1 && $_SESSION["u"] == $_REQUEST["id"])) {
                ?>
                <div class="col-lg-12 col-md-12 col-sm-12 mbr-section-btn">
                    <button class="btn display-4 btn-dark mb-3" id="toggle-edit">Edit Details</button>
                </div>
                <?php
                    }
                ?>
                <form action="edit-franchisee-form.php?id=<?php echo $_SESSION['u']; ?>" method="POST" class="mbr-form form-with-styler col-sm-12" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="7hX+JUpFU0SdThX11dfoucSTg78plqqvPFJBVHRT2pbAVDQu3WHUwrCCE5rXoYFlUaE8qD5iO780Fh2epksY2uUziKgDaNLlmG7IQwECJemTActADMFWBokdAPL0mrY5">
                    <div class="row">
                        <?php
                            if (isset($_SESSION["up"]) && $_SESSION["up"] == 1) {
                                $_SESSION["up"] = null;
                        ?>
                        <div data-form-alert="" class="alert alert-success col-12">Details have been successfully updated!</div>
                        <?php 
                            } else if (isset($_SESSION["up"]) && $_SESSION["up"] == 0) {
                                $_SESSION["up"] = null;
                        ?>
                        <div data-form-alert-danger="" class="alert alert-danger col-12">Oops...! An error has occured.</div>
                        <?php 
                            }
                            include("fetch-franchisees.php");
                            foreach($result as $r) {
                        ?>
                    </div>
                    <div class="dragArea row col-sm-12">
                        <label for="firstname" class="col-sm-4 col-form-label">First Name</label>
                        <div class="col-md-8 col-sm-8 form-group mb-3" data-for="firstname">
                            <input type="text" name="firstname" id="firstname" placeholder="First Name" data-form-field="name" value="<?php echo $r->first_name; ?>"class="form-control" readonly required>
                        </div>
                        <label for="middlename" class="col-sm-4 col-form-label">Middle Name</label>
                        <div class="col-md-8 col-sm-8 form-group mb-3" data-for="middlename">
                            <input type="text" name="middlename" id="middlename" placeholder="Middle Name" data-form-field="name" value="<?php echo $r->middle_name; ?>" class="form-control"readonly>
                        </div>
                        <label for="lastname" class="col-sm-4 col-form-label">Last Name</label>
                        <div class="col-md-8 col-sm-8 form-group mb-3" data-for="lastname">
                            <input type="text" name="lastname" id="lastname" placeholder="Last Name" data-form-field="name" value="<?php echo $r->last_name; ?>" class="form-control" readonly required>
                        </div>
                        <label for="birthdate" class="col-sm-4 col-form-label">Date of Birth</label>
                        <div class="col-md-8 col-sm-8 form-group mb-3" data-for="birthdate">
                            <input type="text" name="birthdate" id="birthdate" placeholder="Date of Birth" data-form-field="name" value="<?php echo $r->date_of_birth; ?>"class="form-control" readonly required>
                        </div>
                        <label for="idnumber" class="col-sm-4 col-form-label">ID Number</label>
                        <div class="col-md-8 col-sm-8 form-group mb-3" data-for="idnumber">
                            <input type="text" name="idnumber" id="idnumber" placeholder="Franchisee ID Number" data-form-field="name" value="<?php echo $r->id_no; ?>" class="form-control" readonly required>
                        </div>
                        <label for="privilege" class="col-sm-4 col-form-label">Privilege</label>
                        <div class="col-md-8 col-sm-8 form-group mb-3" data-for="privilege">
                            <input type="text" name="privilege" id="privilege" placeholder="Privilege" data-form-field="name" value="<?php echo $r->description; ?>" class="form-control" readonly>
                        </div>
                        <label for="email" class="col-sm-4 col-form-label">Email Address</label>
                        <div class="col-md-8 col-sm-8 form-group mb-3" data-for="email">
                            <input type="text" name="email" id="email" placeholder="Email Address" data-form-field="name" value="<?php echo $r->email; ?>" class="form-control" readonly >
                        </div>
                        <label for="phone" class="col-sm-4 col-form-label">Phone Number</label>
                        <div class="col-md-8 col-sm-8 form-group mb-3" data-for="phone">
                            <input type="text" name="phone" id="phone" placeholder="Phone Number" data-form-field="name" value="<?php echo $r->phone_no; ?>" class="form-control" readonly >
                        </div>
                        <label for="fb" class="col-sm-4 col-form-label">Faceboook URL</label>
                        <div class="col-md-8 col-sm-8 form-group mb-3" data-for="fb">
                            <input type="text" name="fb" id="fb" placeholder="Facebook URL" data-form-field="name" value="<?php echo $r->fb; ?>" class="form-control" readonly >
                        </div>
                        <label for="fb" class="col-sm-4 col-form-label">Faceboook page id</label>
                        <div class="col-md-8 col-sm-8 form-group mb-3" data-for="fb">
                            <input type="text" name="fb_id" id="fb_id" placeholder="Ex: 104317398212686" data-form-field="name" value="<?php echo $r->fb_id; ?>" class="form-control" readonly >
                        </div>
                        
                        <label for="fb" class="col-sm-4 col-form-label">Faceboook pixels</label>
                        <div class="col-md-8 col-sm-8 form-group mb-3" data-for="fb">
                            <input type="text" name="pixel" id="pixel" placeholder="Ex: 392056919269757" data-form-field="name" value="<?php echo $r->pixel; ?>" class="form-control" readonly >
                        </div>
                        
                        <label for="sv" class="col-sm-4 col-form-label">Service</label>
                        <div class="col-md-8 col-sm-8 form-group mb-3" data-for="sv">
                            <select name="sv" id="sv">
                              <option value=""><?php echo $r->sv;?></option>
                              <option value="">Local</option>
                              <option value="abroad">Abroad</option>
                              
                            </select>
                        </div>
                        <label for="Password" class="col-sm-4 col-form-label">Password</label>
                        <div class="input-group col-md-8 col-sm-8 mb-3" data-for="pw">
                          <input type="password" name="pw" class="form-control" readonly id="pw" aria-label="Password">
                          <span hidden class="input-group-text reveal-password"><span class="mbri-preview mbr-iconfont mbr-iconfont-btn"></span></span>
                          <small hidden id="passwordHelpBlock" class="form-text text-muted">
                              Leave this blank if there are no changes to be made to your password.
                            </small>
                        </div>
                        <div hidden id="submit-btn" class="col-lg-12 col-md-12 col-sm-12 mbr-section-btn">
                            <button type="submit" class="btn display-4 btn-dark mb-3">Update</button>
                        </div>
                    </div>
                    <?php } ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        $("#toggle-edit").on("click", function(){
            $("#firstname").removeAttr("readonly");
            $("#firstname").attr("class", "form-control");
            $("#middlename").removeAttr("readonly");
            $("#middlename").attr("class", "form-control");
            $("#lastname").removeAttr("readonly");
            $("#lastname").attr("class", "form-control");
            $("#birthdate").removeAttr("readonly");
            $("#birthdate").attr("class", "form-control");
            $("#email").removeAttr("readonly");
            $("#email").attr("class", "form-control");
            $("#phone").removeAttr("readonly");
            $("#phone").attr("class", "form-control");
            $("#fb").removeAttr("readonly");
            $("#fb").attr("class", "form-control");
            $("#sv").removeAttr("readonly");
            $("#sv").attr("class", "form-control");
            $("#fb_id").removeAttr("readonly");
            $("#fb_id").attr("class", "form-control");
            $("#pixel").removeAttr("readonly");
            $("#pixel").attr("class", "form-control");
            $("#pw").removeAttr("readonly");
            $("#pw").attr("class", "form-control");
            $(".reveal-password").removeAttr("hidden");
            $("#passwordHelpBlock").removeAttr("hidden");
            $("#submit-btn").removeAttr("hidden");

            $(this).css("display", "none")
        });

        $(".reveal-password").on("click", function(){
            if ($("#pw").attr("type") == "text"){
                $("#pw").attr("type", "password");
                $(".reveal-password").attr("class", "input-group-text reveal-password");
            }
            else{
                $("#pw").attr("type", "text");
                $(".reveal-password").attr("class", "input-group-text reveal-password btn-danger");

            }
        });

    })
</script> 
</body>
</html>