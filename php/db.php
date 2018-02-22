<?php	
        // POVEZIVANJE SA MYSQL BAZOM

		#PRVI PARAMETAR JE SERVER
		#DRUGI JE USERNAME (default je root)
		#TRECI JE PASSWORD (default je prazno '')
        #CETVRTI JE NAZIV DATABASE
    $connection = mysqli_connect('localhost', 'root', '', 'kiriku_database');    
        if(!$connection) {
            die("Database connection failed") .mysql_error($connection); 
        };

?>