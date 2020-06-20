 <?php


            $host = "localhost";
            $db = "root";
            $dbpass = "";
            $dbname = "animal_farm";


            // Create connection
            $dbc = mysqli_connect("$host", "$db", "$dbpass", "$dbname") 
            or die('Error connecting to MySQL server.');

             if (!$dbc) {
     		 die("Connection failed: " . mysqli_connect_error());
   			 }
   			 

?>