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
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-body">
                      <div class="pricing-table pricing-table-primary">
                          <div class="pricing-table-title"><?php echo $postArr['podcast_title']; ?></div>
                          <div class="card-divider card-divider-xl"></div>
                          <div class="pricing-table-title"><?php echo $postArr['podcast_content']; ?></div>
                          <div class="card-divider card-divider-xl"></div>
                          <?php  if($postArr['type'] =='audio'){ ?>
                          <div class="col-sm-6">
                             <img style="max-width: 700px;" src="<?php echo $postArr['podcast_thumbnail']; ?>" alt="">
                          </div>
                          <div class="col-sm-6">
                             <audio  controls controlsList="nodownload" id="audio-example">
                              <source src="<?php echo $postArr['podcast_media'] ?>"> 
                              <source src="<?php echo $postArr['podcast_media'] ?>">
                            </audio>
                          </div>

                        <?php }else{ ?>
                          <div class="col-sm-6">
                             <img style="max-width: 700px;" src="<?php echo $postArr['podcast_thumbnail']; ?>" alt="">
                          </div>
                          <div class="col-sm-6">
                             <iframe width="420" height="345" src="<?php echo $postArr['podcast_media']; ?>"></iframe>
                          </div>
                        <?php } ?>
                        </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div> 
