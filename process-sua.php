<?php
if(isset($_POST['btsua'])){
   
    include('config.php');
    $patientid=$_POST['Mã bệnh nhân'];
    $firstname=$_POST['Tên bệnh nhân'];
    $lastname=$_POST['Họ bệnh nhân'];
    $deteofbirth=$_POST['Ngày sinh'];
    $gender=$_POST['Giới tính'];
    $mobile=$_POST['Số điên thoại'];
    $email=$_POST['email'];
    $height=$_POST['Chiều cao'];
    $weight=$_POST['Cân nặng'];
    $blood_type=$_POST['Nhóm máu'];
    $created_on=$_POST['Ngày lập sổ'];
    $modified_on)=$_POST['Ngày cập nhật'];

    $sql = "UPDATE qlbv SET firstname='$firstname',

    lastname='$lastname',
    deteofbirth='$deteofbirth',
    gender='$gender',
    mobile='$mobile',
    email='$email',
    height='$height',
    weight= '$weight',
    blood_type='$blood_type',
    created_on='$created_on',
    modified_on='$modified_on') 
    WHERE patientid='$patientid'";

    if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}