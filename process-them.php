<?php
if(isset($_POST['btthem'])){
   
    include('config.php');
    $firstname=$_POST['firstname'];
    $gender=$_POST['gender'];
    $dateofbirth=$_POST['dateofbirth'];
    $blood_type=$_POST['blood_type'];
    $mobile=$_POST['mobile'];
    $sql = "INSERT INTO qlbv (firstname, gender, dateofbirth, blood_type, mobile)
    VALUES('$firstname','$gender','$dateofbirth','$blood_type','$mobile');";

    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header("Location:index.php");

    mysqli_close($conn);
}
