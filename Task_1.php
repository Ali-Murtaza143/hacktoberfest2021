<html>

<head>
    <title>Add Records in Database</title> 
    <!-- // This goes for the title -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- <link href="style.css" rel="stylesheet" id="bootstrap-css"> -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
    <!------ Include the above in your HEAD tag ---------->
</head>
 		<!------ This is the <body> tag, all the code which is supposed to go in Body tag, comes here ---------->
<body>

    <!-- <div><h1>Fill Details</h1></div> -->

	<form action="" method="post"> 
        <!-- // Using the POST method here, instead of GET method. -->

    <div class="bg-green-200 py-24 px-10 min-h-screen ">
    <!-- tip; mx-auto -- jagab ilusti keskele  -->
    <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto">
    <center><p class="justify-items-center text-2xl m-4 -mt-2">Fill Details</p></center>

      <!--       flex - asjad korvuti, nb! flex-1 - element kogu ylejaanud laius -->
      <div class="flex items-center mb-5">
        <!--         tip - here neede inline-block , but why? -->
        <label for="name" class="inline-block w-20 mr-6 text-right 
                                 font-bold text-gray-600">NAME</label>
        <input type="text" id="name" name="fname" placeholder="ENTER YOUR FULL NAME" 
               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                      text-gray-600 placeholder-gray-400
                      outline-none">
      </div>
      
      <div class="flex items-center mb-5">
          <!--         tip - here neede inline-block , but why? -->
          <label for="number" class="inline-block w-20 mr-6 text-right 
          font-bold text-gray-600">ROLL NO.</label>
          <input type="number" id="number" name="rNumber" placeholder="ENTER YOUR ROLL NO." 
          class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
          text-gray-600 placeholder-gray-400
          outline-none">
        </div>
        
        <div class="flex items-center mb-5">
          <!--         tip - here neede inline-block , but why? -->
          <label for="name" class="inline-block w-20 mr-6 text-right 
                                   font-bold text-gray-600">SECTION</label>
          <input type="text" id="name" name="section" placeholder="ENTER SECTION" 
                 class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                        text-gray-600 placeholder-gray-400
                        outline-none">
        </div>
      

      <div class="text-right">
        <button type="submit" name="button" class="py-3 px-8 bg-green-400 text-white font-bold">Submit</button> 
      </div>

  </div>
</div>
    </form>
	
    <?php
	   include "connectivity.php";
	
		if(isset($_POST['submit'])){
   			// Ternary Syntax for null check --> (condition) ? (on true) : (on false)
			$fname = isset($_POST['name']) ? $_POST['name'] : '';
			$rNumber = isset($_POST['rollNumber']) ? $_POST['rollNumber'] : '';
			$section= isset($_POST['section']) ? $_POST['section'] : '';
			
			
			$insert = mysqli_query($con,"INSERT INTO std_info (std_name, std_roll_number ,std_section) VALUES ('$fname','$rNumber','$section')");

			if(!$insert){
				echo ("Error occured during inserting data: ".$con->error());
			}else{
	
				echo "Successfully done.";// printing the records being successfully addeed.
				
			}
        }
	   mysqli_close($con); // Closing the connection
    ?>

    <script src="Task_1.js"></script>
</body>

</html>
