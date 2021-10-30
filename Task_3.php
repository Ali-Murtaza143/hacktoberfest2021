<!DOCTYPE html>
<html>

	<head>
		<title>Student Portal by Computer Systems Engineering students of batch 18</title>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
		<script src="script.js"></script>
	</head>
	
	<body>
		<style>
			body{
				margin-top:60px; // changing the margins top
				background:lightblue; // changing the color.
				color:lime; // lime color is added.

			}
			card card-primary mb-2{
				background-color: gray; // changing of color to gray.
			}
		</style>
		
		<div class="container-fluid"> 
			<center>
				<h1>Student Details</h1>
				<hr>
			</center>
			<br>
			<div class="row">
				<div class="col-10">	
           
						<div class="form-group">
							<form action="" method="post">
								<input type="text" class="form-control" id="rollNumber" name="rNumber" placeholder="Enter Roll Number" data-ng-model = "search">

								<div class="form-group">
									<button type="submit" onclick="" class="btn btn-primary" name="button">Search Student</button>
								</div>
							</form>
						</div>
				<table class="table table-striped table-hover">
					<tbody>
						<tr>
							<th>Sr. No.</th>
							<th>Name</th>
							<th>Roll No.</th>
							<th>Section</th>
						</tr> 
						
						<?php
							
							include "connectivity.php"; // Using database connection file here
							$records = null;
							if(isset($_POST['submit'])){
								$rollNumber = $_POST['rollNumber'];
								$records = mysqli_query($con,"select * from student_information where std_roll_number='$rollNumber'"); // fetch data from database
						?>
						
						<?php   
							if($records != null){
							while($data = mysqli_fetch_array($records)){
						?>
						
						<tr data-ng-repeat = "item in data | filter:search">
							<td><?php echo $data['std_id']; ?></td>
							<td><?php echo $data['std_name']; ?></td>
							<td><?php echo $data['std_roll_number']; ?></td>
							<td><?php echo $data['std_section']; ?></td>
						</tr>
					
						<?php
							}}
							else{
						?>
						<tr >
							<td>Record does not exist</td>
							
						</tr>
						<?php } ?>
					</tbody>
				</table>
				
				<?php
				}
				?>	
				<?php mysqli_close($con); // Close connection ?>
				</div>
			</div>
		</div>
		
	</body>
</html>
