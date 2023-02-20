<style>
    .rbcs {
        position: relative;
        width: 250px;
        height: 55px;
        outline: none;
        color: #fff;
        box-shadow: none;
        background: #41aff8;
        border-radius: 4px;
        border: 1px solid #41aff8;
    }
</style>
<div class="pageContent innerpg">
    <div id="responseDiv" class="alert text-center" style="margin-top:20px; display:none;margin-right:-340px; height: 57px;margin-top: 30px;width: 400px;">
        <button type="button" class="close" id="clearMsg">
            <span aria-hidden="true">&times;</span></button>
        <span id="message"></span>
    </div>

    <div class="addposition">
        <h3>ADD POSITION</h3>
        <form>
            <div class="row clearfix">
                <div class="col-sm-6 col-md-6">
                    <div class="form-group bdr intmenu">
                        <h5>Profile</h5>
                        <select id="profile" name="profile" class="form-control select" required>
                            <option value="">Choose Profile</option>
                            <?php $i = 1; ?>
                            <?php foreach ($result as $key => $value) { ?>
                                <option value="<?php echo $value['id']; ?>"><?php echo $value['title']; ?></option>
                                <?php $i++; ?>
                            <?php } ?>
                        </select>
                        <span id="err_profile" style="color:red"></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-group bdr intmenu">
                        <h5>Asked By</h5>
                        <select id="askedBy" name="askedBy" class="form-control select" required>
                            <option value=""> Asked By </option>
                            <option value="Abinav Singh">Abinav Singh</option>
                            <option value="Abinav Gupta">Abinav Gupta</option>
                            <option value="Ankit Singh">Ankit Singh</option>
                            <option value="Bhavna Puri">Bhavna Puri</option>
                            <option value="Jullie Singh">Jullie Singh</option>
                            <option value="Henna Zakir">Henna Zakir</option>
                            <option value="Harjot Kour">Harjot Kour</option>
                            <option value="Lakshman Kumar">Lakshman Kumar</option>
                            <option value="Prakhar Anand">Prakhar Anand</option>
                            <option value="Purushottam">Purushottam </option>
                        </select>
                        <span id="err_askedBy" style="color:red"></span>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-sm-6 col-md-6">
                    <div class="form-group bdr intmenu">
                        <h5>Min Experience</h5>
                        <select id="minExp" name="minExp" class="form-control select" required>
                            <option value="">Choose Min Experience</option>
                            <option value="0">0</option>
                            <option value="0.5">0.5</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <span id="err_minExp" style="color:red"></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-group bdr intmenu">
                        <h5>Max Experience</h5>
                        <!-- <input type="text" class="form-control" placeholder=" " id="maxExp" name="maxExp" required />
                        <span id="err_maxExp" style="color:red"></span> -->
                        <select id="maxExp" name="maxExp" class="form-control select" required>
                            <option value="">Choose Max Experience</option>
                            <option value="0">0</option>
                            <option value="0.5">0.5</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <span id="err_maxExp" style="color:red"></span>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-sm-12 col-md-12">
                    <div class="form-group bdr">
                        <h5>Location</h5>
                        <input type="text" class="form-control" placeholder=" " id="location" name="location" value="" required />
                        <span id="err_location" style="color:red"></span>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-sm-12 col-md-12">
                    <div class="form-group bdr">
                        <h5>Description</h5>
                        <textarea type="text" class="form-control" id="description" name="description" required></textarea>
                        <span id="err_description" style="color:red"></span>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-sm-12 col-md-12">
                    <div class="form-group bdr">
                        <h5>Responsibility</h5>
                        <textarea type="text" class="form-control" id="responsiblity" name="responsiblity" required></textarea>
                        <span id="err_responsiblity" style="color:red"></span>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-sm-12 col-md-12">
                    <div class="form-group bdr">
                        <h5>Skills</h5>
                        <textarea type="text" class="form-control" id="skills" name="skills" required></textarea>
                        <span id="err_skills" style="color:red"></span>
                    </div>
                </div>
            </div>


            <div class="row clearfix">
                <div class="col-sm-12 col-md-12">
                    <div class="form-group bdr">
                        <h5>Video</h5>
                        <!-- <select id="isVideos" name="isVideos" class="form-control select" required>
                            <option value="">Choose</option>
                            <option value="1">Mandatory</option>
                            <option value="2">Not Mandatory</option>
                        </select> -->
                        <div class="box">
                            <label class="custcon" checked="checked">
                                <input type="checkbox" class="custcon" id="isVideos" value="1">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <span id="err_isVideos" style="color:red"></span>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <center>
                                <img src="<?php echo base_url(); ?>assets/images/loading.gif" height="35px" width="35px" id="loadData" style="display:none" />
                            </center><br>
                            <button type="button" class="rbcs" onClick="saveData();">SUBMIT</button>
                        </div>
                    </div>
                </div>
        </form>
    </div>
    <!--Add Position Section End Here-->
</div>

<script>
    function saveData() {
        toastr.options = {
            'closeButton': true,
            'debug': false,
            'newestOnTop': false,
            'progressBar': false,
            'positionClass': 'toast-top-right',
            'preventDuplicates': false,
            'showDuration': '1000',
            'hideDuration': '1000',
            'timeOut': '5000',
            'extendedTimeOut': '1000',
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut',
        }

        $("#err_profile").html('');
        $("#err_askedBy").html('');
        $("#err_minExp").html('');
        $("#err_maxExp").html('');
        $("#err_location").html('');
        $("#err_description").html('');
        $("#err_skills").html('');

        let profileName = $('#profile option:selected');

        let postdata = {
            profile: $('#profile').val(),
            profileName2: profileName[0].innerHTML,
            askedBy: $('#askedBy').val(),
            minExp: $('#minExp').val(),
            maxExp: $('#maxExp').val(),
            location: $('#location').val(),
            description: $('#description').val(),
            skills: $('#skills').val(),
            // isVideos: $('#isVideos').val(),
            responsiblity: $('#responsiblity').val(),
        }

        var isVideos = $('.custcon:checked').val();
        if (isVideos == undefined)
            postdata.isVideos = '2';
        else
            postdata.isVideos = '1';

        console.log("postdata=>", postdata)

        if (postdata.profile == false) {
            $("#err_profile").html('');
            $("#err_askedBy").html('');
            $("#err_minExp").html('');
            $("#err_maxExp").html('');
            $("#err_location").html('');
            $("#err_description").html('');
            $("#err_skills").html('');
            $("#err_profile").html(' Please enter profile');
            $("#err_profile").hide().slideDown().delay(3000).fadeOut();
            $("#profile").focus();

        } else {

            if (postdata.minExp > postdata.maxExp) {
                $("#err_profile").html('');
                $("#err_askedBy").html('');
                $("#err_minExp").html('');
                $("#err_maxExp").html('');
                $("#err_location").html('');
                $("#err_description").html('');
                $("#err_skills").html('');
                $("#err_minExp").html('Minimum experience should not be greater than maximum experience');
                $("#err_minExp").hide().slideDown().delay(3000).fadeOut();
                $("#minExp").focus();

            } else {
                if (postdata.askedBy == false) {
                    $("#err_profile").html('');
                    $("#err_askedBy").html('');
                    $("#err_minExp").html('');
                    $("#err_maxExp").html('');
                    $("#err_location").html('');
                    $("#err_description").html('');
                    $("#err_skills").html('');
                    $("#err_askedBy").html(' Please enter askedBy');
                    $("#err_askedBy").hide().slideDown().delay(3000).fadeOut();
                    $("#askedBy").focus();

                } else {
                    if ((postdata.minExp == "")) {
                        $("#err_profile").html('');
                        $("#err_askedBy").html('');
                        $("#err_minExp").html('');
                        $("#err_maxExp").html('');
                        $("#err_location").html('');
                        $("#err_description").html('');
                        $("#err_skills").html('');
                        $("#err_minExp").html(' Please add min exp');
                        $("#err_minExp").hide().slideDown().delay(3000).fadeOut();
                        $("#minExp").focus();

                    } else {
                        if (postdata.maxExp == false) {
                            $("#err_profile").html('');
                            $("#err_askedBy").html('');
                            $("#err_minExp").html('');
                            $("#err_maxExp").html('');
                            $("#err_location").html('');
                            $("#err_description").html('');
                            $("#err_skills").html('');
                            $("#err_maxExp").html(' Please enter maxExp');
                            $("#err_maxExp").hide().slideDown().delay(3000).fadeOut();
                            $("#maxExp").focus();

                        } else {
                            if (postdata.location == false) {
                                $("#err_profile").html('');
                                $("#err_askedBy").html('');
                                $("#err_minExp").html('');
                                $("#err_maxExp").html('');
                                $("#err_location").html('');
                                $("#err_description").html('');
                                $("#err_skills").html('');
                                $("#err_location").html(' Please enter location');
                                $("#err_location").hide().slideDown().delay(3000).fadeOut();
                                $("#location").focus();

                            } else {
                                if (postdata.description == false) {
                                    $("#err_profile").html('');
                                    $("#err_askedBy").html('');
                                    $("#err_minExp").html('');
                                    $("#err_maxExp").html('');
                                    $("#err_location").html('');
                                    $("#err_description").html('');
                                    $("#err_skills").html('');
                                    $("#err_description").html(' Please enter description');
                                    $("#err_description").hide().slideDown().delay(3000).fadeOut();
                                    $("#description").focus();

                                } else {
                                    if (postdata.skills == false) {
                                        $("#err_profile").html('');
                                        $("#err_askedBy").html('');
                                        $("#err_minExp").html('');
                                        $("#err_maxExp").html('');
                                        $("#err_location").html('');
                                        $("#err_description").html('');
                                        $("#err_skills").html('');
                                        $("#err_skills").html(' Please enter skills');
                                        $("#err_skills").hide().slideDown().delay(3000).fadeOut();
                                        $("#skills").focus();
                                    } else {

                                        swal({
                                                title: "Are you sure?",
                                                text: "You want to submit, form once submitted can not be changed",
                                                type: "warning",
                                                showCancelButton: true,
                                                confirmButtonColor: "#DD6B55",
                                                confirmButtonText: "Yes",
                                                cancelButtonText: "No",
                                                closeOnConfirm: false,
                                                closeOnCancel: false
                                            },
                                            function(isConfirm) {
                                                if (isConfirm) {
                                                    $(".confirm").attr('disabled', 'disabled');
                                                    $.ajax({
                                                        url: '<?php echo base_url(); ?>Recruiter/saveJob',
                                                        type: 'POST',
                                                        dataType: "json",
                                                        data: postdata,
                                                        success: function(response) {
                                                            swal.close();
                                                            console.log("response", response.error_string)
                                                            toastr.success(response.error_string, 'Success');
                                                            setTimeout(function() {
                                                                url = "<?php echo base_url(); ?>" + 'Recruiter/hire';
                                                                window.location.href = url;
                                                            }, 1000);
                                                        }
                                                    });
                                                } else {
                                                    // location.reload()
                                                    swal.close();
                                                }
                                            });
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
</script>