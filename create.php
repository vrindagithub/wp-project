<?php
$conn = mysqli_connect("localhost","root","","project") or die(mysqli_error($conn));

        session_start();
        $Name=$_POST['Name'];
        $Phoneno = $_POST['Phoneno'];
        $Email=mysqli_real_escape_string($conn,$_POST['Email']);
        $Password=$_POST['Password'];
        $dateofbirth = $_POST['dateofbirth'];
        
$sql = "INSERT INTO `create`(`Name`, `Phoneno`, `Email`, `Password`, `dateofbirth`) VALUES ('$Name','$Phoneno','$Email','$Password','$dateofbirth')";

        if ($conn->query($sql) === TRUE) {
        header("Location:project.php");
        } 
        else {
        echo "Error: " . $sql . "<br>" . $conn->error;
         }
        
$conn->close();
?>

 

