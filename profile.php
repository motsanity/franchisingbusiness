<?php
    session_start();
  include("get_session.php");
  $permission_allowed = [1, 2, 3];
  include("get_privilege.php");
?>
<!DOCTYPE html>
<html>
<html>
<head>
	<title>Franchising Business | Franchisee Profile</title>
	<?php
		include("component/head_assets.html");
	?>
<link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">  
<link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="vendors/DataTables/Responsive-2.2.5/css/responsive.bootstrap.css">
</head>
<body>
<?php
if ($_SESSION["p"] != 1)
    include("component/navbar-franchisee.php");
else
     include("component/navbar-admin.php");
?>
<section data-bs-version="5.1" class="testimonails3 carousel slide testimonials-slider cid-sMEklCmMy5 mt-5" data-interval="false" data-bs-interval="false" id="testimonials3-k">
    <div class="text-left container col-lg-10 col-sm-12 col-md-12">
        <h3 class="mb-2 mbr-fonts-style display-2"><strong>My Story</strong></h3>
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
        <h6 class="mbr-section-subtitle mbr-fonts-style align-left mb-4">
            Make a concise headline for your clients to see when they visit your profile.
        </h6>
        <div class="carousel slide col-sm-12 col-lg-12 col-md-12 g-0 mx-0">
            <div class="carousel-inner col-sm-12 col-lg-12 col-md-12 g-0 mx-0 ">
                
                
            <div class="carousel-item col-sm-12 col-lg-12 col-md-12 ">
                    <div class="user col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group col-sm-12 col-lg-12 col-md-12 ">
                        	<?php  if (isset($_SESSION["file_error"])) {  ?>
                           		<div data-form-alert-danger="" class="alert alert-danger col-lg-12 align-center"><?php echo $_SESSION['file_error']; ?></div>
                           		<?php $_SESSION["file_error"] = null;}?>
                           <label for="image-upload">
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
                           
                            </label>
                           <div class="col-sm-12">
                             <div class="custom-file">
                                <form action="update-image.php?id=<?php echo $_SESSION['u'];?>" method="POST" enctype="multipart/form-data">
                                    <p class="mbr-fonts-style display-7">
                                        <div class="input-group">
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image-upload" name="image" aria-describedby="inputGroupFileAddon04" accept=".jpg,.jpeg,.JPG,.JPEG,.png,.PNG">
                                          </div>
                                          
                                        </div>
                                    </p>
                                    <div hidden class="col-lg-12 col-md-12 col-sm-12 mbr-section-btn mx-auto" id="image-submit">
                                        <button type="submit" name="submit" class="btn display-4 btn-warning mb-3 mx-auto" id="toggle-edit">Save Image</button>
                                    </div>
                                </form>
                             </div>
                           </div>
                          
                       </div>
                        
                        <div class="user_text col-sm-12 col-lg-12 col-md-12 ">
                            <form action="update-headline.php?id=<?php echo $_SESSION['u'];?>" class="m-0 " method="POST">
                                <?php
                                    if (isset($description)) {
                                ?> 
                                <p class="mbr-fonts-style display-7 col-sm-12 col-lg-12 col-md-12 ">
                                     <textarea name="headline" id="headline" placeholder="Add your headline here." data-form-field="name" class="text-center form-control" readonly required maxlength="200"><?php echo $description ?></textarea>
                                </p>
                                <?php
                                    } else {
                                ?>
                                <p class="mbr-fonts-style display-7 col-sm-12 col-lg-12 col-md-12 ">
                                    <textarea name="headline" id="headline" placeholder="Add your headline here." data-form-field="name" class="text-center form-control" readonly required maxlength="200"></textarea>
                                </p>
                                <?php } ?>
                                 <div hidden class="col-lg-12 col-md-12 col-sm-12 mbr-section-btn mx-auto" id="headline-submit">
                                    <button type="submit" class="btn display-4 btn-warning mb-3 mx-auto" id="toggle-edit">Save Headline</button>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 mbr-section-btn mx-auto">
                                    <button class="btn display-4 btn-dark mb-3 mx-auto headline-btn" id="toggle-edit">Edit Headline</button>
                                </div>
                            </form>

                        </div>
                        
                        
                        <?php 
                            include("fetch-franchisees.php"); 
                            foreach ($result as $r) {
                        ?>
                        <div class="user_name mbr-fonts-style mb-2 display-7 col-sm-12 col-lg-12 col-md-12 ">
                            <strong><?php echo $r->first_name . " " . $r->middle_name . " " . $r->last_name; ?> </strong></div>
                            <form action="update-title.php?id=<?php echo $_SESSION['u'];?>" class="m-0" method="POST">
                                    <?php
                                        if (isset($title)) {
                                    ?>
                                    <p class="mbr-fonts-style display-7 col-sm-12 col-lg-12 col-md-12 ">
                                         <input name="title" id="title" placeholder="Add your title here." data-form-field="name" class="text-center form-control" value="<?php echo $title ?>" readonly required maxlength="50">
                                    </p>
                                    <?php
                                        } else {
                                    ?>
                                    <p class="mbr-fonts-style display-7 col-sm-12 col-lg-12 col-md-12 ">
                                        <input name="title" id="title" placeholder="Add your title here." data-form-field="name" class="text-center form-control" readonly required maxlength="50">
                                    </p>
                                    <?php } ?>
                                     <div hidden class="col-lg-12 col-md-12 col-sm-12 mbr-section-btn mx-auto" id="title-submit">
                                        <button type="submit" class="btn display-4 btn-warning mb-0 mx-auto" id="toggle-edit">Save Title</button>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 mbr-section-btn mx-auto">
                                        <button class="btn display-4 btn-dark mb-0 mx-auto title-btn" id="toggle-edit">Edit Title</button>
                                    </div>
                                </form>

                        </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section data-bs-version="5.1" class="features3 cid-sMEmKJLTcS" id="features3-r">
    <div class="container-fluid col-sm-11 col-md-12 col-lg-10">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style  mb-2 display-2">
                <strong>My Journey</strong>
            </h3>
            <h6 class="mbr-section-subtitle mbr-fonts-style align-left mb-4">
                Highlight your online franchising journey by creating stories! 
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
                        <h5 class="item-title mbr-fonts-style display-7"><strong>No story available.</strong></h5>
                        <?php }?>
                    </div>
                    <?php if (isset($s_title)) { ?>
                    <div class="mbr-section-btn item-footer col-lg-12 col-md-12 col-sm-12 mbr-section-btn mx-auto">
                        <button class="btn display-4 btn-dark mb-0 mx-auto edit-story" data-modal="<?php echo $s->id; ?>" id="toggle-edit">Update Story</button>
                    </div>
                    <?php } else { ?>
                    <div class="mbr-section-btn item-footer col-lg-12 col-md-12 col-sm-12 mbr-section-btn mx-auto">
                        <button class="btn display-4 btn-dark mb-0 mx-auto add-story" id="toggle-edit">Add Story</button>
                    </div>
                    <?php  } ?>
                </div>
            </div>
            <?php if (isset($s_title)) { ?>
            <div class="modal fade" id="editstorymodal-<?php echo $s->id; ?>" tabindex="-1" role="dialog" aria-labelledby="editstorymodallbl" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editstorymodallbl">Update Story</h5>
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
                                <p class="mbr-fonts-style display-7">
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <!--<input type="file" class="custom-file-input align-center mx-auto" id="story-image-upload" name="story_image" aria-describedby="inputGroupFileAddon04" accept=".jpg,.jpeg,.JPG,.JPEG,.png,.PNG" required>-->
                                      </div>
                                      
                                    </div>
                                </p>
                                <p class="mbr-fonts-style display-7">
                                    <input name="story_title" id="story-title" placeholder="Add your story title here." data-form-field="name" class="text-center form-control" value="<?php echo $s_title; ?>" required maxlength="50">
                                </p>
                                <p class="mbr-fonts-style display-7">
                                    <textarea name="story_description" id="story-description" placeholder="Add your story description here." data-form-field="name" class="text-center form-control"  required maxlength="300"><?php echo $s_description; ?></textarea>
                                </p>
                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 mbr-section-btn mx-auto g-0" id="image-submit">
                                    <button type="submit" name="submit" class="btn display-4 btn-warning mb-3 mx-auto" id="toggle-edit">Save Story</button>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mbr-section-btn mx-auto g-0">
                                    <a href="delete-story.php?id=<?php echo $_SESSION["u"]; ?>&post_id=<?php echo $s->id; ?>" class="btn display-4 mb-3 btn-danger delete-story">Delete Story</a>
                                </div>
                            </div>
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
            <?php if (isset($s_title)) { ?>
            <div class="item features-image сol-12 col-md-6 col-lg-6 mx-auto">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/story.jpeg" title="Add new story">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7"><strong>Add More Story</strong></h5>
                    </div>
                    <div class="mbr-section-btn item-footer col-lg-12 col-md-12 col-sm-12 mbr-section-btn mx-auto">
                        <button class="btn display-4 btn-dark mb-0 mx-auto add-story" id="toggle-edit">Add Story</button>
                    </div>
                </div>
            </div>
            <?php } // end additional story?>
            <?php if (!isset($s_title)) { ?>
            <div class="item features-image сol-12 col-md-6 col-lg-6 mx-auto">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/story.jpeg" title="Add new story">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7"><strong>Add New Story</strong></h5>
                    </div>
                    <div class="mbr-section-btn item-footer col-lg-12 col-md-12 col-sm-12 mbr-section-btn mx-auto">
                        <button class="btn display-4 btn-dark mb-0 mx-auto add-story" id="toggle-edit">Add Story</button>
                    </div>
                </div>
            </div>
            <?php } // end new story?>
        </div>
        <div class="modal fade" id="addstorymodal" tabindex="-1" role="dialog" aria-labelledby="addstorymodallbl" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addstorymodallbl">Add Story</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" style="height: 50vh !important; overflow: auto">
                    <div class="form-group col-sm-12 mx-auto align-center text-center" id="image-upload-story-container">
                        <label for="image-upload-story">
                        <div class="image-upload-story text-center mx-auto align-center col-sm-12">
                            <div class="story_image">
                                <img src="assets/images/story.jpeg" class="mx-auto align-center">
                            </div>
                        </div>
                   </div>
                   <div class="col-sm-10 align-center mx-auto">
                        <form action="add-story.php?id=<?php echo $_SESSION['u'];?>" method="POST" enctype="multipart/form-data">
                            <p class="mbr-fonts-style display-7">
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input align-center mx-auto" id="story-image-upload" name="story_image" aria-describedby="inputGroupFileAddon04" accept=".jpg,.jpeg,.JPG,.JPEG,.png,.PNG" required>
                                  </div>
                                  
                                </div>
                            </p>
                            <p class="mbr-fonts-style display-7">
                                <input name="story_title" id="story-title" placeholder="Add your story title here." data-form-field="name" class="text-center form-control"  required maxlength="50">
                            </p>
                            <p class="mbr-fonts-style display-7">
                                <textarea name="story_description" id="story-description" placeholder="Add your story description here." data-form-field="name" class="text-center form-control"  required maxlength="300"></textarea>
                            </p>

                            <div class="col-lg-12 col-md-12 col-sm-12 mbr-section-btn mx-auto" id="image-submit">
                                <button type="submit" name="submit" class="btn display-4 btn-warning mb-3 mx-auto" id="toggle-edit">Save Story</button>
                            </div>
                        </form>
                   </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-dark close" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </div>

</section>
<?php 
    if ($_SESSION["p"] == 2 || $_SESSION["p"] == 1) {
?>
<section data-bs-version="5.1" class="features3 cid-sMEmKJLTcS" id="features3-r">
    <div class="container-fluid col-sm-11 col-md-12 col-lg-10">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style  mb-2 display-2">
                <strong>My Webinars</strong>
            </h3>
            <h6 class="mbr-section-subtitle mbr-fonts-style align-left mb-4">
                Upload and manage your webinars here.
            </h6>
        </div>
        <div class="row mt-4">
            <?php
                include("fetch-webinars.php");
                foreach($result as $s){
                    if (isset($s->title)){
                        $w_video = $s->video;
                        $w_description = $s->description;
                        $w_title = $s->title;
                    }
                
            ?>
            <div class="item features-image сol-12 col-md-6 col-lg-6 mx-auto">
                <div class="item-wrapper">
                    <div class="item-img">
                        <?php
                            if (isset($w_video)) {
                                $ext=  explode('/', $w_video); $extn = $ext[count($ext) - 1]; $xt = explode('.', $extn); $xtn = $xt[count($xt) - 1];
                        ?>
                            <video playsinline="playsinline"  autoplay="autoplay" muted="false" controls style="width: 100%; height: auto">
                                <source src="<?php echo $w_video; ?>" type="video/mp4">
                                Your browser cannot play the video.
                              </video>
                        <?php  }else {
                        ?>
                        <img src="assets/images/story.jpeg" title="No webinar available">
                        <?php } ?>
                    </div>
                    <div class="item-content">
                        <?php 
                            if (isset($w_title)) {
                        ?>
                        <h5 class="item-title mbr-fonts-style display-7"><strong><?php echo $w_title; ?></strong></h5>
                        <?php } else { ?>
                        <h5 class="item-title mbr-fonts-style display-7"><strong>No webinar available.</strong></h5>
                        <?php }?>
                    </div>
                    <?php if (isset($w_title)) { ?>
                    <div class="mbr-section-btn item-footer col-lg-12 col-md-12 col-sm-12 mbr-section-btn mx-auto">
                        <button class="btn display-4 btn-dark mb-0 mx-auto edit-webinar" data-modal="<?php echo $s->id; ?>" id="toggle-edit">Update Webinar</button>
                    </div>
                    <?php } else { ?>
                    <div class="mbr-section-btn item-footer col-lg-12 col-md-12 col-sm-12 mbr-section-btn mx-auto">
                        <button class="btn display-4 btn-dark mb-0 mx-auto add-webinar" id="toggle-edit">Add Webinar</button>
                    </div>
                    <?php  } ?>
                </div>
            </div>
            <?php if (isset($w_title)) { ?>
            <div class="modal fade" id="editwebinarmodal-<?php echo $s->id; ?>" tabindex="-1" role="dialog" aria-labelledby="editwebinarmodallbl" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editwebinarmodallbl">Update Webinar</h5>
                    <button type="button" class="edit-close-webinar" data-dismiss="editwebinarmodal-<?php echo $s->id; ?>" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="height: 50vh !important; overflow: auto">
                        <div class="form-group col-sm-12 mx-auto align-center text-center" id="image-upload-webinar-container">
                            <label for="image-upload-webinar">
                            <div class="image-upload-webinar text-center mx-auto align-center col-sm-12">
                                <div class="webinar_image-edit">

                                    <video playsinline="playsinline"  autoplay="autoplay" muted="false" controls style="width: 100%; height: auto">
                                        <source src="<?php echo $w_video; ?>" type="video/mp4">
                                        Your browser cannot play the video. 
                                  </video>
                                </div>
                            </div>
                       </div>
                       <div class="col-sm-10 align-center mx-auto">
                            <form action="edit-webinar.php?id=<?php echo $_SESSION["u"]; ?>&post_id=<?php echo $s->id;?>" method="POST" enctype="multipart/form-data">
                                <p class="mbr-fonts-style display-7">
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <!--<input type="file" class="custom-file-input align-center mx-auto" id="story-image-upload" name="story_image" aria-describedby="inputGroupFileAddon04" accept=".jpg,.jpeg,.JPG,.JPEG,.png,.PNG" required>-->
                                      </div>
                                      
                                    </div>
                                </p>
                                <p class="mbr-fonts-style display-7">
                                    <input name="webinar_title" id="webinar-title" placeholder="Add your webinar title here." data-form-field="name" class="text-center form-control" value="<?php echo $w_title; ?>" required maxlength="50">
                                </p>
                                <p class="mbr-fonts-style display-7">
                                    <textarea name="webinar_description" id="webinar-description" placeholder="Add your webinar description here." data-form-field="name" class="text-center form-control"  required maxlength="100"><?php echo $w_description; ?></textarea>
                                </p>
                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 mbr-section-btn mx-auto g-0" id="image-submit">
                                    <button type="submit" name="submit" class="btn display-4 btn-warning mb-3 mx-auto" id="toggle-edit">Save Webinar</button>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mbr-section-btn mx-auto g-0">
                                    <a href="delete-webinar.php?id=<?php echo $_SESSION["u"]; ?>&post_id=<?php echo $s->id; ?>" class="btn display-4 mb-3 btn-danger delete-webinar">Delete Webinar</a>
                                </div>
                            </div>
                            </form>
                       </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark edit-close" data-dismiss="editwebinarmodal-<?php echo $s->id; ?>">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <?php } ?>
            <?php } // end foreach ?>
            <?php if (!isset($w_title)) { ?>
            <div class="item features-image сol-12 col-md-6 col-lg-6 mx-auto">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/story.jpeg" title="Add new story">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7"><strong>Add More Webinar</strong></h5>
                    </div>
                    <div class="mbr-section-btn item-footer col-lg-12 col-md-12 col-sm-12 mbr-section-btn mx-auto">
                        <button class="btn display-4 btn-dark mb-0 mx-auto add-webinar" id="toggle-edit">Add Webinar</button>
                    </div>
                </div>
            </div>
            <?php } // end additional story?>
        </div>
        <div class="modal fade" id="addwebinarmodal" tabindex="-1" role="dialog" aria-labelledby="addwebinarmodallbl" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addwebinarmodallbl">Add Webinar</h5>
                <button type="button" class="webinar-close" data-dismiss="addwebinarmodal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" style="height: 50vh !important; overflow: auto">
                    <div class="form-group col-sm-12 mx-auto align-center text-center" id="image-upload-webinar-container">
                        <label for="image-upload-webinar">
                        <div class="image-upload-webinar text-center mx-auto align-center col-sm-12">
                            <div class="webinar_image-add">
                                <img src="assets/images/story.jpeg" class="mx-auto align-center">
                                <video playsinline="playsinline" hidden  autoplay="autoplay" muted="false" controls style="width: 100%; height: auto">
                                    <source src="" type="video/mp4">
                                    Your browser cannot play the video. 
                                  </video>
                            </div>
                        </div>
                   </div>
                   <div class="col-sm-10 align-center mx-auto">
                        <form action="add-webinar.php?id=<?php echo $_SESSION['u'];?>" method="POST" enctype="multipart/form-data">
                            <p class="mbr-fonts-style display-7">
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input align-center mx-auto" id="webinar-image-upload-add" name="webinar_image" aria-describedby="inputGroupFileAddon04" accept=".mp4,.MP4,.mpeg4,.MPEG4,.wav,.WAV,.mov,.MOV,.avi,.AVI" required>
                                  </div>
                                  
                                </div>
                            </p>
                            <p class="mbr-fonts-style display-7">
                                <input name="webinar_title" id="webinar-title" placeholder="Add your webinar title here." data-form-field="name" class="text-center form-control"  required maxlength="50">
                            </p>
                            <p class="mbr-fonts-style display-7">
                                <textarea name="webinar_description" id="webinar-description" placeholder="Add your webinar description here." data-form-field="name" class="text-center form-control"  required maxlength="100"></textarea>
                            </p>

                            <div class="col-lg-12 col-md-12 col-sm-12 mbr-section-btn mx-auto" id="image-submit">
                                <button type="submit" name="submit" class="btn display-4 btn-warning mb-3 mx-auto" id="toggle-edit">Save Webinar</button>
                            </div>
                        </form>
                   </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-dark webinar-close" data-dismiss="addwebinarmodal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </div>

</section>
<?php } // end webinars?>

<!-- active webinars-->
<section data-bs-version="5.1" class="features3 cid-sMEmKJLTcS" id="features3-r">
    <div class="container-fluid col-sm-11 col-md-12 col-lg-10">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style  mb-2 display-2">
                <strong>Set Active Webinar</strong>
            </h3>
            <h6 class="mbr-section-subtitle mbr-fonts-style align-left mb-4">
                Select a webinar to show your profile visitors.
            </h6>
        </div>
        <div class="row mt-4">
            <?php
                include("fetch-active-webinar.php");
                foreach($result as $a){
                    if (isset($a->title)){
                        $a_id = $a->id;
                        $a_video = $a->video;
                        $a_name = $a->first_name . " " . $a->last_name;
                        $a_title = $a->title;
                    }
                }
                
            ?>
            <div class="item features-image сol-12 col-md-6 col-lg-6 mx-auto">
                <div class="item-wrapper">
                    <div class="item-img">
                        <?php
                            if (isset($a_video)) {
                               // $ext=  explode('/', $a_video); $extn = $ext[count($ext) - 1]; $xt = explode('.', $extn); $xtn = $xt[count($xt) - 1];
                        ?>
                            <video playsinline="playsinline"  autoplay="autoplay" muted="false" controls style="width: 100%; height: auto">
                                <source src="<?php echo $a_video; ?>" type="video/mp4">
                                Your browser cannot play the video.
                              </video>
                        <?php  }else { 
                        ?>
                        <img src="assets/images/story.jpeg" title="No active webinar available">
                        <?php } ?>
                    </div>
                    <div class="item-content">
                        <?php 
                            if (isset($a_title)) {
                        ?>
                        <h5 class="item-title mbr-fonts-style display-7"><strong><?php echo $a_title; ?></strong></h5>
                        <?php } else { ?>
                        <h5 class="item-title mbr-fonts-style display-7"><strong>No active webinar available.</strong></h5>
                        <?php }?>
                    </div>
                    <?php if (isset($a_title)) { ?>
                    <div class="mbr-section-btn item-footer col-lg-12 col-md-12 col-sm-12 mbr-section-btn mx-auto">
                        <button class="btn display-4 btn-dark mb-0 mx-auto edit-active-webinar" data-modal="<?php echo $a_id; ?>" id="toggle-edit">Update Webinar</button>
                    </div>
                    <?php } else { ?>
                    <div class="mbr-section-btn item-footer col-lg-12 col-md-12 col-sm-12 mbr-section-btn mx-auto">
                        <button class="btn display-4 btn-dark mb-0 mx-auto add-active-webinar" id="toggle-edit">Choose Webinar</button>
                    </div>
                    <?php  } ?>
                </div>
            </div>
            <?php if (isset($a_title)) { ?>
            <div class="modal fade" id="editactivewebinarmodal-<?php echo $a_id; ?>" tabindex="-1" role="dialog" aria-labelledby="editactivewebinarmodallbl" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editactivewebinarmodallbl">Update Active Webinar</h5>
                    <button type="button" class="edit-close-active-webinar" data-dismiss="editactivewebinarmodal-<?php echo $a_id; ?>" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="height: 50vh !important; overflow: auto">
                        <div class="form-group col-sm-12 mx-auto align-center text-center" id="image-upload-active-webinar-container">
                            <label for="image-upload-active-webinar">
                            <div class="image-upload-active-webinar text-center mx-auto align-center col-sm-12">
                                <div class="active-webinar_image-edit">

                                    <video playsinline="playsinline"  autoplay="autoplay" muted="false" controls style="width: 100%; height: auto">
                                        <source src="<?php echo $w_video; ?>" type="video/mp4">
                                        Your browser cannot play the video. 
                                  </video>
                                </div>
                            </div>
                       </div>
                       <div class="col-sm-10 mx-auto table-responsive">
                         <form action="add-active-webinar.php?id=<?php echo $_SESSION['u'];?>" method="POST" enctype="multipart/form-data">
                            <?php include("fetch-all-webinars.php"); ?>
                            <div class="form-group col-sm-12 mx-auto"> 
                                <table id="index-data-table" class="table-bordered pb-5 mb-3 table table-lg table-hover table-striped text-left">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>Webinar title</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach($result as $w) {
                                        ?>
                                        <tr>
                                            <td><?php echo $w->first_name . " " . $w->last_name; ?></td>
                                            <td><?php echo $w->title; ?></td>
                                            <td>
                                                <button type="submit" name="webinar_id" class="btn btn-sm btn-warning mb-3 mx-auto" value="<?php echo $w->w_id?>">Select</button>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    <tfoot class="table-dark" style="font-size: .8em">
                                        <tr>
                                            <th>Name</th>
                                            <th>Webinar title</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </tfoot>
                                    </tbody>
                                </table>
                            </div>
                            </form>
                       </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark edit-close-active-webinar" data-dismiss="editactivewebinarmodal-<?php echo $s->id; ?>">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <?php } ?>
            
        </div>
        <div class="modal fade" id="addactivewebinarmodal" tabindex="-1" role="dialog" aria-labelledby="addactivewebinarmodallbl" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addactivewebinarmodallbl">Add Webinar</h5>
                <button type="button" class="active-webinar-close" data-dismiss="addactivewebinarmodal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" style="height: 50vh !important; overflow: auto">

                   <div class="col-sm-10 align-center mx-auto">
                        <form action="add-active-webinar.php?id=<?php echo $_SESSION['u'];?>" method="POST" enctype="multipart/form-data">
                            <?php include("fetch-all-webinars.php"); ?>
                            <div class="form-group col-sm-12 mx-auto"> 
                                <table id="index-data-table" class="table table-striped table-bordered mb-3">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Webinar title</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach($result as $w) {
                                        ?>
                                        <tr>
                                            <td><?php echo $w->first_name . " " . $w->last_name; ?></td>
                                            <td><?php echo $w->title; ?></td>
                                            <td>
                                                <button type="submit" name="webinar_id" class="btn btn-sm btn-warning mb-3 mx-auto" value="<?php echo $w->w_id?>">Select</button>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>

                        </form>
                   </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-dark active-webinar-close" data-dismiss="addwebinarmodal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </div>

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
        $('#index-data-table').DataTable({
        order: [[0, "desc"]],
            lengthMenu: [[10, 20, -1], [10, 20, "All"]],

        columnDefs: [
          {
            className: "dt-nowrap"
          }
        ]
      });

})
</script>
</body>
</html>