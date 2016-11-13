<?php

// echo "<pre>";
// print_r($_POST);
	
include '../database.php';
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $id=$_POST['id'];
    //    print_r($infos);

$sqlquery = "INSERT INTO persons(fname,lname,email,phone,age,gender) VALUES ('$fname','$lname','$email',$phone,$age,'$gender')";

  if (mysqli_query($connection,$sqlquery)) {
      echo "new record created successfully";
  } else {
      echo "error creating record " . mysqli_error();
  }
}

if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $updatequery = "UPDATE persons SET fname='$fname',lname='$lname',email='$email' ,phone=$phone, age=$age, gender='$gender' WHERE id=".$id;
    mysqli_query($connection,$updatequery);
}

// if (isset($_COOKIE['userinfos'])) {
//     $informations = json_decode($_COOKIE['userinfos'],true);
//     $informations[] = $infos;
// }
// else {
//     $informations[] = $infos;
// }

// if (isset($id)) {
//     $informations = json_decode($_COOKIE['userinfos'],true);
//     $informations[$id] = $infos ;
// }
// setcookie('userinfos', json_encode($informations), time() + 86400 * 5);
header('Location:./list.php');

?>




