<?php
if (isset($_GET['id'])) {
    include('config.php');
    $id=$_GET['id'];
    $sql = "DELETE FROM qlbv WHERE patientid='$patientid'";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    header("Location:index.php");


    mysqli_close($conn);
}
?>
