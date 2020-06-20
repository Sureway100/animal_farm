<?php
	require_once('connection.php');

		$query = "select * from animalia";
      
      	$data = mysqli_query($dbc, $query);

            // Loop through the array of data.    
        while($row = mysqli_fetch_array($data)){
                
                $fname = $row['FIRST_NAME'];
                $email = $row['EMAIL'];
                $posted = $row['POSTED'];
                $gender = $row['GENDER'];
                $fav = $row['FAV_ANIMAL'];

                //display details
                
                echo 'Firstname:' . $fname  . '<br />';
                echo 'Email:' . $email . '<br />';
                echo 'Date:' . $posted . '<br />';
                echo 'Gender:' . $gender . '<br />';
                echo 'Pet:' . $fav . '<br />';
                echo "<img src='images/" . $row['SCREENSHOT'] . "'/>" . '<br />'. '<br />';
             
           }
            
           mysqli_close($dbc);
        

?>