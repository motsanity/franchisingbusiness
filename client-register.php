<!DOCTYPE html>
<html>
<?php
    session_start();
  include("get-request.php");
  
?>
<head>
    <title>Franchising Business | Client Registration</title>
    <?php
        include("component/head_assets.html");
    ?>
</head>
<body>
<?php
    include("component/navbar-client.php");
     include("fetch-franchisees.php"); 
                //$has_contact = false;
                foreach ($result as $r){
                    $email = $r->email;
                    $phone = $r->phone_no;
                    $fb = $r->fb;
                    $fi = $r->franchisee_id;
                    $fb = $r->fb;
                    //$has_contact = true;
                }
                
            ?>
            <?php 
                include("fetch-headline.php"); 
                //$has_contact = false;
                foreach ($result as $re){
                    $image = $re->image;
                    $title = $re->title;
                    
                    //$has_contact = true;
                }
?>
<section data-bs-version="5.1" class="form5 cid-sMJSfJL1v3" id="form5-1a">
    <div class="container-fluid mt-4 mb-5">
        <div class="mbr-section-head mx-auto col-lg-8">
            <h3 class="mbr-section-title mbr-fonts-style mb-0 display-2">
                <strong>Client Registration</strong></h3>
            <h4 class="mbr-section-subtitle mbr-fonts-style align-left mb-0 mt-2">
                 <b><i>Fill out this form to submit your details.</i></b>
                 <br>
             <h4 style="color:">    
                Note:<br><br>
                1. Before you fill-up this application form please <b>copy</b> this text <i style="color:#D04493">"Hi! I've already watch your video orientation and I want to avail the promo ASAP"</i><br><br>
                
                 
                2. After you fill-up and submit the application form, you will be redirected to your coach's Facebook.<br><br>
                
                3. Send the copied text to your coach.<br><br>
                
                4. Wait for his/her response.<a href="#testimonials3-k">who's my coach?</a>
                
               
                
             </h4>   
            
            </h4>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="register-client-form.php?id=<?php echo $_REQUEST['id'];?>" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
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
                        <div class="col-md-12 col-sm-12 form-group mb-3" data-for="firstname">
                            <input type="text" name="firstname" placeholder="First Name" data-form-field="name" class="form-control" required>
                        </div>
                        <div class="col-md-12 col-sm-12 form-group mb-3" data-for="middlename">
                            <input type="text" name="middlename" placeholder="Middle Name" data-form-field="name" class="form-control">
                        </div>
                        <div class="col-md-12 col-sm-12 form-group mb-3" data-for="lastname">
                            <input type="text" name="lastname" placeholder="Last Name" data-form-field="name" class="form-control" required>
                        </div>
                        <div class="col-md-12 col-sm-12 form-group mb-3" data-for="address">
                            <input type="text" name="address" placeholder="Address" data-form-field="name" class="form-control" required>
                        </div>
                        <div class="col-md-12 col-sm-12 form-group mb-3" data-for="address">
                            <input type="text" name="birthdate" placeholder="Date of Birth (e.g. 1990-01-01)" data-form-field="name" class="form-control" required maxlength="10">
                        </div>
                        <div class="col-md-12 col-sm-12 form-group mb-3" data-for="email">
                            <input type="text" name="email" placeholder="Email Address" data-form-field="name" class="form-control" >
                        </div>
                        <div class="col-md-12 col-sm-12 form-group mb-3" data-for="phone">
                            <input type="text" name="phone" placeholder="Phone Number" data-form-field="name" class="form-control" >
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
<section data-bs-version="5.1" class="testimonails3 carousel slide testimonials-slider cid-sMEklCmMy5 mt-5" data-interval="false" data-bs-interval="false" id="testimonials3-k">
    <div class="text-left container col-lg-10 col-sm-12 col-md-12 mt-4">
        <div class="who"></div>
        <h3 class="mb-2 mbr-fonts-style display-2 align-center mb-3"><strong>Guess who's your coach?</strong></h3>
        <?php
            include("fetch-headline.php");
            foreach($result as $r){
                if ($r->c > 0){
                    $img = $r->image;
                    $description = $r->description;
                    $title = $r->title;
                }
            }
        ?>
        <div class="carousel slide col-sm-12 col-lg-12 col-md-12 g-0 mx-0">
            <div class="carousel-inner col-sm-12 col-lg-12 col-md-12 g-0 mx-0 ">
                
                
            <div class="carousel-item col-sm-12 col-lg-12 col-md-12 ">
                    <div class="user col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group col-sm-12 col-lg-12 col-md-12 ">
                           
                           <div class="image-upload text-center">
                                <div class="user_image">
                                    <?php
                                        if (isset($img)){
                                    ?>
                                    <img src="<?php echo $img; ?>">
                                    <?php } else {?>
                                    <img src="assets/images/avatar.png">
                                    <?php }?>
                                </div>
                           </div>

                       </div>
                        
                        <div class="user_text col-sm-12 col-lg-12 col-md-12 ">
                                <?php
                                    if (isset($description)) {
                                ?> 
                                <p class="mbr-fonts-style display-7 col-sm-12 col-lg-12 col-md-12 ">
                                     <?php echo $description ?>
                                </p>
                                <?php
                                    } else {
                                ?>
                                <p class="mbr-fonts-style display-7 col-sm-12 col-lg-12 col-md-12 ">
                                    Headline not available.
                                </p>
                                <?php } ?>
                        </div>
                    
                        <?php 
                            include("fetch-franchisees.php"); 
                            foreach ($result as $r) {
                        ?>
                        <div class="user_name mbr-fonts-style mb-0 display-7 col-sm-12 col-lg-12 col-md-12 " style="padding-bottom: 3em">
                            <strong><?php echo $r->first_name . " " . $r->middle_name . " " . $r->last_name; ?> </strong>
                                    <?php
                                        if (isset($title)) {
                                    ?>
                                    <p class="mbr-fonts-style display-7 col-sm-12 col-lg-12 col-md-12 ">
                                         <input name="title" id="title" placeholder="Add your title here." data-form-field="name" class="text-center form-control-plaintext" value="<?php echo $title ?>" readonly required maxlength="50">
                                    </p>
                                    <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn mx-auto">
                                <a href="my-story.php?id=<?php echo $_REQUEST['id']?>" target="_blank">
                                <button type="" class="btn display-4 btn-dark">View Credibility</button>
                                </a>
                                <a href="<?php echo $fb?>" target="_blank">
                                <button type="" class="btn display-4 btn-dark">Facebook</button>
                                </a>
                                <a href="recap.pdf" target="_blank">
                                <button type="" class="btn display-4 btn-dark">Review orientation</button>
                                </a>
                            </div>
                                    <?php
                                        } else {
                                    ?>
                                    <p class="mbr-fonts-style display-7 col-sm-12 col-lg-12 col-md-12 ">
                                        <input name="title" id="title" placeholder="Title is not available" data-form-field="name" class="text-center form-control-plaintext" readonly required maxlength="50">
                                    </p>
                                    
                                    
                                    <?php } ?>
                        </div>
                        <?php } ?>
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
      fbq('track', 'Lead');
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
<script>
   $("button").click(function() {
    $('html,body').animate({
        scrollTop: $(".who").offset().top},
        'slow');
});
</script>
</html>