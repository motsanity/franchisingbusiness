<!DOCTYPE html>
<html>
<?php 
    include("get-request.php");
?>
<head>
    <title>Franchising Business | How to Franchise</title>
    <?php
        include("component/head_assets.html");
    ?>
    <meta property=”og:image” content=”https://www.franchisingbusiness.net/component/katniel.png” />
    
    <link rel="stylesheet" href="assets-mod/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets-mod/tether/tether.min.css">
  <link rel="stylesheet" href="assets-mod/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets-mod/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets-mod/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets-mod/socicon/css/styles.css">
  <link rel="stylesheet" href="assets-mod/theme/css/style.css">
  <link rel="preload" as="style" href="assets-mod/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets-mod/mobirise/css/mbr-additional.css" type="text/css">
  
</head>
<body>
<?php
    include("component/navbar-client.php");
    $fi = $_REQUEST["id"];
?>
<section data-bs-version="5.1" class="header6 cid-sMEM3YRg1F mbr-fullscreen" id="header6-11">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>
    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-1"><strong>Online Franchise Business</strong></h1>
                
                <p class="mbr-text mbr-white mbr-fonts-style display-7">
                    A business that you can start and operate at the comfort of your own home!</p>
                <div class="mbr-section-btn mt-3"><a class="btn btn-black display-4" href="viewer-register.php?id=<?php echo $fi; ?>" target="_blank">Watch video now!</a></div>
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
</section>
<section class="gallery3 cid-sQ89OYVh9S" id="gallery3-n">
    
    
    <div class="container-fluid">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Why Toktok?</strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5"><em>There are several ways to earn in Toktok.</em></h5>
        </div>
        <div class="row mt-4">
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/img-540-612x763.jpeg" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7"><strong>Toktok Operator</strong></h5>
                        
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">
                            Manage and operate at home up to 100 riders. Every successful deliveries from your riders, you will get 7% commission. No quotas. No maintenance. Your choice.</p>
                    </div>
                    
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/image-2-612x377.png" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7">
                            <strong>Toktok Delivery</strong></h5>
                        
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">
                            Just let your friends download the Toktok app, and every time they use it for their own deliveries, you will get 3% commission. No riders needed.&nbsp;</p>
                    </div>
                    
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/img-279-612x612.jpeg" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7"><strong>Toktok Food&nbsp;</strong></h5>
                        
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Earn up to 15% commission on every time your friends buy foods from their favorite fast-food restaurants. No riders needed.</p>
                    </div>
                    
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/screen-shot-2021-12-02-at-11.43.25-am-612x397.png" alt="" title="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7">
                            <strong>Toktok Mall</strong></h5>
                        
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Earn up to 3.5% commission every time they shop from your online mall. Company itself will be responsible for packaging, delivery and producing the products for your customer door-to-door.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content13 cid-sQppZHHoQw mbr-parallax-background" id="content13-p">
    
    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(255, 255, 255);"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <h3 class="mbr-section-title mbr-fonts-style mb-4 display-5">
                    <strong>Toktok is&nbsp;<em>PERFECT</em>&nbsp;for starters and beginners</strong></h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                        <ul class="list mbr-fonts-style display-7">
                            <li><strong>Life-time business</strong></li>
                            <li><strong>Life-time commissions</strong></li>
                            <li><strong>Life-time discounts</strong></li><li><strong>Solid support system</strong></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="list mbr-fonts-style display-7">
                            <li><strong>No upgrade fee</strong></li>
                            <li><strong>No renewal fee<br></strong></li><li><strong>Free trainings<br></strong></li><li><strong>Free coaching<br></strong><br></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content4 cid-sQpAbItDq5" id="content4-u">
    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-10">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                    <strong>Our Pricing</strong></h3>
                <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-5"><em>
                    Toktok gives you an opportunity to select your payment method.</em></h4>
                
            </div>
        </div>
    </div>
</section>

<section class="pricing2 cid-sQpxvvlGUh" id="pricing2-t">
    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 align-center col-lg-6">
                <div class="plan">
                    <div class="plan-header">
                        <h6 class="plan-title mbr-fonts-style mb-3 display-5">
                            <strong>LIFE-TIME</strong><br><strong><em>(Recommended)</em></strong></h6>
                        <div class="plan-price">
                            <p class="price mbr-fonts-style m-0 display-1">₱<strong>17,888</strong></p>
                            <p class="price-term mbr-fonts-style mb-3 display-7"><strong>CASH/DEBIT - One-time payment only!</strong></p>
                        </div>
                    </div>
                    <div class="plan-body">
                        <div class="plan-list mb-4">
                            <ul class="list-group mbr-fonts-style list-group-flush display-7">
                                <li class="list-group-item">Toktok Operator</li><li class="list-group-item">Toktok Delivery</li><li class="list-group-item">Toktok Food</li><li class="list-group-item">Toktok Mall</li>
                            </ul>
                        </div>
                        <div class="mbr-section-btn text-center"><a href="client-register.php?id=<?php echo $_REQUEST['id'];?>" class="btn btn-warning display-4">Get started</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 align-center col-lg-6">
                <div class="plan">
                    <div class="plan-header">
                        <h6 class="plan-title mbr-fonts-style mb-3 display-5">
                            <strong>LIFE-TIME</strong><br><strong><br></strong></h6>
                        <div class="plan-price">
                            <p class="price mbr-fonts-style m-0 display-1">₱<strong>18,588</strong></p>
                            <p class="price-term mbr-fonts-style mb-3 display-7"><strong>CREDIT CARD - One-time payment only!</strong></p>
                        </div>
                    </div>
                    <div class="plan-body">
                        <div class="plan-list mb-4">
                            <ul class="list-group mbr-fonts-style list-group-flush display-7">
                                <li class="list-group-item">Toktok Operator</li><li class="list-group-item">Toktok Delivery</li><li class="list-group-item">Toktok Food</li><li class="list-group-item">Toktok Mall</li>
                            </ul>
                        </div>
                        <div class="mbr-section-btn text-center"><a href="client-register.php?id=<?php echo $_REQUEST['id'];?>" class="btn btn-black display-4">Get started</a></div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>

<section class="testimonials2 cid-sQprzB0GrS" id="testimonials2-q">
    
    
    <div class="container">
        <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
            <strong>Advices</strong></h3>
        <div class="row justify-content-center">
            <div class="card col-12 col-md-6">
                <p class="mbr-text mbr-fonts-style mb-4 display-7">"if you don't have any idea or experience in business, <strong>choose</strong> <strong>franchise</strong>. If you have an idea and passion to start your own, then start small but think big"<br><br></p>
                <div class="d-flex mb-md-0 mb-4">
                    <div class="image-wrapper">
                        <img src="assets/images/chinkee-100x67.jpg" alt="Mobirise">
                    </div>
                    <div class="text-wrapper">
                        <p class="name mbr-fonts-style mb-1 display-4"><strong>Chinkee Tan</strong></p>
                        <p class="position mbr-fonts-style display-4">
                            <strong>Motivational Speaker</strong></p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6">
                <p class="mbr-text mbr-fonts-style mb-4 display-7">"if someone offers you an amazing opportunity and you're not sure you can do it, say 'Yes' and learn how to do it later."<br><br><br></p>
                <div class="d-flex mb-md-0 mb-4">
                    <div class="image-wrapper">
                        <img src="assets/images/richard-100x56.jpg" alt="Mobirise">
                    </div>
                    <div class="text-wrapper">
                        <p class="name mbr-fonts-style mb-1 display-4"><strong>Richard Branson</strong></p>
                        <p class="position mbr-fonts-style display-4">
                            <strong>Founder of Virgin Group Ltd.</strong></p>
                    </div>
                </div>
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