
      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title"><?php echo $page_title; ?></h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item"><a href="<?php echo(ADMINURL.'Admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="#"><?php echo $page_title; ?></a></li>
            </ol>
          </nav>
        </div>
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-2">&nbsp;</div>
            <div class="col-sm-8">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-body">
                  <form id="uploadForm" action="<?php echo(ADMINURL.'Podcast/addPodcastprocess'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group pt-2">
                      <label for="blog_title">Podcast Title</label>
                      <input class="form-control" id="post_title" type="text" value="" placeholder="Podcast Title" name="post_title" required>
                    </div>

                    <div class="form-group field-videolang-name-en required">
                        <label for="editor1">Podcast Content</label>
                        <textarea id="editor1" name="post_content" class="form-control" ></textarea>  
                        <span class="small" id="faq_description_en_error" style="color:red;"></span>
                        <div class="help-block"></div>
                    </div>    
                    <div class="form-group row">
                      <div class="form-group pt-2 col-md-6">
                        <label for="meta_keywords">Podcast Type</label>
                        <select class="selectcate form-control" name="type" id="type" >
                            <option value="">Select Type</option>
                            <option value="audio">Audio</option>
                            <option value="video">Video</option>
                        </select>
                      </div>   
                      <div class="form-group pt-2 col-md-6">
                        <label for="meta_keywords">Author Name</label>
                        <input class="form-control" type="text" list="created_by" name="created_by" placeholder="Author Name" autocomplete="off" required="" />
                        <datalist id="created_by">
                          <?php foreach($authorArr as $created){ ?>
                          <option value="<?php echo $created['created_by']; ?>"><?php echo $created['created_by']; ?></option>
                          <?php } ?>
                        </datalist>
                      </div>
                    </div>

                    <div class="form-group pt-2">
                      <label for="blog_title">Youtube Url</label>
                      <input class="form-control" id="youtube_url" type="text" value="" placeholder="Youtube Url" name="youtube_url">
                    </div>
                    <div class="form-group row">
                      <div class="col-md-2" style="float: left;">
                         <label>Add Podcast Audio</label>    
                      </div> 
                      <div class="col-md-4" style="float: left;">       
                         <div class="form-group field-video-video_logo required">
                          <input id="audiofile" onchange="readname(this);" class="inputfile " name="audiofile" type="file">
                          <label class="btn btn-sm btn-primary" for="audiofile">
                          <i class="fa fa-upload" aria-hidden="true"></i> &nbsp;<span>Browse files</span></label>
                         </div>
                      </div>
                      <div class="col-md-2" style="float: left;">
                         <label>Audio Thumbnail</label>    
                      </div> 
                      <div class="col-md-4" style="float: left;">       
                         <div class="form-group field-video-video_logo required">
                          <input id="audiothumb" onchange="readname(this);" class="inputfile " name="audiothumb" type="file">
                          <label class="btn btn-sm btn-primary" for="audiothumb">
                          <i class="fa fa-upload" aria-hidden="true"></i> &nbsp;<span>Browse files</span></label>
                         </div>
                      </div>
                    </div>
                    
                    <div class="row pt-3">
                      <div class="col-sm-6">
                        <p class="text-left">
                          <button class="btn btn-space btn-primary" type="submit">Submit</button>
                        </p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-sm-2">&nbsp;</div>
          </div>
        </div>

      </div> 

<script type="text/javascript">
  CKEDITOR.replace( 'editor1' );
  CKEDITOR.add  

function readname(input) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  input.parentElement.getElementsByTagName("span")[0].innerHTML = fileName;
}

</script>