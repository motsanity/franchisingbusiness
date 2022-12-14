<!DOCTYPE html>
<html>
<?php 
    session_start();
    include("get-request.php");
?>
<head>
	<title>Franchising Business | My Story</title>
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
?>
<section data-bs-version="5.1" class="testimonails3 carousel slide testimonials-slider cid-sMEklCmMy5 mt-5" data-interval="false" data-bs-interval="false" id="testimonials3-k">
    <div class="text-left container col-lg-10 col-sm-12 col-md-12 mt-4">
        <h3 class="mb-2 mbr-fonts-style display-2 align-center mb-3"><strong>My Story</strong></h3>
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
</section>
<section data-bs-version="5.1" class="features3 cid-sMEmKJLTcS bg-warning" id="features3-r">
    <div class="container-fluid col-sm-11 col-md-12 col-lg-10">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style  mb-2 display-2 align-center">
                <strong>My Journey</strong>
            </h3>
            <h6 class="mbr-section-subtitle mbr-fonts-style align-center mb-4">
                Here are the milestones in my online franchising journey!
            </h6>
        </div>
        <div class="row mt-4">
            <?php
                include("fetch-stories.php");
                foreach($result as $s){
                    if (isset($s->title)){
                        $s_img = $s->image;
                        $s_description = $s->description;
                        $s_title = $s->title;
                    }
                
            ?>
            <div class="item features-image сol-12 col-md-6 col-lg-6 mx-auto">
                <div class="item-wrapper">
                    <div class="item-img">
                        <?php
                            if (isset($s_img)) {
                        ?>
                            <img src="<?php echo $s_img; ?>" title="<?php echo $s_title; ?>">
                        <?php  }else {
                        ?>
                        <img src="assets/images/story.jpeg" title="No story available">
                        <?php } ?>
                    </div>
                    <div class="item-content">
                        <?php 
                            if (isset($s_title)) {
                        ?>
                        <h5 class="item-title mbr-fonts-style display-7"><strong><?php echo $s_title; ?></strong></h5>
                        <?php } else { ?>
                        <h5 class="item-title mbr-fonts-style display-7 pb-5"><strong>No story available.</strong></h5>
                        <?php }?>
                    </div>
                    <?php if (isset($s_title)) { ?>
                    <div class="mbr-section-btn item-footer col-lg-12 col-md-12 col-sm-12 mbr-section-btn mx-auto align-center mx-auto text-center">
                        <button class="btn display-4 btn-dark mb-0 mx-auto edit-story align-center" data-modal="<?php echo $s->id; ?>" id="toggle-edit">View Story</button>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php if (isset($s_title)) { ?>
            <div class="modal fade" id="editstorymodal-<?php echo $s->id; ?>" tabindex="-1" role="dialog" aria-labelledby="editstorymodallbl" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editstorymodallbl"><?php echo $s_title; ?></h5>
                    <button type="button" class="edit-close" data-dismiss="editstorymodal-<?php echo $s->id; ?>" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="height: 50vh !important; overflow: auto">
                        <div class="form-group col-sm-12 mx-auto align-center text-center" id="image-upload-story-container">
                            <label for="image-upload-story">
                            <div class="image-upload-story text-center mx-auto align-center col-sm-12">
                                <div class="story_image">
                                    <img src="<?php echo $s_img; ?>" class="mx-auto align-center">
                                </div>
                            </div>
                       </div>
                       <div class="col-sm-10 align-center mx-auto">
                            <form action="edit-story.php?id=<?php echo $_SESSION["u"]; ?>&post_id=<?php echo $s->id;?>" method="POST" enctype="multipart/form-data">

                                <p class="mbr-fonts-style display-7 align-left">
                                    <?php echo $s_description; ?>
                                </p>
                                
                            </form>
                       </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark edit-close" data-dismiss="editstorymodal-<?php echo $s->id; ?>">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <?php } ?>
            <?php } // end foreach ?>
            <?php if (!isset($s_title)) {?> 
            <div class="item features-image сol-12 col-md-6 col-lg-6 mx-auto">
                <div class="item-wrapper">
                    <div class="item-img">
                        <?php
                            if (isset($s_img)) {
                        ?>
                            <img src="<?php echo $s_img; ?>" title="<?php echo $s_title; ?>">
                        <?php  }else {
                        ?>
                        <img src="assets/images/story.jpeg" title="No story available">
                        <?php } ?>
                    </div>
                    <div class="item-content">
                        <?php 
                            if (isset($s_title)) {
                        ?>
                        <h5 class="item-title mbr-fonts-style display-7"><strong><?php echo $s_title; ?></strong></h5>
                        <?php } else { ?>
                        <h5 class="item-title mbr-fonts-style display-7 pb-5"><strong>No story available.</strong></h5>
                        <?php }?>
                    </div>
                    <?php if (isset($s_title)) { ?>
                    <div class="mbr-section-btn item-footer col-lg-12 col-md-12 col-sm-12 mbr-section-btn mx-auto align-center mx-auto text-center">
                        <button class="btn display-4 btn-dark mb-0 mx-auto edit-story align-center" data-modal="<?php echo $s->id; ?>" id="toggle-edit">View Story</button>
                    </div>
                    <?php } ?>
                </div>
            </div>
        <?php }?>
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
      fbq('track', 'ViewContent');
    </script>
</section>
<?php
	include("component/footer.php"); 
?>
<?php
    include("component/footer_assets.html");
?>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="vendors/DataTables/Responsive-2.2.5/js/dataTables.responsive.js"></script>


<script src="assets/js/datatable.js"></script>
<script type="text/javascript">
    $(function(){
        $(".headline-btn").on("click", function(a){
            a.preventDefault();
            $("#headline").removeAttr("readonly");
            $("#headline-submit").removeAttr("hidden");
            $(this).css("display", "none");
        });
        $(".title-btn").on("click", function(a){
            a.preventDefault();
            $("#title").removeAttr("readonly");
            $("#title-submit").removeAttr("hidden");
            $(this).css("display", "none");
        });

        $("#image-upload").on("change", function(){
    
            var fr = new FileReader;

            fr.onload = function() { 
                //alert("loading image");
                var img = new Image;

                img.onload = function() {
                    var width = img.naturalWidth;
                    var height = img.naturalHeight;
                    console.log("Height: " + height); 
                    console.log("Width: " + width);
                };

                img.src = fr.result; 
                if (img.src != null){
                    //alert("hasimg");
                    imagePreview(true, img.src);
                }
                else 
                    imagePreview(false, null);
            };
            if (this.files[0])
                fr.readAsDataURL(this.files[0]);    

        });
          
        function imagePreview(a, path){
              var disp = "";
              var img_disp = "";
              if (a == true){ // has image
                  disp = "none";
                  img_disp = "block";
              }
              else {
                  disp = "block";
                  img_disp = "none";
              }
            $(".image-upload").css("border", disp);
            $(".image-upload img").css("display", img_disp);
            $("#draggable img").css("display", img_disp);
            if (a == true){
                $(".image-upload img").attr("src", path);
                $("#draggable img").attr("src", path);
                $("#draggable").css({
                    display: "inline-block",
                    margin: "auto",
                })
                $("#image-submit").removeAttr("hidden");
            }
        }
        $(".add-story").on("click", function(){
            $("#addstorymodal").modal("show");
        })
        $(".edit-story").on("click", function(){
            var modal = $(this).attr("data-modal");
            $("#editstorymodal-" + modal).modal("show");
        })
        $(".add-webinar").on("click", function(){
            $("#addwebinarmodal").modal("show");
        })
        $(".edit-webinar").on("click", function(){
            var modal = $(this).attr("data-modal");
            $("#editwebinarmodal-" + modal).modal("show");
        })

        $(".add-active-webinar").on("click", function(){
            $("#addactivewebinarmodal").modal("show");
        })

        $(".close").on("click", function(){
            $("#addstorymodal").modal("hide");
        })
        $(".edit-close").on("click", function(){
            var modal = $(this).attr("data-dismiss");
            $("#" + modal).modal("hide");
        })
        $(".webinar-close").on("click", function(){
            $("#addwebinarmodal").modal("hide");
        })
        $(".edit-close-webinar").on("click", function(){
            var modal = $(this).attr("data-dismiss");
            $("#" + modal).modal("hide");
        })
        $(".active-webinar-close").on("click", function(){
            $("#addactivewebinarmodal").modal("hide");
        })
        $(".edit-active-webinar").on("click", function(){
            var modal = $(this).attr("data-modal");
            $("#editactivewebinarmodal-" + modal).modal("show");
        })
        $(".edit-close-active-webinar").on("click", function(){
            var modal = $(this).attr("data-dismiss");
            $("#" + modal).modal("hide");
        })

        $("#story-image-upload").on("change", function(){
    
            var fr = new FileReader;

            fr.onload = function() { 
                //alert("loading image");
                var img = new Image;

                img.onload = function() {
                    var width = img.naturalWidth;
                    var height = img.naturalHeight;
                    console.log("Height: " + height); 
                    console.log("Width: " + width);
                };

                img.src = fr.result; 
                if (img.src != null){
                    //alert("hasimg");
                    imageStoryPreview(true, img.src);
                }
                else 
                    imageStoryPreview(false, null);
            };
            if (this.files[0])
                fr.readAsDataURL(this.files[0]);    

        });
          
        function imageStoryPreview(a, path){
              var disp = "";
              var img_disp = "";
              if (a == true){ // has image
                  disp = "none";
                  img_disp = "block";
              }
              else {
                  disp = "block";
                  img_disp = "none";
              }
            $(".image-upload-story").css("border", disp);
            $(".image-upload-story img").css("display", img_disp);
           // $("#draggable img").css("display", img_disp);
            if (a == true){
                $(".image-upload-story img").attr("src", path);
                //$("#draggable img").attr("src", path);
                //$("#draggable").css({
                 //   display: "inline-block",
                 //   margin: "auto",
                //})
               // $("#image-submit").removeAttr("hidden");
            }
        }

        $("#webinar-image-upload-add").on("change", function(){
            var fr = new FileReader;
        
            imageWebinarPreview(true, URL.createObjectURL(this.files[0]));
            /*
            fr.onload = function() { 
                //alert("loading image");
                var img = new Image;

                img.onload = function() {
                    var width = img.naturalWidth;
                    var height = img.naturalHeight;
                    console.log("Height: " + height); 
                    console.log("Width: " + width);
                };

                img.src = fr.result; 
                if (img.src != null){
                    //alert("hasimg");
                    imageWebinarPreview(true, URL.createObjectURL(this.files[0]));
                }
                else 
                    imageWebinarPreview(false, null);
            };
            */
            if (this.files[0])
                fr.readAsDataURL(this.files[0]);    

        });

        function imageWebinarPreview(a, path){

              var disp = "";
              var img_disp = "";
              if (a == true){ // has image
                  disp = "none";
                  img_disp = "block";
              }
              else {
                  disp = "block";
                  img_disp = "none";
              }
            $(".image-upload-webinar").css("border", disp);
            $(".image-upload-webinar img").css("display", img_disp);
            $(".webinar_image-add img").css("display", "none");
           // $("#draggable img").css("display", img_disp);
            if (a == true){
                  
                $(".webinar_image-add video").removeAttr("hidden");
                $(".webinar_image-add video source").attr("src", path);
                //$(".webinar_image video source").attr("type","video/" + $("#webinar-image-upload").val().split(".")[($("#webinar-image-upload").val().split(".")).length - 1]);

                $(".webinar_image-add video").get(0).load();
                $(".webinar_image-add video").get(0).play();
                
                //$("#draggable img").attr("src", path);
                //$("#draggable").css({
                 //   display: "inline-block",
                 //   margin: "auto",
                //})
               // $("#image-submit").removeAttr("hidden");
            }
        }

})
</script>
</body>
</html>