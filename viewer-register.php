<!DOCTYPE html>
<html>
<?php
  include("get-request.php");
  session_start();
?>
<head>
    <title>Franchising Business | Viewer Registration</title>
    <?php
        include("component/head_assets.html");
    ?>
</head>
<body>
<?php
    include("component/navbar-client.php");
?>
<?php
include("fetch-franchisees.php"); 
                //$has_contact = false;
                foreach ($result as $r){
                    $sv = $r->sv;
                    $pixel = $r->pixel;
                   
                    //$has_contact = true;
                }
                
            ?>
<section data-bs-version="5.1" class="form5 cid-sMJSfJL1v3" id="form5-1a">
    
    
    <div class="container-fluid mt-4 mb-5">
        <div class="mbr-section-head mx-auto col-lg-8">
            <h3 class="mbr-section-title mbr-fonts-style mb-0 display-2">
                <strong>Viewer Registration</strong></h3>
            <h4 class="mbr-section-subtitle mbr-fonts-style align-left mb-0 mt-2">
                Fill out this form to proceed watching our short video orientation.
            </h4>
            
            <h4 class="mbr-section-subtitle mbr-fonts-style align-left mb-0 mt-2" style ="color: red">
                <br>
                Note:<br>
                1. Always double check your volumes up so you can hear the video(if you cannot hear something please click the unmute button).<br>
                2. Exiting the browser will lead to restarting the whole video.<br>
                3. Video is not skippable.<br>
                4. Enjoy and listen very carefully.
                
                
            </h4>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="">
                <form action="viewer-form.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    <div class="row">
                        <?php
                            if (isset($_SESSION["g"]) && $_SESSION["g"] == 1) {
                                $_SESSION["g"] = null;
                        ?>
                        <div data-form-alert="" class="alert alert-success col-12">Your details have been submitted.</div>
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
                        <?php if($sv != NULL) : ?>
                        <div class="col-md-12 col-sm-12 form-group mb-3" data-for="firstname">
                            <input type="text" name="fn" placeholder="Facebook Name" data-form-field="name" class="form-control" required>
                        </div>
                        <?php endif;?>
                        <?php if($sv == NULL) : ?>
                        <div class="col-md-12 col-sm-12 form-group mb-3" data-for="firstname">
                            <input type="text" name="fn" placeholder="Full Name" data-form-field="name" class="form-control" required>
                        </div>
                        <?php endif;?>
                        
                        <?php if($sv == NULL) : ?>
                        <div class="col-md-12 col-sm-12 form-group mb-3" data-for="address">
                            <input type="text" name="lc" placeholder="Location" data-form-field="name" class="form-control" required>
                        </div>
                        <?php endif;?>
                        
                        <?php if($sv != NULL) : ?>
                        <div class="col-md-12 col-sm-12 form-group mb-3" data-for="address">
                            <input type="text" name="lc" placeholder="Phone Number" data-form-field="name" class="form-control" required>
                        </div>
                        <?php endif;?>
                        
                        <?php if($sv == NULL) : ?>
                        <div class="col-md-12 col-sm-12 form-group mb-3" data-for="phone">
                            <input type="number" name="ph" placeholder="Phone Number" data-form-field="name" minlength="10" maxlength="11" class="form-control" required>
                        </div>
                        <?php endif;?>
                        
                        <?php if($sv != NULL) : ?>
                        <div class="col-md-12 col-sm-12 form-group mb-3" data-for="phone">
                            <input type="email" name="ph" placeholder="Email Address " data-form-field="email" class="form-control" required>
                        </div>
                        <?php endif;?>
                        <div class="col-md-12 col-sm-12 form-group mb-3" data-for="phone">
                            <input type="text" name="fi" value="<?php echo $_REQUEST['id'];?>" vdata-form-field="name" class="form-control" hidden>
                            
                            <input type="text" name="inq" value="toktok" vdata-form-field="name" class="form-control" hidden>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn mx-auto">
                            <button type="submit" class="btn display-4 btn-dark">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '<?php echo $pixel;?>');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=<?php echo $pixel;?>&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<script>
  fbq('track', 'Lead');
</script>

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>
    <?php
     include("fetch-franchisees.php"); 
                //$has_contact = false;
                foreach ($result as $f){
                    $fb_id = $f->fb_id;
                    
                }
                
            ?>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "<?php echo $fb_id?>");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
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