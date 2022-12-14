<!DOCTYPE html>
<html  >
<head>
 <?php
        include("component/head_assets.html");
    ?>
    <!--added-->
     <link rel="stylesheet" href="assets-mod/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets-mod/tether/tether.min.css">
  <link rel="stylesheet" href="assets-mod/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets-mod/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets-mod/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets-mod/socicon/css/styles.css">
  <link rel="stylesheet" href="assets-mod/theme/css/style.css">
  <link rel="preload" as="style" href="assets-mod/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets-mod/mobirise/css/mbr-additional.css" type="text/css">
  <!-- Site made with Mobirise Website Builder v5.2.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets-kind/images/logo5.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Kind Skinscare</title>
  <link rel="stylesheet" href="assets-kind/tether/tether.min.css">
  <link rel="stylesheet" href="assets-kind/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets-kind/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets-kind/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets-kind/theme/css/style.css">
  <link rel="preload" as="style" href="assets-kind/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets-kind/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
        <?php
    include("component/navbar-client.php");
    $fi = $_REQUEST["id"];
?>
  
  <section class="form5 cid-sUxHbQuSNy" id="form5-9">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Become our Partner!</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="">
                <form action="kind-form.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="Cwm5WdUV1jRE52OryCI87TQCA9zzaGyzartcQscaitojJbRQfuGM5Pty5vhlJkuyflJ/ur6BNXAp5iSardb57Y1Bg8UNjKHmtr+YFjh1TaK1KARS+jfOvMjlYvQk/DlD">
                    <div class="">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out
                            the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group" data-for="name">
                            <input type="text" name="fn" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form5-9">
                        </div>
                        <div class="col-md col-sm-12 form-group" data-for="email">
                            <input type="phone" name="ph" placeholder="Phone" data-form-field="phone" class="form-control" value="" id="phone-form5-9">
                        </div>
                        <div class="col-12 form-group" data-for="url">
                            <input type="location" name="lc" placeholder="Your Location" data-form-field="url" class="form-control" value="" id="url-form5-9">
                            
                            <input type="text" name="fi" value="<?php echo $_REQUEST['id'];?>" vdata-form-field="name" class="form-control" hidden>
                            
                            <input type="text" name="inq" value="kind" vdata-form-field="name" class="form-control" hidden>
                        </div>
                        
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit" class="btn btn-secondary display-4">Submit</button></div>
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