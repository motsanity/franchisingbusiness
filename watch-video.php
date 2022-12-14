<!DOCTYPE html>
<html>
<?php 
    session_start();
    include("get-request.php");
?>
<head>
    <title>Franchising Business | How to Franchise</title>
    <?php
        include("component/head_assets.html");
    ?>
    <style>
    	<?php
        include("component/video_css.css");
    ?>
</style>
</head>
<body>
<?php
  include("fetch-active-webinar.php");
  foreach ($result as $v) {
    $video = $v->video;
    # code...
  }
?>
<header>
  <!--<div class="overlay"></div>-->
  <div class=""></div>
  <video playsinline="playsinline"  controls muted="false" id="webinar" poster="assets/images/black.png">
    <source src="<?php echo $video; ?>" type="video/mp4">
    Your browser cannot play the video.	
  </video>
</header>


<!-- edit this
<div class="modal fade" id="videoModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="height: 375px">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hello to our guest!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       To continue watching, please provide your details.<br><br>
       
       <form name="submit" method="post">
         Fullname
        <input type="text" name="name" m-field="name" class="form-control" required>
        Contact
        <input type="phone" name="phone" m-field="phone" class="form-control" required>
        
      </div>
          
      <div class="modal-footer">
                       
      	<input type="submit" id="submit" class="btn btn-warning register" ></input>
        <button type="button" class="btn btnsub-dark close" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- edit this-->


<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="height: 200px">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hi, brave dreamer!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Would you like to avail a franchise now?
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-warning register" data-target="client-register.php?id=<?php echo $_REQUEST['id'];?>">Yes!</button>
        <button type="button" class="btn btn-dark close" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="videoModalReplay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="height: 200px">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hi, brave dreamer!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Would you like to avail a franchise now?
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-warning register" data-target="client-register.php?id=<?php echo $_REQUEST['id'];?>">Yes!</button>
        <button type="button" class="btn btn-dark close" data-dismiss="modal" id="replayButton">Replay video</button>
        <a href="recap.pdf" target="_blank">
        <button type="client-register.php?id=<?php echo $_REQUEST['id'];?>" class="btn btn-dark close" data-dismiss="modal" id="replayButton">Review</button>
        </a>
      </div>
    </div>
  </div>
</div>


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
		var lapsed = false;
		
		// disable right click
		$("body").on("contextmenu", function(){
		   return false; 
		});
		
		function toggleOpenModal(){
			$('#videoModal').modal("show"); 
		}
		
		function toggleOpenForm(){
			$('#videoModalForm').modal("show"); 
		}
		
		function toggleOpenModalReplay(){
			$('#videoModalReplay').modal("show"); 
		}
		function toggleCloseModal(){
			$('#videoModal').modal("hide"); 
			$('#videoModalReplay').modal("hide");
		}
		$('.close').on("click", function(){
			toggleCloseModal();
		});

		$("#webinar").on("ended", function(){
			toggleOpenModalReplay();
		});

		$("#replayButton").on("click", function(){
			$("#webinar").get(0).play();
			initTimer(10000); // shorter time
		})
		$(".register").on("click", function(){
			var url = $(this).data("target")
			location.replace(url);
		});

		initTimer(900000); // 15 minutes

		function initTimer(t){
			var modalTimer = setInterval(function(){
			toggleOpenModal();
			lapsed = true;

			if (lapsed)
				clearInterval(modalTimer);
			}, t);
		}
		
		formTimer(1000); // 1 secs

		function formTimer(t){
			var modalTimer = setInterval(function(){
			toggleOpenForm();
			lapsed = true;

			if (lapsed)
				clearInterval(modalTimer);
			}, t);
		}
		
		var video = document.getElementById('webinar');
        var supposedCurrentTime = 0;
        video.addEventListener('timeupdate', function() {
          if (!video.seeking) {
                supposedCurrentTime = video.currentTime;
          }
        });
        // prevent user from seeking
        video.addEventListener('seeking', function() {
          // guard agains infinite recursion:
          // user seeks, seeking is fired, currentTime is modified, seeking is fired, current time is modified, ....
          var delta = video.currentTime - supposedCurrentTime;
          if (Math.abs(delta) > 0.01) {
            console.log("Seeking is disabled");
            video.currentTime = supposedCurrentTime;
          }
        });
        // delete the following event handler if rewind is not required
        video.addEventListener('ended', function() {
          // reset state in order to allow for rewind
            supposedCurrentTime = 0;
        });
		$("#webinar").get(0).play();
	})
	
	
	$('#submit').click(function() {
    $.ajax({
        url: 'viewer-form.php',
        type: 'POST',
        data: {
            fullname: 'fullname',
            phone: 'phone',
            id: 'id'
        },
        success: function(msg) {
            alert('Done');
        }               
    });
});
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
  fbq('init', '392056919269757');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=392056919269757&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
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
</body>
</html>