<html>

<head>
    <title>Add Records in Database</title> // This goes for the title
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
 		<!------ This is the <body> tag, all the code which is supposed to go in Body tag, comes here ---------->
<body>

    <center>
        <br>
        <h1>Fill your Data</h1>
        <hr>
    </center>

	<form action="" method="post"> // Using the POST method here, instead of GET method.

        <label>
            <input type="text" class="input" name="name" placeholder="ENTER YOUR FULl NAME">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label>

            <input type="text" class="input" name="rollNumber" placeholder="ENTER YOUR ROLL NUMBER">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <label>

            <input type="text" class="input" name="section" placeholder="ENTER YOUR SECTION">
            <div class="line-box">
                <div class="line"></div>
            </div>
        </label>
        <button type="submit" name="submit" value="submit">SUBMIT YOUR DATA</button>
    </form>
	
    <?php
	   include "connectivity.php";
	
		if(isset($_POST['submit'])){
     
			$fname = $_POST['name'];
			$rNumber = $_POST['rollNumber'];
			$section= $_POST['section'];
			
			
			$insert = mysqli_query($db,"INSERT INTO std_info (std_name, std_roll_number ,std_section) VALUES ('$fname','$rNumber','$section')");

			if(!$insert){
				echo ("Error occured during inserting data: ".$db->error());
			}else{
				echo "Records have been added successfully."; // printing the records being successfully addeed.
				echo "Successfully done.";
				
			}
        }
	   mysqli_close($db); // Closing the connection
    ?>

    <script src="Task_1.js"></script>
</body>

</html>
