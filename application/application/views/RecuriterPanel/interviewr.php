<style>
    table.dataTable tbody tr:first-child td {
        border: 0;

    }

    .rajpal {
        width: 70px;
        margin: -36px 0px 2px 122px;
    }

    .rajpal2 {
        border: 1px solid #999999;
        background-color: #cccccc;
        color: #666666;
    }

    .hours {
        margin: 3px 55px 7px -10px;
        width: 62px;
    }

    .minutes {
        margin: -41px 39px 2px 56px;
        width: 62px;
    }

    .fr {
        margin: -7px 0 0 -26px;
    }

    table.table thead th,
    table.dataTable thead .sorting {
        min-width: 85px;
    }
</style>
<!-- Schedule Interview Modal Starts Here -->
<div id="interviewModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">START INTERVIEW</h4>
                <h5><b id="rName"></b></h5>
                <h5 id="rProfile"></h5>
                <h5 id="rExp"></h5>
            </div>
            <div class="modal-body box">
                <form methode="post">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group bdr intmenu">
                                <h5>Interviewer</h5>
                                <i class="fa fa-angle-down"></i>
                                <select name="interviewerId" id="interviewerId" class="form-control select" required>
                                    <option value="">Choose Interviewer</option>
                                    <?php $i = 1; ?>
                                    <?php foreach ($result as $key => $value) { ?>
                                        <option value="<?php echo $value['id']; ?>">
                                            <?php echo $value['name']; ?>
                                        </option>
                                        <?php $i++; ?>
                                        <?php } ?>SELECT `t1`.`id`, `interviewerId`, `t1`.`deleted`, `interviewDate`, `resumeId`, `interViewTime`, SUBSTRING(interViewTime, 1, CHAR_LENGTH(interViewTime) - 2) AS interViewTime, RIGHT(interViewTime, 2) AS fromat FROM `tblRound` as `t1` WHERE `t1`.`id` = '84'
                                </select>
                                <span id="err_interviewerId" style="color:red"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group bdr">
                                <h5>Date</h5>
                                <div class="input-group date datepicker" data-date-format="yyyy-mm-dd">
                                    <input class="form-control" type="text" id="interviewDate" readonly />
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <span id="err_interviewDate" style="color:red"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group bdr fr">
                                <h5>Time</h5>
                                <!-- <input type="text" id="input1" class="form-control" placeholder="Enter time"> -->
                                <select id="input1" name="input1" class="form-control select hours" required>
                                    <!-- <option value="">Hours</option> -->
                                    <!-- <option value="0">0</option> -->
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                <select id="input11" name="input11" class="form-control select minutes" required>
                                    <!-- <option value="">Minutes</option> -->
                                    <option value="00">00</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="45">45</option>
                                </select>
                                <select id="input111" name="input111" class="form-control select rajpal" required>
                                    <option value="AM">AM</option>
                                    <option value="PM">PM</option>
                                </select>
                                <span id="err_input-a" style="color:red"></span>
                                <!-- <div class="input-group clockpicker">
                                    <input id="input-a" class="form-control">
                                    <i class="glyphicon glyphicon-time"></i>
                                    <span id="err_input-a" style="color:red"></span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group bdr">
                                <h5>Mode</h5>
                                <i class="fa fa-angle-down"></i>
                                <select class="form-control selectpicker" id="mode">
                                    <option>Online</option>
                                    <option>Offline</option>
                                </select>
                                <span id="err_mode" style="color:red"></span>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="roundId" id="roundId" value="" />
                    <input type="hidden" name="resumeId" id="resumeId" value="" />

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" onclick="scheduleInterview();">SCHEDULE</button>
                    </div>

                </form>
            </div>
            <label class="text"><span id="roundIdsView"> </span></label>
        </div>

    </div>
</div>
<!-- Schedule Interview Modal Starts Here -->

<!-- Send Offer Modal Starts Here -->
<div id="offerModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">SEND OFFER</h4>
                <h5>
                    <b id="oName"></b>
                </h5>
            </div>
            <div class="modal-body box">
                <form methode="post">
                    <input type="hidden" id="ojobId" value="" />
                    <input type="hidden" id="oresumeId" value="" />
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group bdr">
                                <h5>Designation</h5>
                                <input type="text" class="form-control" placeholder="" id="odesignation" readonly />

                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group bdr">
                                <h5>Joining Date</h5>
                                <div class="input-group date datepicker" data-date-format="yyyy-mm-dd">
                                    <input class="form-control" type="text" id="ojoingDate" />
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-calendar"></i></span>
                                    <span id="err_interviewDate" style="color:red"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group bdr">
                                <h5>Offered CTC</h5>
                                <input type="text" class="form-control" id="offercts" placeholder="" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="giveOffer();">SEND OFFER</button>
            </div>
        </div>

    </div>
</div>
<!-- Send Offer Modal Starts Here -->

<!-- Joining Confirmation Modal Starts Here -->
<div id="joiningModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">JOINING CONFIRMATION</h4>
                <h5>
                    <b id="jName"></b>
                </h5>
            </div>
            <div class="modal-body box">
                <form method="post">
                    <input type="hidden" id="jjobId" value="" />
                    <input type="hidden" id="jresumeId" value="" />
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group bdr">
                                <h5>Designation</h5>
                                <input type="text" class="form-control" placeholder="" id="jdesignation" readonly />
                            </div>
                        </div>
                    </div>
                    <div class=" row clearfix">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group bdr">
                                <h5>Final CTC</h5>
                                <input type="text" class="form-control" placeholder="" id="jfctc" />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group bdr">
                                <h5>Joined On</h5>
                                <div class="input-group date datepicker" data-date-format="yyyy-mm-dd">
                                    <input class="form-control" type="text" id="jjoingDate" readonly />
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="giveFinalOffer();">CONFIRM</button>
            </div>
        </div>

    </div>
</div>
<!-- Joining Confirmation Modal Starts Here -->

<!-- Reject Modal Starts Here -->

<div id="rejectModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Reasons to reject</h4>
            </div>
            <div class="modal-body box2">
                <form>
                    <div class="row clearfix">
                        <input type="hidden" name="reasonResumeId" id="reasonResumeId" value="" />
                        <?php foreach ($result2 as $key => $value) { ?>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="box">
                                    <label class="custcon" checked="checked">
                                        <input type="checkbox" class="reason" id="reason" value="<?php echo $value['id']; ?>"><?php echo $value['title']; ?>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="rejectCandidate();">REJECT</button>
            </div>
        </div>
    </div>
</div>

<div class="pageContent innerpg interviewstatus">
    <!--Admins Table Section Start Here-->
    <div class="tablesection">
        <h3>
            <b> Profile : <?php echo $jobData[0]['profile']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Experience : <?php echo $jobData[0]['minExp']; ?> &nbsp;to &nbsp;
                <?php echo $jobData[0]['maxExp']; ?>
            </b>
        </h3>
        <form id="frm-example" action="/nosuchpage" method="POST">
            <div class="table-responsive">
                <table id="example" class="table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="first headerfirst"></th>
                            <th class="headerfirst"></th>
                            <th class="headerfirst"></th>
                            <th class="headerfirst"></th>
                            <th class="headerfirst"></th>
                            <th class="headerfirst"></th>
                            <th class="headerfirst"></th>
                            <th class="headerfirst" colspan="5" style="background:#41aff8;color:#fff;border-top-right-radius:13px;">INTERVIEW STATUS</th>
                        </tr>
                        <tr>
                            <th class="first headersecond" style="border-top-left-radius:0;border-bottom-left-radius:13px;">S.No</th>
                            <th data-visible="false">Id</th>
                            <th class="headersecond">Name</th>
                            <th class="headersecond">Mobile Number</th>
                            <th class="headersecond">Date</th>
                            <th class="headersecond">Total Exp</th>
                            <th class="headersecond">Action</th>
                            <th class="headersecond" style="background:#41aff8;color:#fff;">Round 1</th>
                            <th class="headersecond" style="background:#41aff8;color:#fff;">Round 2</th>
                            <th class="headersecond" style="background:#41aff8;color:#fff;">Round 3</th>
                            <th class="headersecond" style="background:#41aff8;color:#fff;">Round 4</th>
                            <th class="headersecond" style="background:#41aff8;color:#fff;border-bottom-right-radius:13px;">Round 5</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                               <td>2</td>
                               <td><a href="<?php echo base_url(); ?>Recuriter/viewResume">Adit</a></td>
                               <td>0123456789</td>
                               <td>HCL</td>
                               <td>5 Yrs</td>
                               <td><button type="button" data-toggle="modal" data-target="#interviewModal">Schedule interview</button> <button type="button" data-toggle="modal" data-target="#rejectModal">Reject</button><br>
                                   <button type="button" data-toggle="modal" data-target="#offerModal">Offer</button> <button type="button" data-toggle="modal" data-target="#joiningModal">Joined</button></td>
                               <td>Hire <span class="text">Harjot</span></td>
                               <td>Hire <span class="text">Ankit</span></td>
                               <td>Hire <span class="text">Ashish</span></td>
                               <td>Hire <span class="text">Abhinav</span></td>
                           </tr> -->
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>
</div>

</div>
<script>
    function alreadyScheduled() {
        swal({
                title: "Interview has been already scheduled",
                type: "warning",
                confirmButtonColor: "#DD6B55",
            },
            // setTimeout(function() {
            //     swal.close()
            // }, 3000)
        );
    }

    // $("input:checkbox").on('click', function() {
    //     var $box = $(this);
    //     if ($box.is(":checked")) {
    //         var group = "input:checkbox[name='" + $box.attr("name") + "']";
    //         $(group).prop("checked", false);
    //         $box.prop("checked", true);
    //     } else {
    //         $box.prop("checked", false);
    //     }
    // });

    $(document).ready(function() {

        $('#example').DataTable({
            dom: 'Bfrtip',
            'processing': false,
            'serverSide': true,
            'serverMethod': 'post',
            'ajax': {
                "data": {
                    "jobId": window.location.pathname.split("/").pop(),
                },
                'url': '<?php echo base_url() ?>Recruiter/getjobInterviewerList'
            },
            'columns': [{
                    data: 'id'
                },
                {
                    data: 'maxRound'
                },
                {
                    data: 'name'
                },
                {
                    data: 'mobile'
                },
                {
                    data: 'lastCompany'
                },
                {
                    data: 'totalExp'
                },
                {
                    data: 'Action'
                },
                {
                    data: 'round1'
                },
                {
                    data: 'round2'
                },
                {
                    data: 'round3'
                },
                {
                    data: 'round4'
                },
                {
                    data: 'round5'
                },
            ],
            buttons: [{
                extend: 'pdf',
                text: 'Export PDF',
            }],
            "order": [
                [1, "desc"]
            ],
            columnDefs: [{
                    orderable: false,
                    targets: 4
                },
                {
                    orderable: false,
                    targets: 5
                },
                {
                    orderable: false,
                    targets: 6
                },
                {
                    orderable: false,
                    targets: 7
                },
                {
                    orderable: false,
                    targets: 8
                },
                {
                    orderable: false,
                    targets: 9
                },
            ],
            "destroy": true
        });
    })

    $(function() {
        $(".datepicker").datepicker({
            autoclose: true,
            todayHighlight: true,
            // startDate: '-0m'
        }).datepicker('update', new Date());
    });

    var input = $('#input-a');
    input.clockpicker({
        autoclose: true
    });

    $('#button-a').click(function(e) {
        e.stopPropagation();
        input.clockpicker('show')
            .clockpicker('toggleView', 'minutes');
    });
    $('#button-b').click(function(e) {
        e.stopPropagation();
        input.clockpicker('show')
            .clockpicker('toggleView', 'hours');
    });

    function openReasonModal(id) {
        $("#reasonResumeId").val(id);
        $('#rejectModal').modal('show');
    }

    function offerModal(id) {

        $.ajax({
            url: "<?php echo base_url() ?>Recruiter/getResumeDetails",
            method: 'post',
            data: {
                id: id
            },
            success: function(res) {
                responce = JSON.parse(res);
                $("#oName").html(responce.name);
                $("#ojobId").val(responce.jobId);
                $("#oresumeId").val(responce.id);
                $("#odesignation").val(responce.profile);
                $('#offerModal').modal('show');
            }
        });
    }

    function joiningModal(id) {
        console.log("id", id)
        $.ajax({
            url: "<?php echo base_url() ?>Recruiter/getResumeDetails",
            method: 'post',
            data: {
                id: id
            },
            success: function(res) {
                responce = JSON.parse(res);
                console.log("responce", responce)
                $("#jName").html(responce.name);
                $("#jjobId").val(responce.jobId);
                $("#jresumeId").val(responce.id);
                $("#jdesignation").val(responce.profile);
                $('#joiningModal').modal('show');
            }
        });
    }

    function giveFinalOffer() {

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
                    let postdata = {
                        resumeId: $('#jresumeId').val(),
                        jobId: $('#jjobId').val(),
                        confirmJoinDate: $('#jjoingDate').val(),
                        finalCTC: $('#jfctc').val(),
                    }
                    console.log("postdata==", postdata)
                    $(".confirm").attr('disabled', 'disabled');
                    $.ajax({
                        url: "<?php echo base_url() ?>Recruiter/giveFinalOffer",
                        method: 'post',
                        data: postdata,
                        success: function(res) {
                            responce = JSON.parse(res);
                            $('#oresumeId').val(''),
                                $('#jjobId').val(''),
                                $('#jjoingDate').val(''),
                                $('#jfctc').val(''),

                                $('#joiningModal').modal('hide');
                            // var table = $('#example').DataTable();
                            // table.ajax.reload();
                            location.reload();
                        }
                    });
                } else {
                    // location.reload()
                    swal.close();
                }
            });

    }

    function giveOffer() {
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
                    let postdata = {
                        resumeId: $('#oresumeId').val(),
                        jobId: $('#ojobId').val(),
                        joinDate: $('#ojoingDate').val(),
                        offerCTC: $('#offercts').val(),
                    }
                    console.log("postdata==", postdata)
                    $.ajax({
                        url: "<?php echo base_url() ?>Recruiter/giveOffer",
                        method: 'post',
                        data: postdata,
                        success: function(res) {
                            responce = JSON.parse(res);

                            $('#oresumeId').val(''),
                                $('#ojobId').val(''),
                                $('#ojoingDate').val(''),
                                $('#offercts').val(''),
                                $('#offerModal').modal('hide');
                            // var table = $('#example').DataTable();
                            // table.ajax.reload();
                            location.reload();
                        }
                    })
                } else {
                    // location.reload()
                    swal.close();
                }
            });

    }

    function rejectCandidate() {

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
                    var val = [];
                    $(':checkbox:checked').each(function(i) {
                        val += $(this).val() + ",";
                    });

                    let postdata = {
                        id: $('#reasonResumeId').val(),
                        reject: val,
                    }
                    $.ajax({
                        url: "<?php echo base_url() ?>Recruiter/rejectCandidate",
                        method: 'post',
                        data: postdata,
                        success: function(res) {
                            // $('#rejectModal').modal('hide');
                            location.reload();
                        }
                    });
                } else {
                    location.reload()
                    swal.close();
                }

            });
    }

    function getResumeDetails(id, round) {
        $.ajax({
            url: "<?php echo base_url() ?>Recruiter/getResumeDetails",
            method: 'post',
            data: {
                id: id
            },
            success: function(res) {
                responce = JSON.parse(res);
                $("#roundId").val(round);
                $("#resumeId").val(id);
                $("#rName").html(responce.name);
                $("#rProfile").html(responce.profile);
                $("#rExp").html(responce.totalExperince);
                $("#roundIdsView").html("Round " + round);
                $('#interviewModal').modal('show');
            }
        });
    }

    function scheduleInterview() {
        $("#err_interviewDate").html('');
        $("#err_input-a").html('');
        $("#err_interviewerId").html('');
        $("#err_mode").html('');

        let postdata = {
            round: $('#roundId').val(),
            resumeId: $('#resumeId').val(),
            interviewDate: $('#interviewDate').val(),
            interviewTime: $('#input1').val() + ":" + $('#input11').val() + " " + $('#input111').val(),
            // interviewTime: $('#input1').val(),
            interviewerId: $('#interviewerId').val(),
            mode: $('#mode').val(),
        }

        console.log("hello", postdata)

        if (postdata.interviewerId == false) {
            $("#err_interviewDate").html('');
            $("#err_input-a").html('');
            $("#err_interviewerId").html('');
            $("#err_mode").html('');
            $("#err_interviewerId").html(' Please choose  Interviewer');
            $("#err_interviewerId").hide().slideDown().delay(3000).fadeOut();
            $("#interviewerId").focus();

        } else {
            if (postdata.interviewTime == false) {

                $("#err_interviewDate").html('');
                $("#err_input-a").html('');
                $("#err_interviewerId").html('');
                $("#err_mode").html('');
                $("#err_input-a").html(' Please choose Interview time');
                $("#err_input-a").hide().slideDown().delay(3000).fadeOut();
                $("#input1").focus();

            } else {
                if ($('#input111').val() == false) {
                    $("#err_interviewDate").html('');
                    $("#err_input-a").html('');
                    $("#err_interviewerId").html('');
                    $("#err_mode").html('');
                    $("#err_input-a").html(' Please choose Interview time format');
                    $("#err_input-a").hide().slideDown().delay(3000).fadeOut();
                    $("#input11").focus();

                } else {
                    if (postdata.interviewDate == false) {

                        $("#err_interviewDate").html('');
                        $("#err_input-a").html('');
                        $("#err_interviewerId").html('');
                        $("#err_mode").html('');
                        $("#err_interviewDate").html(' Please choose Interview Date');
                        $("#err_interviewDate").hide().slideDown().delay(3000).fadeOut();
                        $("#interviewDate").focus();

                    } else {
                        swal({
                                title: "Are you sure?",
                                text: "You want to submit",
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
                                        url: "<?php echo base_url() ?>Recruiter/scheduleInterviewDetails",
                                        method: 'post',
                                        data: postdata,
                                        success: function(res) {
                                            location.reload();
                                            // $('#interviewModal').modal('hide');
                                            // var table = $('#example').DataTable();
                                            // table.ajax.reload();
                                        }
                                    });
                                } else {
                                    swal.close();
                                }
                            });
                    }
                }
            }
        }
    }
</script>
</body>

</html>