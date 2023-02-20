<div class="be-content">
    <div class="main-content container-fluid">
      <div class="card-body">
        <div class="form-group row">
          <label class="col-12 col-sm-3 col-form-label text-sm-right"> Select Year to filter</label>
          <div class="col-12 col-sm-8 col-lg-6 pt1">
            <select class="selectcate form-control" name="year" id="year" >
                <option value="2019" <?php if($filter['year'] == 2019) { echo "selected='selected'";} ?>>2019</option>
                <option value="2020" <?php if($filter['year'] == 2020) { echo "selected='selected'";} ?>>2020</option>
                <option value="2021" <?php if($filter['year'] == 2021) { echo "selected='selected'";} ?>>2021</option>
                <option value="2022" <?php if($filter['year'] == 2022) { echo "selected='selected'";} ?>>2022</option>
            </select>
          </div>
        </div>
    </div>
      <div class="row">
        <div class="col-12 col-lg-6 col-xl-6">
            <div class="widget widget-tile">
              <div class="data-info">
                <div class="desc">Audio Podcast</div>
                <div id="chartContainer1"></div>
              </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-6">
            <div class="widget widget-tile">
              <div class="data-info">
                <div class="desc">Video Podcast</div>
                <div id="chartContainer2"></div>
              </div>
            </div>
        </div>

      </div>

    </div>
</div>


<link rel="stylesheet" href="<?php echo(ADMIN.'/css/morris.css'); ?>">
<script src="<?php echo(ADMIN.'/js/raphael-min.js'); ?>"></script>
<script src="<?php echo(ADMIN.'/js/morris.min.js'); ?>"></script>

<script>
    
Morris.Bar({ 
  element: 'chartContainer1',        
  data: <?= json_encode($audiodata,JSON_NUMERIC_CHECK); ?>,       
  xkey: 'y',        
  ykeys: ['a'],        
  labels: ['Audio Podcast']    
});
Morris.Bar({ 
  element: 'chartContainer2',        
  data: <?= json_encode($videodata,JSON_NUMERIC_CHECK); ?>,       
  xkey: 'y',        
  ykeys: ['a'],        
  labels: ['Video Podcast']    
});

$( document ).ready(function() {
  $('#year').on('change', function(e) {
    var year = $( "#year" ).val();

  var url = "<?php echo  ADMINURL; ?>Admin/dashboard"+"?year="+ $.trim(year);
//  console.log(url); 
  window.location.href = url;
  });
});
</script>