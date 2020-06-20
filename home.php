<DOCTYPE html>
<html>
	<head>
	  <title> ANIMAL WORLD </title>

	  <link href="home.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div>
			<h1> THE BEAUTY OF ANIMAL PLANET </h1>
			<p> we all love animals, make them pets etc , 
				well we can't begin to mention names of animals without 
				asking for help, because they are plenty to list.. please kindy fill out the 
				form,letting us know which animal you love to see or keep as pet..please kindy 
				<a href = "gallery.php"> click here </a> to see your added entry and full gallery.
			</p>
		</div>

		<br>
		<hr />


        
<?php
	//my database connection 
	require_once('connection.php');

	//making sure form actually exits
	if (isset($_POST['submit'])) {

			//created new folder images in a variable, for client images
			$target = "images/".basename($_FILES['screenshot']['name']);
			//retrieving form name values
			$fname = $_POST['fname'];
		    $gender = $_POST['gender'];
		    $email = $_POST['email'];
		    $favorite = $_POST['favorite'];
		    $screenshot = $_FILES['screenshot']['name'];


		    //when is not empty do the below codes
		  if (!empty($fname) && !empty($gender) && !empty($email) 
		  	&& !empty($favorite) && !empty($screenshot)) {


				//query my database
				$query = "INSERT INTO animalia ( FIRST_NAME, GENDER, EMAIL, 
					FAV_ANIMAL, SCREENSHOT) 
			     VALUES ('$fname', '$gender', '$email', '$favorite', 
			     	'$screenshot')";

			    mysqli_query($dbc, $query);


			    //move client images from temp to image folder
			    move_uploaded_file($_FILES['screenshot']['tmp_name'], $target);

		mysqli_close($dbc);

		}	

	}

?>

		
		<!--action value shows the page references itself-->
        <form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	        
        	<!--hidden form, image size not more than 600,000bytes -->
	        <input type="hidden" name="MAX_FILE_SIZE" value="600000" />  

	        <label for="fname">First-name:</label>
	        <input type="text" id="fname" name="fname" required/>
	        <br /> <hr /> <br />


            <label for="gender">Gender:</label>
	        male:<input id="gender" name="gender" type="radio" value="male" required/> 
	        female:<input id="gender"name="gender"type="radio"value="female" required/>
		    <br /> <hr /> <br />


	        <label for="email">Email:</label>
	        <input type="text"  name="email" required>
	        <br /> <hr /> <br />


	        <label for="favorite">Fav_animal:</label>
	        <input type="text"  name="favorite" required>
	        <br /> <hr /> <br />

	        <label for="screenshot">Screenshot:</label>
	        <input type="file" id="screenshot" name="screenshot" required />
	        <br /> <hr /> <br />
	        <input type="submit" value="Add" name="submit" />
        </form>




	</body>
</html>