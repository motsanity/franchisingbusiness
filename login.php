<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Franchising Business | Login</title>
    <?php
        include("component/head_assets.html");
    ?>
</head>
<body>

<section data-bs-version="5.1" class="form3 cid-sMJl918XCq mbr-fullscreen" id="form3-17">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-12">
                <div class="image-wrapper">
                    <img class="w-100" src="assets/images/aldub.jpeg" alt="Mobirise">
                </div>
            </div>
            <div class="col-lg-3 px-1 mx-5 mbr-form" data-form-type="formoid">
                <form action="login-form.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">

                    <div class="row">
                        <?php
                            if (isset($_SESSION["r"]) && $_SESSION["r"] == 1) { // error log in 
                                $_SESSION["r"] = null;
                        ?>
                        <div data-form-alert-danger="" class="alert alert-danger col-12 ">ID Number or password is wrong. </div>
                        <?php
                            } else if (isset($_SESSION["r"]) && $_SESSION["r"] == 0) { // not logged in
                                $_SESSION["r"] = null;
                        ?>
                        <div data-form-alert-danger="" class="alert alert-danger col-12 ">Log into the franchisee portal to continue.</div>
                        <?php
                            } else if (isset($_SESSION["r"]) && $_SESSION["r"] == 3) { // insufficient permission
                                $_SESSION["r"] = null;
                        ?>
                        <div data-form-alert-danger="" class="alert alert-danger col-12 ">You do not have permission to access the page.</div>
                        <?php
                            } else if (isset($_SESSION["r"]) && $_SESSION["r"] == 2) { // good login
                                $_SESSION["r"] = null;
                                if (isset($_SESSION["p"]) && $_SESSION["p"] == 1)
                                    die(header("Location: franchisees.php"));
                                else{
                                    $u = $_SESSION["u"];
                                    die(header("Location: franchisee-detail.php?id=" . $u));
                                }
                            }
                        ?>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="mbr-section-title mb-4 display-2">
                                <strong>Login</strong></h1>
                        </div>
                        <div class="input-group col-lg-12 col-md-12 col-sm-12">
                            <p class="mbr-text mbr-fonts-style mb-4 display-7">Start working on your online business tool!</p>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span></span>
                            <input type="text" class="form-control" name="idnumber" placeholder="Franchisee ID Number" aria-label="Franchisee ID Number" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><span class="mbri-lock mbr-iconfont mbr-iconfont-btn"></span></span>
                            <input type="password" class="form-control" id="pw" name="password" placeholder="Password" aria-label="Password">
                            <span class="input-group-text reveal-password"><span class="mbri-preview mbr-iconfont mbr-iconfont-btn"></span></span>
                        </div>

                        
                        <div class="col-md-auto col-12 mbr-section-btn">
                            <button type="submit" class="btn btn-black display-4">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="offset-lg-1"></div>
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
        $(".reveal-password").on("click", function(){
            if ($("#pw").attr("type") == "text"){
                $("#pw").attr("type", "password");
                $(".reveal-password").attr("class", "input-group-text reveal-password");
            }
            else{
                $("#pw").attr("type", "text");
                $(".reveal-password").attr("class", "input-group-text reveal-password btn-danger");
            }
        })
    });
</script>
</body>
</html>