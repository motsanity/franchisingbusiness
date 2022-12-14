<!DOCTYPE html>
<html>
<?php 
    session_start();
    include("get-request.php");
?>
<head>
    <title>Franchising Business | Contacts</title>
    <?php
        include("component/head_assets.html");
    ?>
   <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
</head>
<body>
<?php
    include("component/navbar-client.php");
?>

<section data-bs-version="5.1" class="contacts1 cid-sMR2jG8hki" id="contacts1-1i" style="padding-top: 8em">
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Contacts</strong>
            </h3>
            <?php 
                include("fetch-franchisees.php"); 
                //$has_contact = false;
                foreach ($result as $r){
                    $email = $r->email;
                    $phone = $r->phone_no;
                    $fb = $r->fb;
                    //$has_contact = true;
                }
            ?>
            <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-8">
                Let's keep in touch!
            </h4>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="card col-12 col-lg-6 mb-5">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-letter mobi-mbri"></span>
                        </div>
                        <h4 class="card-title mbr-fonts-style mb-2 display-2">
                            <strong>Email</strong>
                        </h4>
                        <?php if (strlen($email) > 0) {?>
                        <p class="mbr-text mbr-fonts-style mb-2 display-4">
                            We will reply as soon as possible</p>
                        <h5 class="link mbr-fonts-style display-7"><a href="mailto:<?php echo $email;?>" class="text-primary"><?php echo $email;?></a>
                        </h5>
                         <?php } else {?>
                        <p class="mbr-text mbr-fonts-style mb-2 display-4">
                            Not available</p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-lg-6 mb-5">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-mobile-2 mobi-mbri"></span>
                        </div>
                        <h4 class="card-title mbr-fonts-style align-center mb-2 display-2">
                            <strong>Phone</strong>
                        </h4>
                        <?php if (strlen($phone) > 0) {?>
                        <p class="mbr-text mbr-fonts-style mb-2 display-4">
                            Call us!</p>
                        <h5 class="link mbr-black mbr-fonts-style display-7">
                            <a href="tel:<?php echo $phone ?>" class="text-primary"><?php echo $phone; ?></a>
                        </h5>
                        <?php } else {?>
                        <p class="mbr-text mbr-fonts-style mb-2 display-4">
                            Not available</p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-lg-6 mb-5">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-letter mobi-mbri socicon socicon-facebook"></span>
                        </div>
                        <h4 class="card-title mbr-fonts-style mb-2 display-2">
                            <strong>Facebook</strong>
                        </h4>
                        <?php if (strlen($fb) > 0) {?>
                        <p class="mbr-text mbr-fonts-style mb-2 display-4">
                            Get social!</p>
                        <h5 class="link mbr-fonts-style display-7"><a href="<?php echo $fb ?>" class="text-primary"><?php echo $fb; ?></a>
                        </h5>
                       <?php } else {?>
                        <p class="mbr-text mbr-fonts-style mb-2 display-4">
                            Not available</p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>
    <?php
     include("fetch-franchisees.php"); 
                //$has_contact = false;
                foreach ($result as $f){
                    $fb_id = $f->fb_id;
                    $pixel = $f->pixel;
                    
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
    <script>
      fbq('track', 'Contact');
    </script>
    <script>
      fbq('track', 'ViewContent');
    </script>
</section>
<?php
    include("component/footer.php"); 
?>
<?php
    include("component/footer_assets.html");
?>
</body>
</html>