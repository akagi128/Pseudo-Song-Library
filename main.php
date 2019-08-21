<?php
         if(isset($_POST['delete'])) {

            $dbhost = '127.0.0.1';
            $dbuser = 'Nikunj';
            $dbpass = 'test1234';

            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
            
            if(!$conn ) {
               die('Could not connect: ' . mysqli_error());
            }
				
            $Name = $_POST['name']; 
            $Artist = $_POST['artist'];

            $sql = "DELETE FROM songs WHERE ( Name = '$Name' AND Artists = '$Artist' ) " ;

            mysqli_select_db($conn , "songs");

            $retval = mysqli_query( $conn , $sql );
            
            if(!$retval) {
               echo 'Couldnt delete';
            }else {
            
            echo "Your Song was Removed from the library";
            } 

header("refresh:2; index.htm");
         }
         
         else {
 
$con = mysqli_connect('127.0.0.1' , 'Nikunj' , 'test1234');
 

if(!$con) {
    echo 'Not Connected To Server';
}

if(!mysqli_select_db($con, 'songs')){
    echo 'Not Connected to Db';
}

$Name = $_POST['name'];
$Artist = $_POST['artist'];

$sql1 = "INSERT INTO songs(Name , Artists) VALUES ('$Name' , '$Artist')";


if(mysqli_query($con,$sql1)){
echo '<script language="javascript">';
echo 'alert("Your Song has succesfully been added to the library")';
echo '</script>';;
}
else {
    echo 'Not Inserted';
}

header("refresh:2; index.htm");
}
?>