	<div class="pageContent innerpg">
		<div class="detailheader">
			<ul>
				<li><a href="<?php echo base_url(); ?>Recruiter/addPosition"><button type="button">ADD POSITION</button></a></li>
			</ul>
		</div>
		<div class="tablesection">
			<div class="table-responsive">
				<table id="example" class="table" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th class="first">S.No</th>
							<th data-visible="false">Id</th>
							<th>Profile</th>
							<th>Exp(Years) Min | Max</th>
							<th>Start Date</th>
							<th>Asked By</th>
							<th>Last Activity</th>
							<th>Total Resume</th>
							<th>Hired</th>
							<th>Rejected</th>
							<th>Offered</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</div>

	</div>
	</body>

	</html>
	<script>
		$(document).ready(function() {
			$('#example').DataTable({
				dom: 'Bfrtip',
				'processing': false,
				'serverSide': true,
				'serverMethod': 'post',
				'ajax': {
					'url': '<?php echo base_url() ?>Recruiter/getjobOpeningList'
				},
				'columns': [{
						data: 'SNO'
					},
					{
						data: 'id'
					},
					{
						data: 'profile'
					},
					{
						data: 'exp'
					},
					{
						data: 'startDate'
					},
					{
						data: 'askedby'
					},
					{
						data: 'lastActivity'
					},
					{
						data: 'totalResume'
					},
					{
						data: 'hired'
					},
					{
						data: 'rejeted'
					},
					{
						data: 'offered'
					},
					{
						data: 'status'
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
						targets: 2
					},
					{
						orderable: false,
						targets: 3
					},
					{
						orderable: false,
						targets: 4
					},
					{
						orderable: false,
						targets: 1
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

		function disableJob(id) {

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
						$(".confirm").attr('disabled', 'disabled');
						$.ajax({
							url: "<?php echo base_url() ?>Recruiter/disableJob",
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
	</script>