<?php

// echo "<pre>";
// print_r($_POST);

if (isset($_POST)) {
    $infos = array();
    $infos['fname'] = $_POST['fname'];
    $infos['lname'] = $_POST['lname'];
    $infos['email'] = $_POST['email'];
    $infos['phone'] = $_POST['phone'];
    $infos['age'] = $_POST['age'];
    $infos['gender'] = $_POST['gender'];
    $informations = array();
    $id = $_POST['id'];
    //    print_r($infos);
}

if (isset($_COOKIE['userinfos'])) {
    $informations = json_decode($_COOKIE['userinfos'],true);
    $informations[] = $infos;
}
else {
    $informations[] = $infos;
}

if (isset($id)) {
    $informations = json_decode($_COOKIE['userinfos'],true);
    $informations[$id] = $infos ;
}



setcookie('userinfos', json_encode($informations), time() + 86400 * 5);
header('Location:./list.php');

?>




