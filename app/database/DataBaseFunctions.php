<?php
//Global variable which contains address of the Ghiblog
//--------------------------------------------------------------------------------
$rootpath = "localhost/Ghibli_website/";

// Function to open connection to database
//--------------------------------------------------------------------------------
function ConnectDatabase(){
    // Create connection
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "ghibli";
    global $conn;
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
}

//Function to clean up an user input for safety reasons (prevent SQL injection)
//--------------------------------------------------------------------------------
function SecurizeString_ForSQL($string) {
    $string = trim($string);
    $string = stripcslashes($string);
    $string = addslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

// Function to check a new account form
//--------------------------------------------------------------------------------
function CheckNewAccountForm(){
    global $conn;

    $creationAttempted = false;
    $creationSuccessful = false;
    $error = NULL;

    //Données reçues via formulaire?
    if(isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["confirm"])){

        $creationAttempted = true;

        //Form is only valid if password == confirm, and username is at least 4 char long
        if ( strlen($_POST["name"]) < 4 ){
            $error = "Un nom utilisateur doit avoir une longueur d'au moins 4 lettres";
        }
        elseif ( $_POST["password"] != $_POST["confirm"] ){
            $error = "Le mot de passe et sa confirmation sont différents";
        }
        else {
            $username = SecurizeString_ForSQL($_POST["name"]);
		    $password = md5($_POST["password"]);

            $query = "INSERT INTO `login` VALUES (NULL, '$username', '$password' )";
            $result = $conn->query($query);

            if( mysqli_affected_rows($conn) == 0 )
            {
                $error = "Erreur lors de l'insertion SQL. Essayez un nom/password sans caractères spéciaux";
            }
            else{
                $creationSuccessful = true;
            }
		    
        }

	}
	
	$resultArray = ['Attempted' => $creationAttempted, 
					'Successful' => $creationSuccessful, 
					'ErrorMessage' => $error];

    return $resultArray;
}

// Function to close connection to database
//--------------------------------------------------------------------------------
function DisconnectDatabase(){
	global $conn;
	$conn->close();
}

?>