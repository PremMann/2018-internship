<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h2 class="text-center text-primary">Student List</h2>
		</div>
		<table id="studentList" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Supervisor Name</th>
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Rith NHEL</td>
                
                <td>
               
                <a href="<?php echo base_url() ?>supervisor/viewSupervisor"><i class="mdi mdi-message-plus" style="font-size: 24px;" ></i></a>
                <a href="<?php echo base_url() ?>/supervisor/questionnair"><i class="mdi mdi-checkbox-marked-outline text-success" style="font-size: 24px;" ></i></a>
                </td>

            </tr>
            <tr>
                <td>2</td>
                <td>Rady Y</td>
                
                <td>
               
                <a href="<?php echo base_url() ?>supervisor/viewSupervisor"><i class="mdi mdi-message-plus" style="font-size: 24px;" ></i></a>
                <a href="<?php echo base_url() ?>/supervisor/questionnair"><i class="mdi mdi-checkbox-blank-outline text-success" style="font-size: 24px;" ></i></a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                 <td>Rady</td>
               
                <td>
               
                <a href="<?php echo base_url() ?>supervisor/viewSupervisor"><i class="mdi mdi-message-plus" style="font-size: 24px;" ></i></a>
                <a href="<?php echo base_url() ?>/supervisor/questionnair"><i class="mdi mdi-pencil-box-outline text-success" style="font-size: 24px;" ></i></a>
                </td>
            </tr>
        </tbody>
    </table>
	</div>
    <a href="<?php echo base_url(); ?>supervisor/createSupervisor">
		<button class="btn btn-primary"><i class="mdi mdi-account-plus" style="font-size: 20px;"></i>New Supervisor</button>
	</a>

</div>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
	$(document).ready(function() {
    $('#studentList').DataTable();
} );
</script>