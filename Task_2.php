<!DOCTYPE html>
<html>

<head>
    <title>Student Marksheet</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <style>
        body {
            margin-top: 80px;
            background: brown; // adding the brown color for easier readability.
            color: gray; 
        }

        card card-primary mb-2 {
            background-color: blue;
        }

    </style>

    <div class="container-fluid">
        <h1>
            <center>Student Details</center>
        </h1>
        <div class="row">
            <div class="col-8">


                <table class="table table-striped table-hover">
                    <tbody>
                        <tr>

                            <th>Sr. No.</th> // Serial Number
                            <th>Student Name</th> // You have the add the students name.
                            <th>Roll Number</th> // You have the add the students roll number.
                            <th>Subject Name</th> // You have the add the subjects name.
                            <th>Subject Total</th> // You have the add the students total marks of subject.
                            <th>Subject Obtain</th> // You have the add the students obtained marks.
                            <th>Grade</th> // You have the add the students grade.

                        </tr>

                        <?php
							include "connectivity.php"; // including the connectivity.php file here.
							$records = mysqli_query($db,"SELECT  subjects.`subj_id`,subjects.`subj_grade`,subjects.`subj_name`, `subjects`.`subj_total`,`subjects`.`subj_obtain`, `student_information`.`std_name`, student_information.`std_roll_number`
FROM `subjects` INNER JOIN `student_information` ON `subjects`.`std_id`=`student_information`.`std_id`"); // fetch data from database
						?>

                        <?php      
                            while($data = mysqli_fetch_array($records)){
						?>

                        <tr data-ng-repeat="item in data | filter:search">
                            <td><?php echo $data['subj_id']; ?></td>
                            <td><?php echo $data['std_name']; ?></td>
                            <td><?php echo $data['std_roll_number']; ?></td>
                            <td><?php echo $data['subj_name']; ?></td>
                            <td><?php echo $data['subj_total']; ?></td>
                            <td><?php echo $data['subj_obtain']; ?></td>
                            <td><?php echo $data['subj_grade']; ?></td>
                        </tr>
                        <?php
							}
						?>
                    </tbody>
                </table>
                <?php mysqli_close($db); // Closing the connection ?>
            </div>
        </div>
    </div>

</body>

</html>
