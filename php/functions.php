<?php include "php/db.php";?>
<?php
// Za slanje poruka sa komntakt strane funckija create();
function create(){

	if(isset($_POST['submit'])){

			global $connection;

				$name = $_POST['name'];
				$email = $_POST['email'];
				$message = $_POST['message'];

			$name = mysqli_real_escape_string($connection, $name);
			$email = mysqli_real_escape_string($connection, $email);
			$message = mysqli_real_escape_string($connection, $message);

			$query = "INSERT INTO messages(name, email, message)";
	    	$query .= "VALUES ('$name', '$email', '$message')";
	    
	   		$result = mysqli_query($connection, $query);
	   		
	    	if(!$result) {
	    		die("<h3 style='color: red; text-align:center; padding-bottom:10px;>Neuspešno slanje! Molimo pokušajte ponovo.</h3>");    
	    	} else {
	    		echo "<h3 style='color: red; text-align:center; padding-bottom:10px;'>Poruka poslata</h3>"; 
	    
	    	}
		}
    }

// Za slanje komentara sa knjige utisaka createComent();
    function createComent(){
    
        if(isset($_POST['submit'])){
    
                global $connection;
                $name = $_POST['name_coment'];
                $comment = $_POST['comment_coment'];

                $name = mysqli_real_escape_string($connection, $name);
                $comment = mysqli_real_escape_string($connection, $comment);
                
                $query = "INSERT INTO comments(name, comment)";
                $query .= "VALUES ('$name', '$comment')";
            
                   $result = mysqli_query($connection, $query);
                   
                if(!$result) {
                    die('Query FAILED' . mysqli_error($result));
            
                }
            }
        }
    
        // Za citanje komentara nazad iz baze i upis na stranicu 
        function readComent(){
    
                global $connection; 
    
                $query = "SELECT * FROM comments";
                $result = mysqli_query($connection, $query);
    
                if(!$result){
                    die('Query FAILED' .mysqli_error($result));
                }
    
                while ($mes = mysqli_fetch_assoc($result)) {
                    $prva =  $mes['name'];
                    $druga = $mes['comment'];
                    $red = "<hr><h4 style='color:#323232; padding-top:20px; font-size:18px;'>$prva</h4>"  . "<br>" . "<p style='color:rgb(73,76,73); font-size:18px;'>$druga</p>";
                    echo $red;
                    echo "<br><hr>";
                    
                }
            }
?>