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
</style>
<!-- Interview Modal Starts Here -->
<div id="interviewModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">EDIT INTERVIEW</h4>
			</div>
			<div class="modal-body">
				<form method="post">
					<div class="row clearfix">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group bdr intmenu">
								<h5>Interviewer Name</h5>
								<i class="fa fa-angle-down"></i>
								<input type="hidden" name="roundId" id="roundId" value="" />
								<select name="interviewerId" id="interviewerId" class="form-control" required>
									<option value="">Choose Interviewer</option>
									<?php $i = 1; ?>
									<?php foreach ($result as $key => $value) { ?>
										<option value="<?php echo $value['id']; ?>">
											<?php echo $value['name']; ?>
										</option>
										<?php $i++; ?>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group bdr">
								<h5>Date</h5>
								<div id="datepicker" class="input-group date" data-date-format="yyyy-mm-dd">
									<input class="form-control" type="text" name="interviewDate" id="interviewDate" readonly />
									<span class="input-group-addon">
										<i class="glyphicon glyphicon-calendar"></i>
									</span>
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
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" onclick="editRound();">SAVE</button>
				<!-- <button type="button" class="cancel btn btn-default" data-dismiss="modal">CANCEL</button> -->
			</div>
		</div>

	</div>
</div>

<div class="pageContent innerpg">
	<!-- <div class="detailheader">
		<ul>
			<li><button type="button" data-toggle="modal" data-target="#interviewModal">ADD INTERVIEWER</button></li>
		</ul>
	</div> -->
	<div class="tablesection">
		<form id="frm-example" action="/nosuchpage" method="POST">
			<div class="table-responsive">
				<table id="example" class="table" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th class="first">S.No</th>
							<th data-visible="false">Id</th>
							<th>Candidate Name</th>
							<th>Interviewer</th>
							<th>Profile</th>
							<th>Round</th>
							<th>Date/Time</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<!-- <tr>
							<td>1</td>
							<td>Aadit</td>
							<td>Harjot</td>
							<td>Designer</td>
							<td>2</td>
							<td>25 Feb 2020</td>
							<td>
								<span class="iconbox"><i class="fa fa-pencil" data-toggle="modal" data-target="#interviewModal"></i></span>
								<span class="iconbox"><i class="fa fa-trash"></i></span>
							</td>
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
	$(function() {
		var dateToday = new Date();
		$("#datepicker").datepicker({
			autoclose: true,
			todayHighlight: true,
			startDate: '-0m'
		}).datepicker('update', new Date());
	});

	var input = $('#input-a');
	input.clockpicker({
		autoclose: true
	});

	// Manual operations
	$('#button-a').click(function(e) {
		// Have to stop propagation here
		e.stopPropagation();
		input.clockpicker('show')
			.clockpicker('toggleView', 'minutes');
	});
	$('#button-b').click(function(e) {
		// Have to stop propagation here
		e.stopPropagation();
		input.clockpicker('show')
			.clockpicker('toggleView', 'hours');
	});

	$(document).ready(function() {
		$('#example').DataTable({
			dom: 'Bfrtip',
			'processing': false,
			'serverSide': true,
			'serverMethod': 'post',
			'ajax': {
				'url': '<?php echo base_url() ?>Recruiter/getscheduleInterview'
			},
			'columns': [{
					data: 'SNO'
				},
				{
					data: 'id'
				},
				{
					data: 'name'
				},
				{
					data: 'interviewer'
				},
				{
					data: 'profile'
				},
				{
					data: 'round'
				},
				{
					data: 'date'
				},
				{
					data: 'action'
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
					targets: 0
				},
				{
					orderable: false,
					targets: 6
				},
				{
					orderable: false,
					targets: 7
				},
			],
			"destroy": true
		});
	})

	function editRound() {
		swal({
				title: "Are you sure?",
				text: "You want to submit ",
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
						id: $('#roundId').val(),
						interviewerId: $('#interviewerId').val(),
						interviewDate: $('#interviewDate').val(),
						// interviewTime: $('#input1').val() + " " + $('#input11').val(),
						interviewTime: $('#input1').val() + ":" + $('#input11').val() + " " + $('#input111').val(),
						mode: $("#mode").val()
					}

					console.log("postdata==", postdata)

					$.ajax({
						url: "<?php echo base_url() ?>Recruiter/editRound",
						method: 'post',
						data: postdata,
						success: function(res) {
							swal.close();
							$('#interviewModal').modal('hide');
							var table = $('#example').DataTable();
							table.ajax.reload();
						}
					});
				} else {
					location.reload()
					swal.close();
				}
			});

	}

	function viewDetails(id) {
		$.ajax({
			url: "<?php echo base_url() ?>Recruiter/getRoundDetails",
			method: 'post',
			data: {
				id: id
			},
			success: function(res) {
				responce = JSON.parse(res);
				console.log("res==", responce)
				$("#roundId").val(responce.id);
				$("#interviewerId").val(responce.interviewerId);
				$("#interviewDate").val(responce.interviewDate);
				$("#input1").val(responce.hours);
				$("#input11").val(responce.mintues2);
				$("#input111").val(responce.fromat);
				$("#mode").html(responce.mode);
				$('#interviewModal').modal('show');
			}
		});
	}

	function deleteRound(id) {

		var removeId = id;
		var messText = "You want to delete!";

		swal({
				title: "Are you sure?",
				text: messText,
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
					$.ajax({
						url: "<?php echo base_url() ?>Recruiter/deleteRound",
						method: 'post',
						data: {
							id: id
						},
						success: function(res) {
							// console.log(res);
							swal.close();
							var table = $('#example').DataTable();
							table.ajax.reload();
						}
					});
				} else {
					swal.close();
				}
			});
	}
</script>
</body>

</html>