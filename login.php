<?php
$conn = mysqli_connect("localhost","root","","project") or die(mysqli_error($conn));

        session_start();
        $Password=$_POST['Password'];
        $Email = $_POST['Email'];
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        echo '<script> alert ("Invalid email format") </script>';
        }
        
        elseif(strlen($Password)<5){
            echo '<script> alert ("Please enter password greater than 5 digits") </script>';
         }
        
        else{
        
        $sql = "INSERT INTO `login1`(`Email`,`Password`) VALUES ('$Email','$Password')";

        if ($conn->query($sql) === TRUE) {
        header("Location:project.php");
        } 
        else {
        echo "Error: " . $sql . "<br>" . $conn->error;
         }
        }
$conn->close();
?>

 

