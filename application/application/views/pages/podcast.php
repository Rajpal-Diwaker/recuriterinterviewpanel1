 
  <link rel="stylesheet" href="<?php echo(ADMIN.'/css/grt-youtube-popup.css'); ?>">
    <!--PodCast Start Here-->
    <div class="podcast-wrap">
      <!--PodCast Banner Start Here-->
      <div class="banner-wrap">
        <div class="banner-image">
          <div class="container-wrapper">
            <div class="banner-content">
              <h1>Bringing voice to technology!</h1>
              <h3>Attain cutting-edge tech-information from the trailblazers at Techugo</h3>
              <div class="search-container">
                <form action="">
                  <i class="fa fa-search" aria-hidden="true"></i>
                  <input type="text" autocomplete="off" placeholder="Search for Podcast" value="<?php echo $_GET['search']; ?>" id="searchKey" name="search" onchange="sendRequest();">
                  <button id="searchSbt">Search</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--PodCast Banner End Here-->

      <!-- PodCast Content Section Starts Here -->
      <div class="content-wrapper">
        <div class="container-wrapper">
          <div class="heading-wrap clearfix">
            <h2>our episodes</h2>
            <div class="podcastinfo">Tech-talks aims to help you unleash the layers of technology, to make you smarter, more productive and simply happier. Produced by the technocrats of Techugo, this technology podcast & vlog delivers short snippets of tech news and updates. A great treat for hardcore tech enthusiasts!</div>
          </div>
          <div class="podcast-contents clearfix">
            <div class="row">


              <?php if(!empty($podcastArr)){  foreach($podcastArr as $podcast){  
                if($podcast['type'] =='audio'){
                  ?>
                  <div class="col-sm-6 col-md-4 podlist">
                    <div class="content-listing">
                      <div class="audio-rw">
                        <div class="audio-wrap"> 
                            <img src="<?php echo $podcast['podcast_thumbnail'] ?>" alt="">
                        </div>
                        <div class="audio-image" onclick="play()">
                          <img src="<?php echo BASEURL.'/assets/images/audio.png' ?>" class="player-img">
                        </div>
                        <!-- <audio controls>
                          <source src="audio.wav" type="audio/wav">
                            Your browser does not support the audio element.
                          </audio> -->
                          <audio  controls controlsList="nodownload" id="audio-example" class="audio-example" style="display:none;">
                            <source src="<?php echo $podcast['podcast_media'] ?>"> 
                              <source src="<?php echo $podcast['podcast_media'] ?>">
                              </audio>
                            </div>
                            <div class="content-rw">
                              <div class="podcastlistheading"><?php echo $podcast['podcast_title'] ?></div>
                              <div class="podcastdescription"><?php echo $podcast['podcast_content'] ?></div>
                              <div class="greylines"></div>
                              <div class="about-author">
                                <span><?php echo $podcast['created_on']; ?> / </span>
                                <span><?php echo $podcast['created_by']; ?>  </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php }else{ ?>
                       <div class="col-sm-6 col-md-4 podlist">
                        <div class="content-listing">
                          <a class="youtube-link" youtubeid="<?php echo $podcast['youtube_id'] ?>">
                            <div class="audio-rw">
                              <div class="audio-wrap"> 
                              <img src="<?php echo $podcast['podcast_thumbnail'] ?>" alt="title">
                              </div>
                              <div class="video-image">
                                <img src="<?php echo BASEURL.'/assets/images/play-button.png' ?>" class="player-img">
                              </div>
                            </div>
                          </a>
                          <div class="content-rw">
                            <div class="podcastlistheading"><?php echo $podcast['podcast_title'] ?></div>
                            <div class="podcastdescription"><?php echo $podcast['podcast_content'] ?></div>
                            <div class="greylines"></div>
                            <div class="about-author">
                              <span><?php echo $podcast['created_on']; ?> / </span>
                              <span><?php echo $podcast['created_by']; ?>  </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } } ?>
                   
                  </div>
                </div>
                <?php echo $pagination; }else{  echo '<h3>No Result Found.</h3>'; } ?>
              </div>
            </div>
            <!-- PodCast Content Section End Here -->
          </div>
          <!--PodCast End Here-->



          <script src="<?php echo(ADMIN.'/js/buttons.js'); ?>" type="text/javascript"></script>

          <!-- GRT Youtube Popup -->
          <script src="<?php echo(ADMIN.'/js/grt-youtube-popup.js'); ?>" type="text/javascript"></script>

          <!-- Initialize GRT Youtube Popup plugin -->
          <script>
  // Demo video 1
  $(".youtube-link").grtyoutube({
    autoPlay:false,
    theme: "dark"
  });
  
  var sendRequest = function(){
    var searchKey = $('#searchKey').val();
    window.location.href = '<?=base_url('ask-the-experts')?>?query='+encodeURIComponent(searchKey);
  }
  var searchKey;
  $('#searchSbt').on('click',function(){
    searchKey = $('#searchKey').val();
    sendRequest();
  });

$('.audio-image').on('click',function(){
$(this).parent().parent().find('.audio-example').toggle();
})

$(".audio-image").click(function(){
  $(this).hide();
});
function play(){
    var audio = document.getElementById("audio-example");
    audio.play();
}

document.addEventListener('play', function(e){
    var audios = document.getElementsByTagName('audio');
    for(var i = 0, len = audios.length; i < len;i++){
        if(audios[i] != e.target){
            audios[i].pause();
        }
    }
}, true);
</script>
