<div class="pageContent innerpg">
	<div class="tablesection">
		<div class="table-responsive">
			<table id="example" class="table" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th class="first">S.No</th>
						<th>Profile</th>
						<th>Name</th>
						<th>Mobile Number</th>
						<th>Last Company</th>
						<th>Interview Date/Time</th>
						<th>My Status</th>
						<th>Final Status</th>
					</tr>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
</body>

</html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script type="text/javascript">
	$(document).ready(function() {

		$('#example').DataTable({
			dom: 'Bfrtip',
			'processing': false,
			'serverSide': true,
			'serverMethod': 'post',
			'ajax': {
				"data": {
					"userId": window.location.pathname.split("/").pop(),
				},
				'url': '<?php echo base_url() ?>Recruiter/viewIntervierDetailsAjaxList'
			},
			'columns': [{
					data: 'id'
				},
				{
					data: 'jobId'
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
				// {
				// 	data: 'totalExperince'
				// },
				// {
				// 	data: 'round'
				// },
				{
					data: 'interViewDateTime'
				},
				{
					data: 'status'
				},
				{
					data: 'finalStatus'
				},
			],
			buttons: [{
				extend: 'pdf',
				text: 'Export PDF',
			}],
			columnDefs: [{
				orderable: false,
				targets: -1
			}, ],
			"destroy": true
		});
	});
</script>