<style>
	.alert-success {
		color: #3c763d;
		background-color: #dff0d8;
		border-color: #d6e9c6;
		width: 429px;
		margin: 5px 2px 0px 96px;
	}

	.alert-danger {
		color: #3c763d;
		background-color: red;
		border-color: #d6e9c6;
		width: 429px;
		margin: 5px 2px 0px 96px;
	}
</style>

<div class="pageContent innerpg">
	<div class="detailheader">
		<ul>
			<li><button type="button" data-toggle="modal" data-target="#interviewModal">ADD INTERVIEWER</button></li>
		</ul>
	</div>
	<div class="tablesection">
		<div class="table-responsive">
			<table id="example" class="table" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th class="first">S.No</th>
						<th data-visible="false">Id</th>
						<th>Name</th>
						<th>Department</th>
						<th>Enrollment Date</th>
						<th>Total Interviews</th>
						<th>Active Interviews</th>
						<th>Hired</th>
						<th>Rejected</th>
						<th>Hold</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>

<div id="interviewModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">ADD INTERVIEWER</h4>
			</div>

			<div id="responseDiv" class="alert text-center">
				<span id="message"></span>
			</div>

			<div class="modal-body">
				<form>
					<div class="row clearfix">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group bdr">
								<h5>Name</h5>
								<input type="text" class="form-control" placeholder="" name="name" id="name" maxlength="50" required />
								<span id="err_name" style="color:red"></span>
							</div>
						</div>
						<div class=" col-xs-12 col-sm-6 col-md-6">
							<div class="form-group bdr">
								<h5>Email Id</h5>
								<input type="email" class="form-control" placeholder="" name="email" id="email" maxlength="50" onblur="checkEmail();" required />
								<span id="err_email" style="color:red"></span>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group bdr">
								<h5>Mobile Number</h5>
								<input type="text" class="form-control" placeholder="" onkeypress="return isNumber(event)" maxlength="12" name="mobile" id="mobile" required />
								<span id="err_mobile" style="color:red"></span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group bdr intmenu">
								<h5>Department</h5>
								<select id="department" name="department" class="form-control" required>
									<option value="">Choose Department</option>
									<?php $i = 1; ?>
									<?php foreach ($result2 as $key => $value) { ?>
										<option value="<?php echo $value['id']; ?>">
											<?php echo $value['title']; ?>
										</option>
										<?php $i++; ?>
									<?php } ?>
								</select>
								<span id="err_department" style="color:red"></span>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group bdr intmenu">
								<h5>Designation</h5>
								<select id="designation" name="designation" class="form-control" required>
									<option value="">Choose Designation</option>
									<?php $i = 1; ?>
									<?php foreach ($result as $key => $value) { ?>
										<option value="<?php echo $value['id']; ?>">
											<?php echo $value['title']; ?>
										</option>
										<?php $i++; ?>
									<?php } ?>
								</select>
								<span id="err_designation" style="color:red"></span>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<center>
					<img src="<?php echo base_url(); ?>assets/images/loading.gif" height="35px" width="35px" id="loadData" style="display:none" />
				</center><br>
				<button type="button" class="btn btn-default" onclick="saveData();">SAVE</button>
				<!-- <button type="button" class="cancel btn btn-default" data-dismiss="modal">CANCEL</button> -->
			</div>
		</div>
	</div>
</div>


<div id="EditInterviewModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">EDIT INTERVIEWER</h4>
			</div>
			<div id="responseDiv2" class="alert text-center">
				<span id="message2"></span>
			</div>

			<div class="modal-body">
				<form method="post">
					<input type="hidden" id="editId" />
					<div class="row clearfix">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group bdr">
								<h5>Name</h5>
								<input type="text" class="form-control" placeholder="" name="editname" id="editname" maxlength="50" required />
								<span id="err_editname" style="color:red"></span>
							</div>
						</div>
						<div class=" col-xs-12 col-sm-6 col-md-6">
							<div class="form-group bdr">
								<h5>Email Id</h5>
								<input type="email" class="form-control" placeholder="" name="editemail" id="editemail" maxlength="50" required />
								<span id="err_editemail" style="color:red"></span>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group bdr">
								<h5>Mobile Number</h5>
								<input type="text" class="form-control" placeholder="" onkeypress="return isNumber(event)" maxlength="12" name="editmobile" id="editmobile" required />
								<span id="err_editmobile" style="color:red"></span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="form-group bdr intmenu">
								<h5>Department</h5>
								<select id="editdepartment" name="editdepartment" class="form-control select" required>
									<option value="">Choose Department</option>
									<?php $i = 1; ?>
									<?php foreach ($result2 as $key => $value) { ?>
										<option value="<?php echo $value['id']; ?>">
											<?php echo $value['title']; ?>
										</option>
										<?php $i++; ?>
									<?php } ?>
								</select>
								<span id="err_editdepartment" style="color:red"></span>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group bdr intmenu">
								<h5>Designation</h5>
								<select id="editdesignation" name="editdesignation" class="form-control select" required>
									<option value="">Choose Designation</option>
									<?php $i = 1; ?>
									<?php foreach ($result as $key => $value) { ?>
										<option value="<?php echo $value['id']; ?>">
											<?php echo $value['title']; ?>
										</option>
										<?php $i++; ?>
									<?php } ?>
								</select>
								<span id="err_editdesignation" style="color:red"></span>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<center>
					<img src="<?php echo base_url(); ?>assets/images/loading.gif" height="35px" width="35px" id="loadData2" style="display:none" />
				</center><br>
				<button type="button" class="btn btn-default" onclick="saveData2();">UPDATE</button>
				<!-- <button type="button" class="cancel btn btn-default" data-dismiss="modal">CANCEL</button> -->
			</div>
		</div>
	</div>
</div>
</div>
</body>

</html>
<script>
	function isNumber(evt) {
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			return false;
		}
		return true;
	}

	function validateEmail(email) {
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}


	function checkEmail() {
		var email = $('#email').val();
		$.ajax({
			url: '<?php echo base_url(); ?>Recruiter/checkEmail',
			type: 'POST',
			dataType: "json",
			data: {
				email: email
			},
			success: function(response) {
				console.log('res===', response);
				if (response.error_code == 0) {
					$("#err_email").html(response.error_string);
					$("#err_email").hide().slideDown().delay(3000).fadeOut();
					$("#email").focus();
				}
			}
		});

	}

	function saveData() {

		$("#err_name").html('');
		$("#err_email").html('');
		$("#err_mobile").html('');
		$("#err_department").html('');
		$("#err_designation").html('');

		let postdata = {
			name: $('#name').val(),
			email: $('#email').val(),
			mobile: $('#mobile').val(),
			department: $('#department').val(),
			designatin: $('#designation').val()
		}

		if (validateEmail(postdata.email) == false) {
			$("#err_name").html('');
			$("#err_email").html('');
			$("#err_mobile").html('');
			$("#err_department").html('');
			$("#err_designation").html('');
			$("#err_email").html(' Please enter valid email');
			$("#err_email").hide().slideDown().delay(3000).fadeOut();
			$("#email").focus();
			return false;
		}

		if (postdata.name == false) {
			$("#err_name").html('');
			$("#err_email").html('');
			$("#err_mobile").html('');
			$("#err_department").html('');
			$("#err_designation").html('');
			$("#err_name").html(' Please enter name');
			$("#err_name").hide().slideDown().delay(3000).fadeOut();
			$("#name").focus();
		} else {
			if (postdata.email == false) {
				$("#err_name").html('');
				$("#err_email").html('');
				$("#err_mobile").html('');
				$("#err_department").html('');
				$("#err_designation").html('');
				$("#err_email").html(' Please enter email');
				$("#err_email").hide().slideDown().delay(3000).fadeOut();
				$("#email").focus();

			} else {
				if (postdata.mobile == false) {
					$("#err_name").html('');
					$("#err_email").html('');
					$("#err_mobile").html('');
					$("#err_department").html('');
					$("#err_designation").html('');
					$("#err_mobile").html(' Please enter mobile');
					$("#err_mobile").hide().slideDown().delay(3000).fadeOut();
					$("#mobile").focus();

				} else {
					if (postdata.department == false) {
						$("#err_name").html('');
						$("#err_email").html('');
						$("#err_mobile").html('');
						$("#err_department").html('');
						$("#err_designation").html('');
						$("#err_department").html(' Please Choose department');
						$("#err_department").hide().slideDown().delay(3000).fadeOut();
						$("#department").focus();
					} else {
						if (postdata.designatin == false) {
							$("#err_name").html('');
							$("#err_email").html('');
							$("#err_mobile").html('');
							$("#err_department").html('');
							$("#err_designation").html('');
							$("#err_designation").html(' Please Choose designation');
							$("#err_designation").hide().slideDown().delay(3000).fadeOut();
							$("#designation").focus();

						} else {
							swal({
									title: "Are you sure?",
									text: "You want to submit, form once submitted cannot be changed",
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
										// $("#loadData").show();
										$.ajax({
											url: '<?php echo base_url(); ?>Recruiter/saveInterViewer',
											type: 'POST',
											dataType: "json",
											data: postdata,
											success: function(response) {
												console.log('res===', response);
												$('#message').html(response.error_string);
												// $("#loadData").hide();
												location.reload();
												if (response.error_code == 0) {
													$('#responseDiv').removeClass('alert-success').addClass('alert-danger').show();
													setTimeout(function() {
														$('#responseDiv').hide();
														location.reload()
													}, 1000);
												} else {
													$('#responseDiv').removeClass('alert-danger').addClass('alert-success').show();
													swal.close();
												}
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

	$(document).ready(function() {
		$('#example').DataTable({
			dom: 'Bfrtip',
			'processing': false,
			'serverSide': true,
			'serverMethod': 'post',
			'ajax': {
				'url': '<?php echo base_url() ?>Recruiter/getInterviewrList'
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
					data: 'department'
				},
				{
					data: 'enrolleDate'
				},
				{
					data: 'totalInterview'
				},
				{
					data: 'activeInterview'
				},
				{
					data: 'hired'
				},
				{
					data: 'rejeted'
				},
				{
					data: 'hold'
				},
				{
					data: 'status'
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
				[6, "desc"]
			],
			columnDefs: [{
					orderable: false,
					targets: 0
				},
				{
					orderable: false,
					targets: 4
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
				{
					orderable: false,
					targets: 10
				},
			],
			"destroy": true
		});
	})

	function viewData(id) {
		$.ajax({
			url: "<?php echo base_url() ?>Recruiter/viewInterViewerData",
			method: 'post',
			data: {
				id: id
			},
			success: function(res) {
				responce = JSON.parse(res);
				console.log("res===", responce)
				$("#editId").val(responce[0].id);
				$("#editname").val(responce[0].name);
				$("#editemail").val(responce[0].email);
				$("#editmobile").val(responce[0].mobile);
				$("#editdepartment").val(responce[0].department);
				$("#editdesignation").val(responce[0].designatin);
				// $("#editdepartment").val(responce[0].department);

			}
		});
	}

	function saveData2() {
		$("#err_editname").html('');
		$("#err_editemail").html('');
		$("#err_editmobile").html('');
		$("#err_editdepartment").html('');
		$("#err_editdesignation").html('');

		let postdata = {
			id: $('#editId').val(),
			name: $('#editname').val(),
			email: $('#editemail').val(),
			mobile: $('#editmobile').val(),
			department: $('#editdepartment').val(),
			designatin: $('#editdesignation').val()
		}

		if (validateEmail(postdata.email) == false) {
			$("#err_editname").html('');
			$("#err_editemail").html('');
			$("#err_editmobile").html('');
			$("#err_editdepartment").html('');
			$("#err_editdesignation").html('');
			$("#err_editemail").html(' Please enter valid email');
			$("#err_editemail").hide().slideDown().delay(3000).fadeOut();
			$("#editemail").focus();
			return false;
		}

		if (postdata.name == false) {
			$("#err_editname").html('');
			$("#err_editemail").html('');
			$("#err_editmobile").html('');
			$("#err_editdepartment").html('');
			$("#err_editdesignation").html('');
			$("#err_editname").html(' Please enter name');
			$("#err_editname").hide().slideDown().delay(3000).fadeOut();
			$("#editname").focus();
		} else {
			if (postdata.email == false) {
				$("#err_editname").html('');
				$("#err_editemail").html('');
				$("#err_editmobile").html('');
				$("#err_editdepartment").html('');
				$("#err_editdesignation").html('');
				$("#err_editemail").html(' Please enter email');
				$("#err_editemail").hide().slideDown().delay(3000).fadeOut();
				$("#editemail").focus();

			} else {
				if (postdata.mobile == false) {
					$("#err_editname").html('');
					$("#err_editemail").html('');
					$("#err_editmobile").html('');
					$("#err_editdepartment").html('');
					$("#err_editdesignation").html('');
					$("#err_editmobile").html(' Please enter mobile');
					$("#err_editmobile").hide().slideDown().delay(3000).fadeOut();
					$("#editmobile").focus();

				} else {
					if (postdata.department == false) {
						$("#err_editname").html('');
						$("#err_editemail").html('');
						$("#err_editmobile").html('');
						$("#err_editdepartment").html('');
						$("#err_editdesignation").html('');
						$("#err_editdepartment").html(' Please Choose department');
						$("#err_editdepartment").hide().slideDown().delay(3000).fadeOut();
						$("#editdepartment").focus();
					} else {
						if (postdata.designatin == false) {
							$("#err_editname").html('');
							$("#err_editemail").html('');
							$("#err_editmobile").html('');
							$("#err_editdepartment").html('');
							$("#err_editdesignation").html('');
							$("#err_editdesignation").html(' Please Choose designation');
							$("#err_editdesignation").hide().slideDown().delay(3000).fadeOut();
							$("#editdesignation").focus();

						} else {
							swal({
									title: "Are you sure?",
									text: "You want to edit ",
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
											url: '<?php echo base_url(); ?>Recruiter/saveInterViewer2',
											type: 'POST',
											dataType: "json",
											data: postdata,
											success: function(response) {
												console.log('res===', response);
												$('#message2').html(response.error_string);
												if (response.error_code == 0) {
													$('#responseDiv2').removeClass('alert-success').addClass('alert-danger').show();
													setTimeout(function() {
														$('#responseDiv2').hide();
														location.reload()
													}, 2000);
												} else {
													$('#responseDiv2').removeClass('alert-danger').addClass('alert-success').show();
													setTimeout(function() {
														window.location.reload();
													}, 2000);
												}
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

	function disableUser(id) {

		var removeId = id;
		var sliderID = "slider_" + id;
		var curr_status = '0';
		var messText = "You want to activate!";

		if (!$("#" + sliderID).is(':checked')) {
			messText = "You want to Deactivate";
			curr_status = '1';
		}

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
						url: "<?php echo base_url() ?>Recruiter/disableUser",
						method: 'post',
						data: {
							id: id
						},
						success: function(res) {
							console.log(res);
							swal.close();
						}
					});
				} else {
					swal.close();
					if (curr_status == '1')
						$('#' + sliderID).prop('checked', true);
					else
						$('#' + sliderID).prop('checked', false);
				}
			});
	}

	function deleteInterviewr(id) {
		var messText = "You want to delete interviewer!";

		if (confirm("You want to delete interviewer!")) {
			$.ajax({
				url: "<?php echo base_url() ?>Recruiter/deleteInterviewr",
				method: 'post',
				data: {
					id: id
				},
				success: function(res) {
					console.log(res);
					table = $('#example').DataTable();
					table.ajax.reload();
				}
			});
		}

		// swal({
		// 		title: "Are you sure?",
		// 		text: messText,
		// 		type: "warning",
		// 		showCancelButton: true,
		// 		confirmButtonColor: "#DD6B55",
		// 		confirmButtonText: "Yes",
		// 		cancelButtonText: "No",
		// 		closeOnConfirm: false,
		// 		closeOnCancel: false
		// 	},
		// 	function(isConfirm) {
		// 		if (isConfirm) {
		// 			$.ajax({
		// 				url: "<?php echo base_url() ?>Recuriter/deleteInterviewr",
		// 				method: 'post',
		// 				data: {
		// 					id: id
		// 				},
		// 				success: function(res) {
		// 					console.log(res);
		// 					alert(id, "res", res)
		// 					swal.close();
		// 				}
		// 			});
		// 		} else {
		// 			swal.close();
		// 		}
		// 	});
	}
</script>