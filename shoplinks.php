<!DOCTYPE html>
<html>
<?php 
    session_start();
    include("get-request.php");
?>
    <style>
        .image-wrapper img {
            height: 500px;
            object-fit: cover;
        }
    </style>
<head>
<title>Franchising Business | Shoplinks</title>
<?php
    include("component/head_assets.html");
?>
<link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="vendors/DataTables/Responsive-2.2.5/css/responsive.bootstrap.css">
</head>
<body>
    
<?php
    include("component/navbar-client.php");
    include("fetch-franchisees.php");
    foreach ($result as $f) {
        $id_no = $f->id_no;
    }
?>
<section data-bs-version="5.1" class="features16 cid-sN060phJeh" id="features17-1j" style="padding-top: 10em">    
    <div class="container-fluid">
        <div class="content-wrapper mb-5 p-0">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="assets/images/toktok.jpg" alt="Toktok">
                    </div>
                </div>
                <div class="col-12 col-lg-6 p-5">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style display-5">
                            <strong>Delivery Service</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">
                            May ipapadala ka ba? Ipa-Toktok mo na 'yan!</p>
                        <div class="mbr-section-btn mt-3">
                            <a class="btn btn-warning display-4" target="_blank" href="https://www.toktok.ph/delivery/<?php echo $id_no; ?>">
                                Deliver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper mb-5 p-0">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="assets/images/toktokmall.jpg" alt="Toktok Mall">
                    </div>
                </div>
                <div class="col-12 col-lg-6 p-5">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style display-5">
                            <strong>Online Shopping</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">
                            Looking for essential items, or perhaps a new bag, or even a gadget? Get them all here!</p>
                        <div class="mbr-section-btn mt-3">
                            <a class="btn btn-warning display-4" target="_blank" href="https://www.toktokmall.ph/<?php echo $id_no; ?>">
                                Buy now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper mb-5 p-0">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="assets/images/food.png" alt="JCW Food">
                    </div>
                </div>
                <div class="col-12 col-lg-6 p-5">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style display-5">
                            <strong>Food</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">
                            Missing out on your favorite food? Don't worry, get your cravings here now!</p>
                        <div class="mbr-section-btn mt-3">
                            <a class="btn btn-warning display-4" target="_blank" href="https://siomaiking.ph/ordernow/<?php echo $id_no; ?>">
                                Order here
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper mb-5 p-0">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="assets/images/healthwellness.jpeg" alt="Health & Wellness">
                    </div>
                </div>
                <div class="col-12 col-lg-6 p-5">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style display-5">
                            <strong>Health & Wellness</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">
                            Health is wealth. Get your food supplements and personal care items here!</p>
                        <div class="mbr-section-btn mt-3">
                            <a class="btn btn-warning display-4" target="_blank" href="https://jcshop.ph/<?php echo $id_no; ?>">
                               Order here
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper mb-5 p-0">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="assets/images/protection.png" alt="Protection">
                    </div>
                </div>
                <div class="col-12 col-lg-6 p-5">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style display-5">
                            <strong>Protection</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">
                            Prevention is always better than cure. Stay protected!</p>
                        <div class="mbr-section-btn mt-3">
                            <a class="btn btn-warning display-4" target="_blank" href="https://coppermask.ph/ordernow/<?php echo $id_no; ?>">
                               Order here
                            </a>
                        </div>
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